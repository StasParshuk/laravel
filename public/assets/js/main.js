'usestrict';

/****======StickyHeader======*******/
varscrollPosition = window.scrollY;
if (scrollPosition >= 400) {
    $(".sticy-header").addClass("animatedfadeInDownfixed");
}
varheader = $(".sticy-header");
$(window).on("scroll", function () {
    if ($(this).scrollTop() < 400) {
        header.removeClass("animatedfadeInDownfixed");
    } else {
        header.addClass("animatedfadeInDownfixed");
    }
});


/****======newsLetter_popup======*******/
letselector = $(".modal-btn");
selector.magnificPopup({
    type: "inline",
    closeBtnInside: true,
    autoFocusLast: true,
    focus: ".modal-title",
});
selector.click();

/****======ActiveclassaddRemove======*******/
$(".menubar").on("click", function () {
    $(".mobile-menu__sidebar-menu").addClass("active");
    $(".menu-closer").addClass("active");
});

$(".search-box.menu").on("click", function () {
    $(".search-box-popup").addClass("active");
});
$(".search-box-close").on("click", function () {
    $(".search-box-popup").removeClass("active");
});

$(".menu-closer").on("click", function () {
    $(".mobile-menu__sidebar-menu").removeClass("active");
    $(".menu-closer").removeClass("active");
});

$(".mobile-menu__sidebar-menu.dropdown-list.menuarrow").on("click", function () {
    $(this).parent().parent().find(".dropdown").toggle(300);
    $(this).parent().parent().toggleClass("active");
});

$(".mobile-menu__sidebar-menu.dropdown.menuarrowtwo").on("click", function () {
    $(this).parent().parent().find(".subdropdown").toggle(300);
    $(this).parent().parent().toggleClass("active");
});

$(".cart-icon").on("click", function () {
    $(".side-cart").addClass("active");
    $(".side-cart-closer").addClass("active");
});
$(".cart-close").on("click", function () {
    $(".side-cart").removeClass("active");
    $(".side-cart-closer").removeClass("active");
});

$(".menubar").on("click", function () {
    $(".sidebar-content").addClass("active");
    $(".sidebar-content-closer").addClass("active");
});
$(".close-side-widget").on("click", function () {
    $(".sidebar-content").removeClass("active");
});

$(".sidebar-content-closer").on("click", function () {
    $(".sidebar-content-closer").removeClass("active");
    $(".sidebar-content").removeClass("active");
});

$(".close-side-widget").on("click", function () {
    $(".sidebar-content-closer").removeClass("active");
});

$(".side-cart-closer").on("click", function () {
    $(".side-cart").removeClass("active");
    $(".side-cart-closer").removeClass("active");
});

$(".slidebarfilter,.remove-sidebar").on("click", function () {
    $(".shop-grid.blade.php-sidebar").toggleClass("active");
});

$(".varientslia").on("click", function () {
    $(".varientslia").removeClass("active");
    $(this).addClass("active");
});


/****======SingleProductImgChange======*******/
if ($(".varients").length) {
    $(".varientslia").on("click", function () {
        var$this = $(this),
            img_src = $this.data('src');
        vartarget_slider = $('.single-product-box.big-product').find('.slick-slide.slick-current.slick-active');
        target_slider.find('img').attr('src', img_src);
    });
}
;

/****======ProductImageChange======*******/
if ($(".products-grid-one__product-varientimg").length) {
    $(".products-grid-one__product-varientimg").on("click", function () {
        $(this).parent().parent().parent().find(".products-grid-one__hover-img").attr("src", $(this).attr("src"));
    });
}
;


/****======banner-one__sliderSlick======*******/
$(".slick").slick({
    prevArrow: '<divclass="slick-arrowarrow-back"><iclass="flaticon-left-arrow-2"></i></div>',
    nextArrow: '<divclass="slick-arrowarrow-next"><iclass="flaticon-right-arrow-2"></i></div>'
});


/****======banner-4Slick======*******/
$(".banner4slider").slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    fade: true,
    autoplaySpeed: 7000,
    pauseOnHover: false,
});


