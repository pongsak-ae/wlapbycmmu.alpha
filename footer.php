<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="footer-contact">
                    <h2>Office Contact</h2>
                    <p><i class="fa fa-map-marker-alt"></i><?=$get_contact[0]->address?></p>
                    <p><i class="fa fa-phone-alt"></i><?=$get_contact[0]->telephone?></p>
                    <p><i class="fa fa-envelope"></i><?=$get_contact[0]->email?></p>
                    <p><i class="fab fa-line"></i><?=$get_contact[0]->line?></p>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="th">ลงทะเบียน</h2>
                <a class="regis-btn animated fadeInUp th" href="#">สมัคร W-ALP #<?=$get_couser_active[0]->course_no?></a>
                    <div class="footer-social my-5">
                        <a  target="_blank" href="https://line.me/ti/p/<?=$get_contact[0]->line?>"><i class="fab fa-line"></i></a>
                        <a  target="_blank" href="<?=$get_contact[0]->facebook?>"><i class="fab fa-facebook-f"></i></a>
                        <a  target="_blank" href="mailto:<?=$get_contact[0]->email?>"><i class="fa fa-envelope"></i></a>
                        <a  target="_blank" href="tel:<?=$get_contact[0]->telephone?>"><i class="fa fa-phone-alt"></i></a>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->