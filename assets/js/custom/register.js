import {URL_APP} from "./module.js";

$(document).ready(function () {
    $('#form-register').submit(function (e){
        e.preventDefault()
        $.ajax({
            url: URL_APP() + "/auth/register/create",
            type:"post",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (result) {
                console.log(result);
                let obj = JSON.parse(result);

                console.log("Object", obj);
                if (obj.status) {
                    $("#registerModal").modal("hide");
                    $("#otpModal").modal('show');
                    $("#id_user").val(obj.data.id_user);
                    $('.text-information-sending').html("We have sending code OTP to <b>" + obj.data.email + "</b>");
                }else{
                    toastr.error(obj.message)
                }
            },
            error: function (xhr) {
                toastr.error("Something wrong!")
            }
        });

    });

    $('#form-otp').submit(function (e){
        e.preventDefault()
        $.ajax({
            url: URL_APP() + "/auth/validate-otp",
            type:"post",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (result) {
                let obj = JSON.parse(result);
                console.log("Object", obj);

                if (obj.status) {
                    toastr.success(obj.message);
                    localStorage.setItem("userIsLogin", true);
                    localStorage.setItem("user_id", obj.data.user_id);
                    localStorage.setItem("fullname", obj.data.fullname);
                    localStorage.setItem("email", obj.data.email);
                    document.getElementById("form-register").reset();
                    setInterval(function(){ window.location.href = URL_APP(); }, 1000);
                }else{
                    toastr.error(obj.message)
                }
            },
            error: function (xhr) {
                toastr.error("Something wrong!")
            }
        });

    });
})