/****======Home5BannerSlider======*******/
if ($(".hero-slider5").length) {
    $(".hero-slider5").slick({
        dots: true,
        arrows: false,
        infinite: false,
        vertical: true,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '<divclass="slick-arrowslick-prev"><iclass="mi-chevron-left"aria-hidden="true"></i></div>',
        nextArrow: '<divclass="slick-arrowslick-next"><iclass="mi-chevron-right"aria-hidden="true"></i></div>'
    }).on('beforeChange', function () {
        $('.hero-slider__title').removeClass("aos-animate");
        $('.hero-slider__content').removeClass("aos-animate");
        $('.hero-slider__btn').removeClass("aos-animate");
    }).on('afterChange', function (event, slick, currentSlide) {
        $('.hero-slider__title').addClass("aos-animate");
        $('.hero-slider__content').addClass("aos-animate");
        $('.hero-slider__btn').addClass("aos-animate");

    });
}
;

/****======product5CAtagory======*******/
if ($(".product-cat-slider").length) {
    $(".product-cat-slider").slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 700,
        slidesToShow: 6,
        slidesToScroll: 1,
        centerMode: true,
        prevArrow: '<divclass="slick-arrowslick-prev"><iclass="flaticon-left-arrow-1"aria-hidden="true"></i></div>',
        nextArrow: '<divclass="slick-arrowslick-next"><iclass="flaticon-next-1"aria-hidden="true"></i></div>',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}
;

/****======partnersliderSlick======*******/
if ($(".partnerslider").length) {
    $(".partnerslider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 4,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}
;


/****======partnerslider-fourSlick======*******/
if ($(".partnerslider-four").length) {
    $(".partnerslider-four").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}
;


/****======reviewOneSlider======*******/
if ($(".reviewOneSlider").length) {
    $(".reviewOneSlider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-back"></i></button>',
        nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next"></i></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
}
;

/****======ftproductgr======*******/
if ($(".ftproductgr").length) {
    $(".ftproductgr").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><imgsrc="assets/images/home-six/arroe-left.png"alt=""></button>',
        nextArrow: '<buttonclass="arrow-next"><imgsrc="assets/images/home-six/arroe-right.png"alt=""></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }
        ]
    });
}
;


/****======testimonial-two__slider======*******/
if ($(".testimonial-two__slider").length) {
    $(".testimonial-two__slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
}
;

/****======product-two-slider-box======*******/
if ($(".product-two-slider-box").length) {
    $(".product-two-slider-box").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-back"></i></button>',
        nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next"></i></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });
}
;


/****======Catagory_slider======*******/
if ($(".catagory-slider").length) {
    $(".catagory-slider").slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-back"></i></button>',
        nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next"></i></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1399,
                settings: {
                    slidesToShow: 4,
                }
            }
        ]
    });
    $('.nav-pillsbutton[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
        e.target
        e.relatedTarget
        $('.catagory-slider').slick('setPosition');
    });
}
if ($(".categories-tab.nav-link").length) {
    $(".categories-tab.nav-link").click(function () {
        $("#overlay").fadeIn().delay(100).fadeOut();
    });
}
;


if ($(".catagory-slider-three").length) {
    $(".catagory-slider-three").slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-back"></i></button>',
        nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next"></i></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1599,
                settings: {
                    slidesToShow: 4,
                }
            }
        ]
    });
    $('.nav-pillsbutton[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
        e.target
        e.relatedTarget
        $('.catagory-slider-three').slick('setPosition');
    });
}
if ($(".categories-tab.nav-link").length) {
    $(".categories-tab.nav-link").click(function () {
        $("#overlay").fadeIn().delay(100).fadeOut();
    });
}
;


/****======product-slider======*******/
if ($(".product-slider-main").length) {
    $(".product-slider-main").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-back"></i></button>',
        nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next"></i></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
    });
}
;


/****======Hero-SliderStart======*******/
if ($(".hero-slider").length) {
    $(".hero-slider").slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><imgsrc="assets/images/home-four/arrow-left.png"alt="images"></button>',
        nextArrow: '<buttonclass="arrow-next"><imgsrc="assets/images/home-four/arrow-right.png"alt="images"></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                }
            },

            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                }
            }
        ]
    });
}
;


