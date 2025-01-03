
<?php include_once "views/client/layout/header.php" ?>
        <!-- page-title -->
        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">My Account</div>
            </div>
        </div>
        <!-- /page-title -->
        
        <!-- page-cart -->
        <section class="flat-spacing-11">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="wrap-sidebar-account">
                            <ul class="my-account-nav">
                                <li><span class="my-account-nav-item active">Dashboard</span></li>
                                <li><a href="my-account-orders.html" class="my-account-nav-item">Orders</a></li>
                                <li><a href="my-account-address.html" class="my-account-nav-item">Address</a></li>
                                <li><a href="my-account-edit.html" class="my-account-nav-item">Account Details</a></li>
                                <li><a href="my-account-wishlist.html" class="my-account-nav-item">Wishlist</a></li>
                                <li><a href="?ctl=logout" class="my-account-nav-item">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="my-account-content account-dashboard">
                            <div class="mb_60">
                                <h5 class="fw-5 mb_20">Hello Themesflat</h5>
                                <p>
                                    From your account dashboard you can view your <a class="text_primary" href="my-account-orders.html">recent orders</a>, manage your <a class="text_primary" href="my-account-address.html">shipping and billing address</a>, and <a class="text_primary" href="my-account-edit.html">edit your password and account details</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- page-cart -->

        <div class="btn-sidebar-account">
            <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount" aria-controls="offcanvas"><i class="icon icon-sidebar-2"></i></button>
        </div>

        <?php include_once "views/client/layout/footer.php" ?>