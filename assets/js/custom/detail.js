import {BASE_URL_API, statusLogin, redirectLogin} from "./module.js";

$(() => {
    $('#add-to-cart').on('click', function () {
        let isLogin = statusLogin()

        if (!isLogin) redirectLogin();
    })

    $('#buy-now').on('click', function () {
        let isLogin = statusLogin()

        if (!isLogin) redirectLogin();
    })
})