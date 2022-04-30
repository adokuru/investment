jQuery(
    (function ($) {
        "use strict";

        // Menu JS
        $(window).on("scroll", function () {
            if ($(this).scrollTop() > 50) {
                $(".main-nav").addClass("menu-shrink");
            } else {
                $(".main-nav").removeClass("menu-shrink");
            }
        });

        // Mean Menu JS
        jQuery(".mean-menu").meanmenu({
            meanScreenWidth: "991",
        });

        // Search JS
        $("#close-btn").on("click", function () {
            $("#search-overlay").fadeOut();
            $("#search-btn").show();
        });
        $("#search-btn").on("click", function () {
            $("#search-overlay").fadeIn();
        });

        // Button Hover JS
        $(function () {
            $(".common-btn")
                .on("mouseenter", function (e) {
                    var parentOffset = $(this).offset(),
                        relX = e.pageX - parentOffset.left,
                        relY = e.pageY - parentOffset.top;
                    $(this).find("span").css({ top: relY, left: relX });
                })
                .on("mouseout", function (e) {
                    var parentOffset = $(this).offset(),
                        relX = e.pageX - parentOffset.left,
                        relY = e.pageY - parentOffset.top;
                    $(this).find("span").css({ top: relY, left: relX });
                });
        });

        // Wow JS
        new WOW().init();

        // Banner Slider JS
        $(".banner-slider").owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: false,
            dots: true,
            smartSpeed: 1000,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
        });

        // Banner Slider Two JS
        $(".banner-slider-two").owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            smartSpeed: 1000,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            navText: [
                "<i class='bx bx-chevron-left'></i>",
                "<i class='bx bx-chevron-right'></i>",
            ],
        });

        // Logo Slider JS
        $(".logo-slider").owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            dots: false,
            smartSpeed: 1000,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 5,
                },
            },
        });

        // Projects Slider JS
        $(".projects-slider").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            smartSpeed: 1000,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                "<i class='bx bx-chevron-left'></i>",
                "<i class='bx bx-chevron-right'></i>",
            ],
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
            },
        });

        // Modal Video JS
        $(".js-modal-btn").modalVideo();

        // Odometer JS
        $(".odometer").appear(function (e) {
            var odo = $(".odometer");
            odo.each(function () {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });

        // Testimonials Slider JS
        $(".testimonials-slider").owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            smartSpeed: 1000,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: [
                "<i class='bx bx-chevron-left'></i>",
                "<i class='bx bx-chevron-right'></i>",
            ],
        });

        // Timer JS
        let getDaysId = document.getElementById("days");
        if (getDaysId !== null) {
            const second = 1000;
            const minute = second * 60;
            const hour = minute * 60;
            const day = hour * 24;

            let countDown = new Date("December 25, 2022 00:00:00").getTime();
            setInterval(function () {
                let now = new Date().getTime();
                let distance = countDown - now;

                (document.getElementById("days").innerText = Math.floor(
                    distance / day
                )),
                    (document.getElementById("hours").innerText = Math.floor(
                        (distance % day) / hour
                    )),
                    (document.getElementById("minutes").innerText = Math.floor(
                        (distance % hour) / minute
                    )),
                    (document.getElementById("seconds").innerText = Math.floor(
                        (distance % minute) / second
                    ));
            }, second);
        }

        // Back To Top JS
        $(function () {
            $(window).on("scroll", function () {
                var scrolled = $(window).scrollTop();
                if (scrolled > 100) $(".go-top").addClass("active");
                if (scrolled < 100) $(".go-top").removeClass("active");
            });
            $(".go-top").on("click", function () {
                $("html, body").animate({ scrollTop: "0" }, 500);
            });
        });

        // Accordion JS
        $(".accordion > li:eq(0) a").addClass("active").next().slideDown();
        $(".accordion a").on("click", function (j) {
            var dropDown = $(this).closest("li").find("p");
            $(this).closest(".accordion").find("p").not(dropDown).slideUp();
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            } else {
                $(this)
                    .closest(".accordion")
                    .find("a.active")
                    .removeClass("active");
                $(this).addClass("active");
            }
            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });

        // Preloader JS
        jQuery(window).on("load", function () {
            jQuery(".loader").fadeOut(500);
        });

        // Subscribe Form JS
        $(".newsletter-form")
            .validator()
            .on("submit", function (event) {
                if (event.isDefaultPrevented()) {
                    // Hande the invalid form...
                    formErrorSub();
                    submitMSGSub(false, "Please enter your email correctly.");
                } else {
                    // Everything looks good!
                    event.preventDefault();
                }
            });
        function callbackFunction(resp) {
            if (resp.result === "success") {
                formSuccessSub();
            } else {
                formErrorSub();
            }
        }
        function formSuccessSub() {
            $(".newsletter-form")[0].reset();
            submitMSGSub(true, "Thank you for subscribing!");
            setTimeout(function () {
                $("#validator-newsletter").addClass("hide");
            }, 4000);
        }
        function formErrorSub() {
            $(".newsletter-form").addClass("animated shake");
            setTimeout(function () {
                $(".newsletter-form").removeClass("animated shake");
            }, 1000);
        }
        function submitMSGSub(valid, msg) {
            if (valid) {
                var msgClasses = "validation-success";
            } else {
                var msgClasses = "validation-danger";
            }
            $("#validator-newsletter")
                .removeClass()
                .addClass(msgClasses)
                .text(msg);
        }

        // AJAX Mail Chimp JS
        $(".newsletter-form").ajaxChimp({
            url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
            callback: callbackFunction,
        });

        // Buy Now Btn

        // Switch Btn
        $("body").append(
            "<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>"
        );
    })(jQuery)
);

// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem("inva_theme", themeName);
    document.documentElement.className = themeName;
}

// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem("inva_theme") === "theme-dark") {
        setTheme("theme-light");
    } else {
        setTheme("theme-dark");
    }
}

// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem("inva_theme") === "theme-dark") {
        setTheme("theme-dark");
        document.getElementById("slider").checked = false;
    } else {
        setTheme("theme-light");
        document.getElementById("slider").checked = true;
    }
})();