/****======productsingle3======*******/
$(".single-product-three").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-left-arrow-1"></i></button>',
    nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next-1"></i></button>',
    autoplaySpeed: 4000,
    asNavFor: '.slider-nav',
    pauseOnHover: false,
});

$(".single-product-three-nav").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    infinite: false,
    speed: 300,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnHover: false,
});


/****======productsingle2======*******/
$(".single-product-two").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-left-arrow-1"></i></button>',
    nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next-1"></i></button>',
    autoplaySpeed: 4000,
    asNavFor: '.slider-nav',
    pauseOnHover: false
});
$(".single-product-two-nav").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    infinite: false,
    vertical: true,
    speed: 300,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-left-arrow-1"></i></button>',
    nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next-1"></i></button>',
    pauseOnHover: false,
    responsive: [{
        breakpoint: 576,
        settings: {
            slidesToShow: 2,
        }
    },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
            }
        },

    ]
});


/****======productsingle1======*******/
$(".single-product-one").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: true,
    prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-left-arrow-1"></i></button>',
    nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next-1"></i></button>',
    autoplaySpeed: 4000,
    asNavFor: '.slider-nav',
    pauseOnHover: false
});

$(".single-product-one-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    infinite: false,
    speed: 300,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 4000,
    prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-left-arrow-1"></i></button>',
    nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next-1"></i></button>',
    pauseOnHover: false
});


/****======ZoomProduct======*******/
if ($(".single-product-two.single-item").length) {
    $(".single-product-two.single-item").zoom();
}
;


/****======gallery-two__sliderStart======*******/
if ($(".gallery-two__slider").length) {
    $(".gallery-two__slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-back"></i></button>',
        nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next"></i></button>',
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
            }
        },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                }
            }
        ]
    });
}
;


