(function ($) {
    "use strict";
    
    // Initiate the wowjs
    new WOW().init();
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
    
    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 90) {
            $('.nav-bar').addClass('nav-sticky');
            $('.carousel, .page-header').css("margin-top", "73px");
        } else {
            $('.nav-bar').removeClass('nav-sticky');
            $('.carousel, .page-header').css("margin-top", "0");
        }
    });
    
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);

        $('[href="' + $(location).attr("href") + '"].nav-link').addClass('active');


        $('.speaker-detail').on( 'click', function (e) {
            var img_src = $(this).attr('data-img');
            var name = $(this).attr('data-name');
            var surname = $(this).attr('data-surname');
            var position = $(this).attr('data-position');
            var company = $(this).attr('data-company');
            var stage = $(this).attr('data-stage');

            var modal_imgHTML = '';
            modal_imgHTML += '<div class="modal modal-blur fade" id="modal_imageGEN">';
            modal_imgHTML += '<div class="modal-dialog modal-lg" role="document">';
            modal_imgHTML += '<div class="modal-content">';
            // modal_imgHTML += '<div class="modal-header">';
            // modal_imgHTML += '<h5 class="modal-title">SPEAKER</h5>';
            // modal_imgHTML += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            // modal_imgHTML += '</div>';
            modal_imgHTML += '<div class="modal-body">';
            modal_imgHTML += '<div class="row">'; // row
            modal_imgHTML += '<div class="col-lg-5">';
            modal_imgHTML += '<img class="w-100" src="' + img_src + '">';
            modal_imgHTML += '</div>';
            modal_imgHTML += '<div class="col-lg-7 mt-3">';
            modal_imgHTML += '<p class="th">รายละเอียดวิทยากร</p>';
            modal_imgHTML += '<div class="table-responsive">';
            modal_imgHTML += '<table class="table">';
            modal_imgHTML += '<tbody>';
            modal_imgHTML += '<tr>';
            modal_imgHTML += '<td class="w-25 th">ชื่อ-นามสกุล</td>';
            modal_imgHTML += '<td class="w-75 th"><b>'+ name +' '+surname+'</b></td>';
            modal_imgHTML += '</tr>';
            modal_imgHTML += '<tr>';
            modal_imgHTML += '<td class="w-25 th">บริษัท</td>';
            modal_imgHTML += '<td class="w-75 th"><b>'+ company +'</b></td>';
            modal_imgHTML += '</tr>';
            modal_imgHTML += '<tr>';
            modal_imgHTML += '<td class="w-25 th">ตำแหน่ง</td>';
            modal_imgHTML += '<td class="w-75 th"><b>'+ position +'</b></td>';
            modal_imgHTML += '</tr>';
            modal_imgHTML += '<tr>';
            modal_imgHTML += '<td class="w-25 th">STAGE</td>';
            modal_imgHTML += '<td class="w-75 th"><b>'+ stage +'</b></td>';
            modal_imgHTML += '</tr>';
            modal_imgHTML += '</tbody>';
            modal_imgHTML += '</table>';
            modal_imgHTML += '</div>';
            modal_imgHTML += '</div>';
            modal_imgHTML += '</div>'; // row
            modal_imgHTML += '</div>';
            modal_imgHTML += '<div class="modal-footer">';
            modal_imgHTML += '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>';
            modal_imgHTML += '</div>';
            modal_imgHTML += '</div>';
            modal_imgHTML += '</div>';
            modal_imgHTML += '</div>';
            $('#modal_image').html(modal_imgHTML);
            $('#modal_imageGEN').modal('show');
        });
        
    });
    
    
    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    
    
    // Modal Video
    // $(document).ready(function () {
    //     var $videoSrc;
    //     $('.btn-play').click(function () {
    //         $videoSrc = $(this).data("src");
    //     });

    //     $('#videoModal').on('shown.bs.modal', function (e) {
    //         $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    //     })

    //     $('#videoModal').on('hide.bs.modal', function (e) {
    //         $("#video").attr('src', $videoSrc);
    //     })
    // });


    // Testimonial Slider
    $('.testimonial-slider').slick({
        infinite: true,
        autoplay: true,
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testimonial-slider-nav'
    });
    $('.testimonial-slider-nav').slick({
        arrows: false,
        dots: false,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: '22px',
        slidesToShow: 3,
        asNavFor: '.testimonial-slider'
    });
    $('.testimonial .slider-nav').css({"position": "relative", "height": "160px"});
    
    
    // Blogs carousel
    $(".related-slider").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            }
        }
    });
    
    
    // Portfolio isotope and filter
    // var portfolioIsotope = $('.portfolio-container').isotope({
    //     itemSelector: '.portfolio-item',
    //     layoutMode: 'fitRows'
    // });

    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        $('.portfolio-container').isotope({
            filter: $(this).data('filter')
        });
        // portfolioIsotope.isotope({filter: $(this).data('filter')});
    });
    
})(jQuery);

