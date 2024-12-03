<?php include 'views/admin/layout/header.php'; ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                <h3>Add Product</h3>
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
                        <div class="text-tiny">Add Product</div>
                    </li>
                </ul>
            </div>
            <form class="form-add-product" method="POST" enctype="multipart/form-data">
                <div class="wg-box mb-30">
                    <fieldset>
                        <div class="body-title mb-10">Upload images</div>
                        <div class="upload-image mb-16">
                            <div class="up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <div class="text-tiny">Drop your images here or select <span class="text-secondary">click to browse</span></div>
                                    <input type="file" id="myFile" name="product_images[]" multiple>
                                    <img src="#" id="myFile-input" alt="">
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="wg-box mb-30">
                    <fieldset class="name">
                        <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="text" placeholder="Enter name" name="product_name" required>
                        <div class="text-tiny text-surface-2">Do not exceed 20 characters when entering the product name.</div>
                    </fieldset>
                    <fieldset class="category">
                        <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                        <?php
                        // Giả sử bạn đã lấy danh sách danh mục từ model
                        $categories = (new home)->getCategories(); // Lấy danh sách danh mục
                        if (!empty($categories)): ?>
                        <select name="category_id" class="black" required>
                            <option value="">Choose category</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= htmlspecialchars($category['id']) ?>">
                                    <?= htmlspecialchars($category['category_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?php endif; ?>
                    </fieldset>
                    <div class="cols-lg gap22">
                        <fieldset class="price">
                            <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                            <input class="input-black" type="number" placeholder="Price" name="price" required>
                        </fieldset>
                        <fieldset class="sale-price">
                            <div class="body-title mb-10">Sale Price</div>
                            <input class="input-black" type="number" placeholder="Sale Price" name="discount_price">
                        </fieldset>
                        <fieldset class="schedule">
                            <div class="body-title mb-10">Schedule</div>
                            <input class="input-black" type="date" name="schedule_date">
                        </fieldset>
                    </div>
                    <div class="cols-lg gap22">
                        <fieldset class="sku">
                            <div class="body-title mb-10">SKU</div>
                            <input class="input-black" type="text" placeholder="Enter SKU" name="sku">
                        </fieldset>
                        <fieldset class="stock">
                            <div class="body-title mb-10">Số lượng <span class="tf-color-1">*</span></div>
                            <input class="input-black" type="number" placeholder="Enter Stock" name="quantity" required>
                        </fieldset>
                        <fieldset class="tags">
                            <div class="body-title mb-10">Tags</div>
                            <input class="input-black" type="text" placeholder="Enter a tag" name="tags">
                        </fieldset>
                    </div>
                    <fieldset class="description">
                        <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                        <textarea class="input-black mb-10" name="description" placeholder="Short description about product" required></textarea>
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                    </fieldset>
                </div>
                <div class="cols gap10">
                    <button class="tf-button w380" type="submit">Add product</button>
                    <a href="?ctl=dashboard" class="tf-button style-3 w380">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom-page">
        <div class="body-text">Copyright © 2024 <a href="https://themesflat.co/html/ecomus/index.html">Ecomus</a>. Design by Themesflat All rights reserved</div>
    </div>
</div>
<style>
    
</style>
<?php include 'views/admin/layout/footer.php'; ?>