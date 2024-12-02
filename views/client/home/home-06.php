<?php include_once "views/client/layout/header.php" ?>
        <!-- Header -->
        <header id="header" class="header-default header-style-2">
            <div class="main-header line">
                <div class="container-full px_15 lg-px_40">
                    <div class="row wrapper-header align-items-center">
                        <div class="col-xl-5 tf-md-hidden">
                            <div class="tf-cur">
                                <div class="tf-currencies">
                                    <select class="image-select center style-default type-currencies">
                                        <option data-thumbnail="images/country/fr.svg">EUR <span>€ | France</span></option>
                                        <option data-thumbnail="images/country/de.svg">EUR <span>€ | Germany</span></option>
                                        <option selected data-thumbnail="images/country/us.svg">USD <span>$ | United States</span></option>
                                        <option data-thumbnail="images/country/vn.svg">VND <span>₫ | Vietnam</span></option>
                                    </select>
                                </div>
                                <div class="tf-languages">
                                    <select class="image-select center style-default type-languages">
                                        <option>English</option>
                                        <option>العربية</option>
                                        <option>简体中文</option>
                                        <option>اردو</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-3 tf-lg-hidden">
                            <a href="#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6 text-center">
                            <a href="index.html" class="logo-header">
                                <img src="images/logo/logo%402x.png" alt="logo" class="logo">
                            </a>
                        </div>
                        
                        <div class="col-xl-5 col-md-4 col-3">
                            <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                                <li class="nav-search"><a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a></li>
                                <li class="nav-account"><a href="#login" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                                <li class="nav-wishlist"><a href="wishlist.html" class="nav-icon-item"><i class="icon icon-heart"></i><span class="count-box">0</span></a></li>
                                <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box">0</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom line tf-md-hidden">
                <div class="container-full px_15 lg-px_40">
                    <div class="wrapper-header d-flex justify-content-center align-items-center">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center gap-30">
                                <li class="menu-item">
                                    <a href="#" class="item-link">Home<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row-demo">
                                                <div class="demo-item">
                                                    <a href="index.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload" data-src="images/demo/home-01.jpg" src="images/demo/home-01.jpg" alt="home-01">
                                                            <div class="demo-label">
                                                                <span class="demo-new">New</span>
                                                                <span>Trend</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Home Fashion 01</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-multi-brand.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload" data-src="images/demo/home-multi-brand.jpg" src="images/demo/home-multi-brand.jpg" alt="home-multi-brand">
                                                            <div class="demo-label">
                                                                <span class="demo-new">New</span>
                                                                <span class="demo-hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Home Multi Brand</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-02.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload" data-src="images/demo/home-02.jpg" src="images/demo/home-02.jpg" alt="home-02">
                                                            <div class="demo-label">
                                                                <span class="demo-hot">Hot</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Home Fashion 02</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-03.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-03.jpg" src="images/demo/home-03.jpg" alt="home-03">
                                                        </div>
                                                        <span class="demo-name">Home Fashion 03</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-04.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-04.jpg" src="images/demo/home-04.jpg" alt="home-04">
                                                        </div>
                                                        <span class="demo-name">Home Fashion 04</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-05.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-05.jpg" src="images/demo/home-05.jpg" alt="home-05">
                                                        </div>
                                                        <span class="demo-name">Home Fashion 05</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-06.html">
                                                        <div class="demo-image position-relative">
                                                            <img class="lazyload" data-src="images/demo/home-06.jpg" src="images/demo/home-06.jpg" alt="home-06">
                                                            <div class="demo-label">
                                                                <span class="demo-new">New</span>
                                                            </div>
                                                        </div>
                                                        <span class="demo-name">Home Fashion 06</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-07.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-07.jpg" src="images/demo/home-07.jpg" alt="home-07">
                                                        </div>
                                                        <span class="demo-name">Home Fashion 07</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-08.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-08.jpg" src="images/demo/home-08.jpg" alt="home-08">
                                                        </div>
                                                        <span class="demo-name">Home Fashion 08</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-skincare.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-skincare.jpg" src="images/demo/home-skincare.jpg" alt="home-skincare">
                                                        </div>
                                                        <span class="demo-name">Home Skincare</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-headphone.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-headphone.jpg" src="images/demo/home-headphone.jpg" alt="home-headphone">
                                                        </div>
                                                        <span class="demo-name">Home Headphone</span>
                                                    </a>
                                                </div>
                                                <div class="demo-item">
                                                    <a href="home-giftcard.html">
                                                        <div class="demo-image">
                                                            <img class="lazyload" data-src="images/demo/home-giftcard.jpg" src="images/demo/home-giftcard.jpg" alt="home-gift-card">
                                                        </div>
                                                        <span class="demo-name">Home Gift Card</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-center view-all-demo">
                                                <a href="#modalDemo" data-bs-toggle="modal" class="tf-btn btn-xl btn-fill radius-3 animate-hover-btn fw-6"><span>View all demos (34+)</span><i class="icon icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="item-link">Shop<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Shop layouts</div>
                                                        <ul class="menu-list">
                                                            <li><a href="shop-default.html" class="menu-link-text link">Default</a></li>
                                                            <li><a href="shop-left-sidebar.html" class="menu-link-text link">Left sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html" class="menu-link-text link">Right sidebar</a></li>
                                                            <li><a href="shop-fullwidth.html" class="menu-link-text link">Fullwidth</a></li>
                                                            <li><a href="shop-collection-sub.html" class="menu-link-text link">Sub collection</a></li>
                                                            <li><a href="shop-collection-list.html" class="menu-link-text link">Collections list</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Features</div>
                                                        <ul class="menu-list">
                                                            <li><a href="shop-link.html" class="menu-link-text link">Pagination links</a></li>
                                                            <li><a href="shop-loadmore.html" class="menu-link-text link">Pagination loadmore</a></li>
                                                            <li><a href="shop-infinite-scrolling.html" class="menu-link-text link">Pagination infinite scrolling</a></li>
                                                            <li><a href="shop-filter-sidebar.html" class="menu-link-text link">Filter sidebar</a></li>
                                                            <li><a href="shop-filter-hidden.html" class="menu-link-text link">Filter hidden</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product styles</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-style-list.html" class="menu-link-text link">Product style list</a></li>
                                                            <li><a href="product-style-01.html" class="menu-link-text link">Product style 01</a></li>
                                                            <li><a href="product-style-02.html" class="menu-link-text link">Product style 02</a></li>
                                                            <li><a href="product-style-03.html" class="menu-link-text link">Product style 03</a></li>
                                                            <li><a href="product-style-04.html" class="menu-link-text link">Product style 04</a></li>
                                                            <li><a href="product-style-05.html" class="menu-link-text link">Product style 05</a></li>
                                                            <li><a href="product-style-06.html" class="menu-link-text link">Product style 06</a></li>
                                                            <li><a href="product-style-07.html" class="menu-link-text link">Product style 07</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="collection-item hover-img">
                                                        <div class="collection-inner">
                                                            <a href="shop-men.html" class="collection-image img-style">
                                                                <img class="lazyload" data-src="images/collections/collection-1.jpg" src="images/collections/collection-1.jpg" alt="collection-demo-1">
                                                            </a>
                                                            <div class="collection-content">
                                                                <a href="shop-men.html" class="tf-btn hover-icon btn-xl collection-title fs-16"><span>Men</span><i class="icon icon-arrow1-top-left"></i></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="collection-item hover-img">
                                                        <div class="collection-inner">
                                                            <a href="shop-women.html" class="collection-image img-style">
                                                                <img class="lazyload" data-src="images/collections/collection-2.jpg" src="images/collections/collection-2.jpg" alt="collection-demo-1">
                                                            </a>
                                                            <div class="collection-content">
                                                                <a href="shop-women.html" class="tf-btn btn-xl collection-title fs-16 hover-icon"><span>Women</span><i class="icon icon-arrow1-top-left"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="item-link">Products<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu mega-menu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product layouts</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-detail.html" class="menu-link-text link">Product default</a></li>
                                                            <li><a href="product-grid-1.html" class="menu-link-text link">Product grid 1</a></li>
                                                            <li><a href="product-grid-2.html" class="menu-link-text link">Product grid 2</a></li>
                                                            <li><a href="product-stacked.html" class="menu-link-text link">Product stacked</a></li>
                                                            <li><a href="product-right-thumbnails.html" class="menu-link-text link">Product right thumbnails</a></li>
                                                            <li><a href="product-bottom-thumbnails.html" class="menu-link-text link">Product bottom thumbnails</a></li>
                                                            <li><a href="product-drawer-sidebar.html" class="menu-link-text link">Product drawer sidebar</a></li>
                                                            <li><a href="product-description-accordion.html" class="menu-link-text link">Product description accordion</a></li>
                                                            <li><a href="product-description-list.html" class="menu-link-text link">Product description list</a></li>
                                                            <li><a href="product-description-vertical.html" class="menu-link-text link">Product description vertical</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product details</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-inner-zoom.html" class="menu-link-text link">Product inner zoom</a></li>
                                                            <li><a href="product-zoom-magnifier.html" class="menu-link-text link">Product zoom magnifier</a></li>
                                                            <li><a href="product-no-zoom.html" class="menu-link-text link">Product no zoom</a></li>
                                                            <li><a href="product-photoswipe-popup.html" class="menu-link-text link">Product photoswipe popup</a></li>
                                                            <li><a href="product-zoom-popup.html" class="menu-link-text link">Product external zoom and photoswipe popup</a></li>
                                                            <li><a href="product-video.html" class="menu-link-text link">Product video</a></li>
                                                            <li><a href="product-3d.html" class="menu-link-text link">Product 3D, AR models</a></li>
                                                            <li><a href="product-options-customizer.html" class="menu-link-text link">Product options & customizer</a></li>
                                                            <li><a href="product-advanced-types.html" class="menu-link-text link">Advanced product types</a></li>
                                                            <li><a href="product-giftcard.html" class="menu-link-text link">Recipient information form for gift card products</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product swatchs</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-color-swatch.html" class="menu-link-text link">Product color swatch</a></li>
                                                            <li><a href="product-rectangle.html" class="menu-link-text link">Product rectangle</a></li>
                                                            <li><a href="product-rectangle-color.html" class="menu-link-text link">Product rectangle color</a></li>
                                                            <li><a href="product-swatch-image.html" class="menu-link-text link">Product swatch image</a></li>
                                                            <li><a href="product-swatch-image-rounded.html" class="menu-link-text link">Product swatch image rounded</a></li>
                                                            <li><a href="product-swatch-dropdown.html" class="menu-link-text link">Product swatch dropdown</a></li>
                                                            <li><a href="product-swatch-dropdown-color.html" class="menu-link-text link">Product swatch dropdown color</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="mega-menu-item">
                                                        <div class="menu-heading">Product features</div>
                                                        <ul class="menu-list">
                                                            <li><a href="product-frequently-bought-together.html" class="menu-link-text link">Frequently bought together</a></li>
                                                            <li><a href="product-frequently-bought-together-2.html" class="menu-link-text link">Frequently bought together 2</a></li>
                                                            <li><a href="product-upsell-features.html" class="menu-link-text link">Product upsell features</a></li>
                                                            <li><a href="product-pre-orders.html" class="menu-link-text link">Product pre-orders</a></li>
                                                            <li><a href="product-notification.html" class="menu-link-text link">Back in stock notification</a></li>
                                                            <li><a href="product-pickup.html" class="menu-link-text link">Product pickup</a></li>
                                                            <li><a href="product-images-grouped.html" class="menu-link-text link">Variant images grouped</a></li>
                                                            <li><a href="product-complimentary.html" class="menu-link-text link">Complimentary products</a></li>
                                                            <li><a href="product-quick-order-list.html" class="menu-link-text link position-relative">Quick order list<div class="demo-label"><span class="demo-new">New</span></div></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="menu-heading">Best seller</div>
                                                    <div class="hover-sw-nav hover-sw-2">
                                                        <div dir="ltr" class="swiper tf-product-header">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide" lazy="true">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <a href="#" class="product-img">
                                                                                <img class="lazyload img-product" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                                                                <img class="lazyload img-hover" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                                                            </a>
                                                                            <div class="list-product-btn absolute-2">
                                                                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Quick Add</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick View</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="#" class="title link">Ribbed Tank Top</a>
                                                                            <span class="price">$16.95</span>
                                                                            <ul class="list-color-product">
                                                                                <li class="list-color-item color-swatch active">
                                                                                    <span class="tooltip">Orange</span>
                                                                                    <span class="swatch-value bg_orange-3"></span>
                                                                                    <img class="lazyload" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">Black</span>
                                                                                    <span class="swatch-value bg_dark"></span>
                                                                                    <img class="lazyload" data-src="images/products/black-1.jpg" src="images/products/black-1.jpg" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">White</span>
                                                                                    <span class="swatch-value bg_white"></span>
                                                                                    <img class="lazyload" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" lazy="true">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <div class="product-img">
                                                                                <img class="lazyload img-product" data-src="images/products/white-3.jpg" src="images/products/white-3.jpg" alt="image-product">
                                                                                <img class="lazyload img-hover" data-src="images/products/white-4.jpg" src="images/products/white-4.jpg" alt="image-product">
                                                                            </div>
                                                                            <div class="list-product-btn absolute-2">
                                                                                <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Add to cart</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick View</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="#" class="title link">Oversized Printed T-shirt</a>
                                                                            <span class="price">$10.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" lazy="true">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <div class="product-img">
                                                                                <img class="lazyload img-product" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                                                                <img class="lazyload img-hover" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                                                            </div>
                                                                            <div class="list-product-btn">
                                                                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Quick Add</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick View</span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="size-list">
                                                                                <span>S</span>
                                                                                <span>M</span>
                                                                                <span>L</span>
                                                                                <span>XL</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="#" class="title">Oversized Printed T-shirt</a>
                                                                            <span class="price">$16.95</span>
                                                                            <ul class="list-color-product">
                                                                                <li class="list-color-item color-swatch active">
                                                                                    <span class="tooltip">White</span>
                                                                                    <span class="swatch-value bg_white"></span>
                                                                                    <img class="lazyload" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">Pink</span>
                                                                                    <span class="swatch-value bg_purple"></span>
                                                                                    <img class="lazyload" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">Black</span>
                                                                                    <span class="swatch-value bg_dark"></span>
                                                                                    <img class="lazyload" data-src="images/products/black-2.jpg" src="images/products/black-2.jpg" alt="image-product">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide" lazy="true">
                                                                    <div class="card-product">
                                                                        <div class="card-product-wrapper">
                                                                            <div class="product-img">
                                                                                <img class="lazyload img-product" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                                                                <img class="lazyload img-hover" data-src="images/products/brown-3.jpg" src="images/products/brown-3.jpg" alt="image-product">
                                                                            </div>
                                                                            <div class="size-list">
                                                                                <span>S</span>
                                                                                <span>M</span>
                                                                                <span>L</span>
                                                                                <span>XL</span>
                                                                            </div>
                                                                            <div class="list-product-btn">
                                                                                <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                                                    <span class="icon icon-bag"></span>
                                                                                    <span class="tooltip">Quick Add</span>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                                                    <span class="icon icon-heart"></span>
                                                                                    <span class="tooltip">Add to Wishlist</span>
                                                                                    <span class="icon icon-delete"></span>
                                                                                </a>
                                                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                                                    <span class="icon icon-compare"></span>
                                                                                    <span class="tooltip">Add to Compare</span>
                                                                                    <span class="icon icon-check"></span>
                                                                                </a>
                                                                                <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                                                    <span class="icon icon-view"></span>
                                                                                    <span class="tooltip">Quick View</span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-product-info">
                                                                            <a href="#" class="title link">V-neck linen T-shirt</a>
                                                                            <span class="price">$114.95</span>
                                                                            <ul class="list-color-product">
                                                                                <li class="list-color-item color-swatch active">
                                                                                    <span class="tooltip">Brown</span>
                                                                                    <span class="swatch-value bg_brown"></span>
                                                                                    <img class="lazyload" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                                                                </li>
                                                                                <li class="list-color-item color-swatch">
                                                                                    <span class="tooltip">White</span>
                                                                                    <span class="swatch-value bg_white"></span>
                                                                                    <img class="lazyload" data-src="images/products/white-5.jpg" src="images/products/white-5.jpg" alt="image-product">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nav-sw nav-next-slider nav-next-product-header box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
                                                        <div class="nav-sw nav-prev-slider nav-prev-product-header box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Pages<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li>
                                                <a href="about-us.html" class="menu-link-text link text_black-2">About us</a>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="#" class="menu-link-text link text_black-2">Brands</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li>
                                                            <a href="brands.html" class="menu-link-text link text_black-2 position-relative">Brands
                                                                <div class="demo-label"><span class="demo-new">New</span></div> 
                                                            </a>
                                                        </li>
                                                        <li><a href="brands-v2.html" class="menu-link-text link text_black-2">Brand V2</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="#" class="menu-link-text link text_black-2">Contact</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="contact-1.html" class="menu-link-text link text_black-2">Contact 1</a></li>
                                                        <li><a href="contact-2.html" class="menu-link-text link text_black-2">Contact 2</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="#" class="menu-link-text link text_black-2">FAQ</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="faq-1.html" class="menu-link-text link text_black-2">FAQ 01</a></li>
                                                        <li><a href="faq-2.html" class="menu-link-text link text_black-2">FAQ 02</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="#" class="menu-link-text link text_black-2">Store</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="our-store.html" class="menu-link-text link text_black-2">Our store</a></li>
                                                        <li><a href="store-locations.html" class="menu-link-text link text_black-2">Store locator</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="timeline.html" class="menu-link-text link text_black-2 position-relative">Timeline <div class="demo-label"><span class="demo-new">New</span></div> </a></li>
                                            <li><a href="view-cart.html" class="menu-link-text link text_black-2 position-relative">View cart</a></li>
                                            <li><a href="checkout.html" class="menu-link-text link text_black-2 position-relative">Check out</a></li>
                                            <li class="menu-item-2">
                                                <a href="#" class="menu-link-text link text_black-2">Payment</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="payment-confirmation.html" class="menu-link-text link text_black-2">Payment Confirmation</a></li>
                                                        <li><a href="payment-failure.html" class="menu-link-text link text_black-2">Payment Failure</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-item-2">
                                                <a href="#" class="menu-link-text link text_black-2">My account</a>
                                                <div class="sub-menu submenu-default">
                                                    <ul class="menu-list">
                                                        <li><a href="my-account.html" class="menu-link-text link text_black-2">My account</a></li>
                                                        <li><a href="my-account-orders.html" class="menu-link-text link text_black-2">My order</a></li>
                                                        <li><a href="my-account-orders-details.html" class="menu-link-text link text_black-2">My order details</a></li>
                                                        <li><a href="my-account-address.html" class="menu-link-text link text_black-2">My address</a></li>
                                                        <li><a href="my-account-edit.html" class="menu-link-text link text_black-2">My account details</a></li>
                                                        <li><a href="my-account-wishlist.html" class="menu-link-text link text_black-2">My wishlist</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="invoice.html" class="menu-link-text link text_black-2 position-relative">Invoice</a></li>
                                            <li><a href="404.html" class="menu-link-text link text_black-2 position-relative">404</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Blog<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li><a href="blog-grid.html" class="menu-link-text link text_black-2">Grid layout</a></li>
                                            <li><a href="blog-sidebar-left.html" class="menu-link-text link text_black-2">Left sidebar</a></li>
                                            <li><a href="blog-sidebar-right.html" class="menu-link-text link text_black-2">Right sidebar</a></li>
                                            <li><a href="blog-list.html" class="menu-link-text link text_black-2">Blog list</a></li>
                                            <li><a href="blog-detail.html" class="menu-link-text link text_black-2">Single Post</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-item"><a href="https://themeforest.net/item/ecomus-ultimate-html5-template/53417990?s_rank=3" class="item-link">Buy now</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- /Header -->
        <!-- Slider -->
        <section class="tf-slideshow slideshow-effect slider-effect-fade position-relative">
            <div dir="ltr" class="swiper tf-sw-effect">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" lazy="true">
                        <div class="slider-effect wrap-slider">
                            <div class="content-left">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="box-content">
                                                <h1 class="heading fade-item fade-item-1">Summer<br> Escapades</h1>
                                                <p class="desc fade-item fade-item-2">Embrace the sun-kissed season with our collection of breezy</p>
                                                <a href="shop-collection-list.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="img-slider">
                                <img class="lazyload" data-src="images/slider/fashion-06-slide1.jpg" alt="fashion-slideshow" src="images/slider/fashion-06-slide1.jpg" alt="fashion-slideshow">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="slider-effect wrap-slider">
                            <div class="content-left">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="box-content">
                                                <h1 class="heading fade-item fade-item-1">Multi-faceted<br> Beauty</h1>
                                                <p class="desc fade-item fade-item-2">Embrace the sun-kissed season with our collection of breezy</p>
                                                <a href="shop-collection-list.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="img-slider">
                                <img class="lazyload" data-src="images/slider/fashion-06-slide2.jpg" src="images/slider/fashion-06-slide2.jpg" alt="fashion-slideshow">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" lazy="true">
                        <div class="slider-effect wrap-slider">
                            <div class="content-left">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="box-content">
                                                <h1 class="heading fade-item fade-item-1">Effortless<br> Elegance</h1>
                                                <p class="desc fade-item fade-item-2">Embrace the sun-kissed season with our collection of breezy</p>
                                                <a href="shop-collection-list.html" class="fade-item fade-item-3 tf-btn btn-light-icon animate-hover-btn btn-xl radius-3"><span>Shop collection</span><i class="icon icon-arrow-right"></i></a>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="img-slider">
                                <img class="lazyload" data-src="images/slider/fashion-06-slide3.jpg" src="images/slider/fashion-06-slide3.jpg" alt="fashion-slideshow">
                            </div>
                        </div>
                    </div>
                  
                   
                </div>
            </div>
            <div class="wrap-pagination">
                <div class="container">
                    <div class="sw-dots line-pagination sw-pagination-slider"></div>
                </div>
            </div>
        </section>
        <!-- /Slider -->
        <!-- Collection -->
        <section class="flat-spacing-12 bg_grey-3">
            <div class="container">
                <div class="flat-title flex-row justify-content-between align-items-center px-0 wow fadeInUp" data-wow-delay="0s">
                    <h3 class="title">Season Collection</h3>
                    <a href="shop-collection-sub.html" class="tf-btn btn-line">View all categories<i class="icon icon-arrow1-top-left"></i></a>
                </div>
                <div class="hover-sw-nav hover-sw-2">
                    <div dir="ltr" class="swiper tf-sw-collection" data-preview="6" data-tablet="3" data-mobile="2" data-space-lg="50" data-space-md="30" data-space="15" data-loop="false" data-auto-play="false">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-circle hover-img">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle-1.jpg" src="images/collections/collection-circle-1.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-sub.html" class="link title fw-5">Women’s</a>
                                        <div class="count">23 items</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-circle hover-img">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle-2.jpg" src="images/collections/collection-circle-2.jpg" alt="collection-img">  
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-sub.html" class="link title fw-5">Men’s</a>
                                        <div class="count">9 items</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-circle hover-img">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle-3.jpg" src="images/collections/collection-circle-3.jpg" alt="collection-img">   
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-sub.html" class="link title fw-5">Jewelry</a>
                                        <div class="count">31 items</div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-circle hover-img">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle-4.jpg" src="images/collections/collection-circle-4.jpg" alt="collection-img">    
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-sub.html" class="link title fw-5">Sneakers</a>
                                        <div class="count">21 items </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-circle hover-img">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle-5.jpg" src="images/collections/collection-circle-5.jpg" alt="collection-img">      
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-sub.html" class="link title fw-5">Bags</a>
                                        <div class="count">5 items </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-circle hover-img">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle-6.jpg" src="images/collections/collection-circle-6.jpg" alt="collection-img">   
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-sub.html" class="link title fw-5">Glasses</a>
                                        <div class="count">14 items</div>
                                    </div>
                                </div> 
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="collection-item-circle hover-img">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-circle-7.jpg" src="images/collections/collection-circle-7.jpg" alt="collection-img">    
                                    </a>
                                    <div class="collection-content text-center">
                                        <a href="shop-collection-sub.html" class="link title fw-5">New arrivals</a>
                                        <div class="count">31 items </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="sw-dots style-2 sw-pagination-collection justify-content-center"></div>
                    <div class="nav-sw nav-next-slider nav-next-collection"><span class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-collection"><span class="icon icon-arrow-right"></span></div>
                </div>
            </div>
        </section>
        <!-- /Collection -->
        <!-- Sale Product -->
        <section class="flat-spacing-17">
            <div class="container">
                <div class="flat-animate-tab">
                    <ul class="widget-tab-3 d-flex justify-content-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                        <li class="nav-tab-item" role="presentation">   
                            <a href="#bestSeller" class="active" data-bs-toggle="tab">Best seller</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#newArrivals"  data-bs-toggle="tab">New arrivals</a>
                        </li>
                        <li class="nav-tab-item" role="presentation">
                            <a href="#onSale" data-bs-toggle="tab">On Sale</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active show" id="bestSeller" role="tabpanel">
                            <div class="grid-layout loadmore-item" data-grid="grid-4">
                                <!-- card product 1 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed Tank Top</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Orange</span>
                                                <span class="swatch-value bg_orange-3"></span>
                                                <img class="lazyload" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-1.jpg" src="images/products/black-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="on-sale-wrap text-end">
                                            <div class="on-sale-item">-33%</div>
                                        </div>
                                        <div class="countdown-box">
                                            <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed modal T-shirt</a>
                                        <span class="price">From $18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Purple</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class="lazyload" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class="lazyload" data-src="images/products/green.jpg" src="images/products/green.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-3.jpg" src="images/products/white-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/white-4.jpg" src="images/products/white-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Oversized Printed T-shirt</a>
                                        <span class="price">$10.00</span>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Pink</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class="lazyload" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-2.jpg" src="images/products/black-2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/brown-3.jpg" src="images/products/brown-3.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck linen T-shirt</a>
                                        <span class="price">$114.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-5.jpg" src="images/products/white-5.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg" src="images/products/light-green-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class="lazyload" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-3.jpg" src="images/products/black-3.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue.jpg" src="images/products/blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue.jpg" src="images/products/dark-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-6.jpg" src="images/products/white-6.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Grey</span>
                                                <span class="swatch-value bg_light-grey"></span>
                                                <img class="lazyload" data-src="images/products/light-grey.jpg" src="images/products/light-grey.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-5.jpg" src="images/products/black-5.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Regular Fit Oxford Shirt</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue-2.jpg" src="images/products/dark-blue-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Beige</span>
                                                <span class="swatch-value bg_beige"></span>
                                                <img class="lazyload" data-src="images/products/beige.jpg" src="images/products/beige.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Blue</span>
                                                <span class="swatch-value bg_light-blue"></span>
                                                <img class="lazyload" data-src="images/products/light-blue.jpg" src="images/products/light-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-7.jpg" src="images/products/white-7.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                        <span class="price">$9.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-7.jpg" src="images/products/black-7.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue-2.jpg" src="images/products/blue-2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 9 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Patterned scarf</a>
                                        <span class="price">$14.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 10 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-10.jpg" src="images/products/black-10.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-9.jpg" src="images/products/white-9.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 11 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/grey.jpg" src="images/products/grey.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Grey</span>
                                                <span class="swatch-value bg_grey"></span>
                                                <img class="lazyload" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Pink</span>
                                                <span class="swatch-value bg_pink"></span>
                                                <img class="lazyload" data-src="images/products/pink-2.jpg" src="images/products/pink-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Pink</span>
                                                <span class="swatch-value bg_light-pink"></span>
                                                <img class="lazyload" data-src="images/products/light-pink.jpg" src="images/products/light-pink.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 12 -->
                                <div class="card-product fl-item">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-11.jpg" src="images/products/black-11.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-12.jpg" src="images/products/black-12.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tf-pagination-wrap view-more-button text-center">
                                <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore "><span class="text">Load more</span></button>
                            </div>
                        </div>
                        <div class="tab-pane" id="newArrivals" role="tabpanel">
                            <div class="grid-layout loadmore-item2" data-grid="grid-4">
                                <!-- card product 1 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed Tank Top</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Orange</span>
                                                <span class="swatch-value bg_orange-3"></span>
                                                <img class="lazyload" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-1.jpg" src="images/products/black-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="on-sale-wrap text-end">
                                            <div class="on-sale-item">-33%</div>
                                        </div>
                                        <div class="countdown-box">
                                            <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed modal T-shirt</a>
                                        <span class="price">From $18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Purple</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class="lazyload" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class="lazyload" data-src="images/products/green.jpg" src="images/products/green.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-3.jpg" src="images/products/white-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/white-4.jpg" src="images/products/white-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Oversized Printed T-shirt</a>
                                        <span class="price">$10.00</span>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Pink</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class="lazyload" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-2.jpg" src="images/products/black-2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/brown-3.jpg" src="images/products/brown-3.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck linen T-shirt</a>
                                        <span class="price">$114.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-5.jpg" src="images/products/white-5.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg" src="images/products/light-green-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class="lazyload" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-3.jpg" src="images/products/black-3.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue.jpg" src="images/products/blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue.jpg" src="images/products/dark-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-6.jpg" src="images/products/white-6.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Grey</span>
                                                <span class="swatch-value bg_light-grey"></span>
                                                <img class="lazyload" data-src="images/products/light-grey.jpg" src="images/products/light-grey.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-5.jpg" src="images/products/black-5.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Regular Fit Oxford Shirt</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue-2.jpg" src="images/products/dark-blue-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Beige</span>
                                                <span class="swatch-value bg_beige"></span>
                                                <img class="lazyload" data-src="images/products/beige.jpg" src="images/products/beige.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Blue</span>
                                                <span class="swatch-value bg_light-blue"></span>
                                                <img class="lazyload" data-src="images/products/light-blue.jpg" src="images/products/light-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-7.jpg" src="images/products/white-7.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                        <span class="price">$9.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-7.jpg" src="images/products/black-7.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue-2.jpg" src="images/products/blue-2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 9 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Patterned scarf</a>
                                        <span class="price">$14.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 10 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-10.jpg" src="images/products/black-10.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-9.jpg" src="images/products/white-9.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 11 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/grey.jpg" src="images/products/grey.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Grey</span>
                                                <span class="swatch-value bg_grey"></span>
                                                <img class="lazyload" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Pink</span>
                                                <span class="swatch-value bg_pink"></span>
                                                <img class="lazyload" data-src="images/products/pink-2.jpg" src="images/products/pink-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Pink</span>
                                                <span class="swatch-value bg_light-pink"></span>
                                                <img class="lazyload" data-src="images/products/light-pink.jpg" src="images/products/light-pink.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 12 -->
                                <div class="card-product fl-item2">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-11.jpg" src="images/products/black-11.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-12.jpg" src="images/products/black-12.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tf-pagination-wrap view-more-button2 text-center">
                                <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore2"><span class="text">Load more</span></button>
                            </div>
                        </div>
                        <div class="tab-pane" id="onSale" role="tabpanel">
                            <div class="grid-layout loadmore-item3" data-grid="grid-4">
                                <!-- card product 1 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed Tank Top</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Orange</span>
                                                <span class="swatch-value bg_orange-3"></span>
                                                <img class="lazyload" data-src="images/products/orange-1.jpg" src="images/products/orange-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-1.jpg" src="images/products/black-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-1.jpg" src="images/products/white-1.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="on-sale-wrap text-end">
                                            <div class="on-sale-item">-33%</div>
                                        </div>
                                        <div class="countdown-box">
                                            <div class="js-countdown" data-timer="1007500" data-labels="d :,h :,m :,s"></div>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed modal T-shirt</a>
                                        <span class="price">From $18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown.jpg" src="images/products/brown.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Purple</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class="lazyload" data-src="images/products/purple.jpg" src="images/products/purple.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class="lazyload" data-src="images/products/green.jpg" src="images/products/green.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-3.jpg" src="images/products/white-3.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/white-4.jpg" src="images/products/white-4.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Add to cart</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Oversized Printed T-shirt</a>
                                        <span class="price">$10.00</span>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title">Oversized Printed T-shirt</a>
                                        <span class="price">$16.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-2.jpg" src="images/products/white-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Pink</span>
                                                <span class="swatch-value bg_purple"></span>
                                                <img class="lazyload" data-src="images/products/pink-1.jpg" src="images/products/pink-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-2.jpg" src="images/products/black-2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/brown-3.jpg" src="images/products/brown-3.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck linen T-shirt</a>
                                        <span class="price">$114.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown-2.jpg" src="images/products/brown-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-5.jpg" src="images/products/white-5.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/light-green-2.jpg" src="images/products/light-green-2.jpg" alt="image-product">
                                        </a>
                                        <div class="list-product-btn absolute-2">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Sweatshirt</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Light Green</span>
                                                <span class="swatch-value bg_light-green"></span>
                                                <img class="lazyload" data-src="images/products/light-green-1.jpg" src="images/products/light-green-1.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-3.jpg" src="images/products/black-3.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue.jpg" src="images/products/blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue.jpg" src="images/products/dark-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-6.jpg" src="images/products/white-6.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Grey</span>
                                                <span class="swatch-value bg_light-grey"></span>
                                                <img class="lazyload" data-src="images/products/light-grey.jpg" src="images/products/light-grey.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-5.jpg" src="images/products/black-5.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Regular Fit Oxford Shirt</a>
                                        <span class="price">$10.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-4.jpg" src="images/products/black-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Dark Blue</span>
                                                <span class="swatch-value bg_dark-blue"></span>
                                                <img class="lazyload" data-src="images/products/dark-blue-2.jpg" src="images/products/dark-blue-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Beige</span>
                                                <span class="swatch-value bg_beige"></span>
                                                <img class="lazyload" data-src="images/products/beige.jpg" src="images/products/beige.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Blue</span>
                                                <span class="swatch-value bg_light-blue"></span>
                                                <img class="lazyload" data-src="images/products/light-blue.jpg" src="images/products/light-blue.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-7.jpg" src="images/products/white-7.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-6.jpg" src="images/products/black-6.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Loose Fit Hoodie</a>
                                        <span class="price">$9.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">White</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-8.jpg" src="images/products/white-8.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-7.jpg" src="images/products/black-7.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Blue</span>
                                                <span class="swatch-value bg_blue-2"></span>
                                                <img class="lazyload" data-src="images/products/blue-2.jpg" src="images/products/blue-2.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 9 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>M</span>
                                            <span>L</span>
                                            <span>XL</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Patterned scarf</a>
                                        <span class="price">$14.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Brown</span>
                                                <span class="swatch-value bg_brown"></span>
                                                <img class="lazyload" data-src="images/products/brown-4.jpg" src="images/products/brown-4.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-8.jpg" src="images/products/black-8.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 10 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-10.jpg" src="images/products/black-10.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_dark"></span>
                                                <img class="lazyload" data-src="images/products/black-9.jpg" src="images/products/black-9.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Black</span>
                                                <span class="swatch-value bg_white"></span>
                                                <img class="lazyload" data-src="images/products/white-9.jpg" src="images/products/white-9.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 11 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/grey.jpg" src="images/products/grey.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="tooltip">Grey</span>
                                                <span class="swatch-value bg_grey"></span>
                                                <img class="lazyload" data-src="images/products/grey-2.jpg" src="images/products/grey-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Pink</span>
                                                <span class="swatch-value bg_pink"></span>
                                                <img class="lazyload" data-src="images/products/pink-2.jpg" src="images/products/pink-2.jpg" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="tooltip">Light Pink</span>
                                                <span class="swatch-value bg_light-pink"></span>
                                                <img class="lazyload" data-src="images/products/light-pink.jpg" src="images/products/light-pink.jpg" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 12 -->
                                <div class="card-product fl-item3">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="images/products/black-11.jpg" src="images/products/black-11.jpg" alt="image-product">
                                            <img class="lazyload img-hover" data-src="images/products/black-12.jpg" src="images/products/black-12.jpg" alt="image-product">
                                        </a>
                                        <div class="size-list">
                                            <span>S</span>
                                            <span>M</span>
                                            <span>L</span>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                                <span class="icon icon-bag"></span>
                                                <span class="tooltip">Quick Add</span>
                                            </a>
                                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Add to Wishlist</span>
                                                <span class="icon icon-delete"></span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                                <span class="icon icon-compare"></span>
                                                <span class="tooltip">Add to Compare</span>
                                                <span class="icon icon-check"></span>
                                            </a>
                                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                                <span class="icon icon-view"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Slim Fit Fine-knit Turtleneck Sweater</a>
                                        <span class="price">$18.95</span>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tf-pagination-wrap view-more-button3 text-center">
                                <button class="tf-btn-loading tf-loading-default style-2 btn-loadmore3"><span class="text">Load more</span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Sale Product -->
        <!-- Banner Collection -->
        <section>
            <div class="container-full">
                <div dir="ltr" class="swiper tf-sw-recent" data-preview="3" data-tablet="3" data-mobile="1.3" data-space-lg="30" data-space-md="15" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v4 hover-img">
                                <div class="collection-inner">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-39.jpg" src="images/collections/collection-39.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content wow fadeInUp" data-wow-delay="0s">
                                        <p class="subheading">UP TO 30% OFF</p>
                                        <h5 class="heading">Essential Basics</h5>
                                        <a href="shop-collection-sub.html" class="tf-btn style-3 fw-6 btn-light-icon radius-3 animate-hover-btn"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v4 hover-img">
                                <div class="collection-inner">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-40.jpg" src="images/collections/collection-40.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content wow fadeInUp" data-wow-delay="0s">
                                        <p class="subheading">UP TO 30% OFF</p>
                                        <h5 class="heading">Athleisure Wear</h5>
                                        <a href="shop-collection-sub.html" class="tf-btn style-3 fw-6 btn-light-icon radius-3 animate-hover-btn"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" lazy="true">
                            <div class="collection-item-v4 hover-img">
                                <div class="collection-inner">
                                    <a href="shop-collection-sub.html" class="collection-image img-style">
                                        <img class="lazyload" data-src="images/collections/collection-41.jpg" src="images/collections/collection-41.jpg" alt="collection-img">
                                    </a>
                                    <div class="collection-content wow fadeInUp" data-wow-delay="0s">
                                        <p class="subheading">UP TO 30% OFF</p>
                                        <h5 class="heading">Seasonal Favorites</h5>
                                        <a href="shop-collection-sub.html" class="tf-btn style-3 fw-6 btn-light-icon radius-3 animate-hover-btn"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Banner Collection -->
        <!-- Icon box -->
        <section class="flat-spacing-1 flat-iconbox">
            <div class="container">
                <div class="wrap-carousel wrap-mobile wow fadeInUp" data-wow-delay="0s">
                    <div dir="ltr" class="swiper tf-sw-mobile" data-preview="1" data-space="15">
                        <div class="swiper-wrapper wrap-iconbox">
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-shipping"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Free Shipping</div>
                                        <p>Free shipping over order $120</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-payment fs-22"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Flexible Payment</div>
                                        <p>Pay with Multiple Credit Cards</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-return fs-20"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">14 Day Returns</div>
                                        <p>Within 30 days for an exchange</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tf-icon-box style-row">
                                    <div class="icon">
                                        <i class="icon-suport"></i>
                                    </div>
                                    <div class="content">
                                        <div class="title fw-4">Premium Support</div>
                                        <p>Outstanding premium support</p>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </div>
                    <div class="sw-dots style-2 sw-pagination-mb justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Icon box -->
        <!-- Location -->
        <section>
            <div class="container">
                <div class="flat-location">
                    <div class="banner-map">
                        <img class="lazyload" data-src="images/country/map-1.jpg" src="images/country/map-1.jpg" alt="map">
                    </div>
                    <div class="content">
                        <h3 class="heading wow fadeInUp" data-wow-delay="0s">Toronto Store</h3>
                        <p class="subtext wow fadeInUp" data-wow-delay="0s">
                            301 Front St W Toronto, Canada
                            <br>
                            support@ecomus.com
                            <br>
                            (08) 8942 1299
                        </p>
                        <p class="subtext wow fadeInUp" data-wow-delay="0s">
                            Mon - Fri, 8:30am - 10:30pm
                            <br>
                            Saturday, 8:30am - 10:30pm
                            <br>
                            Sunday Closed
                        </p>
                        <a href="https://maps.app.goo.gl/RKWwwsLvWKtvTHNq8" target="_self" class="tf-btn btn-line collection-other-link fw-6 wow fadeInUp" data-wow-delay="0s">Get Directions<i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Location -->
        <!-- brand -->
        <section class="flat-spacing-1">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-brand" data-loop="false" data-play="false" data-preview="6" data-tablet="3" data-mobile="2" data-space-lg="0" data-space-md="0">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-01.png" src="images/brand/brand-01.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-02.png" src="images/brand/brand-02.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-03.png" src="images/brand/brand-03.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-04.png" src="images/brand/brand-04.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-05.png" src="images/brand/brand-05.png" alt="image-brand">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <img class="lazyload" data-src="images/brand/brand-06.png" src="images/brand/brand-06.png" alt="image-brand">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-dots style-2 sw-pagination-brand justify-content-center"></div>
            </div>
        </section>
        <!-- /brand -->
        <?php include_once "views/client/layout/footer.php" ?>