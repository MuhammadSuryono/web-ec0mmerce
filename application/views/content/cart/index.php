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
                        foreach ($category as $categor) { ?>
                            <li><a href="<?= base_url('category/' . $categor->id) ?>"><?= $categor->category_name ?></a></li>
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

<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($carts as $cart) {
                                $total = $total + ($cart->quantity * $cart->price);
                            ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="<?= $url_image . $cart->image ?>" alt="">
                                        <h5><?= $cart->item_name ?></h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        Rp. <?= number_format($cart->price) ?>
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="<?= $cart->quantity ?>" id="qty-cart" data-id="<?= $cart->id ?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total_<?= $cart->id ?>">
                                        Rp. <?= number_format($cart->quantity * $cart->price) ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_close" id="remove-cart" cart-id="<?= $cart->id ?>"></span>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="<?= base_url() ?>" class="primary-btn"><i class="fa fa-shopping-cart"></i> CONTINUE SHOPPING</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul class="grand_total">
                        <li class=".subtotal">Subtotal <span>Rp. <?= number_format($total) ?></span></li>
                        <li>Total <span class=".total">Rp. <?= number_format($total) ?></span></li>
                    </ul>
                    <?php if (count($carts) > 0) { ?>
                        <a href="javascript:void(0)" id="btn-checkout" class="primary-btn">PROCEED TO CHECKOUT</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>