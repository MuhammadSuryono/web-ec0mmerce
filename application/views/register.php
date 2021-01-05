<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?=base_url('/assets/login/images/icons/favicon.ico')?>"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/vendor/bootstrap/css/bootstrap.min.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/vendor/animate/animate.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/vendor/css-hamburgers/hamburgers.min.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/vendor/animsition/css/animsition.min.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/vendor/select2/select2.min.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/vendor/daterangepicker/daterangepicker.css'?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/css/util.css'?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/login/css/main.css'?>">
    <!--===============================================================================================-->

    <link rel="stylesheet" href="<?=base_url().'assets/toastr/toastr.min.css'?>">

</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form method="post" class="login100-form" id="form-register">
					<span class="login100-form-title p-b-20" style="text-align: left">
						Register
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Fullname is required">
                    <input class="input100" type="text" name="fullname" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Fullname</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="email" name="email" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Npwp is required">
                    <input class="input100" type="text" name="npwp" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">NPWP</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Username is required">
                    <input class="input100" type="text" name="username" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Username</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" required>
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="flex-sb-m w-full p-t-3 p-b-32">

                </div>


                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Register
                    </button>
                    <a href="<?=base_url('auth/login')?>" class="login100-form-btn-cancel">
                        Cancel
                    </a>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('https://www.j-express.id/assets/img/article/JX-ArticleVisual-Feb20-eCommerce.jpg');">
            </div>
        </div>
    </div>
</div>





<!--===============================================================================================-->
<script src="<?=base_url().'assets/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url().'assets/login/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url().'assets/login/vendor/bootstrap/js/popper.js'?>"></script>
<script src="<?=base_url().'assets/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url().'assets/login/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url().'assets/login/vendor/daterangepicker/moment.min.js'?>"></script>
<script src="<?=base_url().'assets/login/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url().'assets/login/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
<script src="<?=base_url().'assets/login/js/main.js'?>"></script>
<script src="<?=base_url().'assets/toastr/toastr.min.js'?>"></script>

<?php
for ($i = 0; $i < count($javascript); $i++) {
    echo '<script type="module" src="' . $javascript[$i] . '"></script>';
}
?>

<script>
    <?php if (!$isLogin) {?> localStorage.clear(); <?php } ?>
</script>
</body>
</html>