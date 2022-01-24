import $  from 'jquery';
import 'slick-carousel';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function parallax(){

    $('section').each(function(){
        var image = $(this).find('.separator');
        var wrapper = $(this);
        gsap.to(image ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=500",
                toggleClass: "active-separator",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },        
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });

    $('.hero_block').each(function(){
        var image = $(this).find('img');
        var wrapper = $(this);
        gsap.to(image ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=500",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            bottom: $(window).width()>768?'10%':'5%',     
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });

    $('.digital_experience').each(function(){
        var image = $(this).find('img');
        var wrapper = $(this);
        gsap.to(image ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "bottom top",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            bottom: $(window).width()>768?'20%':'10%',     
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });


    $('.brand_experience').each(function(){
        var image = $(this).find('.bottom_background_triangular img');
        var wrapper = $(this);
        gsap.to(image ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "center top",
                end: "+=500",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            top: $(window).width()>768?'-10%':'-5%',     
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });

    $('.experimental').each(function(){
        var image = $(this).find('.experimental__header__line');
        var wrapper = $(this);
        gsap.to(image ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top center",
                end: "+=400",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            top: $(window).width()>768?'31%':'31%',
            left: $(window).width()>768?'5%':'5%',     
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })

        var image2 = $(this).find('img');
        var wrapper2 = $(this);
        gsap.to(image2 ,{
            scrollTrigger: {
                trigger: wrapper2,
                pin: false,
                start: "top top",
                end: "+=1000",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            top: $(window).width()>768?'10%':'10%',     
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });

    $('.single-page__wrapper').each(function(){
        var image = $(this).find('.right_side_image img');
        var wrapper = $(this);
        gsap.to(image ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=700",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            top: $(window).width()>768?'-10%':'-10%',    
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });

    $('.single-page__image').each(function(){
        var image = $(this).find('img');
        var wrapper = $(this);
        gsap.to(image ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=300",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            top: $(window).width()>768?'-30%':'-30%',    
        });
      

        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });

}

export { parallax };