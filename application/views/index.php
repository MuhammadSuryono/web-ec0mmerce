<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title_tab . '|' . $app_name ?> </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href=<?= base_url("/assets/css/bootstrap.min.css") ?> type="text/css">
    <link rel="stylesheet" href=<?= base_url("/assets/css/font-awesome.min.css") ?> type="text/css">
    <link rel="stylesheet" href=<?= base_url("/assets/css/elegant-icons.css") ?> type="text/css">
    <link rel="stylesheet" href=<?= base_url("/assets/css/jquery-ui.min.css") ?> type="text/css">
    <link rel="stylesheet" href=<?= base_url("/assets/css/owl.carousel.min.css") ?> type="text/css">
    <link rel="stylesheet" href=<?= base_url("/assets/css/slicknav.min.css") ?> type="text/css">
    <link rel="stylesheet" href=<?= base_url("/assets/css/style.css") ?> type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?= base_url() . 'assets/toastr/toastr.min.css' ?>">

</head>

<body style="background-color:lightblue">
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<?php $this->load->view($menu_wrapper) ?>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <?php $this->load->view($navbar) ?>
</header>
<!-- Header Section End -->

<!-- Hero Section Begin -->

<!-- Latest Product Section End -->
<?php $this->load->view($content) ?>

<div class="modal fade" id="loginModal" data-backdrop="static" tabindex="-1" role="dialog"
     aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel"> BERSATU INDAH GEMILANG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center font-weight-bold" style="font-size: 16pt">Please Login</p>
                <p class="text-center">Do you have not a account ? <a href="javascript:void(0)" id="modalRegister">Register
                        Here</a></p>
                <form id="form-login">
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" placeholder="Username" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" required/>
                    </div>

                    <p class="text-center">
                        <button type="submit" class="site-btn already-paid" style="border-radius: 5px"> Login Now
                        </button>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" data-backdrop="static" tabindex="-1" role="dialog"
     aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel"> BERSATU INDAH GEMILANG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center font-weight-bold" style="font-size: 16pt">Please Register</p>
                <p class="text-center">Do you have a account ? <a href="javascript:void(0)" id="modalLogin">Login
                        Here</a></p>
                <form id="form-register">
                    <div class="form-group">
                        <label>Fullname</label>
                        <input class="form-control" name="fullname" placeholder="Fullname" required/>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <label>NPWP</label>
                        <input class="form-control" name="npwp" placeholder="Npwp" required/>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" placeholder="Username" required/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" required/>
                    </div>

                    <p class="text-center">
                        <button type="submit" class="site-btn already-paid" style="border-radius: 5px"> Register Now</button>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="otpModal" data-backdrop="static" tabindex="-1" role="dialog"
     aria-labelledby="otpModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="otpModalLabel"> BERSATU INDAH GEMILANG</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center font-weight-bold" style="font-size: 16pt">OTP</p>
                <p class="text-center text-information-sending"></p>
                <form id="form-otp">
                    <div class="form-group">
                        <label>YOUR CODE</label>
                        <input class="form-control" name="id_user" id="id_user" placeholder="xxxx" required/>
                        <input class="form-control" name="code_otp" placeholder="xxxx" required/>
                    </div>

                    <p class="text-center">
                        <button type="submit" class="site-btn already-paid" style="border-radius: 5px"> Validate OTP
                        </button>
                    </p>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section Begin -->
<?php $this->load->view($footer) ?>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src=<?= base_url("assets/js/jquery-3.3.1.min.js") ?>></script>
<script src=<?= base_url("assets/js/bootstrap.min.js") ?>></script>
<script src=<?= base_url("assets/js/jquery.nice-select.min.js") ?>></script>
<script src=<?= base_url("assets/js/jquery-ui.min.js") ?>></script>
<script src=<?= base_url("assets/js/jquery.slicknav.js") ?>></script>
<script src=<?= base_url("assets/js/mixitup.min.js") ?>></script>
<script src=<?= base_url("assets/js/owl.carousel.min.js") ?>></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="<?= base_url() . 'assets/toastr/toastr.min.js' ?>"></script>

<script>
    $(document).ready(function () {

        $('#modalLogin').on('click', function () {
            $('#registerModal').modal('hide');
            $('#loginModal').modal('show');
        })

        $('#modalRegister').on('click', function () {
            $('#loginModal').modal('hide');
            $('#registerModal').modal('show');
        })

        $('#buttonLogin').on('click', function () {
            if (!statusLogin()) $('#loginModal').modal('show');
            else {
                localStorage.clear();
                window.location.href = '<?=base_url() . 'auth/logout'?>'
            }
        })

        $('.add-cart-detail').on('click', function () {
            let isLogin = statusLogin();

            if (!isLogin) $('#loginModal').modal('show');

        })

        $('.buy-now').on('click', function () {
            let isLogin = statusLogin();

            if (!isLogin) $('#loginModal').modal('show');

        })

        function statusLogin() {
            let isLogin = localStorage.getItem("userIsLogin");
            let status = false;

            if (isLogin) status = true;
            if (typeof isLogin == "undefined") status = false;
            return status;
        }

        <?php if (!$isLogin) {?> localStorage.clear(); <?php } ?>
        $("select").select2({
            tags: "true",
            placeholder: "Select City"
        });

        $(".image-product").on('click', function () {
            let id = $(this).attr("data-id")
            let productName = $(this).attr("data-product")
            let baseUrl = '<?=base_url().'product/'?>'
            window.location.href = baseUrl + productName + '/' + id
        })
    });
</script>
<script src=<?= base_url("assets/js/main.js") ?>></script>
<?php if (!$isLogin) {
echo '<script type="module" src="' . base_url() . 'assets/js/custom/login.js' . '"></script>';
echo '<script type="module" src="' . base_url() . 'assets/js/custom/register.js' . '"></script>';
}
?>
<?php
for ($i = 0; $i < count($javascript); $i++) {
    echo '<script type="module" src="' . $javascript[$i] . '"></script>';
}
?>
</body>

</html>