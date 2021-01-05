import {BASE_URL_API, convertRupiah} from "./module.js";

$(() => {
    let user_id = localStorage.getItem('user_id');
    let subTotal = 0;
    let grandTotal = 0;
    let costShip = 0;
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
        
        let response = getDataCourier(destination);
        response.then(res => {
            console.log(res);
            if (res) {
                let results = res.data.rajaongkir.results;
                let { code, costs, name } = results[0];
                let harga, estimate, description, service;

                $('#select-courier').prop('disabled', false);
                costs.forEach(cost => {
                    console.log(cost);
                    harga = cost.cost[0].value;
                    estimate = cost.cost[0].etd;
                    description = cost.description;
                    service = cost.service;
                    let string = description+' ('+service+') Rp. '+convertRupiah(harga);
                    let newOption = new Option(string, code, true, true);
                    $('#select-courier').append(newOption).trigger('change');
                });


            }else {
                $('#select-courier').prop('disabled', true);
            }
        });
    })

    $("#select-courier").select2({
        placeholder: "select courier",   
    })

    function dataCart() {

        $.ajax({
            url: BASE_URL_API + "cart/" + user_id,
            type:"get",
            data: "",
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (result) {
                let dataCart = result.data
                let listProduct = '';

                dataCart.forEach(product => {
                    subTotal = subTotal + (product.quantity * product.item_price);
                    listProduct += '<li>'+ product.item_name +' (x'+ product.quantity +') <span>Rp. '+ convertRupiah(product.quantity * product.item_price) +'</span></li>';
                })

                $('.checkout__order__subtotal').html('Subtotal <span>Rp. '+ convertRupiah(subTotal) +'</span>');
                $('.checkout__order__total').html('Total <span>Rp. '+ convertRupiah(subTotal + costShip) +'</span>')
                $('.list-orders').html(listProduct);
            },
            error: function (xhr) {
                toastr.error("Something wrong!")
            }
        });

        return '<i class="fa fa-shopping-cart"></i> <span>'+ count +'</span></a>';
    }
})