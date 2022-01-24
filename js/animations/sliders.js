import $  from 'jquery';
import 'slick-carousel';
import { ScrollTrigger } from "gsap/ScrollTrigger";

function sliders(){

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

}

export { sliders };