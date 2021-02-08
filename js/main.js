$(document).ready(function () {
    $('.color-choose input').on('click', function () {
        var headphonesColor = $(this).attr('data-image');
        $('.active').removeClass('active');
        $('.left-column img[data-image=' + headphonesColor + ']').addClass('active');
        $(this).addClass('active');


    });
});
$(document).ready(function () {
    $('.slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});

//navigation*/
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

/*Count down*/


setInterval(function time() {
    var d = new Date();
    var days = 7 - d.getDay();
    var hours = 24 - d.getHours();
    var min = 60 - d.getMinutes();
    if ((min + '').length == 1) {
        min = '0' + min;
    }
    var sec = 60 - d.getSeconds();
    if ((sec + '').length == 1) {
        sec = '0' + sec;
    }
    jQuery('#countdown').html(days + 'd : ' + hours + 'h : ' + min + 'm : ' + sec + 's ')
}, 1000);

/*footer */
$(window).scroll(function (event) {
    function footer() {
        var scroll = $(window).scrollTop();
        if (scroll > 50) {
            $(".footer").fadeIn("slow").addClass("show");
        }
        else {
            $(".footer").fadeOut("slow").removeClass("show");
        }

        clearTimeout($.data(this, 'scrollTimer'));
        $.data(this, 'scrollTimer', setTimeout(function () {
            if ($('.footer').is(':hover')) {
                footer();
            }
            else {
                $(".footer").fadeOut("slow");
            }
        }, 2000));
    }
    footer();
});

