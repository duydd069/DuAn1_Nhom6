<?php
include 'views/admin/layout/header.php';
?>
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                    <h3>Add New User</h3>
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
                                            <div class="text-tiny">Add New User</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- add-new-user -->
                                <form class="form-add-new-user form-style-2" method="POST" enctype="multipart/form-data">
    <div class="wg-box">
        <div class="left">
            <h5 class="mb-4">User Account</h5>
            <div class="body-text">Fill in the complete user information</div>
        </div>
        <div class="right flex-grow">
            <fieldset class="name mb-24">
                <div class="body-title mb-10">Full Name <span class="text-danger">*</span></div>
                <input class="flex-grow" type="text" placeholder="Enter full name" name="name" required>
            </fieldset>

            <fieldset class="user-image mb-24">
                <div class="body-title mb-10">Profile Image</div>
                
                <div class="upload-image mb-16">
                            <div class="up-load">
                                <label class="uploadfile" for="myFile">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <div class="text-tiny">Drop your images here or select <span class="text-secondary">click to browse</span></div>
                                    <input id="myFile" class="flex-grow" type="file" name="user_image" accept="image/*">
                                    <img src="#" id="myFile-input" alt="">
                                </label>
                            </div>
                        </div>
            </fieldset>

            <fieldset class="birth mb-24">
                <div class="body-title mb-10">Date of Birth</div>
                <input class="flex-grow" type="date" name="birth">
            </fieldset>

            <fieldset class="email mb-24">
                <div class="body-title mb-10">Email <span class="text-danger">*</span></div>
                <input class="flex-grow" type="email" placeholder="Enter email address" name="email" required>
            </fieldset>

            <fieldset class="phone mb-24">
                <div class="body-title mb-10">Phone Number</div>
                <input class="flex-grow" type="tel" placeholder="Enter phone number" name="phone">
            </fieldset>
            <fieldset class="sex mb-24">
                <div class="body-title mb-10">Gender</div>
                <select class="flex-grow" name="sex">
                    <option value="">Select Gender</option>
                    <option value="2">Male</option>
                    <option value="1">Female</option>
                </select>
            </fieldset>

            <fieldset class="address mb-24">
                <div class="body-title mb-10">Address</div>
                <textarea class="flex-grow" placeholder="Enter full address" name="address" rows="3"></textarea>
            </fieldset>

            <fieldset class="password mb-24">
                <div class="body-title mb-10">Password <span class="text-danger">*</span></div>
                <div class="password-wrapper">
                    <input class="password-input flex-grow" type="password" placeholder="Enter password" name="password" required>
                    <span class="show-pass">
                        <i class="icon-eye view"></i>
                        <i class="icon-eye-off hide"></i>
                    </span>
                </div>
            </fieldset>
<fieldset class="password mb-24">
                <div class="body-title mb-10">Confirm Password <span class="text-danger">*</span></div>
                <div class="password-wrapper">
                    <input class="password-input flex-grow" type="password" placeholder="Confirm password" name="confirm_password" required>
                    <span class="show-pass">
                        <i class="icon-eye view"></i>
                        <i class="icon-eye-off hide"></i>
                    </span>
                </div>
            </fieldset>


            <fieldset class="role mb-24">
                <div class="body-title mb-10">User Role <span class="text-danger">*</span></div>
                <select class="flex-grow" name="role_id" required>
                    <option value="2" selected>Khách hàng</option>
                    <option value="3">Staff</option>

                </select>
            </fieldset>

            <fieldset class="status mb-24">
                <div class="body-title mb-10">Account Status</div>
                <select class="flex-grow" name="status">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </fieldset>
        </div>
    </div>

    <div class="bot">
        <button class="tf-button w180" type="submit">Save User</button>
        <button class="tf-button style-2 w180 ml-10" type="reset">Reset</button>
    </div>
</form>
                                <!-- /add-new-user -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 <a href="https://themesflat.co/html/ecomus/index.html">Ecomus</a>. Design by Themesflat All rights reserved</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
<?php
include 'views/admin/layout/footer.php';
?>