<?php include 'views/admin/layout/header.php'; ?>
<div class="main-content">
    <!-- main-content-wrap -->
    <div class="main-content-inner">
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                <h3>All category</h3>
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
                        <div class="text-tiny">All category</div>
                    </li>
                </ul>
            </div>
            <!-- all-category -->
            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        <div class="show">
                            <div class="text-tiny">Showing</div>
                            <div class="select">
                                <select class="">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                </select>
                            </div>
                            <div class="text-tiny">entries</div>
                        </div>
                        <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." name="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <a class="tf-button style-1 w208" href="?ctl=formAddCategory"><i class="icon-plus"></i>Add new</a>
                </div>
                <div class="wg-table table-all-category">
                    <ul class="table-title flex gap20 mb-14">
                        <li>
                            <div class="body-title">ID</div>
                        </li>    
                        <li>
                            <div class="body-title">Category</div>
                        </li>
                        <li>
                            <div class="body-title">Description</div>
                        </li>
                        <li>
                            <div class="body-title">Action</div>
                        </li>
                    </ul>
                    <ul class="flex flex-column">
                        <?php
                        // Giả sử bạn đã lấy danh sách danh mục từ model
                        $categories = (new home)->getCategories(); // Lấy danh sách danh mục
                        if (!empty($categories)): ?>
                            <?php foreach ($categories as $category): ?>
                                <li class="wg-product item-row gap20">
                                    <div class="title line-clamp-2 mb-0">
                                        <div class="body-text"><?= htmlspecialchars($category['id']) ?></div>
                                    </div>
                                    <div class="body-text text-main-dark mt-4"><?= htmlspecialchars($category['category_name']) ?></div>
                                    <div class="body-text text-main-dark mt-4">Description here</div> <!-- Nếu có mô tả -->
                                    <div class="list-icon-function">
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <li class="wg-product item-row gap20">
                                <div class="body-text">No categories available</div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="divider"></div>
                <div class="flex items-center justify-between flex-wrap gap10">
                    <div class="text-tiny">Showing <?= count($categories) ?? 0 ?> entries</div>
                    <ul class="wg-pagination">
                        <li>
                            <a href="#"><i class="icon-chevron-left"></i></a>
                        </li>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /all-category -->
        </div>
        <!-- /main-content-wrap -->
    </div>
    <!-- /main-content-wrap -->
</div>
<!-- main-content-wrap -->
<?php include 'views/admin/layout/footer.php'; ?>