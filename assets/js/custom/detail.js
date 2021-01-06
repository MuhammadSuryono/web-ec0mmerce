import {BASE_URL_API, statusLogin, redirectLogin} from "./module.js";

$(() => {
    $('#add-cart-detail').on('click', function() {
        let isLogin = statusLogin()

        if (isLogin) redirectLogin();
        else {
            let userId = localStorage.getItem("user_id");
            let idProduct = $(this).attr("product-id");
            let pricceProduct = $(this).attr("product-price");

            console.log({userId: userId, idProduct: idProduct, pricceProduct: pricceProduct})
        }
    })

    $('#buy-now').on('click', function () {
        let isLogin = statusLogin()

        if (isLogin) redirectLogin();
        else {
            let userId = localStorage.getItem("user_id");
            let idProduct = $(this).attr("product-id");
            let pricceProduct = $(this).attr("product-price");

            console.log({userId: userId, idProduct: idProduct, pricceProduct: pricceProduct})
        }
    })
})