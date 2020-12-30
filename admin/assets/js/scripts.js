(function ($) {
    "use strict";

    /*================================
    Preloader
    ==================================*/

    var preloader = $('#preloader');
    $(window).on('load', function () {
        preloader.fadeOut('slow', function () {
            $(this).remove();
        });
    });

    /*================================
    sidebar collapsing
    ==================================*/
    $('.nav-btn').on('click', function () {
        $('.page-container').toggleClass('sbar_collapsed');
    });

    /*================================
    Start Footer resizer
    ==================================*/
    var e = function () {
        var e = (window.innerHeight > 0 ? window.innerHeight : this.screen.height) - 5;
        (e -= 67) < 1 && (e = 1), e > 67 && $(".main-content").css("min-height", e + "px")
    };
    $(window).ready(e), $(window).on("resize", e);

    /*================================
    sidebar menu
    ==================================*/
    $("#menu").metisMenu();

    /*================================
    slimscroll activation
    ==================================*/
    $('.menu-inner').slimScroll({
        height: 'auto'
    });
    $('.nofity-list').slimScroll({
        height: '435px'
    });
    $('.timeline-area').slimScroll({
        height: '500px'
    });
    $('.recent-activity').slimScroll({
        height: 'calc(100vh - 114px)'
    });
    $('.settings-list').slimScroll({
        height: 'calc(100vh - 158px)'
    });

    /*================================
    stickey Header
    ==================================*/
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop(),
            mainHeader = $('#sticky-header'),
            mainHeaderHeight = mainHeader.innerHeight();

        // console.log(mainHeader.innerHeight());
        if (scroll > 1) {
            $("#sticky-header").addClass("sticky-menu");
        } else {
            $("#sticky-header").removeClass("sticky-menu");
        }
    });

    /*================================
    form bootstrap validation
    ==================================*/
    $('[data-toggle="popover"]').popover()

    /*------------- Start form Validation -------------*/
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    /*================================
    datatable active
    ==================================*/
    if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            responsive: true
        });
    }
    if ($('#dataTable2').length) {
        $('#dataTable2').DataTable({
            responsive: true
        });
    }
    if ($('#dataTable3').length) {
        $('#dataTable3').DataTable({
            responsive: true
        });
    }


    /*================================
    Slicknav mobile menu
    ==================================*/
    $('ul#nav_menu').slicknav({
        prependTo: "#mobile_menu"
    });

    /*================================
    login form
    ==================================*/
    $('.form-gp input').on('focus', function () {
        $(this).parent('.form-gp').addClass('focused');
    });
    $('.form-gp input').on('focusout', function () {
        if ($(this).val().length === 0) {
            $(this).parent('.form-gp').removeClass('focused');
        }
    });

    /*================================
    slider-area background setting
    ==================================*/
    $('.settings-btn, .offset-close').on('click', function () {
        $('.offset-area').toggleClass('show_hide');
        $('.settings-btn').toggleClass('active');
    });

    /*================================
    Owl Carousel
    ==================================*/
    function slider_area() {
        var owl = $('.testimonial-carousel').owlCarousel({
            margin: 50,
            loop: true,
            autoplay: false,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                450: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 2
                },
                1360: {
                    items: 1
                },
                1600: {
                    items: 2
                }
            }
        });
    }
    slider_area();

    /*================================
    Fullscreen Page
    ==================================*/

    if ($('#full-view').length) {

        var requestFullscreen = function (ele) {
            if (ele.requestFullscreen) {
                ele.requestFullscreen();
            } else if (ele.webkitRequestFullscreen) {
                ele.webkitRequestFullscreen();
            } else if (ele.mozRequestFullScreen) {
                ele.mozRequestFullScreen();
            } else if (ele.msRequestFullscreen) {
                ele.msRequestFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var exitFullscreen = function () {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            } else {
                console.log('Fullscreen API is not supported.');
            }
        };

        var fsDocButton = document.getElementById('full-view');
        var fsExitDocButton = document.getElementById('full-view-exit');

        fsDocButton.addEventListener('click', function (e) {
            e.preventDefault();
            requestFullscreen(document.documentElement);
            $('body').addClass('expanded');
        });

        fsExitDocButton.addEventListener('click', function (e) {
            e.preventDefault();
            exitFullscreen();
            $('body').removeClass('expanded');
        });
    }

})(jQuery);


function printDiv() {
    var divToPrint = document.getElementById('invoice-area');
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
}

function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

/*================================
    messages
==================================*/

$(document).ready(function(){
 
    function load_unseen_notification(view = '')
    {
     $.ajax({
      url:"featch.php",
      method:"POST",
      data:{view:view},
      dataType:"json",
      success:function(data)
      {
       $('.messagelist').html(data.notification);
       $('.reco').html(data.reco);
       if(data.unseen_notification > 0)
       {
        $('.count').html(data.unseen_notification);
       }
      }
     });
    }
    
    load_unseen_notification();
    
    $(document).on('click', '.mes', function(){
     $('.count').html('');
     load_unseen_notification('yes');
    });
    
    setInterval(function(){ 
     load_unseen_notification();; 
    }, 5000);
    
});

var auto_mess = setInterval(function(){ 
    $('#getmess').load('getmess.php');
    var getmess = document.querySelector('#getmess');
    getmess.scrollTop = getmess.scrollHeight ;
}, 2000);

function sentmessage() {
    var message = $("#message").val();
    $.post("sentingmessage.php", { message: message},
    function(data) {
	 $('#results').html(data);
	 $('#myFormmessub')[0].reset();
    });
}

/*================================
    activation
==================================*/
$('#switch1').on('click', function() {
    var checkStatushead = this.checked ? 1 : 0;

    $.post("headup.php", {"set": checkStatushead});
});

$('#switch2').on('click', function() {
    var checkStatusred = this.checked ? 1 : 0;

    $.post("redup.php", {"set": checkStatusred});
});

$('#switch3').on('click', function() {
    var checkStatusyellow = this.checked ? 1 : 0;

    $.post("yellowup.php", {"set": checkStatusyellow});
});

$('#switch4').on('click', function() {
    var checkStatusgreen = this.checked ? 1 : 0;

    $.post("greenup.php", {"set": checkStatusgreen});
});

$('#switch5').on('click', function() {
    var checkStatusblue = this.checked ? 1 : 0;

    $.post("blueup.php", {"set": checkStatusblue});
});

/*================================
    form ajax
==================================*/
function fetch_select(val) {
    $.ajax({
        type: 'post',
        url: 'getimgcan.php',
        data: {
            get_option: val
        },
        success: function(response) {
            document.getElementById("new_select").innerHTML = response;
        }
    });
    switch (val) {
        case "head council":
            dir = '../headcouncil/images/candidates/';
            break;
        case "yellow":
            dir = '../yellow/images/candidates/';
            break;
        case "blue":
            dir = '../blue/images/candidates/';
            break;
        case "green":
            dir = '../green/images/candidates/';
            break;
        case "red":
            dir = '../red/images/candidates/';
            break;
    }
}

function fetch_select2(val1) {
    val2 = dir + val1;
    $.ajax({
        type: 'post',
        url: 'getimgcan.php',
        data: {
            get_img: val2
        },
        success: function(response) {
            document.getElementById("new_select2").innerHTML = response;
        }
    });
}

function fetch_select3(val3) {
    $.ajax({
        type: 'post',
        url: 'getimgcan.php',
        data: {
            get_posts: val3
        },
        success: function(response) {
            document.getElementById("posts").innerHTML = response;
        }
    });
}