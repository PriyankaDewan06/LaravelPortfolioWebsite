
/*progress bar*/
$(document).ready(function () {
    $('#bar1').barfiller({ barColor: '#33B705', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar2').barfiller({ barColor: '#FF4500', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar3').barfiller({ barColor: '#CFF20C', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar4').barfiller({ barColor: '#0A97A3', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar5').barfiller({ barColor: '#5F1BF6', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar6').barfiller({ barColor: '#d81dff', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar7').barfiller({ barColor: '#F1C209', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar8').barfiller({ barColor: '#d5ff4c', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar9').barfiller({ barColor: '#11FADE', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar10').barfiller({ barColor: '#A94EEE', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar11').barfiller({ barColor: '#4ac5ff', duration: 4000, tooltip: true, animateOnResize: true });
    $('#bar12').barfiller({ barColor: '#ff951b', duration: 4000, tooltip: true, animateOnResize: true });

});

/*/progress bar*/

// menu click smooth scroll
$('.scrollTO').on('click',function (e) {
    e.preventDefault();
    var target  = $(this).attr('href');
    $('html, body').animate({
        scrollTop: ($(target).offset().top)
    }, 2000)
})

// scroll hide or show + down to up
$('.arrow-up').click(function(){
    $("html, body").animate({ scrollTop: 70 }, 1400);
    return false;
});


$(document).scroll(function() {
    var top = $(this).scrollTop();
    if (top > 850) {
        $('.arrow').fadeIn();
    } else {
        $('.arrow').fadeOut();
    }
});

$(document).scroll(function() {
    var top = $(this).scrollTop();
    if (top > 400) {
        $('.nav-test').fadeIn();
    } else {
        $('.nav-test').fadeOut();
    }
});
// scroll hide or show + down to up

// owl carosle

    $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    items: 3,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: false,
});
})

// projects pagination
$(document).ready(function () {
    $('.links nav .hidden div').css('marginLeft', '35%');
})
