import {httpRequest} from "./api.js";

$(() => {
    $('#btn-cancel-order').on('click', function () {
        let orderId = $(this).attr("data-id");
        let urlCancel = 'order/cancel/' + orderId
        console.log(urlCancel)
        httpRequest(urlCancel, 'get', null, function (response) {
            if (response.status && typeof response.status != "undefined") window.location.reload();
            else toastr.error("Cannot cancel this order, Please try again later!");
        })
    })

    $('#btn-received-order').on('click', function () {
        let orderId = $(this).attr("data-id");
        let urlCancel = 'order/received/' + orderId
        httpRequest(urlCancel, 'get', null, function (response) {
            if (response.status && typeof response.status != "undefined") window.location.reload();
            else toastr.error("Cannot received this order, Please try again later!");
        })
    })

})