if ($(".insta-slider").length) {
    $(".insta-slider").magnificPopup({
        delegate: 'a',
        type: 'image',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300,
            easing: 'ease-in-out',
            opener: function (openerElement) {
                returnopenerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
}
;


if ($(".single-product-three.single-item").length) {
    $(".single-product-three.single-item").magnificPopup({
        delegate: 'a',
        type: 'image'
    });
}
;


/****======BlogPage======*******/
if ($(".blog-thumb-slider").length) {
    $(".blog-thumb-slider").slick({
        dots: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: '<buttonclass="arrow-back"><iclass="flaticon-back"></i></button>',
        nextArrow: '<buttonclass="arrow-next"><iclass="flaticon-next"></i></button>',
        pauseOnHover: false
    });
}
;


/****======partnerslider-fourSlick======*******/
if ($(".insta-slider").length) {
    $(".insta-slider").slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 400,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 1,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
}
;


//===CountDownTimer===
if ($(".time-countdown-two").length) {
    $(".time-countdown-two").each(function () {
        varSelf = $(this);
        varcountDate = Self.data('countdown-time');//gettingdate

        Self.countdown(countDate, function (event) {
            $(this).html('<li><divclass="box"><spanclass="days">' + event.strftime('%D') + '</span><spanclass="timeRef">days</span></div></li><li><divclass="box"><spanclass="hours">' + event.strftime('%H') + '</span><spanclass="timeRefclr-1">hours</span></div></li><li><divclass="box"><spanclass="minutes">' + event.strftime('%M') + '</span><spanclass="timeRefclr-2">min</span></div></li><li><divclass="box"><spanclass="seconds">' + event.strftime('%S') + '</span><spanclass="timeRefclr-3">sec</span></div></li>');
        });
    });
}
;

/****======niceSelect======*******/
if ($("select").length) {
    $("select").niceSelect();
}
;


/****======Wow======*******/
newWOW().init();


/****======Magnificpopup_link======*******/
if ($(".popup_link").length) {
    $(".popup_link").magnificPopup({
        type: "inline",
        midClick: true,
        mainClass: "mfp-fade"
    });
}
;

/****======Magnificpopupvideo======*******/
if ($(".video-popup").length) {
    $(".video-popup").magnificPopup({
        type: 'iframe'
    });
}
;


/****======MIXitup======*******/
if ($(".products-grid").length) {
    $('#grid').mixItUp();
}
;


/****======Jquerytabs======*******/
$(".tabs").tabs({
    neighbors: {
        prev: $("button.prev"),
        next: $("button.next")
    }
});


/****======Increaseanddecreasenumberbyclick======*******/
if ($(".increaseQty").length) {
    varminVal = 1,
        maxVal = 20;
    $(".increaseQty").on("click", function () {
        var$parentElm = $(this).parents(".qtySelector");
        $(this).addClass("clicked");
        setTimeout(function () {
            $(".clicked").removeClass("clicked");
        }, 100);
        varvalue = $parentElm.find(".qtyValue").val();
        if (value < maxVal) {
            value++;
        }
        $parentElm.find(".qtyValue").val(value);
    });
}
;

if ($(".decreaseQty").length) {
    $(".decreaseQty").on("click", function () {
        var$parentElm = $(this).parents(".qtySelector");
        $(this).addClass("clicked");
        setTimeout(function () {
            $(".clicked").removeClass("clicked");
        }, 100);
        varvalue = $parentElm.find(".qtyValue").val();
        if (value > 1) {
            value--;
        }
        $parentElm.find(".qtyValue").val(value);
    });
}
;


/****======banner-oneTweenMaxJs======*******/
if ($(".banner-one__single-slide").length) {
    $(".banner-one__single-slide").on("mousemove", function (e) {
        parallaxIt(e, ".banner-one__slideimg_two", -20);
        parallaxIt(e, ".banner-one__shape1", 10);
        parallaxIt(e, ".banner-one__shape2", 15);
        parallaxIt(e, ".banner-one__shape3", 25);
    });

    functionparallaxIt(e, target, movement)
    {
        var$this = $(".banner-one__single-slide");
        varrelX = e.pageX - $this.offset().left;
        varrelY = e.pageY - $this.offset().top;

        TweenMax.to(target, 1, {
            x: (relX - $this.width() / 2) / $this.width() * movement,
            y: (relY - $this.height() / 2) / $this.height() * movement
        });
    }
}
;

/****======upcoming-itemTweenMaxJs======*******/
if ($(".upcoming-item").length) {
    $(".upcoming-item").on("mousemove", function (e) {
        parallaxIt(e, ".upcoming-item__signature", -50);
    });

    functionparallaxIt(e, target, movement)
    {
        var$this = $(".upcoming-item");
        varrelX = e.pageX - $this.offset().left;
        varrelY = e.pageY - $this.offset().top;

        TweenMax.to(target, 1, {
            x: (relX - $this.width() / 2) / $this.width() * movement,
            y: (relY - $this.height() / 2) / $this.height() * movement
        });
    }
}
;


/*passwordshowhideonformfield*/
if ($(".eye.icon-2").length) {
    $(".eye.icon-2").click(function () {
        varx = document.getElementById("password-field");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        $(this).hide();
        $(".eye.icon-1").css("display", "block");
    });
}
;

if ($(".eye.icon-1").length) {
    $(".eye.icon-1").click(function () {
        varx = document.getElementById("password-field");
        if (x.type === "text") {
            x.type = "password";
        } else {
            x.type = "text";
        }
        $(this).hide();
        $(".eye.icon-2").css("display", "block");
    });
}
;

//PriceFilter
if ($("#price-range").length) {
    $("#price-range").slider({
        range: true,
        min: 0,
        max: 200000,
        values: [0, 200000],
        slide: function (event, ui) {
            $("#priceRange").val("$" + ui.values[0] + "-$" + ui.values[1]);
        }
    });
    $("#priceRange").val("$" + $("#price-range").slider("values", 0) + "-$" + $("#price-range").slider("values", 1));
}
;


/****======BottomtoTopScrollJs======*******/
varScrollTop = $(".scrollToTop");
$(window).on("scroll", function () {
    if ($(this).scrollTop() < 500) {
        ScrollTop.removeClass("active");
    } else {
        ScrollTop.addClass("active");
    }
});
$(".scrollToTop").on("click", function () {
    $("html,body").animate({
        scrollTop: 0
    }, 250);
    returnfalse;
});

$(window).on("load", function () {

    /****======PreloaderJs======*******/
    $(".loader").delay(500).animate({
        "opacity": "0"
    }, 500, function () {
        $(".loader").css("display", "none");
    });
});
