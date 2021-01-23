<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All Categories</span>
                    </div>
                    <ul>
                        <?php
                        foreach ($category as $categor)
                        { ?>
                            <li><a href="<?=base_url('category/'.$categor->id)?>"><?=$categor->category_name?></a></li>
                        <?php }
                        ?>

                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do you need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>081 917 027 766</h5>
                            <span>Monday-Friday: 09.00-18.00</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="/assets/img/hero/Home.jpg">
                    <div class="hero__text">
                        <span>HOME AND PERSONAL CARE</span>
                        <h2 style="color:red">WE FULFIL <br />YOUR NEED</h2>
                        <p style="color:red">Free Pickup and Delivery Available</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php
                foreach ($category as $categor)
                { ?>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="<?=$url_image.$categor->category_image?>">
                        <h5><a href="<?=base_url('category/'.$categor->id)?>"><?=$categor->category_name?></a></h5>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php
            foreach ($products as $product){
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 mix <?=$product->category_id?>">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="<?=$url_image.$product->image?>">
                        <?php
                        if ($isLogin) {?>
                        <ul class="featured__item__pic__hover">
                            <li><a href="javascript:void(0)" class="add-cart-bullet" product-id="<?=$product->id?>" product-price="<?=$product->price?>" id="add-cart-bullet"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <?php } ?>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="<?=base_url('product/'.$product->item_name.'/'.$product->id)?>"><?=$product->item_name?></a></h6>
                        <h5>Rp. <?=number_format($product->price)?></h5>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<!--<div class="banner">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-6 col-md-6 col-sm-6">-->
<!--                <div class="banner__pic">-->
<!--                    <img src="/assets/img/banner/banner-1.jpg" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-6 col-md-6 col-sm-6">-->
<!--                <div class="banner__pic">-->
<!--                    <img src="/assets/img/banner/banner-2.jpg" alt="">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<!--<section class="latest-product spad">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="latest-product__text">-->
<!--                    <h4>Latest Products</h4>-->
<!--                    <div class="latest-product__slider owl-carousel">-->
<!--                        <div class="latest-prdouct__slider__item">-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="latest-prdouct__slider__item">-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="latest-product__text">-->
<!--                    <h4>Top Rated Products</h4>-->
<!--                    <div class="latest-product__slider owl-carousel">-->
<!--                        <div class="latest-prdouct__slider__item">-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="latest-prdouct__slider__item">-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-6">-->
<!--                <div class="latest-product__text">-->
<!--                    <h4>Review Products</h4>-->
<!--                    <div class="latest-product__slider owl-carousel">-->
<!--                        <div class="latest-prdouct__slider__item">-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                        <div class="latest-prdouct__slider__item">-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-1.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                            <a href="#" class="latest-product__item">-->
<!--                                <div class="latest-product__item__pic">-->
<!--                                    <img src="/assets/img/latest-product/lp-3.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="latest-product__item__text">-->
<!--                                    <h6>Crab Pool Security</h6>-->
<!--                                    <span>$30.00</span>-->
<!--                                </div>-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->