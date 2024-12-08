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
                                    <h3>Thông tin khách hàng</h3>
                                    <div class="wg-box mb-30">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Name:</div>
                                            <div class="input-black mb-10"><?= htmlspecialchars($user['name']) ?></div>
                                        </fieldset>
                                        <fieldset class="user-image">
                                            <div class="body-title mb-10">User Image:</div>
                                            <?php if (!empty($user['user_image'])): ?>
                                                <img src="<?= htmlspecialchars($user['user_image']) ?>" alt="User Image" class="user-image" style="max-width: 200px; height: auto;">
                                            <?php else: ?>
                                                <div class="input-black">No image available</div>
                                            <?php endif; ?>
                                        </fieldset>
                                        <fieldset class="birth">
                                            <div class="body-title mb-10">Birth Date:</div>
                                            <div class="input-black"><?= htmlspecialchars($user['birth']) ?></div>
                                        </fieldset>
                                        <fieldset class="email">
                                            <div class="body-title mb-10">Email:</div>
                                            <div class="input-black"><?= htmlspecialchars($user['email']) ?></div>
                                        </fieldset>
                                        <fieldset class="phone">
                                            <div class="body-title mb-10">Phone:</div>
                                            <div class="input-black"><?= htmlspecialchars($user['phone']) ?></div>
                                        </fieldset>
                                        <fieldset class="sex">
                                            <div class="body-title mb-10">Sex:</div>
                                            <div class="input-black"><?= ($user['sex'] == 'M') ? 'Nam' : 'Nữ' ?></div>
                                        </fieldset>
                                        <fieldset class="address">
                                            <div class="body-title mb-10">Address:</div>
                                            <div class="input-black"><?= htmlspecialchars($user['address']) ?></div>
                                        </fieldset>
                                        <fieldset class="role">
                                            <div class="body-title mb-10">Role:</div>
                                            <div class="input-black">
                                                <?= ($user['role_id'] == 1) ? 'Khách hàng' : (($user['role_id'] == 2) ? 'Admin' : 'Editor') ?>
                                            </div>
                                        </fieldset>
                                        <fieldset class="status">
                                            <div class="body-title mb-10">Status:</div>
                                            <div class="input-black"><?= ($user['status'] == 1) ? 'Active' : 'Inactive' ?></div>
                                        </fieldset>
                                    </div>
                                    <div class="text-end">
                                        <a href="?ctl=formDEditUser&id=<?= $user['id'] ?>" class="btn-edit">Edit Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* General Styles for the Account Dashboard */
.wrap-sidebar-account {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.my-account-nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

.my-account-nav li {
    margin-bottom: 10px;
}

.my-account-nav-item {
    display: block;
    padding: 10px;
    color: #333;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.my-account-nav-item:hover {
    background-color: #e6e6e6;
}

.my-account-nav-item.active {
    background-color: #007bff;
    color: #fff;
}

.account-dashboard {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.wg-box {
    margin-bottom: 20px;
}

.body-title {
    font-weight: bold;
    margin-bottom: 5px;
    color: #555;
}

.input-black {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f1f1f1;
}

.user-image {
    border-radius: 5px;
    margin-top: 10px;
}

.mb_60 {
    margin-bottom: 60px;
}

.flex {
    display: flex;
}

.items-center {
    align-items: center;
}

.justify-between {
    justify-content: space-between;
}

.gap20 {
    gap: 20px;
}

.text_primary {
    color: #007bff;
    text-decoration: none;
}

.text_primary:hover {
    text-decoration: underline;
}
.btn-edit {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff; /* Màu nền */
    color: #fff; /* Màu chữ */
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s, transform 0.2s;
}

.btn-edit:hover {
    background-color: #0056b3; /* Màu nền khi hover */
    transform: scale(1.05); /* Tăng kích thước một chút khi hover */
}

.text-end {
    margin-top: 20px; /* Khoảng cách phía trên nút */
    text-align: right; /* Căn phải */
}
</style>
<?php include 'views/client/layout/footer.php'; ?>