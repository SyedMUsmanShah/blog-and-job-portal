$(document).ready(function(){
    $(".slider-area").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav: false,
        dots: true
    });

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });

    $('.owl-carousel').owlCarousel({
        items: 1,              // Default: 1 item per slide
        loop: true,            // Infinite loop
        autoplay: true,        // Autoplay the carousel
        autoplayTimeout: 3000, // Autoplay interval in milliseconds (3 seconds in this example)
        autoplayHoverPause: true, // Pause autoplay on hover
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1 // Display 1 item on small screens
            },
            // breakpoint from 768 up
            768: {
                items: 2 // Display 2 items on medium screens
            },
            992: {
                items: 3 // Display 2 items on medium screens
            },
        }
    });
  });
