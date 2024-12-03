<?php include 'views/admin/layout/header.php';?>
<div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-30">
                                    <h3>Category infomation</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Category</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Category infomation</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- new-category -->
                                <div class="wg-box">
                                <form class="form-new-product form-style-1" method="POST" action="?ctl=addCategory">
    <fieldset class="name">
        <div class="body-title">Category name <span class="tf-color-1">*</span></div>
        <input class="flex-grow" type="text" placeholder="Category name" name="category_name" tabindex="0" value="" aria-required="true" required="">
    </fieldset>

    <fieldset class="description">
        <div class="body-title">Mô tả</div>
        <input class="flex-grow" type="text" placeholder="Description" name="description" tabindex="0" value="" aria-required="true" >
    </fieldset>
    <div class="bot">
        <div></div>
        <button class="tf-button w208" type="submit">Save</button>
    </div>
</form>

                                </div>
                                <!-- /new-category -->
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
                        
<?php include 'views/admin/layout/footer.php';?>