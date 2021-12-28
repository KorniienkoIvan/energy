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
