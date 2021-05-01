$(document).ready(function(){
    $('.hero-carousel').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        autoplayTimeout:6000,
        autoplaySpeed: 600,
        // animateOut: 'fadeOut',
        autoplayHoverPause:true,
        responsiveClass:true,
        dots:false,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:1,
                nav:false
            },
            1000:{
                items:1,
                nav:false,
                loop:true
            }
        }
    });
    $('.carousel2').owlCarousel({
        loop:true,
        margin:20,
        autoplay: false,
        nav:false,
        // slideBy: 2,
        responsiveClass:true,
        // animateOut: 'fadeOut',
        dots:false,
        responsive:{
            0:{
                items:1,
            },
            350: {
                items: 1,
            },
            480: {
                items: 1,
            },
            650: {
                items: 1,
            },
            651: {
                items: 1,
            },
            769: {
                items: 2,
            },
            960: {
                items: 2,
            },
            1000: {
                items: 2,
            },
            1200: {
                items: 2
            }
        }
    });
    $('.noticias-carousel').owlCarousel({
        loop:false,
        margin:24,
        autoplay:false,
        autoplayTimeout:4000,
        autoplaySpeed: 2000,
        // animateOut: 'fadeOut',
        autoplayHoverPause:false,
        responsiveClass:true,
        dots:false,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            660:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:false
            }
        }
    });
    var owl = $('.noticias-carousel');
    owl.owlCarousel();
    // Go to the next item
    $('.noticiaright').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.noticialeft').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    });

    $('.clientes-carousel').owlCarousel({
        loop:true,
        margin:20,
        autoplay:false,
        autoplayTimeout:4000,
        autoplaySpeed: 2000,
        // animateOut: 'fadeOut',
        autoplayHoverPause:false,
        responsiveClass:true,
        dots:false,
        slideBy: 'page',
        responsive:{
            0:{
                items:1,
                nav:false
            },
            660:{
                items:2,
                nav:false
            },
            780:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:false
            },
            1300:{
                items:5,
                nav:false
            }
        }
    });
    var owl2 = $('.clientes-carousel');
    owl2.owlCarousel();
    // Go to the next item
    $('.clientesright').click(function() {
        owl2.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.clientesleft').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl2.trigger('prev.owl.carousel', [300]);
})
});
