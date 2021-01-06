import {BASE_URL_API, convertRupiah} from "./module.js";
import {httpRequest} from "./api.js";

$(() => {
    let user_id = localStorage.getItem('user_id');
    let subTotal = 0;
    let textCourier = '';
    let costShip = 0;
    let destination_id = 0;
    $('.cost-deliver').html('<li> Delivery service <span>+Rp. '+ costShip +'</span></li>');

    dataCart();

    let getDataCourier = (destination) => {
        return $.ajax({
            url: BASE_URL_API + 'ongkir/cost',
            method: 'POST',
            data: {
                origin: 114,
                destination: destination,
                weight: 2,
                courier: "jne"
            },
            cache: false,
        })
    };

    $('#select-city').on('change', function() {
        console.log($(this).val());
        let destination = $(this).val();
        destination_id = destination

        let response = getDataCourier(destination);
        response.then(res => {
            if (res.status == true && typeof res.status != "undefined") {
                let results = res.data.rajaongkir.results;
                let { code, costs, name } = results[0];
                let harga, estimate, description, service;

                $('#select-courier').prop('disabled', false);
                costs.forEach(cost => {
                    harga = cost.cost[0].value;
                    estimate = cost.cost[0].etd;
                    description = cost.description;
                    service = cost.service;
                    let string = description+' ('+service+') Rp. '+convertRupiah(harga);
                    let newOption = new Option(string, harga, true, true);
                    $('#select-courier').append(newOption).trigger('change');
                });


            }else {
                toastr.error("Can't get data courier, Please select your destination again or reload page!")
                $('#select-courier').prop('disabled', true);
            }
        });
    })

    $("#select-courier").select2({
        placeholder: "select courier",   
    })

    $('#select-courier').on('select2:select', function (e) {
        let cost = $(e.currentTarget).val();
        let text = $("#select-courier option:selected").text();
        costShip = cost
        textCourier = text

        $('.cost-deliver').html('<li> Delivery service <span>+Rp. '+ cost +'</span><br>'+ text +'</li>');
        $('.checkout__order__total').html('Total <span>Rp. '+ convertRupiah(subTotal + parseInt(cost)) +'</span>')

    })

    function dataCart() {
        httpRequest("cart/checkout/" + user_id, "get", "", function (result) {
            console.log(result)
            let dataCart = result.data
            let listProduct = '';

            dataCart.forEach(product => {
                subTotal = subTotal + (product.quantity * product.item_price);
                listProduct += '<li>'+ product.item_name +' (x'+ product.quantity +') <span>Rp. '+ convertRupiah(product.quantity * product.item_price) +'</span></li>';
            })

            $('.checkout__order__subtotal').html('Subtotal <span>Rp. '+ convertRupiah(subTotal) +'</span>');
            $('.checkout__order__total').html('Total <span>Rp. '+ convertRupiah(subTotal + costShip) +'</span>')
            $('.list-orders').html(listProduct);
        })
    }


    $('#form-penerima').submit(function (e) {
        e.preventDefault()
        let data = new FormData(this);
        let url = window.location.href
        let order_id = url.substring(url.lastIndexOf('/')+1)


        let body = {
            order_id: order_id,
            payment_metode: "bank_transfer",
            receipt_man: {
                order_id: order_id,
                penerima: data.get("firstName")+" "+data.get("lastName"),
                address: data.get("address") + " " + data.get("addressOptional"),
                contact: data.get("contact"),
                notes: data.get("orderNotes"),
                destination: textCourier,
                destination_id: destination_id,
                cost: costShip,
            }
        }

        httpRequest("transactions/push", "post", body, function (output) {
            if (output.status && typeof output.status != "undefined")
            {
                console.log(output)
                $("#exampleModal").modal('show');
            }else{
                toastr.error("Cannot create transaction, Please try again later!");
            }
        })
    })
})