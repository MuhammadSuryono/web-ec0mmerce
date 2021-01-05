import {URL_APP} from "./module.js";

$(document).ready(function () {
    $('#form-login').submit(function (e){
        e.preventDefault()
        $.ajax({
            url: URL_APP() + "/auth/login/check",
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
                    toastr.success(obj.message);
                    localStorage.setItem("userIsLogin", true);
                    localStorage.setItem("user_id", obj.response.data.id);
                    localStorage.setItem("fullname", obj.response.data.fullname);
                    localStorage.setItem("email", obj.response.data.email);


                    document.getElementById("form-login").reset();
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