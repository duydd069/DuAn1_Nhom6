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
                                    <form class="form-new-product form-style-1" >
                                        <fieldset class="name">
                                            <div class="body-title">Product name <span class="tf-color-1">*</span></div>
                                            <input class="flex-grow" type="text" placeholder="Category name" name="text" tabindex="0" value="" aria-required="true" required="">
                                        </fieldset>
                                        <fieldset>
                                            <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                                            <div class="upload-image flex-grow">
                                                <div class="item up-load">
                                                    <label class="uploadfile h250" for="myFile">
                                                        <span class="icon">
                                                            <i class="icon-upload-cloud"></i>
                                                        </span>
                                                        <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                                        <img id="myFile-input" src="#" alt="">
                                                        <input type="file" id="myFile" name="filename">
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="category">
                                            <div class="body-title">Select category icon</div>
                                            <div class="select flex-grow">
                                                <select class="">
                                                    <option>Select icon</option>
                                                    <option>icon 1</option>
                                                    <option>icon 2</option>
                                                </select>
                                            </div>
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