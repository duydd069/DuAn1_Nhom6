<?php include_once "views/client/layout/header.php" ?>

<form action="/update-customer.php" method="POST" enctype="multipart/form-data">
    <label for="name">Tên khách hàng:</label>
    <input type="text" id="name" name="name" value="<?php echo $accounts['name']; ?>" required><br>

    <label for="user_image">Ảnh đại diện:</label>
    <input type="file" id="user_image" name="user_image"><br>
    <?php if ($accounts['user_image']): ?>
        <img src="uploads/<?php echo $accounts['user_image']; ?>" alt="User Image" width="100"><br>
    <?php endif; ?>
    <!-- Ẩn ảnh cũ để giữ lại trong database -->
    <input type="hidden" name="user_image_old" value="<?php echo $accounts['user_image']; ?>">

    <label for="birth">Ngày sinh:</label>
    <input type="date" id="birth" name="birth" value="<?php echo $accounts['birth']; ?>"><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $accounts['email']; ?>" required><br>

    <label for="phone">Số điện thoại:</label>
    <input type="text" id="phone" name="phone" value="<?php echo $accounts['phone']; ?>"><br>

    <label for="sex">Giới tính:</label>
    <input type="radio" id="male" name="sex" value="1" <?php echo ($accounts['sex'] == 1) ? 'checked' : ''; ?>> Nam
    <input type="radio" id="female" name="sex" value="2" <?php echo ($accounts['sex'] == 2) ? 'checked' : ''; ?>> Nữ
    <input type="radio" id="other" name="sex" value="3" <?php echo ($accounts['sex'] == 3) ? 'checked' : ''; ?>> Khác<br>

    <label for="address">Địa chỉ:</label>
    <textarea id="address" name="address"><?php echo $accounts['address']; ?></textarea><br>

    <button type="submit">Cập nhật</button>
</form>


<?php include_once "views/client/layout/footer.php" ?>
