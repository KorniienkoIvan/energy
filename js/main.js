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
    });
});