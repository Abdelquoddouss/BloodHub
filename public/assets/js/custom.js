(function ($) {
    "use strict";

    var $window = $(window),
        $body = $("body");

    /*---------------------------------
            Off Canvas toggler Function
        -----------------------------------*/

    var $offCanvasToggle = $(".offcanvas-toggle"),
        $offCanvas = $(".offcanvas"),
        $offCanvasOverlay = $(".offcanvas-overlay"),
        $mobileMenuToggle = $(".mobile-menu-toggle");
    $offCanvasToggle.on("click", function (e) {
        e.preventDefault();
        var $this = $(this),
            $target = $this.attr("href");
        $body.addClass("offcanvas-open");
        $($target).addClass("offcanvas-open");
        $offCanvasOverlay.fadeIn();

        if ($this.parent().hasClass("mobile-menu-toggle")) {
            $this.addClass("close");
        }
    });
    $(".offcanvas-close, .offcanvas-overlay").on("click", function (e) {
        e.preventDefault();
        $body.removeClass("offcanvas-open");
        $offCanvas.removeClass("offcanvas-open");
        $offCanvasOverlay.fadeOut();
        $mobileMenuToggle.find("a").removeClass("close");
    });
    /*----------------------------------
             Off Canvas Menu
         -----------------------------------*/

    function mobileOffCanvasMenu() {
        var $offCanvasNav = $(".offcanvas-menu, .overlay-menu"),
            $offCanvasNavSubMenu = $offCanvasNav.find(".offcanvas-submenu");
        /*Add Toggle Button With Off Canvas Sub Menu*/

        $offCanvasNavSubMenu
            .parent()
            .prepend('<span class="menu-expand"></span>');
        /*Category Sub Menu Toggle*/

        $offCanvasNav.on("click", "li a, .menu-expand", function (e) {
            var $this = $(this);

            if ($this.attr("href") === "#" || $this.hasClass("menu-expand")) {
                e.preventDefault();

                if ($this.siblings("ul:visible").length) {
                    $this.parent("li").removeClass("active");
                    $this.siblings("ul").slideUp();
                    $this.parent("li").find("li").removeClass("active");
                    $this.parent("li").find("ul:visible").slideUp();
                } else {
                    $this.parent("li").addClass("active");
                    $this
                        .closest("li")
                        .siblings("li")
                        .removeClass("active")
                        .find("li")
                        .removeClass("active");
                    $this
                        .closest("li")
                        .siblings("li")
                        .find("ul:visible")
                        .slideUp();
                    $this.siblings("ul").slideDown();
                }
            }
        });
    }
    mobileOffCanvasMenu();

    // Swipper JS
    $(document).ready(function () {
        var heroSlider = new Swiper(".hero-slider .swiper-container", {
            slidesPerView: 1,
            speed: 600,
            loop: true,
            spaceBetween: 0,
            autoplay: false,
            navigation: {
                nextEl: ".hero-slider .swiper-button-next",
                prevEl: ".hero-slider .swiper-button-prev",
            },
        });

        var serviceSlider = new Swiper(".service-slider-container", {
            slidesPerView: 3,
            speed: 1000,
            loop: true,
            spaceBetween: 30,
            autoplay: false,
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 84,
                },

                992: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },

                768: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                },

                576: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },

                0: {
                    slidesPerView: 1,
                },
            },
        });

        var teamSlider = new Swiper(".team-slider-container", {
            slidesPerView: 3,
            speed: 1000,
            loop: true,
            spaceBetween: 30,
            autoplay: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 3,
                },

                991: {
                    slidesPerView: 2,
                },

                767: {
                    slidesPerView: 2,
                },

                560: {
                    slidesPerView: 2,
                },

                0: {
                    slidesPerView: 1,
                },
            },
        });

        var caseSlider = new Swiper(".case-slider-container", {
            slidesPerView: 2,
            speed: 1000,
            loop: true,
            spaceBetween: 30,
            autoplay: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1200: {
                    slidesPerView: 2,
                },

                991: {
                    slidesPerView: 2,
                },

                767: {
                    slidesPerView: 2,
                },

                576: {
                    slidesPerView: 2,
                },

                0: {
                    slidesPerView: 1,
                },
            },
        });

        var testimonialSlider = new Swiper(".testimonial-slider-container", {
            slidesPerView: 1,
            speed: 1000,
            loop: true,
            spaceBetween: 0,
            effect: "fade",
            fadeEffect: { crossFade: true },
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var gallerySlider = new Swiper(".department-gallery", {
            slidesPerView: 1,
            speed: 1000,
            loop: true,
            spaceBetween: 10,
            autoplay: {
                delay: 2500,
                disableOnInteraction: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        var brandLogoSlider = new Swiper(".brand-logo-slider-container", {
            slidesPerView: 5,
            loop: true,
            speed: 1000,
            spaceBetween: 30,
            autoplay: false,
            breakpoints: {
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 100,
                },

                992: {
                    slidesPerView: 4,
                    spaceBetween: 90,
                },

                768: {
                    slidesPerView: 3,
                    spaceBetween: 110,
                },

                576: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },

                380: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },

                0: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
            },
        });
    });

    // Preloader
    function stylePreloader() {
        $("body").addClass("preloader-deactive");
    }

    // Background Image
    $("[data-bg-img]").each(function () {
        $(this).css("background-image", "url(" + $(this).data("bg-img") + ")");
    });
    // Background Color
    $("[data-bg-color]").each(function () {
        $(this).css("background-color", $(this).data("bg-color"));
    });

    // Fancybox Js
    $(".lightbox-image").fancybox();

    //Video Popup
    $(".play-video-popup").fancybox();

    // Scroll Top Hide Show
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 250) {
            $(".scroll-to-top").fadeIn();
        } else {
            $(".scroll-to-top").fadeOut();
        }

        // Sticky Header
        if ($(".sticky-header").length) {
            var windowpos = $(this).scrollTop();
            if (windowpos >= 150) {
                $(".sticky-header").addClass("sticky");
                $(".mobile-sticky").addClass("sticky");
                $(".sticky-img").attr("src", "assets/img/bs-blood-hub.png");
            } else {
                $(".sticky-header").removeClass("sticky");
                $(".mobile-sticky").removeClass("sticky");
                $(".sticky-img").attr("src", "assets/img/bs-blood-hub.png");
            }
        }
    });

    // Ajax Contact Form JS
    var form = $("#contact-form");
    var formMessages = $(".form-message");

    $(form).submit(function (e) {
        e.preventDefault();
        var formData = form.serialize();
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: formData,
        })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass("alert alert-danger");
                $(formMessages).addClass("alert alert-success fade show");

                // Set the message text.
                formMessages.html(
                    "<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>"
                );
                formMessages.append(response);

                // Clear the form.
                $("#contact-form input,#contact-form textarea").val("");
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass("alert alert-success");
                $(formMessages).addClass("alert alert-danger fade show");

                // Set the message text.
                if (data.responseText !== "") {
                    formMessages.html(
                        "<button type='button' class='btn-close' data-bs-dismiss='alert'>&times;</button>"
                    );
                    formMessages.append(data.responseText);
                } else {
                    $(formMessages).text(
                        "Oops! An error occurred and your message could not be sent."
                    );
                }
            });
    });

    // Datepicker
    $("#datepicker").datepicker();

    //Scroll To Top
    $(".scroll-to-top").on("click", function () {
        $("html, body").animate({ scrollTop: 0 }, 800);
        return false;
    });

    /* ==========================================================================
   When document is loading, do
   ========================================================================== */

    $(window).on("load", function () {
        AOS.init({
            easing: "ease", // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
        });
        stylePreloader();
    });
})(window.jQuery);
