<?php include_once "views/client/layout/header.php" ?>


        <div class="tf-page-title">
            <div class="container-full">
                <div class="heading text-center">New Arrival</div>
                <p class="text-center text-2 text_black-2 mt_5">Shop through our latest selection of Fashion</p> 
            </div>
        </div>
        <!-- /page-title -->
        
        <!-- Section Prod   uct -->
        <section class="flat-spacing-2">
            <div class="container">
                <div class="tf-shop-control grid-3 align-items-center">
                    <div class="tf-control-filter">
                        <a href="#filterShop" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filter</span></a>
                    </div>
                    <ul class="tf-control-layout d-flex justify-content-center">
                        <li class="tf-view-layout-switch sw-layout-2" data-value-grid="grid-2">
                            <div class="item"><span class="icon icon-grid-2"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-3" data-value-grid="grid-3">
                            <div class="item"><span class="icon icon-grid-3"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-4 active" data-value-grid="grid-4">
                            <div class="item"><span class="icon icon-grid-4"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-5" data-value-grid="grid-5">
                            <div class="item"><span class="icon icon-grid-5"></span></div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-6" data-value-grid="grid-6">
                            <div class="item"><span class="icon icon-grid-6"></span></div>
                        </li>
                    </ul>
                    <div class="tf-control-sorting d-flex justify-content-end">
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Featured</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item active">
                                    <span class="text-value-item">Featured</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, old to new</span>
                                </div>
                                <div class="select-item">
                                    <span class="text-value-item">Date, new to old</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="wrapper-control-shop">
                    <div class="meta-filter-shop"></div>
                    <div class="grid-layout wrapper-shop" data-grid="grid-4">
                        <!-- card product 1 -->
                        <?php foreach ($products as $a): ?>
                            <div class="card-product" ><div class="card-product-wrapper">
        <a href="?ctl=product_detail&id=<?= htmlspecialchars($a['id']) ?>" class="product-img">
            <img class="lazyload img-product" data-src="<?= htmlspecialchars($a['image']) ?>" src="<?= htmlspecialchars($a['image']) ?>" alt="<?= htmlspecialchars($a['product_name']) ?>">
            <img class="lazyload img-hover" data-src="<?= htmlspecialchars($a['image']) ?>" src="<?= htmlspecialchars($a['image']) ?>" alt="<?= htmlspecialchars($a['product_name']) ?>">
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
        <a href="?ctl=product_detail&id=<?= htmlspecialchars($a['id']) ?>" class="title link">
            <?= htmlspecialchars($a['product_name']) ?>
        </a>
        <span class="price">
            <?php if (!empty($a['discount_price'])): ?>
                <del>$<?= htmlspecialchars($a['product_price']) ?></del>
                <strong>$<?= htmlspecialchars($a['discount_price']) ?></strong>
            <?php else: ?>
                $<?= htmlspecialchars($a['product_price']) ?>
            <?php endif; ?>
        </span>
        <?php if (!empty($a['colors'])): ?>
        <ul class="list-color-product">
            <?php foreach ($a['colors'] as $color): ?>
            <li class="list-color-item color-swatch <?php if ($color['active']) { echo "active"; } ?>">
                <span class="tooltip"><?= htmlspecialchars($color['name']) ?></span>
                <span class="swatch-value" style="background-color: <?= htmlspecialchars($color['code']) ?>;"></span>
                <img class="lazyload" data-src="<?= htmlspecialchars($color['image']) ?>" src="<?= htmlspecialchars($color['image']) ?>" alt="<?= htmlspecialchars($a['product_name']) ?>">
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; ?>
                        
                    </div>
                    <!-- pagination -->
                    <ul class="tf-pagination-wrap tf-pagination-list tf-pagination-btn">
                        <li class="active">
                            <a href="#" class="pagination-link">1</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">2</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">3</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">4</a>
                        </li>
                        <li>
                            <a href="#" class="pagination-link animate-hover-btn">
                                <span class="icon icon-arrow-right"></span>
                            </a>
                        </li>
                    </ul>
                </div>

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
