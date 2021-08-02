<?php
    require 'baseUrl.php';
    $get_contact = getdata("https://admin.wlapbycmmu.com/en/api/contact.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>COURSE DETAIL #<?=$get_couser_active[0]->course_no?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?=WEB_META_BASE_URL?>lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="<?=WEB_META_BASE_URL?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?=WEB_META_BASE_URL?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="<?=WEB_META_BASE_URL?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?=WEB_META_BASE_URL?>lib/slick/slick.css" rel="stylesheet">
        <link href="<?=WEB_META_BASE_URL?>lib/slick/slick-theme.css" rel="stylesheet">
        <link href="<?=WEB_META_BASE_URL?>lib/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="<?=WEB_META_BASE_URL?>lib/sweetalert2/sweetalert2.min.css" rel="stylesheet">

        <!-- font -->
        <link rel="stylesheet" href="<?=WEB_META_BASE_URL?>font/flaticon.css" type="text/css">

        <!-- Template Stylesheet -->
        <link href="<?=WEB_META_BASE_URL?>css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">

            <!-- HEDER -->
            <?php require 'header.php';?>
            <!-- HEDER -->

            <!-- Page Header Start -->
<!--             <div class="about wow fadeInUp bg-title" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center text-center">
                        <div class="col-12">
                            <div class="section-header mb-0">
                                <span>
                                    <h2 class="text-aura">Contact Us</h2>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Page Header End -->

            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item contact-addr">
                                    <i class="fa fa-map-marker-alt text-aura" style="font-size: xxx-large;"></i>
                                    <div class="contact-text">
                                        <h2 class="text-aura">Location</h2>
                                        <p class="th" style="word-break: break-all;"><?=$get_contact[0]->address?></p>
                                    </div>
                                </div>
                                <a  target="_blank" href="tel:<?=$get_contact[0]->telephone?>">
                                    <div class="contact-item" style="height: 150px;">
                                        <i class="fa fa-phone-alt text-aura" style="font-size: xxx-large;"></i>
                                        <div class="contact-text">
                                            <h2 class="text-aura">Phone</h2>
                                            <p class="th" style="word-break: break-all;"><?=$get_contact[0]->telephone?></p>
                                        </div>
                                    </div>
                                </a>
                                <a  target="_blank" href="mailto:<?=$get_contact[0]->email?>">
                                    <div class="contact-item" style="height: 150px;">
                                        <i class="fa fa-envelope text-aura" style="font-size: xxx-large;"></i>
                                        <div class="contact-text">
                                            <h2 class="text-aura">Email</h2>
                                            <p style="word-break: break-all;"><?=$get_contact[0]->email?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6" style="background: #3365fd24;">
                            <div class="contact-info">
                                <a  target="_blank" href="https://line.me/ti/p/<?=$get_contact[0]->line?>">
                                    <div class="contact-item" style="border: 1px solid rgba(0, 0, 0, 0.42);height: 150px;margin-bottom: 30px;">
                                        <i class="fab fa-line text-aura-b" style="font-size: xxx-large;"></i>
                                        <div class="contact-text">
                                            <h2 class="text-aura-b">Line</h2>
                                            <p class="th text-aura-b" style="word-break: break-all;"><?=$get_contact[0]->line?></p>
                                        </div>
                                    </div>
                                </a>
                                <a  target="_blank" href="<?=$get_contact[0]->facebook?>">
                                    <div class="contact-item" style="border: 1px solid rgba(0, 0, 0, 0.42);height: 150px;margin-bottom: 30px;">
                                        <i class="fab fa-facebook-f text-aura-b" style="font-size: xxx-large;"></i>
                                        <div class="contact-text">
                                            <h2 class="text-aura-b">Facebook</h2>
                                            <p class="th text-aura-b" style="word-break: break-all;"><?=$get_contact[0]->facebook?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->

            <!-- Footer Start -->
            <?php require 'footer.php';?>
            <!-- Footer End -->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <div id="modal_image"></div>
        <div class="modal modal-blur fade" id="modal_regis" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">W-LAP Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="frm_register">
                            <div class="form-group mb-3">
                                <label class="form-label">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" id="customer_fullname" name="customer_fullname" class="form-control" placeholder="Enter fullname">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">ชื่อเล่น <span class="text-danger">*</span></label>
                                <input type="text" id="customer_nickname" name="customer_nickname" class="form-control" placeholder="Enter nickname">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label d-block">เพศ</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="customer_gender" id="customer_gender_male" value="M" checked>
                                    <label class="form-check-label" for="customer_gender_male">ชาย</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="customer_gender" id="customer_gender_female" value="F">
                                    <label class="form-check-label" for="customer_gender_female">หญิง</label>
                                </div>
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">เบอร์โทรศัพท์มือถือ <span class="text-danger">*</span></label>
                                <input type="tel" id="customer_phone" name="customer_phone" class="form-control" placeholder="Enter Phone Number" maxlength="10">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="customer_email" name="customer_email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Facebook</label>
                                <input type="text" id="customer_facebook" name="customer_facebook" class="form-control" placeholder="Enter facebook">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Line ID <span class="text-danger">*</span></label>
                                <input type="text" id="customer_line" name="customer_line" class="form-control" placeholder="Enter Line">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                                <input type="text" id="customer_birthday" name="customer_birthday" class="form-control datepicker" placeholder="Enter birthday">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">บริษัท <span class="text-danger">*</span></label>
                                <input type="text" id="customer_company" name="customer_company" class="form-control" placeholder="Enter company">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">ตำแหน่ง <span class="text-danger">*</span></label>
                                <input type="text" id="customer_position" name="customer_position" class="form-control" placeholder="Enter position">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">เลขบัตรประจำตัวประชาชน</label>
                                <input type="tel" id="customer_idcard" name="customer_idcard" class="form-control" placeholder="Enter ID Card" maxlength="13">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">ชื่อหลักสูตรที่เคยเรียน</label>
                                <input type="text" id="course_name_studied" name="course_name_studied" class="form-control" placeholder="Enter course name">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">ความคาดหวังจากคอร์สเรียน W-LAP</label>
                                <input type="text" id="course_expectation" name="course_expectation" class="form-control" placeholder="Enter expectation">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">ชื่อผู้ประสานงาน</label>
                                <input type="text" id="coordinator_name" name="coordinator_name" class="form-control" placeholder="Enter coordinator">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">เบอร์โทรผู้ประสานงาน</label>
                                <input type="tel" id="coordinator_phone" name="coordinator_phone" class="form-control" placeholder="Enter coordinator phone" maxlength="10">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">ผู้แนะนำ (สามารถใส่หรือไม่ใส่ก็ได้)</label>
                                <input type="text" id="coordinator_adviser" name="coordinator_adviser" class="form-control" placeholder="Enter coordinator adviser">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">แพ้อาหารชนิดใดหรือไม่</label>
                                <input type="text" id="allergic_food" name="allergic_food" class="form-control" placeholder="Enter allergic food">
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">ไซส์เสื้อ</label>
                                <select id="shirt_id" name="shirt_id" class="form-control">
                                    <option value="" selected> เลือกไซส์ </option>
                                    <optgroup label="ชาย">
                                        <option value="1">S (38" x 27.5")</option>
                                        <option value="2">M (40" x 28.5")</option>
                                        <option value="3">L (42" x 29.5")</option>
                                        <option value="4">XL (44" x 30.5")</option>
                                        <option value="5">XXL (46" x 31.5")</option>
                                        <option value="6">3XL (50" x 32.5")</option>
                                    </optgroup>
                                    <optgroup label="หญิง">
                                        <option value="7">S (32" x 24.5")</option>
                                        <option value="8">M (34" x 25.5")</option>
                                        <option value="9">L (36" x 26.5")</option>
                                        <option value="10">XL (38" x 27.5")</option>
                                        <option value="11">XXL (40" x 28.5")</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group mb-3 ">
                                <!-- <img id="customer_image" src="<?=WEB_META_BASE_URL?>img/no-image.jpg" class="card-img-top mb-3" style="height: 252px;object-fit: cover;"> -->
                                <label class="form-label">อัพโหลดรูปภาพประจำตัว <span class="text-danger">*</span></label>
                                <input type="file" id="customer_image" name="customer_image" class="d-block" accept="image/*"/>
                            </div>
                            <input type="hidden" id="course_id" name="course_id" value="<?=$get_couser_active[0]->course_no?>">
                            <div class="modal-footer pb-0">
                                <button class="btn btn-link link-secondary" data-dismiss="modal">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript Libraries -->
        <script src="<?=WEB_META_BASE_URL?>js/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/easing/easing.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/wow/wow.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/isotope/isotope.pkgd.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/lightbox/js/lightbox.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/waypoints/waypoints.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/counterup/counterup.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/slick/slick.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?=WEB_META_BASE_URL?>lib/sweetalert2/sweetalert2.min.js"></script>
        <!-- Template Javascript -->
        <script src="<?=WEB_META_BASE_URL?>js/main.js"></script>
        <script src="<?=WEB_META_BASE_URL?>js/app.js"></script>
    </body>
</html>
