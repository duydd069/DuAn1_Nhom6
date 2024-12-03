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
            <form class="form-add-product">
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
                            <div class="flex gap20 flex-wrap">
                                <div class="item">
                                    <img src="public/admin/assets/images/upload/img-1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="public/admin/assets/images/upload/img-2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="body-text">You need to add at least 4 images. Pay attention to the quality of the pictures you add, comply with the background color standards. Pictures must be in certain dimensions. Notice that the product shows all the details</div>
                    </fieldset>
                </div>
                <div class="wg-box mb-30">
                    <fieldset class="name">
                        <div class="body-title mb-10">Product title <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter title" name="product_name" required>
                        <div class="text-tiny text-surface-2">Do not exceed 20 characters when entering the product name.</div>
                    </fieldset>
                    <fieldset class="category">
                        <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                        <select name="category_id" required>
                            <option value="">Choose category</option>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= htmlspecialchars($category['category_id']) ?>">
                                    <?= htmlspecialchars($category['category_name']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </fieldset>
                    <div class="cols-lg gap22">
                        <fieldset class="price">
                            <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                            <input class="" type="number" placeholder="Price" name="price" required>
                        </fieldset>
                        <fieldset class="sale-price">
                            <div class="body-title mb-10">Sale Price</div>
                            <input class="" type="number" placeholder="Sale Price" name="discount_price">
                        </fieldset>
                        <fieldset class="schedule">
                            <div class="body-title mb-10">Schedule</div>
                            <input type="date" name="schedule_date">
                        </fieldset>
                    </div>
                    <div class="cols-lg gap22">
                        <fieldset class="choose-brand">
                            <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                            <input class="" type="text" placeholder="Choose brand" name="brand" required>
                        </fieldset>
                        <fieldset class="variant-picker-item">
                            <div class="variant-picker-label body-title">
                                Color: <span class="body-title-2 fw-4 variant-picker-label-value">Orange</span>
                            </div>
                            <div class="variant-picker-values">
                                <input id="values-orange" type="radio" name="color" value="Orange" checked>
                                <label class="radius-60" for="values-orange" data-value="Orange">
                                    <span class="btn-checkbox bg-color-orange"></span>
                                </label>
                                <input id="values-blue" type="radio" name="color" value="Blue">
                                <label class="radius-60" for="values-blue" data-value="Blue">
                                    <span class="btn-checkbox bg-color-blue"></span>
                                </label>
                                <input id="values-yellow" type="radio" name="color" value="Yellow">
                                <label class="radius-60" for="values-yellow" data-value="Yellow">
                                    <span class="btn-checkbox bg-color-yellow"></span>
                                </label>
                                <input id="values-black" type="radio" name="color" value="Black">
                                <label class="radius-60" for="values-black" data-value="Black">
                                    <span class="btn-checkbox bg-color-black"></span>
                                </label>
                            </div>
                        </fieldset>
                        <fieldset class="variant-picker-item">
                            <div class="variant-picker-label body-text">
                                Size: <span class="body-title-2 variant-picker-label-value">S</span>
                            </div>
                            <div class="variant-picker-values">
                                <input type="radio" name="size" id="values-s" value="S">
                                <label class="style-text" for="values-s" data-value="S">
                                    <div class="text">S</div>
                                </label>
                                <input type="radio" name="size" id="values-m" value="M" checked>
                                <label class="style-text" for="values-m" data-value="M">
                                    <div class="text">M</div>
                                </label>
                                <input type="radio" name="size" id="values-l" value="L">
                                <label class="style-text" for="values-l" data-value="L">
                                    <div class="text">L</div>
                                </label>
                                <input type="radio" name="size" id="values-xl" value="XL">
                                <label class="style-text" for="values-xl" data-value="XL">
                                    <div class="text">XL</div>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="cols-lg gap22">
                        <fieldset class="sku">
                            <div class="body-title mb-10">SKU</div>
                            <input class="" type="text" placeholder="Enter SKU" name="sku" required>
                        </fieldset>
                        <fieldset class="stock">
                            <div class="body-title mb-10">Stock <span class="tf-color-1">*</span></div>
                            <input class="" type="number" placeholder="Enter Stock" name="quantity" required>
                        </fieldset>
                        <fieldset class="tags">
                            <div class="body-title mb-10">Tags</div>
                            <input class="" type="text" placeholder="Enter a tag" name="tags">
                        </fieldset>
                    </div>
                    <fieldset class="description">
                        <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                        <textarea class="mb-10" name="description" placeholder="Short description about product" required></textarea>
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
<?php include 'views/admin/layout/footer.php'; ?>