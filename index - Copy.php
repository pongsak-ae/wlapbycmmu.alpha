 <?php


    $get_banner_cover = getdata("https://wlap.siamindy.in.th/en/api/banner_v2.php");
    $get_couser_active = getdata("https://wlap.siamindy.in.th/en/api/course.php");
    $get_speaker = getdata("https://wlap.siamindy.in.th/en/api/course_speaker.php");
    $get_review = getdata("https://wlap.siamindy.in.th/en/api/previous_comment.php");

    function getdata($url){
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);  
        $result = curl_exec($curl); 
        curl_close($curl);   
        return json_decode($result);
    }
    
    function DateThai($strDate){
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strMonthCut = Array('','มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear";
     }

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>W-LAP</title>
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
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- font -->
        <link rel="stylesheet" href="font/flaticon.css" type="text/css">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="./img/W-Lap-Logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-text">
                                            <img src="./img/mahidol2.png">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item text-center">
                                        <div class="top-bar-text">
                                            <img src="./img/aacsb1white.png" style="width: 60%;margin-top: 5px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item text-center">
                                        <div class="top-bar-text">
                                            <img src="./img/cmmu.png" style="width: 40%;margin-top: 10px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <div class="d-sm-none">
                            <div class="row">
                                <div class="col-5">
                                   <img src="./img/mahidol2.png" style="width: 130%;">
                                </div>
                                <div class="col-4 text-right">
                                    <img src="./img/aacsb1white.png" style="width: 70%;margin-top: 5px;">
                                </div>
                                <div class="col-3 text-center">
                                    <img src="./img/cmmu.png" style="width: 80%;margin-top: 5px;">
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-none w-100">
                            <div class="row mt-3">
                                <div class="col-4">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                </div>
                                <div class="col-8">
                                    <a class="btn d-block th" href="#" style="float: right;">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
                                </div>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="#" class="nav-item nav-link active">Home</a>
                                <a href="#" class="nav-item nav-link">COURSE</a>
                                <a href="#" class="nav-item nav-link">TIMETABLE</a>
                                <a href="#" class="nav-item nav-link">REGISTER</a>
                                <a href="#" class="nav-item nav-link">CONTACT</a>
                                <a href="#" class="nav-item nav-link">E-Brochure</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn th" href="#">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

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
                            $banner_cover = str_replace('https://wlap.siamindy.in.th', 'http://admin.wlapbycmmu.alpha', $vcover->banner_image)
                    ?>
                        <div class="carousel-item <?=$coverActive?>">
                            <img src="<?=$banner_cover?>" alt="Carousel Image">
                            <div class="carousel-caption slide-text">
                                <p class="animated fadeInRight mt-text-slide">Fast tracking you to become a Professional Leader</p>
                                <h1 class="animated fadeInLeft" style="text-shadow: 0 0 10px #fff;">W-LAP</h1>
                                <a class="btn animated fadeInUp th" href="#">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
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

            <!-- About Start -->
            <div class="about wow fadeInUp bg-title" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center text-center">
                        <div class="col-12">
                            <div class="section-header">
                                <span>
                                    <h3 class="th text-aura">หลักสูตรพัฒนาศักยภาพ</h3>
                                    <h2 class="th text-aura">&nbspผู้บริหารมืออาชีพ รุ่นที่ 2</h2>
                                </span>
                            </div>
                            <div class="about-text th">
                                <p style="color: white;">
                                    หลักสูตรคุณภาพจัดโดยวิทยาลัยการจัดหาร มหาวิทยาลัยมหิดล W-LAP (WORK LIKE A PRO) เพื่อพัฒนาศักยภาพความเป็นมืออาชีพ ทักษะ soft & Hard Skills ทั้งศาสตร์และศิลป์ ติดอาวุธให้คุณครบในทุกเรื่อง เก่งทั้งงาน เก่งทั้งคน ปั้นให้คุณเป็นสุดยอดผู้บริหาร ตั้งแต่กรสร้างเอกลักษณ์เฉพาะตัว การวางกลยุทธ์ธุรกิจระดับสากล การสร้างมูลค่าเพิ่มให้กับธุรกิจด้วยนวัตกรรมสร้างสรรค์ ตลอดจนการสร้างขีดความสามารถความเป็นผู้นำระดับสากล
                                </p>
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
                        ?>
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item">
                                        <div class="team-img">
                                            <img src="img/speaker1.jpg" alt="Team Image">
                                        </div>
                                        <div class="team-text">
                                            <h2 class="th"><?=$vspeaker->speaker_name.' '.$vspeaker->speaker_surname?></h2>
                                            <p class="font-12"><?=$vspeaker->speaker_position?></p>
                                        </div>
                                        <div class="team-social">
                                            <a class="social-li" >STAGE <?=$vspeaker->speaker_stage?></a>
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
                            <img class="w-100" src="./img/2.png">
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
                                    <img class="w-100" src="./img/dan1.jpg">
                                </div>
                               <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100" src="./img/dan4.png">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100 img-h150" src="./img/dan2.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 wow fadeInUp pr-0m" data-wow-delay="0.1s">
                                            <img class="w-100 img-h50" src="./img/dan3.png">
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp pl-0m" data-wow-delay="0.1s">
                                            <img class="w-100 img-h50" src="./img/dan6.jpg">
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
                                    <img class="w-100 h-100" src="./img/hotel1.jpg">
                                </div>
                               <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100" src="./img/hotel2.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                            <img class="w-100" src="./img/hotel3.jpg">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 wow fadeInUp pr-0m" data-wow-delay="0.1s">
                                            <img class="w-100" src="./img/hotel4.jpg">
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp pl-0m" data-wow-delay="0.1s">
                                            <img class="w-100" src="./img/hotel5.jpg">
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

            <div class="testimonial wow fadeIn bg-course" data-wow-delay="0.1s">

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
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>69 Vipawadee Rangsit Road Samsennai, Phayathai District, Bangkok, Thailand 10400 </p>
                                <p><i class="fa fa-phone-alt"></i>061 662 6474</p>
                                <p><i class="fa fa-envelope"></i>wlap.cmmu@gmail.com</p>
                                <p><i class="fab fa-line"></i>WLAP</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2 class="th">ลงทะเบียน</h2>
                            <a class="regis-btn animated fadeInUp th" href="#">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
                                <div class="footer-social my-5">
                                    <a href=""><i class="fab fa-line"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fa fa-envelope"></i></a>
                                    <a href=""><i class="fa fa-phone-alt"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="lib/jquery/jquery-3.4.1.min.js"></script>
        <script src="lib/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
