 <?php
    require 'baseUrl.php';
    $get_banner_cover = getdata("https://admin.wlapbycmmu.com/en/api/banner.php");
    $get_couser_active = getdata("https://admin.wlapbycmmu.com/en/api/course.php");
    $get_speaker = getdata("https://admin.wlapbycmmu.com/en/api/course_speaker.php");
    $get_review = getdata("https://admin.wlapbycmmu.com/en/api/previous_comment.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>W-LAP #<?=$get_couser_active[0]->course_no?></title>
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

        <!-- font -->
        <link rel="stylesheet" href="font/flaticon.css" type="text/css">

        <!-- Template Stylesheet -->
        <link href="<?=WEB_META_BASE_URL?>css/style.css" rel="stylesheet">

    </head>

    <body>
        <div class="wrapper">
            <!-- HEDER -->
            <?php require 'header.php';?>
            <!-- HEDER -->

            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                        foreach ($get_banner_cover as $kcover => $vcover) {
                            $coverActive = ($kcover == 0) ? 'active' : '';
                            // $banner_cover = str_replace('https://wlap.siamindy.in.th', 'http://admin.wlapbycmmu.alpha', $vcover->banner_image);
                            $banner_cover = $vcover->banner_image;
                    ?>
                        <div class="carousel-item <?=$coverActive?>">
                            <img src="<?=$banner_cover?>">
                            <div class="carousel-caption slide-text">
                                <p class="animated fadeInRight mt-text-slide">Fast tracking you to become a Professional Leader</p>
                                <h1 class="animated fadeInLeft" style="text-shadow: 0 0 10px #fff;">W-LAP</h1>
                                <a class="btn animated fadeInUp th regis-btn" href="#">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->

            <!-- About Start -->
            <div class="about wow fadeInUp bg-title" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center text-center">
                        <div class="col-12">
                            <div class="section-header">
                                <span>
                                    <h3 class="th text-aura">หลักสูตรพัฒนาศักยภาพ</h3>
                                    <h2 class="th text-aura">&nbspผู้บริหารมืออาชีพ รุ่นที่ <?=$get_couser_active[0]->course_no?></h2>
                                </span>
                            </div>
                            <div class="about-text th">
                                <p style="color: white;">
                                    หลักสูตรคุณภาพจัดโดยวิทยาลัยการจัดหาร มหาวิทยาลัยมหิดล W-LAP (WORK LIKE A PRO) เพื่อพัฒนาศักยภาพความเป็นมืออาชีพ ทักษะ soft & Hard Skills ทั้งศาสตร์และศิลป์ ติดอาวุธให้คุณครบในทุกเรื่อง เก่งทั้งงาน เก่งทั้งคน ปั้นให้คุณเป็นสุดยอดผู้บริหาร ตั้งแต่กรสร้างเอกลักษณ์เฉพาะตัว การวางกลยุทธ์ธุรกิจระดับสากล การสร้างมูลค่าเพิ่มให้กับธุรกิจด้วยนวัตกรรมสร้างสรรค์ ตลอดจนการสร้างขีดความสามารถความเป็นผู้นำระดับสากล
                                </p>
                                <!-- <a class="btn" href="">Learn More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

            <!-- Feature Start-->
            <div class="feature wow fadeInUp mb-0" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="feature-item">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <div class="fact-text text-center">
                                            <h3 class="text-aura">STAGE </h3>
                                            <h2 class="text-aura">1</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <div class="feature-text">
                                            <h3 class="text-aura">Creative the CEO’ Chorisma</h3>
                                            <p class="th" style="color: white;">&nbsp&nbsp&nbsp&nbsp เน้นเรื่องของการพัฒนาตนเองขั้นพื้นฐาน ตั้งแต่เรื่องของการแต่งกาย การสร้างภาพลักษณ์ การวางตัว มารยาท ทักษะการพูดที่ชาญฉลาด การเจรจาต่อรองขั้นสูง การคิดวิเคราะห์แบบ CEO การดูแลสุขภาพร่างกาย การออกกำลังกายที่ถูกต้อง รวมไปถึงการสร้างจิตใจให้แข็งแกร่ง บริหารจัดการความเครียดและเคล็ดลับการสร้าnงพลังบวก ตั้งแต่การดูแลตนเอง การจัดการความเครียด สื่อสารด้วยศาสตร์ชั้นสูง การวางตัวให้เหมาะสมทั้งการแต่งตัว กิริยามารยาท การบริหารจัดการเวลา การสร้างพลังให้กับตนเองหรือ growth mindset นั่นเอง</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="feature-item">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <div class="fact-text text-center">
                                            <h3 class="text-aura-b">STAGE </h3>
                                            <h2 class="text-aura-b">2</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <div class="feature-text">
                                            <h3 class="text-aura-b">Leading Transformation through innovation & creativity</h3>
                                            <p class="th" style="color: #031D40;">&nbsp&nbsp&nbsp&nbsp เปิดความคิดด้วยความคิดสร้างสรรค์ การวางยุทธ์ศาสตร์ด้วยนวัตกรรมเสริมสร้างความแข็งแกร่งให้องค์กร รวมถึงการวางยุทธศาสตร์ transformation ที่สามารถนำไปประยุกต์ใช้ได้จริงกับธุรกิจของคุณ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="feature-item">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <div class="fact-text text-center">
                                            <h3 class="text-aura">STAGE </h3>
                                            <h2 class="text-aura">3</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <div class="feature-text">
                                            <h3 class="text-aura">The Challenges & opportunities on Global Scale</h3>
                                            <p class="th" style="color: white;">&nbsp&nbsp&nbsp&nbsp การหาโอกาสใหม่ๆให้กับตนเองรวมถึงองค์กรของคุณ การเปิดมุมมองระดับสากล การขยายธุรกิจทั้งในประเทศและต่างประเทศ การบริหารการเงิน รวมถึงการลงทุนในต่างประเทศ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="feature-item">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <div class="fact-text text-center">
                                            <h3 class="text-aura-b">STAGE </h3>
                                            <h2 class="text-aura-b">4</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-10 col-12">
                                        <div class="feature-text">
                                            <h3 class="text-aura-b">You to become a professional leader</h3>
                                            <p class="th">&nbsp&nbsp&nbsp&nbsp ศาสตร์ขั้นสูงวิธีการอ่านใจคน การชนะใจคน การวางโครงสร้างองค์กรเพื่อประสิทธิภาพสูงสุดในการทำงาน รวมถึงการทบทวนหรือประเมินตนเอง self-reflection เพื่อสร้างภาวะที่ที่ผู้นำที่สมบูรณ์แบบ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->

            <!-- Team Start -->
            <div class="team bg-team">
                <div class="container">
                    <div class="section-header text-center pt-5">
                        <h2 class="text-aura">SPEAKERS</h2>
                    </div>
                    <div class="row">
                        <?php
                            foreach ($get_speaker as $kspeaker => $vspeaker) {
                                // $speaker_image = str_replace('https://wlap.siamindy.in.th', 'http://admin.wlapbycmmu.alpha', $vspeaker->speaker_image);
                                $speaker_image = $vspeaker->speaker_image;
                        ?>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="<?=$speaker_image?>" alt="wlap-speaker-<?=$vspeaker->speaker_name?>">
                                        </div>
                                        <div class="team-text">
                                            <p class="text-aura">STAGE <?=$vspeaker->speaker_stage?></p>
                                            <h2 class="th pt-2"><?=$vspeaker->speaker_name.' '.$vspeaker->speaker_surname?></h2>
                                            <p class="font-12 th"><?=$vspeaker->speaker_position?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Team End -->

            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-2">
                                            <div class="fact-icon">
                                                <i class="flaticon-006-idea-1"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <div class="fact-text">
                                                <h2 style="font-size: 18px;">Hard Skill & Soft Skill</h2>
                                                <p class="th text-white">พัฒนาทักษะเชิงศาสตร์และศิลป์เพื่อใช้ในการทำงาน</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-2">
                                            <div class="fact-icon">
                                                <i class="flaticon-033-growth-1"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <div class="fact-text">
                                                <h2 style="font-size: 18px;">Practice training</h2>
                                                <p class="th text-white">ฝึกสกิลการปฎิบัติงานจริง</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-2">
                                            <div class="fact-icon">
                                                <i class="flaticon-039-networking"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <div class="fact-text">
                                                <h2 style="font-size: 18px;">Networking</h2>
                                                <p class="th">สร้างเครือข่ายความสัมพันธ์ระหว่างสมาชิกในรุ่น</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-2">
                                            <div class="fact-icon">
                                                <i class="flaticon-019-seo"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <div class="fact-text">
                                                <h2 style="font-size: 18px;">CAMP OUTING</h2>
                                                <p class="th">จัดกิจกรรมเชื่อมความสัมพันธ์ระหว่างสมาชิก</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-2">
                                            <div class="fact-icon">
                                                <i class="flaticon-012-research"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <div class="fact-text">
                                                <h2 style="font-size: 18px;">Job observation</h2>
                                                <p class="th text-white">ศึกษาดูงานนอกสถานที่</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row">
                                        <div class="col-lg-4 col-12 mb-2">
                                            <div class="fact-icon">
                                                <i class="flaticon-037-teamwork"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-12">
                                            <div class="fact-text">
                                                <h2 style="font-size: 18px;">Experience Shared</h2>
                                                <p class="th text-white">แชร์ประสบณ์การจากผู้เชียวชาญแต่ละสาขา</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-2 col-12 mb-2">
                                            <div class="fact-icon">
                                                <i class="flaticon-050-cooperate"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-12">
                                            <div class="fact-text">
                                                <h2 style="font-size: 18px;">Certificate Ceremony</h2>
                                                <p class="th">ใบประกาศนียบัตรจบหลักสูตร</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->

            <div class="video wow fadeIn m-0 pb-3" data-wow-delay="0.1s">
                <div class="container">
                    <div class="section-header text-center pt-5">
                        <h2 class="text-aura">Program Director</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <img class="w-100" src="<?=WEB_META_BASE_URL?>img/2.png">
                        </div>
                        <div class="col-lg-6 wow fadeInUp m-top5" data-wow-delay="0.2s">
                            <p class="th text-white font-20 text-aura">เรียนท่านผู้บริหารที่เคารพทุกท่าน</p>
                            <p class="th text-white font-13" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            W-LAP คือหลักสูตรสำหรับผู้บริหารที่ต้องการพัฒนาทักษะให้กับตนเองอย่างต่อเนื่อง เปิดความคิด พร้อมเรียนรู้สิ่งใหม่ สังคมใหม่ เพื่อนใหม่ ฟังเรื่องใหม่ เคล็ดลับ กลยุทธ์และทักษะใหม่ ซึ่งมาพร้อมกับทัศนคติที่ดี และพลังบวกที่เหลือล้นจนสามารถมอบสิ่งดีๆให้กับตนเอง คนรอบข้าง ตลอดจนไปถึงการทำประโยชน์หรือสิ่งที่มี คุณค่า ให้กับสังคมได้ เราจะร่วมกันสร้าง New leadership community ด้วยจุดมุ่งหมายเดียวกันคือการสร้าง คนเก่ง คนดี คนที่ใช้ชีวิตอย่างมีคุณภาพ คนที่ทำงานโดยมุ่งหวังประสิทธิภาพสูงสุด มาเป็นส่วนหนึ่งของ W-LAP ด้วยกันนะคะ อรเองก็อยากเรียนรู้จากคนเก่งๆ และเชื่อว่าทุกคนใน W-LAP คือคนเก่งและคนดี เรามาเรียนรู้ไปด้วยกัน แล้วพบกันนะคะ ด้วยความเคารพนับถือทุกท่านค่ะ</p>
                            <p class="th text-white font-20 mb-0" style="color: #fdbe33 !important;">
                                อรชุมา จักกะพาก
                            </p>
                            <p class="th text-white font-13">ผู้อำนวยการหลักสูตร</p>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQs Start -->
            <div class="faqs bg-course">
                <div class="container">
                    <div class="section-header text-center">
                        <!-- <p>Frequently Asked Question</p> -->
                        <h2 class="text-aura">COURSE OUTLINE</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 1 : Creating the CEO's Charisma
                                        </a>
                                    </div>
                                    <div class="collapse in show">
                                        <div class="card-body bg-list-course-1">
                                            <ul>
                                                <li>Discovering Your Authentic Style & Brand Image </li>
                                                <li>Social Etiquette to Enhance Corporate Image</li>
                                                <li>Advanced Communication Skills </li>
                                                <li>Boost your energy & set up your health goal </li>
                                                <li>Streching your growth mindset & Stress Management </li>
                                                <li>Sharpening your Critical Thinking skills </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 1 : W-LAP Executive Speakers
                                        </a>
                                    </div>
                                    <div  class="collapse in show">
                                        <div class="card-body bg-list-course">
                                            <ul>
                                                <li class="th">คุณปฏิญญา เกียวข้อง</li>
                                                <li class="th">คุณเพชรพริ้ง สารสิน</li>
                                                <li class="th">ผศ.ดร.กรรณิการ์ ลีลาปัญญาเลิศ</li>
                                                <li class="th">กัปตันศศิทัต กุลทรัพย์ตระกูล</li>
                                                <li class="th">รศ.นพ.สุริยเดว ทรีปาตี</li>
                                                <li class="th">พันเอก สรรพชัย หุวะนันทน์ </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 2 : Leading transformation through innovation 
                                        </a>
                                    </div>
                                    <div class="collapse in show">
                                        <div class="card-body bg-list-course-1">
                                            <ul>
                                                <li>People transformation -  strategy execusion</li>
                                                <li>The power of transformation</li>
                                                <li>How to pick the right business partner </li>
                                                <li>Driving Strategic Innovation</li>
                                                <li>Big Data Integration 101</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 2 : W-LAP Executive Speakers
                                        </a>
                                    </div>
                                    <div  class="collapse in show">
                                        <div class="card-body bg-list-course">
                                            <ul>
                                                <li class="th">คุณอริยะ พนมยงค์</li>
                                                <li class="th">คุณขยล ตันติชาติวัฒน์</li>
                                                <li class="th">คุณธนพงษ์ ณ ระนอง </li>
                                                <li class="th">ดร.ภูมิพร ธรรมสถิตย์เดช</li>
                                                <li class="th">ดร.ธรรม์ธีร์ สุกโชติรัตน์</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-3">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 3 : The Challenges 
                                        </a>
                                    </div>
                                    <div class="collapse in show">
                                        <div class="card-body bg-list-course-1">
                                            <ul>
                                                <li>Global Strategic Management (M&A)</li>
                                                <li>Turning crisis into an opportunity: regional gateway</li>
                                                <li>Personal wealth management & global perspectives</li>
                                                <li>Investment opportunities in digital assets </li>
                                                <li>Digital transformation - how to execute strategy</li>
                                                <li>Top Economic Indicators for Global Investors </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-3">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 3 : W-LAP Executive Speakers
                                        </a>
                                    </div>
                                    <div  class="collapse in show">
                                        <div class="card-body bg-list-course">
                                            <ul>
                                                <li class="th">คุณศมณ สุวรรณรัตน์</li>
                                                <li class="th">คุณจอมทรัพย์ โลจายะ</li>
                                                <li class="th">คุณพจน์ หะริณสุต </li>
                                                <li class="th">คุณสัญชัย ปอปลี</li>
                                                <li class="th">ดร.ปริญญ์ พานิชภักดิ์</li>
                                                <li class="th">ดร.ดอน นาครทรรพ</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-3">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 4 : Leading you to become a professional leader 
                                        </a>
                                    </div>
                                    <div class="collapse in show">
                                        <div class="card-body bg-list-course-1">
                                            <ul>
                                                <li>The secrets of leadership, how to read people's mind, how to win people's heart</li>
                                                <li>Leader's license to operate </li>
                                                <li>Leadership  Wisdom</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-3">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed text-aura" data-toggle="collapse" aria-expanded="true">
                                            STAGE 4 : W-LAP Executive Speakers
                                        </a>
                                    </div>
                                    <div  class="collapse in show">
                                        <div class="card-body bg-list-course">
                                            <ul>
                                                <li class="th">คุณกอบกาญจน์ วัฒนวรางกูร</li>
                                                <li class="th">ดร.ธีรเดช ทังสุบุตร </li>
                                                <li class="th">คุณกฤษณะ บุญยะชัย</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header text-center mb-0">
                        <h2>WHO SHOULD JOIN</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img" style="height: 300px;">
                                    <img src="img/enior-management.png" alt="Image">
                                </div>
                                <div class="service-text">
                                    <h4 class="th text-aura">ผู้บริหารระดับสูง</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-item">
                                <div class="service-img" style="height: 300px;">
                                    <img class="w-50" src="img/chief-executive.png" alt="Image" style="margin-top: 6rem !important;">
                                </div>
                                <div class="service-text">
                                    <h4 class="th text-aura">ผู้บริหารดำรงตำแหน่ง CEO, CFO</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item">
                                <div class="service-img" style="height: 300px;">
                                    <img src="img/business-computer.png" alt="Image">
                                </div>
                                <div class="service-text text-center">
                                    <h4 class="th text-aura">เจ้าของธุรกิจและผู้ประกอบการ</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->

            <div class="bg-dan wow fadeIn m-0 pb-3" data-wow-delay="0.1s">
                <div class="container">
                    <div class="section-header text-center pt-5">
                        <h2 class="text-aura">BEYOND STAGE</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <img class="w-100" src="<?=WEB_META_BASE_URL?>img/dan1.jpg">
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100" src="<?=WEB_META_BASE_URL?>img/dan4.png">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100 img-h150" src="<?=WEB_META_BASE_URL?>img/dan2.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 wow fadeInUp pr-0m" data-wow-delay="0.1s">
                                            <img class="w-100 img-h50" src="<?=WEB_META_BASE_URL?>img/dan3.png">
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp pl-0m" data-wow-delay="0.1s">
                                            <img class="w-100 img-h50" src="<?=WEB_META_BASE_URL?>img/dan6.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp mt-3" data-wow-delay="0.2s">
                            <p class="th text-white font-20 text-aura">หลังการอบรมมีกิจกรรมรับประทานอาหารที่ร้านอาหาร Caper and Cadence by Dan bark</p>
                            <p class="th text-white font-20 mb-0" style="color: #fdbe33 !important;">
                                เชฟ แดน บาร์ก (Dan bark)
                            </p>   
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-dan wow fadeIn m-0 pb-5" data-wow-delay="0.1s">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 class="text-aura">COURSE DETAIL</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row">
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <img class="w-100 h-100" src="<?=WEB_META_BASE_URL?>img/hotel1.jpg">
                                </div>
                                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100" src="<?=WEB_META_BASE_URL?>img/hotel2.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100" src="<?=WEB_META_BASE_URL?>img/hotel3.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 wow fadeInUp pr-0m" data-wow-delay="0.1s">
                                            <img class="w-100" src="<?=WEB_META_BASE_URL?>img/hotel4.jpg">
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp pl-0m" data-wow-delay="0.1s">
                                            <img class="w-100" src="<?=WEB_META_BASE_URL?>img/hotel5.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow fadeInUp mt-3" data-wow-delay="0.2s">

                            <p class="th text-white font-20 text-aura">เริ่มอบรมตั้งแต่</p>
                            <p class="th text-white font-13">
                                วันที่ <?=DateThai($get_couser_active[0]->course_startdate).' - '.DateThai($get_couser_active[0]->course_enddate)?><br>
                                <?=$get_couser_active[0]->course_datetime?><br>
                                <?=$get_couser_active[0]->course_place?><br>
                            </p>
                            <p class="th text-white font-20 mb-0" style="color: #fdbe33 !important;">
                                ค่าธรรมเนียมการเข้าร่วม
                            </p>   
                            <div class="th my-3" style="background: white;padding: 20px;border: 1px solid black;font-size: larger;text-align: center;">
                                        <?=$get_couser_active[0]->course_price?> บาท ต่อท่าน ไม่มี VAT
                            </div>
                            <p class="th text-white font-13">
                                รวมทริปไปต่างจังหวัด 1 ครั้ง ดูงานนอกสถานที่ 2 ครั้ง
                            </p>
                            <p class="th text-white font-13 text-aura">
                                คอร์สนี้เรียนเหมาะสำหรับ ผู้บริหารดำรงตำแหน่ง CEO CFO หรือผู้บริหารระดับสูง รวมถึงเจ้าของธุรกิจและผู้ประกอบการ
                            </p>

                            <center class="my-5"><a class="regis-btn animated fadeInUp th" href="#">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a></center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonial wow fadeIn bg-course pb-0" data-wow-delay="0.1s">

                <?php
                    $review = "";
                    $review_img = "";
                    foreach ($get_review as $kreview => $vreview) {
                        $review .=  '<div class="slider-item">';
                        $review .= '<h3 class="th">'.$vreview->customer_fullname.'</h3>';
                        $review .= '<h4 class="th">'.$vreview->customer_position.' '.$vreview->customer_company.'</h4>';
                        $review .= '<p class="th text-aura">'.$vreview->commenter_detail.'</p>';
                        $review .= '</div>';

                        $r_img = str_replace('https://wlap.siamindy.in.th', 'http://admin.wlapbycmmu.alpha', $vreview->customer_image);
                        $review_img .= '<div class="slider-nav"><img src="'.$r_img.'" alt="wlap-review-'.$vreview->customer_fullname.'"></div>';
                    }
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <?=$review_img;?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <?=$review?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Start -->
            <?php require 'footer.php';?>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <input type="tel" id="coordinator_phone" name="coordinator_phone" class="form-control" placeholder="Enter coordinator phone">
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
        <!-- Template Javascript -->
        <script src="<?=WEB_META_BASE_URL?>js/main.js"></script>
        <script src="<?=WEB_META_BASE_URL?>js/app.js"></script>

    </body>
</html>
