<?php include_once "views/client/layout/header.php" ?>

<div class="tf-page-title">
    <div class="container-full text-center">
        <h1 class="heading">Sản Phẩm Chất Lượng </h1>
        <p class="text-2 text_black-2 mt_5">Mua sắm qua bộ sưu tập thời trang mới nhất của chúng tôi</p>
    </div>
</div>
<!-- /page-title -->

<!-- Section Product -->
<section class="flat-spacing-2">
    <div class="container">
        <div class="wrapper-control-shop">
            <div class="grid-layout wrapper-shop" data-grid="grid-4">
                <?php foreach ($data as $post) : ?>
                <div class="card-product" data-price="16.95" data-color="orange black white">
                    <div class="card-product-wrapper">
                        <a href="?ctl=productDetaill&id=<?= $post['id']?>" class="product-img">
                            <img src="<?= $post['image'] ?>" alt="<?= $post['product_name'] ?>">
                        </a>
                        <div class="list-product-btn absolute-2">
                            <a href="#quick_add" data-bs-toggle="modal" class="box-icon bg_white quick-add tf-btn-loading">
                                <span class="icon icon-bag"></span>
                                <span class="tooltip">Quick Add</span>
                            </a>
                            <a href="javascript:void(0);" class="box-icon bg_white wishlist btn-icon-action">
                                <span class="icon icon-heart"></span>
                                <span class="tooltip">Add to Wishlist</span>
                            </a>
                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon bg_white compare btn-icon-action">
                                <span class="icon icon-compare"></span>
                                <span class="tooltip">Add to Compare</span>
                            </a>
                            <a href="#quick_view" data-bs-toggle="modal" class="box-icon bg_white quickview tf-btn-loading">
                                <span class="icon icon-view"></span>
                                <span class="tooltip">Quick View</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-product-info text-center">
                        <a href="?ctl=productDetaill&id=<?= $post['id']?>" class="title link"><?= $post['product_name']?></a>
                        <span class="price"><?= number_format($post['product_price'], 0, ',', '.') ?> VNĐ</span>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <!-- Pagination -->
            
        </div>
    </div>
</section>
<!-- /Section Product -->

<?php include_once "views/client/layout/footer.php" ?>
<style>
    .tf-page-title .heading {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}
.card-product-info .text-center{
    text-align: center;
}
.card-product-wrapper {
    position: relative;
    overflow: hidden;
    margin-bottom: 20px;
}

.card-product img {
    width: 100%;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.card-product img:hover {
    transform: scale(1.1);
}

.card-product-info {
    margin-top: 10px;
    text-align: center;
}

.card-product-info .price {
    color: #ff5722;
    font-size: 1.2rem;
    font-weight: bold;
}

.list-color-product {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.tf-pagination-wrap {
    display: inline-flex;
    list-style: none;
    gap: 5px;
    padding: 0;
}

.tf-pagination-wrap li a {
    display: inline-block;
    padding: 8px 15px;
    background-color: #f8f9fa;
    color: #000;
    border-radius: 4px;
    transition: all 0.3s;
}

.tf-pagination-wrap li a:hover,
.tf-pagination-wrap li.active a {
    background-color: #ff5722;
    color: #fff;
}
.card-product {
    border: 1px solid #ddd; 
    border-radius: 8px; 
    padding: 10px; 
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    transition: transform 0.3s, box-shadow 0.3s; 
    background-color: #fff; 
}

.card-product:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); 
    border-color: #ff5722; 
}

</style>