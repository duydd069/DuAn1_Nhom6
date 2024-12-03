<form method="POST" action="?ctl=updateProduct">
    <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">
    <label>Product Name:</label>
    <input type="text" name="product_name" value="<?= htmlspecialchars($product['product_name']) ?>" required>
    
    <label>Product Price:</label>
    <input type="number" name="product_price" value="<?= htmlspecialchars($product['product_price']) ?>" step="0.01" required>
    
    <label>Quantity:</label>
    <input type="number" name="quantity" value="<?= htmlspecialchars($product['quantity']) ?>" required>
    
    <label>Discount Price:</label>
    <input type="number" name="discount_price" value="<?= htmlspecialchars($product['discount_price']) ?>" step="0.01" required>
    
    <label>Import Date:</label>
    <input type="date" name="import_date" value="<?= htmlspecialchars(date('Y-m-d', strtotime($product['import_date']))) ?>" required>
    
    <label>Image URL:</label>
    <input type="text" name="image" value="<?= htmlspecialchars($product['image']) ?>" required>
    
    <button type="submit">Update Product</button>
</form>
