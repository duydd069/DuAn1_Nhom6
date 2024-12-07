<?php
// Giả sử bạn đã lấy thông tin đơn hàng từ cơ sở dữ liệu và lưu trữ trong biến $order.
?>

<?php include 'views/admin/layout/header.php'; ?>
<div class="main-content">
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                <h3>Edit Order</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#"><div class="text-tiny">Orders</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Edit Order</div>
                    </li>
                </ul>
            </div>
            <form class="form-edit-order" method="POST" action="?ctl=updateOrder">
                <input type="hidden" name="id" value="<?= htmlspecialchars($order['id']) ?>">
                <div class="wg-box mb-30">
                    <fieldset class="account_id">
                        <div class="body-title mb-10">Account ID <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="text" name="account_id" value="<?= htmlspecialchars($order['account_id']) ?>" required>
                    </fieldset>
                    
                    <fieldset class="recipient_name">
                        <div class="body-title mb-10">Recipient Name <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="text" name="recipient_name" value="<?= htmlspecialchars($order['recipient_name']) ?>" required>
                    </fieldset>
                    
                    <fieldset class="recipient_email">
                        <div class="body-title mb-10">Recipient Email <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="email" name="recipient_email" value="<?= htmlspecialchars($order['recipient_email']) ?>" required>
                    </fieldset>
                    
                    <fieldset class="recipient_phone">
                        <div class="body-title mb-10">Recipient Phone</div>
                        <input class="mb-10 input-black" type="text" name="recipient_phone" value="<?= htmlspecialchars($order['recipient_phone']) ?>">
                    </fieldset>
                    
                    <fieldset class="recipient_address">
                        <div class="body-title mb-10">Recipient Address <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="text" name="recipient_address" value="<?= htmlspecialchars($order['recipient_address']) ?>" required>
                    </fieldset>
                    
                    <fieldset class="order_date">
                        <div class="body-title mb-10">Order Date <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="date" name="order_date" value="<?= htmlspecialchars(date('Y-m-d', strtotime($order['order_date']))) ?>" required>
                    </fieldset>
                    
                    <fieldset class="total_amount">
                        <div class="body-title mb-10">Total Amount <span class="tf-color-1">*</span></div>
                        <input class="mb-10 input-black" type="number" name="total_amount" value="<?= htmlspecialchars($order['total_amount']) ?>" step="0.01" required>
                    </fieldset>
                    
                    <fieldset class="payment_method_id">
                        <div class="body-title mb-10">Payment Method <span class="tf-color-1">*</span></div>
                        <select name="payment_method_id" class="input-black" required>
                            <option value="1" <?= ($order['payment_method_id'] == 1) ? 'selected' : '' ?>>Cash</option>
                            <option value="2" <?= ($order['payment_method_id'] == 2) ? 'selected' : '' ?>>Banking</option>

                        </select>
                    </fieldset>
                    
                    <fieldset class="note">
                        <div class="body-title mb-10">Note</div>
                        <textarea class="mb-10 input-black" name="note" rows="4"><?= htmlspecialchars($order['note']) ?></textarea>
                    </fieldset>
                    
                    <fieldset class="status_id">
                        <div class="body-title mb-10">Status <span class="tf-color-1">*</span></div>
                        <select name="status_id" class="input-black" required>
                            <option value="1" <?= ($order['status_id'] == 1) ? 'selected' : '' ?>>Pending</option>
                            <option value="2" <?= ($order['status_id'] == 2) ? 'selected' : '' ?>>Processing</option>
                            <option value="3" <?= ($order['status_id'] == 3) ? 'selected' : '' ?>>Completed</option>
                            <option value="4" <?= ($order['status_id'] == 4) ? 'selected' : '' ?>>Cancelled</option>
                        </select>
                    </fieldset>
                </div>
                <div class="cols gap10">
                    <button class="tf-button w380" type="submit">Update Order</button>
                    <a href="?ctl=order" class="tf-button style-3 w380">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom-page">
        <div class="body-text">Copyright © 2024 <a href="https://themesflat.co/html/ecomus/index.html">Ecomus</a>. Design by Themesflat All rights reserved</div>
    </div>
</div>

<?php include 'views/admin/layout/footer.php'; ?>