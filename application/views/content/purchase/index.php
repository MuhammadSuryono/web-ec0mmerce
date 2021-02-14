<style>

    /* Timeline */
    .timeline,
    .timeline-horizontal {
        list-style: none;
        padding: 20px;
        position: relative;
    }
    .timeline:before {
        top: 40px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }
    .timeline .timeline-item {
        margin-bottom: 20px;
        position: relative;
    }
    .timeline .timeline-item:before,
    .timeline .timeline-item:after {
        content: "";
        display: table;
    }
    .timeline .timeline-item:after {
        clear: both;
    }
    .timeline .timeline-item .timeline-badge {
        color: #fff;
        width: 54px;
        height: 54px;
        line-height: 52px;
        font-size: 22px;
        text-align: center;
        position: absolute;
        top: 18px;
        left: 50%;
        margin-left: -25px;
        background-color: #333;
        border: 3px solid #ffffff;
        z-index: 100;
        border-top-right-radius: 50%;
        border-top-left-radius: 50%;
        border-bottom-right-radius: 50%;
        border-bottom-left-radius: 50%;
    }
    .timeline .timeline-item .timeline-badge i,
    .timeline .timeline-item .timeline-badge .fa,
    .timeline .timeline-item .timeline-badge .glyphicon {
        top: 2px;
        left: 0px;
    }
    .timeline .timeline-item .timeline-badge.primary {
        background-color: #1f9eba;
    }
    .timeline .timeline-item .timeline-badge.no-active {
        background-color: #767676;
    }
    .timeline .timeline-item .timeline-badge.success {
        background-color: #59ba1f;
    }
    .timeline .timeline-item .timeline-badge.warning {
        background-color: #d1bd10;
    }
    .timeline .timeline-item .timeline-badge.danger {
        background-color: #ba1f1f;
    }
    .timeline .timeline-item .timeline-panel {
        position: relative;
        width: 46%;
        float: left;
        right: 16px;
        border: 1px solid #777;
        background: #ffffff;
        border-radius: 2px;
        padding: 20px;
        -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
    }
    .timeline .timeline-item .timeline-panel:before {
        position: absolute;
        top: 26px;
        right: -16px;
        display: inline-block;
        border-top: 16px solid transparent;
        border-left: 16px solid #777;
        border-right: 0 solid #777;
        border-bottom: 16px solid transparent;
        content: " ";
    }
    .timeline .timeline-item .timeline-panel .timeline-title {
        margin-top: 0;
        color: inherit;
    }
    .timeline .timeline-item .timeline-panel .timeline-body > p,
    .timeline .timeline-item .timeline-panel .timeline-body > ul {
        margin-bottom: 0;
    }
    .timeline .timeline-item .timeline-panel .timeline-body > p + p {
        margin-top: 5px;
    }
    .timeline .timeline-item:last-child:nth-child(even) {
        float: right;
    }
    .timeline .timeline-item:nth-child(even) .timeline-panel {
        float: right;
        left: 16px;
    }
    .timeline .timeline-item:nth-child(even) .timeline-panel:before {
        border-left-width: 0;
        border-right-width: 14px;
        left: -14px;
        right: auto;
    }
    .timeline-horizontal {
        list-style: none;
        position: relative;
        padding: 20px 0px 20px 0px;
        display: inline-block;
    }
    .timeline-horizontal:before {
        height: 3px;
        top: auto;
        bottom: 26px;
        left: 56px;
        right: 0;
        width: 100%;
        margin-bottom: 20px;
    }
    .timeline-horizontal .timeline-item {
        display: table-cell;
        height: 150px;
        width: 20%;
        float: none !important;
        padding-left: 0px;
        padding-right: 20px;
        margin: 0 auto;
        vertical-align: bottom;
    }
    .timeline-horizontal .timeline-item .timeline-panel {
        top: auto;
        bottom: 64px;
        display: inline-block;
        float: none !important;
        left: 0 !important;
        right: 0 !important;
        width: 100%;
        margin-bottom: 20px;
    }
    .timeline-horizontal .timeline-item .timeline-panel:before {
        top: auto;
        bottom: -16px;
        left: 28px !important;
        right: auto;
        border-right: 16px solid transparent !important;
        border-top: 16px solid #777 !important;
        border-bottom: 0 solid #777 !important;
        border-left: 16px solid transparent !important;
    }
    .timeline-horizontal .timeline-item:before,
    .timeline-horizontal .timeline-item:after {
        display: none;
    }
    .timeline-horizontal .timeline-item .timeline-badge {
        top: auto;
        bottom: 0px;
        left: 43px;
    }

