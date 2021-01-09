import {BASE_URL_API, statusLogin, redirectLogin, URL_APP} from "./module.js";
import {httpRequest} from "./api.js";

$(() => {
    $('.add-cart-detail').on('click', function() {
        let isLogin = statusLogin()

        if (isLogin) redirectLogin();
        else {
            let userId = localStorage.getItem("user_id");
            let idProduct = $(this).attr("product-id");
            let pricceProduct = $(this).attr("product-price");

            let body = {id_user: userId, id_product: idProduct, item_price: pricceProduct, quantity: 1}
            httpRequest("cart", "post", body, function (outpout) {
                if (outpout.status && typeof outpout.status != "undefined") toastr.success(outpout.message); $('#count-cart').html(dataCart());
            })
        }
    })

    $('.buy-now').on('click', function () {
        let isLogin = statusLogin()

        if (isLogin) redirectLogin();
        else {
            let userId = localStorage.getItem("user_id");
            let idProduct = $(this).attr("product-id");
            let pricceProduct = $(this).attr("product-price");

            let body = {id_user: userId, id_product: idProduct, item_price: pricceProduct, quantity: 1}
            httpRequest("cart", "post", body, function (outpout) {
                if (outpout.status && typeof outpout.status != "undefined") window.location.href = URL_APP() + "/cart";
            })
		}
    })
})