import $  from 'jquery';
import 'slick-carousel';
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

function parallax(){

    // Active separators width
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

    // Hero parrallax
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

        var line1 = $(this).find('.background_lines1');
        gsap.to(line1 ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=1000",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            bottom: $(window).width()>768?'14%':'14%', 
            left: $(window).width()>768?'2%':'2%',    
        });

        var line2 = $(this).find('.background_lines2');
        gsap.to(line2 ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=1000",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            bottom: $(window).width()>768?'15%':'15%', 
            right: $(window).width()>768?'5%':'5%',    
        });

        var line3 = $(this).find('.background_lines3');
        gsap.to(line3 ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=1000",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            top: $(window).width()>768?'15%':'15%', 
            left: $(window).width()>768?'23%':'23%',    
        });
      

        var line4 = $(this).find('.background_lines4');
        gsap.to(line4 ,{
            scrollTrigger: {
                trigger: wrapper,
                pin: false,
                start: "top top",
                end: "+=1000",
                scrub: 1,
                markers: false,
                onToggle: function(self){
             
                },
            },   
            top: $(window).width()>768?'48%':'48%', 
            right: $(window).width()>768?'24%':'24%',    
        });


        $(window).on('resize', function(){

            ScrollTrigger.refresh();
        })
       
    });

    // home parrallax
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

    // single page parrallax
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


    // Lines moving

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


       
    });

}

export { parallax };