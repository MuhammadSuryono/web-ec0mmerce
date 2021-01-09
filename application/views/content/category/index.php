<!-- Hero Section Begin -->
<section class="hero hero-normal">
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
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?=$url_image.$product->category->category_image?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?=$product->category->category_name?></h2>
                    <div class="breadcrumb__option">
                        <a href="<?=base_url()?>">Home</a>
                        <span><?=$product->category->category_name?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-7">
<!--                <div class="product__discount">-->
<!--                    <div class="section-title product__discount__title">-->
<!--                        <h2>Sale Off</h2>-->
<!--                    </div>-->
<!--                    <div class="row">-->
<!--                        <div class="product__discount__slider owl-carousel">-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="product__discount__item">-->
<!--                                    <div class="product__discount__item__pic set-bg"-->
<!--                                         data-setbg="img/product/discount/pd-1.jpg">-->
<!--                                        <div class="product__discount__percent">-20%</div>-->
<!--                                        <ul class="product__item__pic__hover">-->
<!--                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="product__discount__item__text">-->
<!--                                        <span>Dried Fruit</span>-->
<!--                                        <h5><a href="#">Raisin’n’nuts</a></h5>-->
<!--                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="product__discount__item">-->
<!--                                    <div class="product__discount__item__pic set-bg"-->
<!--                                         data-setbg="img/product/discount/pd-2.jpg">-->
<!--                                        <div class="product__discount__percent">-20%</div>-->
<!--                                        <ul class="product__item__pic__hover">-->
<!--                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="product__discount__item__text">-->
<!--                                        <span>Vegetables</span>-->
<!--                                        <h5><a href="#">Vegetables’package</a></h5>-->
<!--                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="product__discount__item">-->
<!--                                    <div class="product__discount__item__pic set-bg"-->
<!--                                         data-setbg="img/product/discount/pd-3.jpg">-->
<!--                                        <div class="product__discount__percent">-20%</div>-->
<!--                                        <ul class="product__item__pic__hover">-->
<!--                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="product__discount__item__text">-->
<!--                                        <span>Dried Fruit</span>-->
<!--                                        <h5><a href="#">Mixed Fruitss</a></h5>-->
<!--                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="product__discount__item">-->
<!--                                    <div class="product__discount__item__pic set-bg"-->
<!--                                         data-setbg="img/product/discount/pd-4.jpg">-->
<!--                                        <div class="product__discount__percent">-20%</div>-->
<!--                                        <ul class="product__item__pic__hover">-->
<!--                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="product__discount__item__text">-->
<!--                                        <span>Dried Fruit</span>-->
<!--                                        <h5><a href="#">Raisin’n’nuts</a></h5>-->
<!--                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="product__discount__item">-->
<!--                                    <div class="product__discount__item__pic set-bg"-->
<!--                                         data-setbg="img/product/discount/pd-5.jpg">-->
<!--                                        <div class="product__discount__percent">-20%</div>-->
<!--                                        <ul class="product__item__pic__hover">-->
<!--                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="product__discount__item__text">-->
<!--                                        <span>Dried Fruit</span>-->
<!--                                        <h5><a href="#">Raisin’n’nuts</a></h5>-->
<!--                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-lg-4">-->
<!--                                <div class="product__discount__item">-->
<!--                                    <div class="product__discount__item__pic set-bg"-->
<!--                                         data-setbg="img/product/discount/pd-6.jpg">-->
<!--                                        <div class="product__discount__percent">-20%</div>-->
<!--                                        <ul class="product__item__pic__hover">-->
<!--                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>-->
<!--                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <div class="product__discount__item__text">-->
<!--                                        <span>Dried Fruit</span>-->
<!--                                        <h5><a href="#">Raisin’n’nuts</a></h5>-->
<!--                                        <div class="product__item__price">$30.00 <span>$36.00</span></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
<!--                                <h6><span>16</span> Products found</h6>-->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span><?=count($product->product)?></span> Products found</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($product->product as $item){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?=$url_image.$item->image?>">
                                <ul class="product__item__pic__hover">
                                    <?php if ($isLogin) { ?>
                                    <li><a href="javascript:void(0)"  class="add-cart-bullet" id="add-cart-bullet" product-id="<?=$item->id?>" product-price="<?=$item->price?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="<?=base_url('product/'.$item->item_name.'/'.$item->id)?>"><?=$item->item_name?></a></h6>
                                <h5><?=number_format($item->price)?></h5>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
<!--                <div class="product__pagination">-->
<!--                    <a href="#">1</a>-->
<!--                    <a href="#">2</a>-->
<!--                    <a href="#">3</a>-->
<!--                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</section>