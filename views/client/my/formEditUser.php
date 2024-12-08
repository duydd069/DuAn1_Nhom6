<?php include 'views/client/layout/header.php'; ?>
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="wrap-sidebar-account">
                    <ul class="my-account-nav">
                        <li><span class="my-account-nav-item active">Dashboard</span></li>
                        <li><a href="my-account-orders.html" class="my-account-nav-item">Orders</a></li>
                        <li><a href="my-account-address.html" class="my-account-nav-item">Address</a></li>
                        <li><a href="my-account-edit.html" class="my-account-nav-item">Account Details</a></li>
                        <li><a href="my-account-wishlist.html" class="my-account-nav-item">Wishlist</a></li>
                        <li><a href="login.html" class="my-account-nav-item">Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="my-account-content account-dashboard">
                    <div class="mb_60">
                        <div class="main-content">
                            <div class="main-content-inner">
                                <div class="main-content-wrap">
                                    <h3>Edit User Information</h3>
                                    <form method="POST" action="?ctl=updateDUser"> <!-- Thay đổi action theo nhu cầu -->
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                                        <div class="wg-box mb-30">
                                            <fieldset class="name">
                                                <div class="body-title mb-10">Name:</div>
                                                <input class="input-black mb-10" type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
                                            </fieldset>
                                            <fieldset class="user-image">
                                                <div class="body-title mb-10">User Image URL:</div>
                                                <input class="input-black mb-10" type="text" name="user_image" value="<?= htmlspecialchars($user['user_image']) ?>">
                                                <!-- Hiển thị hình ảnh nếu có -->
                                                <?php if (!empty($user['user_image'])): ?>
                                                    <img src="<?= htmlspecialchars($user['user_image']) ?>" alt="User Image" class="user-image" style="max-width: 200px; height: auto;">
                                                <?php endif; ?>
                                            </fieldset>
                                            <fieldset class="birth">
                                                <div class="body-title mb-10">Birth Date:</div>
                                                <input class="input-black mb-10" type="date" name="birth" value="<?= htmlspecialchars($user['birth']) ?>" required>
                                            </fieldset>
                                            <fieldset class="email">
                                                <div class="body-title mb-10">Email:</div>
                                                <input class="input-black mb-10" type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                                            </fieldset>
                                            <fieldset class="password">
                                                <div class="body-title mb-10">Password:</div>
                                                <input class="input-black mb-10" type="password" name="password" value="<?= htmlspecialchars($user['password']) ?>" placeholder="Enter new password (leave blank to keep current)">
                                            </fieldset>
                                            <fieldset class="phone">
                                                <div class="body-title mb-10">Phone:</div>
                                                <input class="input-black mb-10" type="text" name="phone" value="<?= htmlspecialchars($user['phone']) ?>">
                                            </fieldset>
                                            <fieldset class="sex">
                                                <div class="body-title mb-10">Sex:</div>
                                                <select name="sex" class="input-black mb-10" required>
                                                    <option value="M" <?= ($user['sex'] == 'M') ? 'selected' : '' ?>>Nam</option>
                                                    <option value="F" <?= ($user['sex'] == 'F') ? 'selected' : '' ?>>Nữ</option>
                                                </select>
                                            </fieldset>
                                            <fieldset class="address">
                                                <div class="body-title mb-10">Address:</div>
                                                <input class="input-black mb-10" type="text" name="address" value="<?= htmlspecialchars($user['address']) ?>">
                                            </fieldset>
                                            <fieldset class="role">
                                                <div class="body-title mb-10">Role:</div>
                                                <select name="role_id" class="input-black mb-10" required>
                                                    <option value="1" <?= ($user['role_id'] == 1) ? 'selected' : '' ?>>Khách hàng</option>
                                                    <option value="2" <?= ($user['role_id'] == 2) ? 'selected' : '' ?>>Admin</option>
                                                    <option value="3" <?= ($user['role_id'] == 3) ? 'selected' : '' ?>>Editor</option>
                                                </select>
                                            </fieldset>
                                            <fieldset class="status">
                                                <div class="body-title mb-10">Status:</div>
                                                <select name="status" class="input-black mb-10" required>
                                                    <option value="1" <?= ($user['status'] == 1) ? 'selected' : '' ?>>Active</option>
                                                    <option value="2" <?= ($user['status'] == 2) ? 'selected' : '' ?>>Inactive</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="text-end">
                                            <button type="submit" class="btn-edit">Update Info</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'views/client/layout/footer.php'; ?>