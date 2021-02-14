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
            </div>
        </div>
    </div>
</section>

<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                             src="<?=$url_image.$product->image?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?=$product->item_name?></h3>
                    <div class="product__details__rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <span>(18 reviews)</span>
                    </div>
                    <div class="product__details__price">Rp. <?=number_format($product->price)?></div>
                    <p><?=$product->description?></p>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0)" product-id="<?=$product->id?>" product-price="<?=$product->price?>" id="add-cart-detail" class="primary-btn-add-card add-cart-detail"><i class="fa fa-shopping-cart"></i> ADD TO CART</a>
                    <a href="javascript:void(0)" product-id="<?=$product->id?>" product-price="<?=$product->price?>" id="buy-now" class="primary-btn buy-now"><i class="fa fa-money"></i> BUY NOW</a>
                    <ul>
                        <li><b>Availability</b>
                            <?php
                                $stock = 'Not available';
                                if ($product->stock > 1) $stock = $product->stock." ".$product->unit;

                                echo $isLogin ? '<span>'.$stock.'</span>':'<span>You are not logged in</span>';
                            ?>

                        </li>
                        <li><b>Weight</b> <span><?=$product->weight/1000?> Kg</span></li>
                        <li><b>Category</b> <span><?=$product->category_name?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Related Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($relatedProduct->product as $item) {
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?=$url_image.$item->image?>">
                        <ul class="product__item__pic__hover">
                            <?php
                                if ($isLogin) {
                            ?>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="<?=base_url('product/'.$item->item_name.'/'.$item->id)?>"><?=$item->item_name?></a></h6>
                        <h5>Rp. <?=number_format($item->price)?></h5>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>