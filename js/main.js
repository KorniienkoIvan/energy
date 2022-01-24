import $  from 'jquery';
import { parallax } from './animations/parallax';
import { appearence } from './animations/appearence';

//Animations
parallax();
appearence()

// //lazy loading
// function lazyInit(){
//     $('.lazy-img').Lazy({
//         afterLoad: function(element){
//             imagesLoaded(element,function(){
//                 element.parent().addClass('loaded');
//             });
//         }
//     });
// }
// lazyInit();
//smooth scroll to anchor
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

//animations

// //appearence animation on scroll
// $('.appear').each(function() {
//     let el = $(this);
//     let inview = el.waypoint(function(direction) {
//         el.addClass('visible');
//     }, {
//         offset: '95%'
//     });
// });

$(document).ready(function(){
    //Single Page Slider
    var slider = $('.single-page__slider').slick({
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
    var slider2 = $('.testimonial__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
    });
    var slider3 = $('.brands_line__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 2000,
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

    slider.on('init', function(){
        $(window).trigger('heightChanges');
    });

    slider2.on('init', function(){
        $(window).trigger('heightChanges');
    });

    slider3.on('init', function(){
        $(window).trigger('heightChanges');
    });

    //Mobile Header 
    $('.header .mobile_burger_icon').click(function(){
        $('.header').toggleClass('open');
    });
    //Single page footer
    var blockCLass = $('.single .single-page__content > div').last().attr('class');
    if(blockCLass == 'single-page__image' || blockCLass == 'single-page__slider' || $('.single #main section').last().attr('class') == 'testimonial'){
        $('footer').addClass('has-background');
    }
});
$(window).on('load', function(){
    var w = $(window).width();
    if(w < 1201 && w > 768) {
        var height = $('.experimental .experimental__main').height();
        if(w < 993 && w > 768){
            //var height = height + 26;
        }
        else{
            var height = height + 210;
        }
        $('.experimental .left_triangular_image').prependTo('.experimental .experimental__main .container');
        $('.experimental .left_triangular_image').css('height', height);
    }
    if(w > 920 && w < 993){
        var bottom = '-23.2%';
    }
    else if(w >= 2160){
        var bottom = '-24.2%';
    }
    else{ 
        var bottom = '-22.2%';
    }
    $('.contact__titleWrapper').css('bottom', bottom);
    var height = $('.digital_experience').height();
    $('.digital_experience .left_transparent_triangular').css('height', height);
});