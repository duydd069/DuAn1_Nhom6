<?php include 'views/admin/layout/header.php'; ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                <h3>Edit Product</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#"><div class="text-tiny">Product</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit Product</div>
                    </li>
                </ul>
            </div>
            <form class="form-add-product" method="POST" action="?ctl=updateProduct">
                <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">
                <div class="wg-box mb-30">
                    <fieldset class="name">
                        <div class="body-title mb-10">Product Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="text" name="product_name" value="<?= htmlspecialchars($product['product_name']) ?>" required>
                    </fieldset>
                    <fieldset class="price">
                        <div class="body-title mb-10">Product Price <span class="tf-color-1">*</span></div>
                        <input class="input-black" type="number" name="product_price" value="<?= htmlspecialchars($product['product_price']) ?>" step="0.01" required>
                    </fieldset>
                    <fieldset class="quantity">
                        <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                        <input class="input-black" type="number" name="quantity" value="<?= htmlspecialchars($product['quantity']) ?>" required>
                    </fieldset>
                    <fieldset class="discount-price">
                        <div class="body-title mb-10">Discount Price</div>
                        <input class="input-black" type="number" name="discount_price" value="<?= htmlspecialchars($product['discount_price']) ?>" step="0.01" required>
                    </fieldset>
                    <fieldset class="import-date">
                        <div class="body-title mb-10">Import Date <span class="tf-color-1">*</span></div>
                        <input class="input-black" type="date" name="import_date" value="<?= htmlspecialchars(date('Y-m-d', strtotime($product['import_date']))) ?>" required>
                    </fieldset>
                    <fieldset class="image-url">
                        <div class="body-title mb-10">Image URL <span class="tf-color-1">*</span></div>
                        <input class="input-black" type="text" name="image" value="<?= htmlspecialchars($product['image']) ?>" required>
                    </fieldset>
                </div>
                <div class="cols gap10">
                    <button class="tf-button w380" type="submit">Update Product</button>
                    <a href="?ctl=dashboard" class="tf-button style-3 w380">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom-page">
        <div class="body-text">Copyright © 2024 <a href="https://themesflat.co/html/ecomus/index.html">Ecomus</a>. Design by Themesflat All rights reserved</div>
    </div>
</div>

<?php include 'views/admin/layout/footer.php'; ?>