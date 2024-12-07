<?php include 'views/admin/layout/header.php'; ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                <h3>Update User</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#"><div class="text-tiny">User</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Update User</div>
                    </li>
                </ul>
            </div>
            <form class="form-update-user" method="POST" action="?ctl=updateUser">
                <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                <div class="wg-box mb-30">
                    <fieldset class="name">
                        <div class="body-title mb-10">Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
                    </fieldset>
                    <fieldset class="user-image">
                        <div class="body-title mb-10">User Image URL</div>
                        <input class="input-black" type="text" name="user_image" value="<?= htmlspecialchars($user['user_image']) ?>">
                    </fieldset>
                    <fieldset class="birth">
                        <div class="body-title mb-10">Birth Date <span class="tf-color-1">*</span></div>
                        <input class="input-black" type="date" name="birth" value="<?= htmlspecialchars($user['birth']) ?>" required>
                    </fieldset>
                    <fieldset class="email">
                        <div class="body-title mb-10">Email <span class="tf-color-1">*</span></div>
                        <input class="input-black" type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                    </fieldset>
                    <fieldset class="phone">
                        <div class="body-title mb-10">Phone</div>
                        <input class="input-black" type="text" name="phone" value="<?= htmlspecialchars($user['phone']) ?>">
                    </fieldset>
                    <fieldset class="sex">
                        <div class="body-title mb-10">Sex <span class="tf-color-1">*</span></div>
                        <select name="sex" class="input-black" required>
                            <option value="M" <?= ($user['sex'] == 'M') ? 'selected' : '' ?>>Nam</option>
                            <option value="F" <?= ($user['sex'] == 'F') ? 'selected' : '' ?>>Nữ</option>
                        </select>
                    </fieldset>
                    <fieldset class="address">
                        <div class="body-title mb-10">Address</div>
                        <input class="input-black" type="text" name="address" value="<?= htmlspecialchars($user['address']) ?>">
                    </fieldset>
                    <fieldset class="password">
                        <div class="body-title mb-10">Password <span class="tf-color-1">*</span></div>
                        <input class="input-black" type="password" name="password" placeholder="Enter new password (leave blank to keep current)">
                    </fieldset>
                    <fieldset class="role">
                        <div class="body-title mb-10">Role <span class="tf-color-1">*</span></div>
                        <select name="role_id" class="input-black" required>
                            <option value="1" <?= ($user['role_id'] == 1) ? 'selected' : '' ?>>Admin</option>
                            <option value="2" <?= ($user['role_id'] == 2) ? 'selected' : '' ?>>User</option>
                            <option value="3" <?= ($user['role_id'] == 3) ? 'selected' : '' ?>>Editor</option>
                        </select>
                    </fieldset>
                    <fieldset class="status">
                        <div class="body-title mb-10">Status <span class="tf-color-1">*</span></div>
                        <select name="status" class="input-black" required>
                            <option value="1" <?= ($user['status'] == 1) ? 'selected' : '' ?>>Active</option>
                            <option value="2" <?= ($user['status'] == 2) ? 'selected' : '' ?>>Die</option>
                        </select>
                    </fieldset>
                </div>
                <div class="cols gap10">
                    <button class="tf-button w380" type="submit">Update User</button>
                    <a href="?ctl=listUser" class="tf-button style-3 w380">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom-page">
        <div class="body-text">Copyright © 2024 <a href="https://themesflat.co/html/ecomus/index.html">Ecomus</a>. Design by Themesflat All rights reserved</div>
    </div>
</div>

<?php include 'views/admin/layout/footer.php'; ?>