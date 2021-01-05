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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url().'assets/toastr/toastr.min.css'?>">

</head>

<body>
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
    <script src="<?=base_url().'assets/toastr/toastr.min.js'?>"></script>

    <script>
        $(document).ready(function() {
            <?php if (!$isLogin) {?> localStorage.clear(); <?php } ?>
            $("select").select2({
                tags: "true",
                placeholder: "Select City"
            });
        });
    </script>
    <script src=<?= base_url("assets/js/main.js") ?>></script>
    <?php
    for ($i = 0; $i < count($javascript); $i++) {
        echo '<script type="module" src="' . $javascript[$i] . '"></script>';
    }
    ?>
</body>

</html>