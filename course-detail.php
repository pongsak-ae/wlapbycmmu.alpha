<?php
    require 'baseUrl.php';
    $get_couser_active = getdata("https://admin.wlapbycmmu.com/en/api/course.php");
    $get_couser_detail = getdata("https://admin.wlapbycmmu.com/en/api/course_detail.php");
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
            <div class="about wow fadeInUp bg-title" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center text-center">
                        <div class="col-12">
                            <div class="section-header">
                                <span>
                                    <h3 class="th text-aura">รายละเอียดการเข้าร่วมหลักสูตร</h3>
                                    <h2 class="th text-aura">ผู้บริหารมืออาชีพ รุ่นที่ <?=$get_couser_active[0]->course_no?></h2>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Single Post Start-->
            <div class="single">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="single-content wow fadeInUp">
                                <img src="<?=$get_couser_detail[0]->course_detail->course_schedule?>" />
                                <h2 class="th">รายละเอียดคอร์ส</h2>
                                <p>
                                    <?=$get_couser_detail[0]->course_detail->course_detail?>
                                </p>
                            </div>


                            <div class="team">
                                <h2 class="th">ภาพบรรยากาศ</h2>
                                <div class="row">
                                    <?php
                                        foreach ($get_couser_detail[0]->course_gallery as $kgalry => $vgalry) {
                                    ?>
                                            <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="team-item mb-0">
                                                    <a href="<?=$vgalry->gallery_img?>" target="_blank" >
                                                        <div class="team-img">
                                                            <img class="gallery-detail" src="<?=$vgalry->gallery_img?>" alt="<?=$vgalry->gallery_alt?>">
                                                        </div>
                                                        <div class="text-center">
                                                            <p class="th"><?=$vgalry->gallery_name?></p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    ?>

                                </div>
                            </div>

<!--                             <div class="single-tags wow fadeInUp">
                                <a href="">National</a>
                                <a href="">International</a>
                                <a href="">Economics</a>
                                <a href="">Politics</a>
                                <a href="">Lifestyle</a>
                                <a href="">Technology</a>
                                <a href="">Trades</a>
                            </div>
                            <div class="single-bio wow fadeInUp">
                                <div class="single-bio-img">
                                    <img src="img/user.jpg" />
                                </div>
                                <div class="single-bio-text">
                                    <h3>Author Name</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst.
                                    </p>
                                </div>
                            </div>
                            <div class="single-related wow fadeInUp">
                                <h2>Related Post</h2>
                                <div class="owl-carousel related-slider">
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-1.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-2.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-3.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-item">
                                        <div class="post-img">
                                            <img src="img/post-4.jpg" />
                                        </div>
                                        <div class="post-text">
                                            <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="post-meta">
                                                <p>By<a href="">Admin</a></p>
                                                <p>In<a href="">Design</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-comment wow fadeInUp">
                                <h2>3 Comments</h2>
                                <ul class="comment-list">
                                    <li class="comment-item">
                                        <div class="comment-body">
                                            <div class="comment-img">
                                                <img src="img/user.jpg" />
                                            </div>
                                            <div class="comment-text">
                                                <h3><a href="">Josh Dunn</a></h3>
                                                <span>01 Jan 2045 at 12:00pm</span>
                                                <p>
                                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                                </p>
                                                <a class="btn" href="">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="comment-item">
                                        <div class="comment-body">
                                            <div class="comment-img">
                                                <img src="img/user.jpg" />
                                            </div>
                                            <div class="comment-text">
                                                <h3><a href="">Josh Dunn</a></h3>
                                                <p><span>01 Jan 2045 at 12:00pm</span></p>
                                                <p>
                                                    Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                                </p>
                                                <a class="btn" href="">Reply</a>
                                            </div>
                                        </div>
                                        <ul class="comment-child">
                                            <li class="comment-item">
                                                <div class="comment-body">
                                                    <div class="comment-img">
                                                        <img src="img/user.jpg" />
                                                    </div>
                                                    <div class="comment-text">
                                                        <h3><a href="">Josh Dunn</a></h3>
                                                        <p><span>01 Jan 2045 at 12:00pm</span></p>
                                                        <p>
                                                            Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                                                        </p>
                                                        <a class="btn" href="">Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> -->
                        </div>

                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-widget wow fadeInUp">
                                    <div class="search-widget">
                                        <div class="th text-aura" style="background: #031d40;padding: 20px;font-size: larger;text-align: center;">
                                            <?=$get_couser_detail[0]->course_detail->course_price?> บาท ต่อท่าน ไม่มี VAT
                                            </div>
                                    </div>
                                </div>

                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 class="widget-title th">เริ่มอบรมตั้งแต่</h2>
                                    <div class="category-widget">
                                        <ul class="th">
                                            <li>วันที่ <?=DateThai($get_couser_detail[0]->course_detail->course_startdate).' - '.DateThai($get_couser_detail[0]->course_detail->course_enddate)?></li>
                                            <li><?=$get_couser_detail[0]->course_detail->course_datetime?></li>
                                            <li><?=$get_couser_detail[0]->course_detail->course_place?></li>
                                            <li><b>ค่าธรรมเนียมการเข้าร่วม รวมทริปไปต่างจังหวัด 1 ครั้ง ดูงานนอกสถานที่ 2 ครั้ง</b></li>
                                            <h4 class="my-4"><u>คอร์สนี้เรียนเหมาะสำหรับ ผู้บริหารดำรงตำแหน่ง CEO CFO หรือผู้บริหารระดับสูง รวมถึงเจ้าของธุรกิจและผู้ประกอบการ</u></h4>
                                        </ul>
                                        <center><a class="regis-btn animated fadeInUp th" href="#">สมัคร W-ALP #2</a></center>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                <!-- Portfolio Start -->
                                <div class="portfolio">
                                    <div class="container">
                                        <div class="section-header text-center">
                                            <p>TEAM</p>
                                            <h2>SPEAKERS</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <ul id="portfolio-flters">
                                                    <li data-filter="*" class="filter-active">All</li>
                                                    <li data-filter=".stage1">STAGE 1</li>
                                                    <li data-filter=".stage2">STAGE 2</li>
                                                    <li data-filter=".stage3">STAGE 3</li>
                                                    <li data-filter=".stage4">STAGE 4</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row portfolio-container">

                                            <?php
                                                foreach ($get_couser_detail[0]->course_speaker as $kspeak => $vspeak) {
                                            ?>
                                                 <div class="col-lg-6 speaker-detail portfolio-item stage<?=$vspeak->speaker_stage?> wow fadeInUp" 
                                                            data-wow-delay="0.1s"
                                                            data-img="<?=$vspeak->speaker_image?>"
                                                            data-name="<?=$vspeak->speaker_name?>"
                                                            data-surname="<?=$vspeak->speaker_surname?>"
                                                            data-position="<?=$vspeak->speaker_position?>"
                                                            data-company="<?=$vspeak->speaker_company?>"
                                                            data-stage="<?=$vspeak->speaker_stage?>"
                                                            >
                                                        <div class="portfolio-warp" style="cursor: pointer;">
                                                            <div class="portfolio-img">
                                                                <img src="<?=$vspeak->speaker_image?>" alt="wlap-<?=$vspeak->speaker_name;?>">
                                                            </div>
                                                             
                                                            <div>
                                                              <p class="th"><?=$vspeak->speaker_name;?> <?=$vspeak->speaker_surname;?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php

                                                }
                                            ?>
   

                                        </div>
                                    </div>
                                </div>
                                <!-- Portfolio End -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Post End-->   


            <!-- Footer Start -->
            <?php require 'footer.php';?>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <div id="modal_image"></div>
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
        <!-- Template Javascript -->
        <script src="<?=WEB_META_BASE_URL?>js/main.js"></script>
        <script src="<?=WEB_META_BASE_URL?>js/app.js"></script>
    </body>
</html>
