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
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
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

<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                </h6>
            </div>
        </div>
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="#">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" placeholder="First name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>

                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <select class="form-control" id="select-city" required>
                                <option></option>
                                <?php foreach ($city->rajaongkir->results as $kota) {
                                    echo '<option value="' . $kota->city_id . '">' . $kota->city_name . '</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="checkout__input">
                            <!--                            <p style="margin-left: -50px">Address<span>*</span></p>-->
                            <input type="text" placeholder="Street Address" class="checkout__input__add" required>
                            <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" placeholder="xxx" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text" placeholder="a@example.com" required>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Order notes</p>
                            <input type="text" placeholder="Notes about your order, e.g. special notes for delivery.">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul class="list-orders">
                            </ul>
                            <div class="checkout__order__subtotal"></div>
                            <ul class="cost-deliver">
                            </ul>
                            <div class="checkout__order__total"></div>
                            <label class="font-weight-bold">Delivery Service</label>
                            <div class="checkout__input__checkbox">
                                <select class="form-control w-100" id="select-courier" disabled required>
                                    <option></option>
                                </select>
                            </div>
                            <!-- <div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    JNE
                                    <input type="checkbox" id="acc-or" value="jne">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    TIKI
                                    <input type="checkbox" id="acc-or1" value="tiki">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    POS Indonesia
                                    <input type="checkbox" id="acc-or3" value="pos">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <button type="submit" class="site-btn">PAY</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Transaction ID : 09090809809</p>
                <p>
                    <div class="row">
                        <div class="col-md-1">
                            <img src="https://3.bp.blogspot.com/-VT93OEYIVZs/VxxCkCID0YI/AAAAAAAAXDA/LUiQcU3DRYEoA7BGV1Qaf9vm1MBUf4kBgCLcB/s1600/Logo%2BBank%2BBNI.png" width="100%">
                        </div>
                        <div class="col-md-6">
                            Bank BNI (Automatic check)
                        </div>
                    </div>
                </p>
                <p style="padding: 30px;" class="text-center">
                    Virtual Account Number :<br>
                    <span class="font-weight-bold text-danger" style="font-size: 16pt">78878-222-278328</span>
                </p>
                <p>
                    <span class="text-info">Checked within 10 minutes after payment</span><br>
                    Pay the order to the virtual account number above before re-ordering
                </p>
                <p>
                    <button class="site-btn">I have already paid</button>
                    <a href="javascript:void(0)" class="primary-btn-continue">Continue Shopping</a>
                </p>
            </div>
        </div>
    </div>
</div>