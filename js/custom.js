 $(window).on('load', function(event) {
    $('.preloader').delay(500).fadeOut(500);
});

//*  Main slider js 

function home_main_slider(){
if ( $('.slider_inner').length ){
    $('.slider_inner').camera({
        loader: true,
        navigation: true,
        autoPlay:false,
        time: 4000,
        playPause: false,
        pagination: false,
        thumbnails: false,
        overlayer: true,
        opacityOnGrid: true, 
        hover: false,  
        // fx:'mosaic',
        
        onLoaded:function() {
            new WOW().init();
            
          }, 
    }); 
}
}


home_main_slider();

$(function(){
    wow = new WOW(
        {
        boxClass:     'wow',      
        animateClass: 'animated', 
        offset:       5,          
        mobile:       true,       
        live:         true        
        }
        )
    new WOW().init();
});



// $('.slider_inner').on('slideChange', function () {
//     new WOW().init();
// });


$(window).scroll(function() {
    var windowscroll = $(window).scrollTop();
    if (windowscroll >= 320) {
        $('nav.navbar').addClass('scroll-nav');
        $('nav.navbar .donate').css({"display":"none"});
        $('nav.navbar .nav-link').css({"padding":"10px"});
    } else {
        $('nav.navbar').removeClass('scroll-nav');
        $('nav.navbar .donate').css({"display":"inline-block"});


    }
}).scroll();


$(document).ready(function() {
   
  
    //init scrolling event heandler
    $(document).scroll(function(){
     
      var docScroll = $(document).scrollTop(), 
          boxCntOfset = $(".footer").offset().top-150;
      
   
      //when rich top of boxex than fire
      if(docScroll >= boxCntOfset ) {
  
        $("#nav").css({"opacity":0})
      
      } else {
       $("#nav").css({"opacity":1})
      
      }
    })   
  });
    


$('.donator .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots:false,
    autoplay: true,
    autoplaySpeed: 3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

jQuery(function($) {
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $('nav li a').each(function() {
        if (this.href === path) {
            $('nav li a').removeClass('active');
            $(this).addClass('active');
  
        }
    });
  });


$(function(){
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });
});


$('.partners .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots:false,
    autoplay: true,
    autoplaySpeed: 3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})

$('.our-team .owl-carousel').owlCarousel({
    loop:true,
    margin:25,
    center:'true',
    nav:false,
    dots:true,
    dotsEach:3,
    autoplay:true,
    autoplaySpeed: 3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
           
        },
        600:{
            items:3,
           
        },
        1000:{
            items:5,
           
        }
    }
  })

$('.we-are-special .owl-carousel').owlCarousel({
    loop:true,
    margin:25,
    nav:true,
    dots:false,
    autoplay:false,
    autoplaySpeed: 3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
  })
  
