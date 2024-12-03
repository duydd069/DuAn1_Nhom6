<?php 
include 'views/admin/layout/header.php';
?>
<div class="main-content">
  <!-- main-content-wrap -->
  <div class="main-content-inner">
    <!-- main-content-wrap -->
    <div class="main-content-wrap">
      <div class="flex items-center flex-wrap justify-between gap20 mb-30">
        <h3>All Products</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
          <li>
            <a href="index.html">
              <div class="text-tiny">Dashboard</div>
            </a>
          </li>
          <li>
            <i class="icon-chevron-right"></i>
          </li>
          <li>
            <a href="#">
              <div class="text-tiny">Product</div>
            </a>
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
          <div class="body-text">Mẹo tìm kiếm theo ID sản phẩm: Mỗi sản phẩm được cung cấp một ID duy nhất mà bạn có thể dựa vào đó để tìm chính xác sản phẩm mình cần.</div>
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
          <a class="tf-button style-1 w208" href="?ctl=formAddProduct"><i class="icon-plus"></i>Add new</a>
        </div>
        <div class="wg-table table-product-list">
          <ul class="table-title flex gap20 mb-14">
            <li>
              <div class="body-title">Product</div>
            </li>
            <li>
              <div class="body-title">Product ID</div>
            </li>
            <li>
              <div class="body-title">Price</div>
            </li>
            <li>
              <div class="body-title">Quantity</div>
            </li>
            <li>
              <div class="body-title">Sale</div>
            </li>
            <li>
              <div class="body-title">Stock</div>
            </li>
            <li>
              <div class="body-title">Start date</div>
            </li>
            <li>
              <div class="body-title">Action</div>
            </li>
          </ul>
          <ul class="flex flex-column">
            <?php foreach ($products as $product): ?>
            <li class="wg-product item-row gap20">
              <div class="name">
                <div class="image">
                  <img src="<?= htmlspecialchars($product['image']) ?>" alt="">
                </div>
                <div class="title line-clamp-2 mb-0">
                  <a href="#" class="body-text"><?= htmlspecialchars($product['product_name']) ?></a>
                </div>
              </div>
              <div class="body-text text-main-dark mt-4"><?= htmlspecialchars($product['id']) ?></div>
              <div class="body-text text-main-dark mt-4">$<?= number_format($product['product_price'], 2) ?></div>
              <div class="body-text text-main-dark mt-4"><?= (int)$product['quantity'] ?></div>
              <div class="body-text text-main-dark mt-4"><?= (int)$product['discount_price'] ?></div>

              <div>
                <div class="block-available bg-1 fw-7"><?= $product['quantity'] > 0 ? 'In Stock' : 'Out of Stock' ?></div>
              </div>

              <div class="body-text text-main-dark mt-4"><?= date('m/d/Y', strtotime($product['import_date'])) ?></div>
              <div class="list-icon-function">
                <div class="item edit">
                    <a href="?ctl=formEditProduct&id=<?= htmlspecialchars($product['id']) ?>">
                    <i class="icon-edit-3"></i>
                </a>
                </div>
            <div class="item trash">
                <a href="?ctl=deleteProduct&id=<?= htmlspecialchars($product['id']) ?>" onclick="return confirm('Are you sure you want to delete this product?');">
                <i class="icon-trash-2"></i>
                </a>
    </div>
</div>

            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="divider"></div>
        <div class="flex items-center justify-between flex-wrap gap10">
          <ul class="wg-pagination">
            <li>
              <a href="#"><i class="icon-chevron-left"></i></a>
            </li>
            <li class="active">
              <a href="#">1</a>
            </li>
            <li>
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

  th,
  td {
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