<?php 

class ControllerList
{
    public function list()
    {
        $product = (new home())->home();
        return view('client/list/home', ['product' => $product]);
    }

    public function adminproduct()
    {
        $product = (new home())->home();
        return view('admin/product/list', ['product' => $product]);
    }

    public function showCreateProduct()
    {
        return view('admin/product/create');
    }

    public function createProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lấy dữ liệu từ POST
            $id = $_POST['id'];
            $product_name = $_POST['product_name'];
            $product_price = $_POST['product_price'];
            $discount_price = $_POST['discount_price'];
            $image = $_POST['image'];
            $quantity = $_POST['quantity'];
            $views = $_POST['views'];
            $import_date = $_POST['import_date'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];
            $status = $_POST['status'];

            // Tạo đối tượng home và gọi phương thức addProduct
            $home = new home();
            $result = $home->addProduct(
                $id,
                $product_name,
                $product_price,
                $discount_price,
                $image,
                $quantity,
                $views,
                $import_date,
                $description,
                $category_id,
                $status
            );

            // Kiểm tra kết quả và chuyển hướng hoặc thông báo
            if ($result) {
                // Chuyển hướng về danh sách sản phẩm hoặc hiển thị thông báo thành công
                header('Location: /admin/product/list'); // Điều hướng đến trang danh sách sản phẩm
                exit; // Dừng thực thi script
            } else {
                // Hiển thị thông báo lỗi
                echo "Có lỗi xảy ra khi thêm sản phẩm.";
            }
        } else {
            // Nếu không phải là POST, có thể hiển thị form nhập liệu
            return view('admin/product/add'); // Giả sử bạn có view để thêm sản phẩm
        }
    }
}