</style>
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
                            <li><a href="<?= base_url('category/' . $categor->id) ?>"><?= $categor->category_name ?></a>
                            </li>
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
            <?php
            foreach ($orders as $order) {
                $badge = "success";
                if ($order->order_status == "cancel_order") $badge = "danger";
                elseif ($order->order_status == "waiting_payment" || $order->order_status == "create_on_transaction") $badge = "warning";

                if ($order->transactions != null) {
                    $order->order_status = $order->transactions->transaction_status;
                }
            ?>

                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="font-weight-bold"><a href="<?=base_url().'/user/purchase/'.$order->order_id?>">ORDER ID: #<?=$order->order_id?></a> <span class="badge badge-<?=$badge?>"><?=strtoupper($order->order_status)?></span>  <br><small><?=$order->created_at?></small></span>
                            <?php if ($order->order_status == "create_on_transaction") {?>
                            <a href="<?=base_url().'checkout/'.$order->order_id?>" type="button" class="site-btn already-paid" aria-label="Close" style="float: right; color: #ffffff">
                                Checkout
                            </a>
                            <?php }
                            if ($order->order_status != "cancel_order") {
                            ?>

                            <a href="javascript:void(0)" class="primary-btn-continue continue-shopping mr-2" data-id="<?=$order->order_id?>" id="btn-cancel-order" style="float: right">Cancel Order</a>

                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <?php
                            foreach ($order->product_orders as $product) {
                            ?>
                            <div class="row mb-3">

                                <div class="col-md-2">
                                    <img src="<?=$url_image.$product->image?>" width="100px" height="100px">
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title"><?=$product->item_name?></h5>
                                    <p class="card-text">X <?=$product->quantity?></p>
                                </div>
                                <div class="col-md-4 text-right">
                                    <h5 class="card-title">Rp. <?=number_format($product->item_price * $product->quantity)?></h5>
                                </div>
                            </div>

                            <?php } ?>
                            <hr>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <small>Cost ship: </small><h5 class="card-title"> Rp.
                                        <?php
                                        $total_purchase = $order->total_price;
                                        if ($order->transactions != null) {
                                            $total_purchase = $total_purchase + $order->transactions->cost;
                                            echo number_format($order->transactions->cost);
                                        }else echo 0;
                                        ?>
                                    </h5>
                                </div>
                                <div class="col-md-12 text-right">
                                    <small>Total Purchase: </small><h5 class="card-title" style="color: red"> Rp. <?=number_format($total_purchase)?></h5>
                                </div>
                            </div>
                        </div>
                        <?php
                        if ($order->order_status == "cancel_order" || $order->order_status == "create_on_transaction") {}else{?>
                        <div class="card-footer">
                            <div style="display:inline-block;width:100%;overflow-y:auto;">
                                <ul class="timeline timeline-horizontal">
                                    <li class="timeline-item">
                                        <div class="timeline-badge danger"><i class="glyphicon fa fa-check"></i></div>
                                        <div class="timeline-panel text-center">
                                            <div class="timeline-heading">
                                                <h6 class="timeline-title">Already Pay</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge no-active"><i class="glyphicon fa fa-boxes"></i></div>
                                        <div class="timeline-panel text-center">
                                            <div class="timeline-heading">
                                                <h6 class="timeline-title">Packed</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge no-active"><i class="glyphicon fa fa-truck"></i></div>
                                        <div class="timeline-panel text-center">
                                            <div class="timeline-heading">
                                                <h6 class="timeline-title">Sent</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge no-active"><i class="glyphicon fa fa-handshake"></i></div>
                                        <div class="timeline-panel text-center">
                                            <div class="timeline-heading">
                                                <h6 class="timeline-title">Received</h6>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-item">
                                        <div class="timeline-badge no-active"><i class="glyphicon fa fa-times"></i></div>
                                        <div class="timeline-panel text-center">
                                            <div class="timeline-heading">
                                                <h6 class="timeline-title">Canceled</h6>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>
</section>
