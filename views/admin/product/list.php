<?php 
include 'views/admin/layout/header.php';?>
<div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                    <h3>All Products</h3>
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
                                            <div class="text-tiny">All Products</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- product-list -->
                                <div class="wg-box">
                                    <div class="title-box">
                                        <i class="icon-coffee"></i>
                                        <div class="body-text">Tip search by Product ID: Each product is provided with a unique ID, which you can rely on to find the exact product you need.</div>
                                    </div>
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <a class="tf-button style-1 w208" href="?ctl=showCreateProduct"><i class="icon-plus"></i>Add new</a>
                                    </div>
                                    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Hình ảnh</th>
            <th>Tên</th>
            <th>Danh mục</th>
            <th>Giá</th>
            <th>Giảm giá</th>
            <th>Số lượng</th>
            <th>Ngày nhập</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $products): ?>
        <tr>
            <td>
                <a href="#"><?= $products['id'] ?></a>
            </td>

            <td>
                <img src="<?= htmlspecialchars($products['image']) ?>" class="img-fluid" alt="Hình ảnh sản phẩm" style="width: 100px">
            </td>

            <td>
                <a href="#"><?= htmlspecialchars($products['product_name']) ?></a>
            </td>

            <td>
                <strong><a href="#"><?= htmlspecialchars($products['category_id']) ?></a></strong>
            </td>

            <td class="td-price"><?= number_format($products['product_price'], 0, ',', '.') ?> VNĐ</td>
            
            <td class="td-price"><?= number_format($products['discount_price'] ?? $products['product_price'], 0, ',', '.') ?> VNĐ</td>

            <td><?= (int)$products['quantity'] ?></td>

            <td><?= htmlspecialchars($products['import_date']) ?></td>

            <td>
                <ul style="list-style: none; padding: 0; display: flex; gap: 10px;">
                    <li>
                        <a href="order-detail.html" title="Xem chi tiết">
                            <span class="lnr lnr-eye"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" title="Chỉnh sửa">
                            <span class="lnr lnr-pencil"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" title="Xóa">
                            <i class="far fa-trash-alt theme-color"></i>
                        </a>
                    </li>
                </ul>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10">
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </li>
                                            <li class="active">
                                                <a href="#">1</a>
                                            </li>
                                            <li >
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
                                <!-- /product-list -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <!-- /bottom-page -->
                    </div>
                    <?php include 'views/admin/layout/footer.php';?>

                    <style>
                        table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}
th {
    background-color: #f4f4f4;
    font-weight: bold;
}
ul {

    justify-content: center;
    gap: 10px;
    padding: 0;
    margin: 0;
    list-style: none;
}
ul li a {
    text-decoration: none;
    color: #000;
}
ul li a:hover {
    color: #007BFF;
}

                    </style>