<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="header__top__left">
                    <ul>
                        <li><i class="fa fa-envelope"></i> bersatuindahgemilang@gmail.com</li>
                        <li>Other information or tagline</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                    <div class="header__top__right__social">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3 col-sm-3">
            <div class="header__logo">
                <a href="<?=base_url()?>"><img src="https://i.ibb.co/StQNVqS/photo-2020-12-08-21-09-21-removebg-preview.png" alt=""></a>
            </div>
        </div>
        <div class="col-9 col-sm-9">
            <div class="header__cart">
                <?php if ($isLogin) { ?>
                <ul>
                    <li><a href="<?=base_url('cart')?>" id="count-cart"></li>
                    <li><a href="<?=base_url('user/purchase')?>" id="count-notification"></li>
                </ul>
                <?php } ?>
                <div class="header__top__right__auth">
                    <?php
                    $url = base_url().'auth/login';
                    if ($isLogin) $url = base_url().'auth/logout';
                    ?>

                    <a href="javascript:void(0)" id="buttonLogin"><i class="fa fa-user"></i> <?= $isLogin ? $this->session->userdata('name').' | Logout':'Login'?></a>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="humberger__open">-->
<!--        <i class="fa fa-bars"></i>-->
<!--    </div>-->
</div>
