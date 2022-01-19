var $ = jQuery;

//lazy loading
function lazyInit(){
    $('.lazy-img').Lazy({
        afterLoad: function(element){
            imagesLoaded(element,function(){
                element.parent().addClass('loaded');
            });
        }
    });
}
lazyInit();
//smooth scroll to anchor
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

//animations

//appearence animation on scroll
$('.appear').each(function() {
    let el = $(this);
    let inview = el.waypoint(function(direction) {
        el.addClass('visible');
    }, {
        offset: '95%'
    });
});

$(document).ready(function(){
    //Single Page Slider
    $('.single-page__slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        cssEase: 'linear',
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 300,
        responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            },
            {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
            },
        ]
    });
    $('.testimonial__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
    });
    $('.brands_line__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
        centerMode: true,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
            },
        ]
    });

    //Mobile Header 
    $('.header .mobile_burger_icon').click(function(){
        $('.header').toggleClass('open');
    });
});
$(window).on('load', function(){
    var w = $(window).width();
    if(w < 1201 && w > 768) {
        var height = $('.experimental .experimental__main').height();
        if(w < 993 && w > 768){
            var height = height + 26;
        }
        else{
            var height = height + 210;
        }
        $('.experimental .left_triangular_image').prependTo('.experimental .experimental__main .container');
        $('.experimental .left_triangular_image').css('height', height);
    }
    jQuery('.contact__titleWrapper').css('bottom', '-22.2%');
});