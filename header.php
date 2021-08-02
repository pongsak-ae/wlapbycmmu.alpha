<!-- Top Bar Start -->
<div class="top-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <a href="index.html">
                        <img src="<?=WEB_META_BASE_URL?>img/W-Lap-Logo.png">
                        <!-- <img src="img/logo.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-4">
                        <div class="top-bar-item">
                            <div class="top-bar-text">
                                <img src="<?=WEB_META_BASE_URL?>img/mahidol2.png">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item text-center">
                            <div class="top-bar-text">
                                <img src="<?=WEB_META_BASE_URL?>img/aacsb1white.png" style="width: 60%;margin-top: 5px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="top-bar-item text-center">
                            <div class="top-bar-text">
                                <img src="<?=WEB_META_BASE_URL?>img/cmmu.png" style="width: 40%;margin-top: 10px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar End -->

<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="d-sm-none">
                <div class="row">
                    <div class="col-5">
                        <img src="<?=WEB_META_BASE_URL?>img/mahidol2.png" style="width: 130%;">
                    </div>
                    <div class="col-4 text-right">
                        <img src="<?=WEB_META_BASE_URL?>img/aacsb1white.png" style="width: 70%;margin-top: 5px;">
                    </div>
                    <div class="col-3 text-center">
                        <img src="<?=WEB_META_BASE_URL?>img/cmmu.png" style="width: 80%;margin-top: 5px;">
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
                        <a class="btn d-block th regis-btn" href="#" style="float: right;">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="<?=WEB_META_BASE_URL?>" class="nav-item nav-link">Home</a>
                    <a href="<?=WEB_META_BASE_URL?>course-detail/" class="nav-item nav-link">COURSE DETAIL</a>
                    <a href="#" class="nav-item nav-link">TIMETABLE</a>
                    <!-- <a href="#" class="nav-item nav-link">REGISTER</a> -->
                    <a href="<?=WEB_META_BASE_URL?>contact/" class="nav-item nav-link">CONTACT</a>
                    <a href="<?=WEB_META_BASE_URL?>pdf.pdf" target="blank" class="nav-item nav-link">E-Brochure</a>
                </div>
                <div class="ml-auto">
                    <a class="btn th regis-btn" href="#">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->