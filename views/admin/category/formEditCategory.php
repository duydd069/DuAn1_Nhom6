<?php include 'views/admin/layout/header.php'; ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                <h3>Edit Category</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#"><div class="text-tiny">Category</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit Category</div>
                    </li>
                </ul>
            </div>
            <form class="form-add-category" method="POST" action="?ctl=updateCategory">
                <input type="hidden" name="id" value="<?= htmlspecialchars($category['id']) ?>">
                <div class="wg-box mb-30">
                    <fieldset class="name">
                        <div class="body-title mb-10">Category Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="text" name="category" value="<?= htmlspecialchars($category['category']) ?>" required>
                    </fieldset>
                    <fieldset class="description">
                        <div class="body-title mb-10">Category Description</div>
                        <input class="input-black" type="text" name="description" value="<?= htmlspecialchars($category['description']) ?>">
                    </fieldset>
                </div>
                <div class="cols gap10">
                    <button class="tf-button w380" type="submit">Update Category</button>
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