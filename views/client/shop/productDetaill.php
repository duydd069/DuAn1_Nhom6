<?php include_once "views/client/layout/header.php"; ?>

<style>
    /* CSS cho sản phẩm */
    .product-image img {
        max-height: 500px;
        object-fit: contain;
        border: 1px solid #ddd;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 10px;
    }

    .product-details h1 {
        font-size: 2.5rem;
        color: #333;
        font-weight: bold;
    }

    .price {
        font-size: 2rem;
        color: #dc3545;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        padding: 12px 24px;
        font-size: 1.1rem;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    /* CSS cho bình luận */
    .comments-section {
        margin-top: 50px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    .comments-section h3 {
        font-size: 1.8rem;
        font-weight: bold;
        color: #343a40;
        margin-bottom: 20px;
        border-bottom: 2px solid #007bff;
        padding-bottom: 10px;
    }

    .comment {
        background: #f8f9fa;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .comment:hover {
        transform: scale(1.02);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .comment h4 {
        font-size: 1.2rem;
        color: #495057;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .comment p {
        font-size: 1rem;
        color: #6c757d;
        margin: 0;
    }
</style>



<!-- /breadcrumb -->
<!-- default -->
<section class="flat-spacing-4 pt_0">
    <div class="tf-main-product section-image-zoom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tf-product-media-wrap sticky-top">
                        <div class="thumbs-slider">
                            <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical">
                                <div class="swiper-wrapper stagger-wrap">
                                    <!-- beige -->
                                    <div class="swiper-slide stagger-item" data-color="beige">
                                        <div class="item">
                                            <img class="lazyload" src="<?= $products['image'] ?>" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="beige">
                                        <div class="item">
                                            <img class="lazyload" src="<?= $products['image'] ?>" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="beige">
                                        <div class="item">
                                            <img class="lazyload" src="<?= $products['image'] ?>" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="beige">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod3.jpg" src="shop/products/hmgoepprod3.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="beige">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod4.jpg" src="shop/products/hmgoepprod4.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="beige">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod5.jpg" src="shop/products/hmgoepprod5.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <!-- black -->
                                    <div class="swiper-slide stagger-item" data-color="black">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod6.jpg" src="shop/products/hmgoepprod6.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="black">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod7.jpg" src="shop/products/hmgoepprod7.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="black">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod8.jpg" src="shop/products/hmgoepprod8.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="black">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod9.jpg" src="shop/products/hmgoepprod9.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <!-- blue -->
                                    <div class="swiper-slide stagger-item" data-color="blue">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod10.jpg" src="shop/products/hmgoepprod10.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="blue">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod11.jpg" src="shop/products/hmgoepprod11.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="blue">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod12.jpg" src="shop/products/hmgoepprod12.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="blue">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod13.jpg" src="shop/products/hmgoepprod13.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <!-- white -->
                                    <div class="swiper-slide stagger-item" data-color="white">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod14.jpg" src="shop/products/hmgoepprod14.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="white">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod15.jpg" src="shop/products/hmgoepprod15.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="white">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod16.jpg" src="shop/products/hmgoepprod16.jpg" alt="img-product">
                                        </div>
                                    </div>
                                    <div class="swiper-slide stagger-item" data-color="white">
                                        <div class="item">
                                            <img class="lazyload" data-src="shop/products/hmgoepprod17.jpg" src="shop/products/hmgoepprod17.jpg" alt="img-product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                <div class="swiper-wrapper">
                                    <!-- beige -->
                                    <div class="swiper-slide" data-color="beige">
                                        <a href="shop/products/p-d1.png" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="<?= $products['image'] ?>" data-src="<?= $products['image'] ?>" src="<?= $products['image'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="beige">
                                        <a href="shop/products/hmgoepprod.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod.jpg" data-src="shop/products/hmgoepprod.jpg" src="shop/products/hmgoepprod.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="beige">
                                        <a href="shop/products/hmgoepprod2.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod2.jpg" data-src="shop/products/hmgoepprod2.jpg" src="shop/products/hmgoepprod2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="beige">
                                        <a href="shop/products/hmgoepprod3.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod3.jpg" data-src="shop/products/hmgoepprod3.jpg" src="shop/products/hmgoepprod3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="beige">
                                        <a href="shop/products/hmgoepprod4.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod4.jpg" data-src="shop/products/hmgoepprod4.jpg" src="shop/products/hmgoepprod4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="beige">
                                        <a href="shop/products/hmgoepprod5.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod5.jpg" data-src="shop/products/hmgoepprod5.jpg" src="shop/products/hmgoepprod5.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- black -->
                                    <div class="swiper-slide" data-color="black">
                                        <a href="shop/products/hmgoepprod6.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod6.jpg" data-src="shop/products/hmgoepprod6.jpg" src="shop/products/hmgoepprod6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="black">
                                        <a href="shop/products/hmgoepprod7.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod7.jpg" data-src="shop/products/hmgoepprod7.jpg" src="shop/products/hmgoepprod7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="black">
                                        <a href="shop/products/hmgoepprod8.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod8.jpg" data-src="shop/products/hmgoepprod8.jpg" src="shop/products/hmgoepprod8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="black">
                                        <a href="shop/products/hmgoepprod9.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod9.jpg" data-src="shop/products/hmgoepprod9.jpg" src="shop/products/hmgoepprod9.jpg" alt="">
                                        </a>
                                    </div>
                                    <!-- blue -->
                                    <div class="swiper-slide" data-color="blue">
                                        <a href="shop/products/hmgoepprod10.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod10.jpg" data-src="shop/products/hmgoepprod10.jpg" src="shop/products/hmgoepprod10.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="blue">
                                        <a href="shop/products/hmgoepprod11.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod11.jpg" data-src="shop/products/hmgoepprod11.jpg" src="shop/products/hmgoepprod11.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="blue">
                                        <a href="shop/products/hmgoepprod12.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod12.jpg" data-src="shop/products/hmgoepprod12.jpg" src="shop/products/hmgoepprod12.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="blue">
                                        <a href="shop/products/hmgoepprod13.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="shop/products/hmgoepprod13.jpg" data-src="shop/products/hmgoepprod13.jpg" src="shop/products/hmgoepprod13.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <!-- white -->
                                    <div class="swiper-slide" data-color="white">
                                        <a href="shop/products/hmgoepprod14.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="views/client/shop/products/hmgoepprod14.jpg" data-src="views/client/shop/products/hmgoepprod14.jpg" src="views/client/shop/products/hmgoepprod14.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="white">
                                        <a href="shop/products/hmgoepprod15.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="views/client/shop/products/hmgoepprod15.jpg" data-src="views/client/shop/products/hmgoepprod15.jpg" src="views/client/shop/products/hmgoepprod15.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="white">
                                        <a href="shop/products/hmgoepprod16.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="views/client/shop/products/hmgoepprod16.jpg" data-src="views/client/shop/products/hmgoepprod16.jpg" src="views/client/shop/products/hmgoepprod16.jpg" alt="img-product">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" data-color="white">
                                        <a href="shop/products/hmgoepprod17.jpg" target="_blank" class="item" data-pswp-width="770px" data-pswp-height="1075px">
                                            <img class="tf-image-zoom lazyload" data-zoom="views/client/shop/products/hmgoepprod17.jpg" data-src="views/client/shop/products/hmgoepprod17.jpg" src="views/client/shop/products/hmgoepprod17.jpg" alt="img-product">
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-button-next button-style-arrow thumbs-next"></div>
                                <div class="swiper-button-prev button-style-arrow thumbs-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="tf-product-info-wrap position-relative">
                        <div class="tf-zoom-main"></div>
                        <div class="tf-product-info-list other-image-zoom">
                            <div class="tf-product-info-title">
                                <h5><?= $products['product_name']?></h5>
                            </div>
                            <div class="tf-product-info-badges">
                                <div class="badges">Best seller</div>
                                <div class="product-status-content">
                                    <i class="icon-lightning"></i>
                                    
                                </div>
                            </div>
                            <div class="tf-product-info-price">
                                <div class="price-on-sale"><?= $products['product_price']?></div>
                            </div>
                            
                            <div class="tf-product-info-countdown">
                                <div class="countdown-wrap">
                                    <div class="countdown-title">
                                        <i class="icon-time tf-ani-tada"></i>
                                        <p>HURRY UP! SALE ENDS IN:</p>
                                    </div>
                                    <div class="tf-countdown style-1">
                                        <div class="js-countdown" data-timer="1007500" data-labels="Days :,Hours :,Mins :,Secs"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-variant-picker">
                                <div class="variant-picker-item">
                                    <div class="variant-picker-label">
                                        Color: <span class="fw-6 variant-picker-label-value value-currentColor">Beige</span>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input id="values-beige" type="radio" name="color1" checked>
                                        <label class="hover-tooltip radius-60 color-btn" for="values-beige" data-color="beige" data-value="Beige">
                                            <span class="btn-checkbox bg-color-beige"></span>
                                            <span class="tooltip">Beige</span>
                                        </label>
                                        <input id="values-black" type="radio" name="color1">
                                        <label class=" hover-tooltip radius-60 color-btn" data-price="9" for="values-black" data-color="black" data-value="Black">
                                            <span class="btn-checkbox bg-color-black"></span>
                                            <span class="tooltip">Black</span>
                                        </label>
                                        <input id="values-blue" type="radio" name="color1">
                                        <label class="hover-tooltip radius-60 color-btn" data-price="10" for="values-blue" data-color="blue" data-value="Blue">
                                            <span class="btn-checkbox bg-color-blue"></span>
                                            <span class="tooltip">Blue</span>
                                        </label>
                                        <input id="values-white" type="radio" name="color1">
                                        <label class="hover-tooltip radius-60 color-btn" data-price="12" for="values-white" data-color="white" data-value="White">
                                            <span class="btn-checkbox bg-color-white"></span>
                                            <span class="tooltip">White</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="variant-picker-item">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="variant-picker-label">
                                            Size: <span class="fw-6 variant-picker-label-value">S</span>
                                        </div>
                                        <a href="#find_size" data-bs-toggle="modal" class="find-size fw-6">Find your size</a>
                                    </div>
                                    <div class="variant-picker-values">
                                        <input type="radio" name="size1" id="values-s" checked>
                                        <label class="style-text size-btn" for="values-s" data-value="S">
                                            <p>S</p>
                                        </label>
                                        <input type="radio" name="size1" id="values-m">
                                        <label class="style-text size-btn" data-price="9" for="values-m" data-value="M">
                                            <P>M</P>
                                        </label>
                                        <input type="radio" name="size1" id="values-l">
                                        <label class="style-text size-btn" data-price="10" for="values-l" data-value="L">
                                            <p>L</p>
                                        </label>
                                        <input type="radio" name="size1" id="values-xl">
                                        <label class="style-text size-btn" data-price="12" for="values-xl" data-value="XL">
                                            <p>XL</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-quantity">
                                <div class="quantity-title fw-6">Quantity</div>
                                <div class="wg-quantity">
                                    <span class="btn-quantity btn-decrease">-</span>
                                    <input type="text" class="quantity-product" name="number" value="1">
                                    <span class="btn-quantity btn-increase">+</span>
                                </div>
                            </div>
                            <div class="tf-product-info-buy-button">
                                <form class="">
                                    <a href="?ctl=cart" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>Thêm Vào Giỏ Hàng -&nbsp;</span><span class="tf-qty-price total-price"><?= $products['product_price']?></span></a>
                                    <a href="javascript:void(0);" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white wishlist btn-icon-action">
                                        <span class="icon icon-heart"></span>
                                        <span class="tooltip">Add to Wishlist</span>
                                        <span class="icon icon-delete"></span>
                                    </a>
                                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                                        <span class="icon icon-compare"></span>
                                        <span class="tooltip">Add to Compare</span>
                                        <span class="icon icon-check"></span>
                                    </a>
                                    <div class="w-100">
                                        <a href="#" class="btns-full">Buy with <img src="payments/paypal.png" alt=""></a>
                                        <a href="#" class="payment-more-option">More payment options</a>
                                    </div>
                                </form>
                            </div>
                            <div class="tf-product-info-extra-link">
                                <a href="#compare_color" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <img src="item/compare.svg" alt="">
                                    </div>
                                    <div class="text fw-6">Compare color</div>
                                </a>
                                <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <i class="icon-question"></i>
                                    </div>
                                    <div class="text fw-6">Ask a question</div>
                                </a>
                                <a href="#delivery_return" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <svg class="d-inline-block" xmlns="http://www.w3.org/2000/svg" width="22" height="18" viewBox="0 0 22 18" fill="currentColor">
                                            <path d="M21.7872 10.4724C21.7872 9.73685 21.5432 9.00864 21.1002 8.4217L18.7221 5.27043C18.2421 4.63481 17.4804 4.25532 16.684 4.25532H14.9787V2.54885C14.9787 1.14111 13.8334 0 12.4255 0H9.95745V1.69779H12.4255C12.8948 1.69779 13.2766 2.07962 13.2766 2.54885V14.5957H8.15145C7.80021 13.6052 6.85421 12.8936 5.74468 12.8936C4.63515 12.8936 3.68915 13.6052 3.33792 14.5957H2.55319C2.08396 14.5957 1.70213 14.2139 1.70213 13.7447V2.54885C1.70213 2.07962 2.08396 1.69779 2.55319 1.69779H9.95745V0H2.55319C1.14528 0 0 1.14111 0 2.54885V13.7447C0 15.1526 1.14528 16.2979 2.55319 16.2979H3.33792C3.68915 17.2884 4.63515 18 5.74468 18C6.85421 18 7.80021 17.2884 8.15145 16.2979H13.423C13.7742 17.2884 14.7202 18 15.8297 18C16.9393 18 17.8853 17.2884 18.2365 16.2979H21.7872V10.4724ZM16.684 5.95745C16.9494 5.95745 17.2034 6.08396 17.3634 6.29574L19.5166 9.14894H14.9787V5.95745H16.684ZM5.74468 16.2979C5.27545 16.2979 4.89362 15.916 4.89362 15.4468C4.89362 14.9776 5.27545 14.5957 5.74468 14.5957C6.21392 14.5957 6.59575 14.9776 6.59575 15.4468C6.59575 15.916 6.21392 16.2979 5.74468 16.2979ZM15.8298 16.2979C15.3606 16.2979 14.9787 15.916 14.9787 15.4468C14.9787 14.9776 15.3606 14.5957 15.8298 14.5957C16.299 14.5957 16.6809 14.9776 16.6809 15.4468C16.6809 15.916 16.299 16.2979 15.8298 16.2979ZM18.2366 14.5957C17.8853 13.6052 16.9393 12.8936 15.8298 12.8936C15.5398 12.8935 15.252 12.943 14.9787 13.04V10.8511H20.0851V14.5957H18.2366Z"></path>
                                        </svg>
                                    </div>
                                    <div class="text fw-6">Delivery & Return</div>
                                </a>
                                <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                    <div class="icon">
                                        <i class="icon-share"></i>
                                    </div>
                                    <div class="text fw-6">Share</div>
                                </a>
                            </div>
                            <div class="tf-product-info-delivery-return">
                                <div class="row">
                                    <div class="col-xl-6 col-12">
                                        <div class="tf-product-delivery">
                                            <div class="icon">
                                                <i class="icon-delivery-time"></i>
                                            </div>
                                            <p>Estimate delivery times: <span class="fw-7">12-26 days</span> (International), <span class="fw-7">3-6 days</span> (United States).</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="tf-product-delivery mb-0">
                                            <div class="icon">
                                                <i class="icon-return-order"></i>
                                            </div>
                                            <p>Return within <span class="fw-7">30 days</span> of purchase. Duties & taxes are non-refundable.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-product-info-trust-seal">
                                <div class="tf-product-trust-mess">
                                    <i class="icon-safe"></i>
                                    <p class="fw-6">Guarantee Safe <br> Checkout</p>
                                </div>
                                <div class="tf-payment">
                                    <img src="payments/visa.png" alt="">
                                    <img src="payments/img-1.png" alt="">
                                    <img src="payments/img-2.png" alt="">
                                    <img src="payments/img-3.png" alt="">
                                    <img src="payments/img-4.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</section>
<!-- /default -->
<!-- tabs -->
<section class="flat-spacing-17 pt_0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="widget-tabs style-has-border">
                    <ul class="widget-menu-tab">
                        <li class="item-title active">
                            <span class="inner">Mô Tả</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">Thông tin bổ sung
                        <li class="item-title">
                            <span class="inner">Đánh Giá</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">Vận Chuyển</span>
                        </li>
                        
                    </ul>
                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <div class="">
                                <p class="mb_30">
                                Áo sơ mi tay cài nút và kiểu dáng thoải mái. Được may bằng vải có kết cấu nhăn, mềm mại được làm từ LENZING™ ECOVERO™ Viscose — sợi gỗ có nguồn gốc có trách nhiệm được sản xuất thông qua quy trình giảm tác động đến rừng, đa dạng sinh học và nguồn cung cấp nước.
                                </p>
                                <div class="tf-product-des-demo">
                                    <div class="right">
                                        <h3 class="fs-16 fw-5">Đặc trưng</h3>
                                        <ul>
                                            <li>Nút cài phía trước</li>
                                            <li> Các tab tay áo có thể điều chỉnh</li>
                                            <li>Biểu tượng thêu Babaton ở vạt áo và viền áo</li>
                                        </ul>
                                        <h3 class="fs-16 fw-5">Chăm sóc vật liệu</h3>
                                        <ul class="mb-0">
                                            <li>Chất Liệu: 100% LENZING™ ECOVERO™ Viscose</li>
                                            <li>Chăm sóc: Giặt tay</li>
                                            <li>Nhập khẩu</li>
                                        </ul>
                                    </div>
                                    <div class="left">
                                        <h3 class="fs-16 fw-5">Bảo Quản</h3>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-machine"></i>
                                            </div>
                                            <span>Giặt máy tối đa 30ºC. Vắt ngắn.</span>
                                        </div>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-iron"></i>
                                            </div>
                                            <span>Sắt tối đa 110ºC.</span>
                                        </div>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-bleach"></i>
                                            </div>
                                            <span>Không tẩy/tẩy.</span>
                                        </div>
                                        <div class="d-flex gap-10 mb_15 align-items-center">
                                            <div class="icon">
                                                <i class="icon-dry-clean"></i>
                                            </div>
                                            <span>Không giặt khô.</span>
                                        </div>
                                        <div class="d-flex gap-10 align-items-center">
                                            <div class="icon">
                                                <i class="icon-tumble-dry"></i>
                                            </div>
                                            <span>Sấy khô ở nhiệt độ trung bình.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                            <table class="tf-pr-attrs">
                                <tbody>
                                    <tr class="tf-attr-pa-color">
                                        <th class="tf-attr-label">Color</th>
                                        <td class="tf-attr-value">
                                            <p>White, Pink, Black</p>
                                        </td>
                                    </tr>
                                    <tr class="tf-attr-pa-size">
                                        <th class="tf-attr-label">Size</th>
                                        <td class="tf-attr-value">
                                            <p>S, M, L, XL</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="widget-content-inner">
                            <div class="tab-reviews write-cancel-review-wrap">
                                <div class="tab-reviews-heading">
                                    <div class="top">
                                        <div class="text-center">
                                            <h1 class="number fw-6">4.8</h1>
                                            <div class="list-star">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <p>(168 Ratings)</p>
                                        </div>
                                        <div class="rating-score">
                                            <div class="item">
                                                <div class="number-1 text-caption-1">5</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 94.67%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">59</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">4</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 60%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">46</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">3</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 0%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">2</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 0%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">1</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 0%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">0</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-cancel-review">Cancel Review</div>
                                        <div class="tf-btn btn-outline-dark fw-6 btn-comment-review btn-write-review">Write a review</div>
                                    </div>
                                </div>
                                <div class="comments-section">
                                    <h3>Bình luận</h3>
                                    <?php if (empty($comments)): ?>
                                        <p>Hiện tại sản phẩm chưa có bình luận nào.</p>
                                    <?php else: ?>
                                        <?php foreach ($comments as $comment): ?>
                                            <div class="comment">
                                                <p><?= ($comment['content']) ?></p>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <form class="form-write-review write-review-wrap">
                                    <div class="heading">
                                        <h5>Write a review:</h5>
                                        <div class="list-rating-check">
                                            <input type="radio" id="star5" name="rate" value="5" />
                                            <label for="star5" title="text"></label>
                                            <input type="radio" id="star4" name="rate" value="4" />
                                            <label for="star4" title="text"></label>
                                            <input type="radio" id="star3" name="rate" value="3" />
                                            <label for="star3" title="text"></label>
                                            <input type="radio" id="star2" name="rate" value="2" />
                                            <label for="star2" title="text"></label>
                                            <input type="radio" id="star1" name="rate" value="1" />
                                            <label for="star1" title="text"></label>
                                        </div>
                                    </div>
                                    <div class="form-content">
                                        <fieldset class="box-field">
                                            <label class="label">Review Title</label>
                                            <input type="text" placeholder="Give your review a title" name="text" tabindex="2" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="box-field">
                                            <label class="label">Review</label>
                                            <textarea rows="4" placeholder="Write your comment here" tabindex="2" aria-required="true" required=""></textarea>
                                        </fieldset>
                                        <div class="box-field group-2">
                                            <fieldset>
                                                <input type="text" placeholder="You Name (Public)" name="text" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset>
                                                <input type="email" placeholder="Your email (private)" name="email" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                        </div>
                                        <div class="box-check">
                                            <input type="checkbox" name="availability" class="tf-check" id="check1">
                                            <label class="text_black-3" for="check1">Save my name, email, and website in this browser for the next time I comment.</label>
                                        </div>
                                    </div>
                                    <div class="button-submit">
                                        <button class="tf-btn btn-fill animate-hover-btn" type="submit">Submit Reviews</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget-content-inner">
                            <div class="tf-page-privacy-policy">
                                <div class="title">Chính sách của Công ty TNHH tư nhân</div>
                                <p>Công ty TNHH Tư nhân và mỗi công ty con, công ty mẹ và công ty liên kết tương ứng của họ được coi là vận hành Trang web này ("chúng tôi" hoặc "chúng tôi") nhận ra rằng bạn quan tâm đến cách thông tin về bạn được sử dụng và chia sẻ. Chúng tôi đã tạo Chính sách bảo mật này để thông báo cho bạn thông tin nào chúng tôi thu thập trên Trang web, cách chúng tôi sử dụng thông tin của bạn và các lựa chọn bạn có về cách thông tin của bạn được thu thập và sử dụng. Vui lòng đọc kỹ Chính sách bảo mật này. Việc bạn sử dụng Trang web cho thấy bạn đã đọc và chấp nhận các thông lệ về quyền riêng tư của chúng tôi, như được nêu trong Chính sách bảo mật này.

                                    Xin lưu ý rằng các hoạt động được mô tả trong Chính sách bảo mật này áp dụng cho thông tin do chúng tôi hoặc các công ty con, chi nhánh hoặc đại lý của chúng tôi thu thập: (i) thông qua Trang web này, (ii) khi áp dụng, thông qua Bộ phận dịch vụ khách hàng của chúng tôi liên quan đến Trang web này, (iii) thông qua thông tin được cung cấp cho chúng tôi tại các cửa hàng bán lẻ độc lập của chúng tôi và (iv) thông qua thông tin được cung cấp cho chúng tôi liên quan đến các chương trình khuyến mãi tiếp thị và xổ số.

                                    Chúng tôi không chịu trách nhiệm về nội dung hoặc chính sách bảo mật trên bất kỳ trang web nào.

                                    Chúng tôi có toàn quyền quyết định sửa đổi, cập nhật, bổ sung, ngừng, xóa hoặc thay đổi bất kỳ phần nào của Chính sách bảo mật này, toàn bộ hoặc một phần, bất kỳ lúc nào. Khi chúng tôi sửa đổi Chính sách bảo mật này, chúng tôi sẽ sửa đổi ngày "cập nhật lần cuối" nằm ở đầu Chính sách bảo mật này.

                                    Nếu bạn cung cấp thông tin cho chúng tôi hoặc truy cập hoặc sử dụng Trang web theo bất kỳ cách nào sau khi Chính sách bảo mật này đã được thay đổi, bạn sẽ được coi là đã đồng ý và chấp thuận vô điều kiện với những thay đổi đó. Phiên bản mới nhất của Chính sách bảo mật này sẽ có trên Trang web và sẽ thay thế tất cả các phiên bản trước đó của Chính sách bảo mật này.

                                    Nếu bạn có bất kỳ câu hỏi nào liên quan đến Chính sách bảo mật này, bạn nên liên hệ với Bộ phận dịch vụ khách hàng của chúng tôi qua email tại marketing@company.com</p>

                            </div>
                        </div>
                        <div class="widget-content-inner">
                            <ul class="d-flex justify-content-center mb_18">
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                        <path fill="currentColor"
                                            d="M8.7 30.7h22.7c.3 0 .6-.2.7-.6l4-25.3c-.1-.4-.3-.7-.7-.8s-.7.2-.8.6L34 8.9l-3-1.1c-2.4-.9-5.1-.5-7.2 1-2.3 1.6-5.3 1.6-7.6 0-2.1-1.5-4.8-1.9-7.2-1L6 8.9l-.7-4.3c0-.4-.4-.7-.7-.6-.4.1-.6.4-.6.8l4 25.3c.1.3.3.6.7.6zm.8-21.6c2-.7 4.2-.4 6 .8 1.4 1 3 1.5 4.6 1.5s3.2-.5 4.6-1.5c1.7-1.2 4-1.6 6-.8l3.3 1.2-3 19.1H9.2l-3-19.1 3.3-1.2zM32 32H8c-.4 0-.7.3-.7.7s.3.7.7.7h24c.4 0 .7-.3.7-.7s-.3-.7-.7-.7zm0 2.7H8c-.4 0-.7.3-.7.7s.3.6.7.6h24c.4 0 .7-.3.7-.7s-.3-.6-.7-.6zm-17.9-8.9c-1 0-1.8-.3-2.4-.6l.1-2.1c.6.4 1.4.6 2 .6.8 0 1.2-.4 1.2-1.3s-.4-1.3-1.3-1.3h-1.3l.2-1.9h1.1c.6 0 1-.3 1-1.3 0-.8-.4-1.2-1.1-1.2s-1.2.2-1.9.4l-.2-1.9c.7-.4 1.5-.6 2.3-.6 2 0 3 1.3 3 2.9 0 1.2-.4 1.9-1.1 2.3 1 .4 1.3 1.4 1.3 2.5.3 1.8-.6 3.5-2.9 3.5zm4-5.5c0-3.9 1.2-5.5 3.2-5.5s3.2 1.6 3.2 5.5-1.2 5.5-3.2 5.5-3.2-1.6-3.2-5.5zm4.1 0c0-2-.1-3.5-.9-3.5s-1 1.5-1 3.5.1 3.5 1 3.5c.8 0 .9-1.5.9-3.5zm4.5-1.4c-.9 0-1.5-.8-1.5-2.1s.6-2.1 1.5-2.1 1.5.8 1.5 2.1-.5 2.1-1.5 2.1zm0-.8c.4 0 .7-.5.7-1.2s-.2-1.2-.7-1.2-.7.5-.7 1.2.3 1.2.7 1.2z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                        <path fill="currentColor"
                                            d="M36.7 31.1l-2.8-1.3-4.7-9.1 7.5-3.5c.4-.2.6-.6.4-1s-.6-.5-1-.4l-7.5 3.5-7.8-15c-.3-.5-1.1-.5-1.4 0l-7.8 15L4 15.9c-.4-.2-.8 0-1 .4s0 .8.4 1l7.5 3.5-4.7 9.1-2.8 1.3c-.4.2-.6.6-.4 1 .1.3.4.4.7.4.1 0 .2 0 .3-.1l1-.4-1.5 2.8c-.1.2-.1.5 0 .8.1.2.4.3.7.3h31.7c.3 0 .5-.1.7-.4.1-.2.1-.5 0-.8L35.1 32l1 .4c.1 0 .2.1.3.1.3 0 .6-.2.7-.4.1-.3 0-.8-.4-1zm-5.1-2.3l-9.8-4.6 6-2.8 3.8 7.4zM20 6.4L27.1 20 20 23.3 12.9 20 20 6.4zm-7.8 15l6 2.8-9.8 4.6 3.8-7.4zm22.4 13.1H5.4L7.2 31 20 25l12.8 6 1.8 3.5z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                        <path fill="currentColor"
                                            d="M5.9 5.9v28.2h28.2V5.9H5.9zM19.1 20l-8.3 8.3c-2-2.2-3.2-5.1-3.2-8.3s1.2-6.1 3.2-8.3l8.3 8.3zm-7.4-9.3c2.2-2 5.1-3.2 8.3-3.2s6.1 1.2 8.3 3.2L20 19.1l-8.3-8.4zM20 20.9l8.3 8.3c-2.2 2-5.1 3.2-8.3 3.2s-6.1-1.2-8.3-3.2l8.3-8.3zm.9-.9l8.3-8.3c2 2.2 3.2 5.1 3.2 8.3s-1.2 6.1-3.2 8.3L20.9 20zm8.4-10.2c-1.2-1.1-2.6-2-4.1-2.6h6.6l-2.5 2.6zm-18.6 0L8.2 7.2h6.6c-1.5.6-2.9 1.5-4.1 2.6zm-.9.9c-1.1 1.2-2 2.6-2.6 4.1V8.2l2.6 2.5zM7.2 25.2c.6 1.5 1.5 2.9 2.6 4.1l-2.6 2.6v-6.7zm3.5 5c1.2 1.1 2.6 2 4.1 2.6H8.2l2.5-2.6zm18.6 0l2.6 2.6h-6.6c1.4-.6 2.8-1.5 4-2.6zm.9-.9c1.1-1.2 2-2.6 2.6-4.1v6.6l-2.6-2.5zm2.6-14.5c-.6-1.5-1.5-2.9-2.6-4.1l2.6-2.6v6.7z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                        <path fill="currentColor"
                                            d="M35.1 33.6L33.2 6.2c0-.4-.3-.7-.7-.7H13.9c-.4 0-.7.3-.7.7s.3.7.7.7h18l.7 10.5H20.8c-8.8.2-15.9 7.5-15.9 16.4 0 .4.3.7.7.7h28.9c.2 0 .4-.1.5-.2s.2-.3.2-.5v-.2h-.1zm-28.8-.5C6.7 25.3 13 19 20.8 18.9h11.9l1 14.2H6.3zm11.2-6.8c0 1.2-1 2.1-2.1 2.1s-2.1-1-2.1-2.1 1-2.1 2.1-2.1 2.1 1 2.1 2.1zm6.3 0c0 1.2-1 2.1-2.1 2.1-1.2 0-2.1-1-2.1-2.1s1-2.1 2.1-2.1 2.1 1 2.1 2.1z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                        <path fill="currentColor"
                                            d="M20 33.8c7.6 0 13.8-6.2 13.8-13.8S27.6 6.2 20 6.2 6.2 12.4 6.2 20 12.4 33.8 20 33.8zm0-26.3c6.9 0 12.5 5.6 12.5 12.5S26.9 32.5 20 32.5 7.5 26.9 7.5 20 13.1 7.5 20 7.5zm-.4 15h.5c1.8 0 3-1.1 3-3.7 0-2.2-1.1-3.6-3.1-3.6h-2.6v10.6h2.2v-3.3zm0-5.2h.4c.6 0 .9.5.9 1.7 0 1.1-.3 1.7-.9 1.7h-.4v-3.4z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                        <path fill="currentColor"
                                            d="M30.2 29.3c2.2-2.5 3.6-5.7 3.6-9.3s-1.4-6.8-3.6-9.3l3.6-3.6c.3-.3.3-.7 0-.9-.3-.3-.7-.3-.9 0l-3.6 3.6c-2.5-2.2-5.7-3.6-9.3-3.6s-6.8 1.4-9.3 3.6L7.1 6.2c-.3-.3-.7-.3-.9 0-.3.3-.3.7 0 .9l3.6 3.6c-2.2 2.5-3.6 5.7-3.6 9.3s1.4 6.8 3.6 9.3l-3.6 3.6c-.3.3-.3.7 0 .9.1.1.3.2.5.2s.3-.1.5-.2l3.6-3.6c2.5 2.2 5.7 3.6 9.3 3.6s6.8-1.4 9.3-3.6l3.6 3.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9l-3.8-3.6z">
                                        </path>
                                    </svg>
                                </li>
                                <li class="">
                                    <svg viewBox="0 0 40 40" width="35px" height="35px" color="#222" margin="5px">
                                        <path fill="currentColor"
                                            d="M34.1 34.1H5.9V5.9h28.2v28.2zM7.2 32.8h25.6V7.2H7.2v25.6zm13.5-18.3a.68.68 0 0 0-.7-.7.68.68 0 0 0-.7.7v10.9a.68.68 0 0 0 .7.7.68.68 0 0 0 .7-.7V14.5z">
                                        </path>
                                    </svg>
                                </li>
                            </ul>
                            <p class="text-center text-paragraph">LT01: 70% wool, 15% polyester, 10% polyamide, 5% acrylic 900 Grms/mt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /tabs -->
<!-- product -->
<section class="flat-spacing-1 pt_0">
    <div class="container">
        <div class="flat-title">
            <span class="title">Sản Phẩm Cùng Loại</span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <?php foreach ($limit as $post) : ?>
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="<?= $post['image'] ?>" alt="image-product">
                                        <img class="lazyload img-product" src="<?= $post['image'] ?>" alt="image-product">

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
                                    <a href="" class="title link"><?= $post['product_name'] ?></a>
                                    <span class="price"><?= number_format($post['product_price'], 0, ',', '.') ?> VNĐ</span>

                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
        </div>
    </div>
</section>
<section class="flat-spacing-1 pt_0">
    <div class="container">
        <div class="flat-title">
            <span class="title">Sản Phẩm Bán Chạy Nhất</span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div class="swiper-wrapper">
                    <?php foreach ($like as $a) : ?>
                        <div class="swiper-slide" lazy="true">
                            <div class="card-product">
                                <div class="card-product-wrapper">
                                    <a href="product-detail.html" class="product-img">
                                        <img class="lazyload img-product" src="<?= $a['image'] ?>" alt="image-product">


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
                                    <a href="" class="title link"><?= $a['product_name'] ?></a>
                                    <span class="price"><?= number_format($a['product_price'], 0, ',', '.') ?> VNĐ</span>

                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
            <div class="sw-dots style-2 sw-pagination-product justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /product -->
<!-- recent -->

<!-- /recent -->
<!-- footer -->

<!-- Phần bình luận -->



<?php include_once "views/client/layout/footer.php"; ?>