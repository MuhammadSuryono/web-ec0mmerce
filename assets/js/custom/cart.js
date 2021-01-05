import {BASE_URL_API, convertRupiah} from "./module.js";

$(() => {
    let user_id = localStorage.getItem('user_id');
    $('#count-cart').html(dataCart());

    function dataCart() {
        let count = 0;
        $.ajax({
            url: BASE_URL_API + "cart/" + user_id,
            type:"get",
            data: "",
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (result) {
                count = result.data.length;
            },
            error: function (xhr) {
                toastr.error("Something wrong!")
            }
        });

        return '<i class="fa fa-shopping-cart"></i> <span>'+ count +'</span></a>';
    }

    /*-------------------
		Quantity change
	--------------------- */
    var proQty = $('.pro-qty');
    proQty.prepend('<span class="dec qtybtn">-</span>');
    proQty.append('<span class="inc qtybtn">+</span>');
    proQty.on('click', '.qtybtn', function () {
        var $button = $(this);
        var oldValue = $button.parent().find('input').val();
        var id = $button.parent().find('input').attr('data-id');

        if ($button.hasClass('inc')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }

        let data = {quantity: newVal, id_user: user_id};
        $.ajax({
            url: BASE_URL_API + "cart/" + id,
            type:"put",
            dataType: "json",
            data: JSON.stringify(data),
            processData:false,
            contentType:'application/json',
            cache:false,
            async:false,
            success: function (result) {
                if (result.status) {
                    let totalQty = parseInt(result.data.grand_total.totalQuantity);
                    let totalPrice = parseInt(result.data.grand_total.totalPrice);

                    let total = totalQty*totalPrice;

                    $('.shoping__cart__total').html('Rp. ' + convertRupiah(result.data.total));
                    let html = '<li class=".subtotal">Subtotal <span>Rp. '+ convertRupiah(total) +'</span></li>\n' +
                        '<li>Total <span>Rp. '+ convertRupiah(total) +'</li>';
                    $('.grand_total').html(html);

                    $button.parent().find('input').val(newVal);
                }
            },
            error: function (xhr) {
                toastr.error("Something wrong!")
            }
        });
    });


    $('.add-cart-bullet').on('click', function() {
        
    })
})