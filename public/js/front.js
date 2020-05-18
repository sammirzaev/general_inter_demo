/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/front/js/all.js":
/*!******************************************!*\
  !*** ./resources/assets/front/js/all.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function ($) {
  "use strict"; // Start of use strict

  /* ---------------------------------------------
   Scripts initialization
   --------------------------------------------- */

  $(window).load(function () {
    // Page loader
    $("body").imagesLoaded(function () {
      $(".page-loader div").fadeOut();
      $(".page-loader").delay(200).fadeOut("slow");
    });
    initWorkFilter();
    init_scroll_navigate();
    $(window).trigger("scroll");
    $(window).trigger("resize"); // Hash menu forwarding

    if (window.location.hash && $(window.location.hash).length) {
      var hash_offset = $(window.location.hash).offset().top;
      $("html, body").animate({
        scrollTop: hash_offset
      });
    }
  });
  $(document).ready(function () {
    $(window).trigger("resize");
    init_classic_menu();
    init_fullscreen_menu();
    init_side_panel();
    init_lightbox();
    init_parallax();
    init_shortcodes();
    init_tooltips();
    init_counters();
    init_team();
    initPageSliders();
    init_map();
    init_wow();
    init_masonry();
  });
  $(window).resize(function () {
    init_classic_menu_resize();
    init_side_panel_resize();
    js_height_init();
    split_height_init();
  });
  /* --------------------------------------------
   Platform detect
   --------------------------------------------- */

  var mobileTest;

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    mobileTest = true;
    $("html").addClass("mobile");
  } else {
    mobileTest = false;
    $("html").addClass("no-mobile");
  }

  var mozillaTest;

  if (/mozilla/.test(navigator.userAgent)) {
    mozillaTest = true;
  } else {
    mozillaTest = false;
  }

  var safariTest;

  if (/safari/.test(navigator.userAgent)) {
    safariTest = true;
  } else {
    safariTest = false;
  } // Detect touch devices


  if (!("ontouchstart" in document.documentElement)) {
    document.documentElement.className += " no-touch";
  }
  /* ---------------------------------------------
   Sections helpers
   --------------------------------------------- */
  // Sections backgrounds


  var pageSection = $(".home-section, .page-section, .small-section, .split-section");
  pageSection.each(function (indx) {
    if ($(this).attr("data-background")) {
      $(this).css("background-image", "url(" + $(this).data("background") + ")");
    }
  }); // Function for block height 100%

  function height_line(height_object, height_donor) {
    height_object.height(height_donor.height());
    height_object.css({
      "line-height": height_donor.height() + "px"
    });
  } // Function equal height


  !function (a) {
    a.fn.equalHeights = function () {
      var b = 0,
          c = a(this);
      return c.each(function () {
        var c = a(this).innerHeight();
        c > b && (b = c);
      }), c.css("height", b);
    }, a("[data-equal]").each(function () {
      var b = a(this),
          c = b.data("equal");
      b.find(c).equalHeights();
    });
  }(jQuery); // Progress bars

  var progressBar = $(".progress-bar");
  progressBar.each(function (indx) {
    $(this).css("width", $(this).attr("aria-valuenow") + "%");
  });
  /* ---------------------------------------------
   Nav panel classic
   --------------------------------------------- */

  var mobile_nav = $(".mobile-nav");
  var desktop_nav = $(".desktop-nav");

  function init_classic_menu_resize() {
    // Mobile menu max height
    $(".mobile-on .desktop-nav > ul").css("max-height", $(window).height() - $(".main-nav").height() - 20 + "px"); // Mobile menu style toggle

    if ($(window).width() <= 1024) {
      $(".main-nav").addClass("mobile-on");
    } else if ($(window).width() > 1024) {
      $(".main-nav").removeClass("mobile-on");
      desktop_nav.show();
    }
  }

  function init_classic_menu() {
    // Navbar sticky
    $(".js-stick").sticky({
      topSpacing: 0
    });
    height_line($(".inner-nav > ul > li > a"), $(".main-nav"));
    height_line(mobile_nav, $(".main-nav"));
    mobile_nav.css({
      "width": $(".main-nav").height() + "px"
    }); // Transpaner menu

    if ($(".main-nav").hasClass("transparent")) {
      $(".main-nav").addClass("js-transparent");
    }

    $(window).scroll(function () {
      if ($(window).scrollTop() > 10) {
        $(".js-transparent").removeClass("transparent");
        $(".main-nav, .nav-logo-wrap .logo, .mobile-nav").addClass("small-height");
      } else {
        $(".js-transparent").addClass("transparent");
        $(".main-nav, .nav-logo-wrap .logo, .mobile-nav").removeClass("small-height");
      }
    }); // Mobile menu toggle

    mobile_nav.click(function () {
      if (desktop_nav.hasClass("js-opened")) {
        desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
        $(this).removeClass("active");
      } else {
        desktop_nav.slideDown("slow", "easeOutQuart").addClass("js-opened");
        $(this).addClass("active"); // Fix for responsive menu

        if ($(".main-nav").hasClass("not-top")) {
          $(window).scrollTo(".main-nav", "slow");
        }
      }
    });
    desktop_nav.find("a:not(.mn-has-sub)").click(function () {
      if (mobile_nav.hasClass("active")) {
        desktop_nav.slideUp("slow", "easeOutExpo").removeClass("js-opened");
        mobile_nav.removeClass("active");
      }
    }); // Sub menu

    var mnHasSub = $(".mn-has-sub");
    var mnThisLi;
    $(".mobile-on .mn-has-sub").find(".fa:first").removeClass("fa-angle-right").addClass("fa-angle-down");
    mnHasSub.click(function () {
      if ($(".main-nav").hasClass("mobile-on")) {
        mnThisLi = $(this).parent("li:first");

        if (mnThisLi.hasClass("js-opened")) {
          mnThisLi.find(".mn-sub:first").slideUp(function () {
            mnThisLi.removeClass("js-opened");
            mnThisLi.find(".mn-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
          });
        } else {
          $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
          mnThisLi.addClass("js-opened");
          mnThisLi.find(".mn-sub:first").slideDown();
        }

        return false;
      } else {}
    });
    mnThisLi = mnHasSub.parent("li");
    mnThisLi.hover(function () {
      if (!$(".main-nav").hasClass("mobile-on")) {
        $(this).find(".mn-sub:first").stop(true, true).fadeIn("fast");
      }
    }, function () {
      if (!$(".main-nav").hasClass("mobile-on")) {
        $(this).find(".mn-sub:first").stop(true, true).delay(100).fadeOut("fast");
      }
    });
    /* Keyboard navigation for main menu */

    $(".inner-nav a").focus(function () {
      if (!$(".main-nav").hasClass("mobile-on")) {
        $(this).parent("li").parent().children().find(".mn-sub:first").stop(true, true).delay(100).fadeOut("fast");
      }
    });
    $(".inner-nav a").first().keydown(function (e) {
      if (!$(".main-nav").hasClass("mobile-on")) {
        if (e.shiftKey && e.keyCode == 9) {
          $(this).parent("li").find(".mn-sub:first").stop(true, true).delay(100).fadeOut("fast");
        }
      }
    });
    $(".mn-sub li:last a").keydown(function (e) {
      if (!$(".main-nav").hasClass("mobile-on")) {
        if (!e.shiftKey && e.keyCode == 9) {
          $(this).parent("li").parent().stop(true, true).delay(100).fadeOut("fast");
        }
      }
    });
    $(document).keydown(function (e) {
      if (!$(".main-nav").hasClass("mobile-on")) {
        if (e.keyCode == 27) {
          if (mnHasSub.parent("li").find(".mn-sub:first li .mn-sub").is(":visible")) {
            mnHasSub.parent("li").find(".mn-sub:first li .mn-sub").stop(true, true).delay(100).fadeOut("fast");
          } else {
            mnHasSub.parent("li").find(".mn-sub:first").stop(true, true).delay(100).fadeOut("fast");
          }
        }
      }
    });
    mnHasSub.focus(function () {
      if (!$(".main-nav").hasClass("mobile-on")) {
        $(this).parent("li").find(".mn-sub:first").stop(true, true).fadeIn("fast");
      }
    });
  }
  /* ---------------------------------------------
   Scroll navigation
   --------------------------------------------- */


  function init_scroll_navigate() {
    $(".local-scroll").localScroll({
      target: "body",
      duration: 1500,
      offset: 0,
      easing: "easeInOutExpo",
      onAfter: function onAfter(anchor, settings) {
        anchor.focus();

        if (anchor.is(":focus")) {
          return !1;
        } else {
          anchor.attr('tabindex', '-1');
          anchor.focus();
        }
      }
    });
    var sections = $(".home-section, .split-section, .page-section");
    var menu_links = $(".scroll-nav li a");
    $(window).scroll(function () {
      sections.filter(":in-viewport:first").each(function () {
        var active_section = $(this);
        var active_link = $('.scroll-nav li a[href="#' + active_section.attr("id") + '"]');
        menu_links.removeClass("active");
        active_link.addClass("active");
      });
    });
  }
  /* ---------------------------------------------
   Lightboxes
   --------------------------------------------- */


  function init_lightbox() {
    // Works Item Lightbox
    $(".work-lightbox-link").magnificPopup({
      gallery: {
        enabled: true
      },
      mainClass: "mfp-fade"
    }); // Works Item Lightbox

    $(".lightbox-gallery-1").magnificPopup({
      gallery: {
        enabled: true
      }
    }); // Other Custom Lightbox

    $(".lightbox-gallery-2").magnificPopup({
      gallery: {
        enabled: true
      }
    });
    $(".lightbox-gallery-3").magnificPopup({
      gallery: {
        enabled: true
      }
    });
    $(".lightbox").magnificPopup();
  }
  /* -------------------------------------------
   Parallax
   --------------------------------------------- */


  function init_parallax() {
    // Parallax
    if ($(window).width() >= 1024 && mobileTest == false && $("html").hasClass("no-touch")) {
      $(".parallax-1").parallax("50%", 0.1);
      $(".parallax-2").parallax("50%", 0.2);
      $(".parallax-3").parallax("50%", 0.3);
      $(".parallax-4").parallax("50%", 0.4);
      $(".parallax-5").parallax("50%", 0.5);
      $(".parallax-6").parallax("50%", 0.6);
      $(".parallax-7").parallax("50%", 0.7);
      $(".parallax-8").parallax("50%", 0.5);
      $(".parallax-9").parallax("50%", 0.5);
      $(".parallax-10").parallax("50%", 0.5);
      $(".parallax-11").parallax("50%", 0.05);
    }
  }
  /* ---------------------------------------------
   Shortcodes
   --------------------------------------------- */
  // Tabs minimal


  function init_shortcodes() {
    var tpl_tab_height;
    $(".tpl-minimal-tabs > li > a").click(function () {
      if (!$(this).parent("li").hasClass("active")) {
        tpl_tab_height = $(".tpl-minimal-tabs-cont > .tab-pane").filter($(this).attr("href")).height();
        $(".tpl-minimal-tabs-cont").animate({
          height: tpl_tab_height
        }, function () {
          $(".tpl-minimal-tabs-cont").css("height", "auto");
        });
      }
    }); // Accordion

    $(".accordion").each(function () {
      var allPanels = $(this).children("dd").hide();
      $(this).children("dd").first().slideDown("easeOutExpo");
      $(this).children("dt").children("a").first().addClass("active");
      $(this).children("dt").children("a").click(function () {
        var current = $(this).parent().next("dd");
        $(".accordion > dt > a").removeClass("active");
        $(this).addClass("active");
        allPanels.not(current).slideUp("easeInExpo");
        $(this).parent().next().slideDown("easeOutExpo");
        return false;
      });
    }); // Toggle

    var allToggles = $(".toggle > dd").hide();
    $(".toggle > dt > a").click(function () {
      if ($(this).hasClass("active")) {
        $(this).parent().next().slideUp("easeOutExpo");
        $(this).removeClass("active");
      } else {
        var current = $(this).parent().next("dd");
        $(this).addClass("active");
        $(this).parent().next().slideDown("easeOutExpo");
      }

      return false;
    }); // Responsive video

    $(".video, .resp-media, .blog-media").fitVids();
    $(".work-full-media").fitVids();
  }
  /* ---------------------------------------------
   Tooltips (bootstrap plugin activated)
   --------------------------------------------- */


  function init_tooltips() {
    $(".tooltip-bot, .tooltip-bot a, .nav-social-links a").tooltip({
      placement: "bottom"
    });
    $(".tooltip-top, .tooltip-top a").tooltip({
      placement: "top"
    });
  }
  /* ---------------------------------------------
   Some facts section
   --------------------------------------------- */


  function init_counters() {
    $(".count-number").appear(function () {
      var count = $(this);
      count.countTo({
        from: 0,
        to: count.html(),
        speed: 1300,
        refreshInterval: 60
      });
    });
  }
  /* ---------------------------------------------
   Team
   --------------------------------------------- */


  function init_team() {
    // Hover
    $(".team-item").click(function () {
      if ($("html").hasClass("mobile")) {
        $(this).toggleClass("js-active");
      }
    }); // Keayboar navigation for team section

    $(".team-social-links > a").on("focus blur", function () {
      if (!$("html").hasClass("mobile")) {
        $(this).parent().parent().parent().parent().toggleClass("js-active");
      }
    });
  }
})(jQuery); // End of use strict

/* ---------------------------------------------
 Sliders
 --------------------------------------------- */


function initPageSliders() {
  (function ($) {
    "use strict";

    function owl_keynav(el) {
      el.find(".owl-page").attr({
        "role": "button",
        "tabindex": "0"
      });
      $(".owl-carousel").each(function () {
        var owl = $(this).data('owlCarousel');
        $(this).find(".owl-page").keydown(function (e) {
          if (event.key === "Enter") {
            owl.goTo($(this).index());
          }
        });
      });
    } // Fullwidth slider


    $(".fullwidth-slider").owlCarousel({
      slideSpeed: 350,
      singleItem: true,
      autoHeight: true,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Fullwidth slider

    $(".fullwidth-slider-fade").owlCarousel({
      transitionStyle: "fadeUp",
      slideSpeed: 350,
      singleItem: true,
      autoHeight: true,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Fullwidth gallery

    $(".fullwidth-gallery").owlCarousel({
      transitionStyle: "fade",
      autoPlay: 5000,
      slideSpeed: 700,
      singleItem: true,
      autoHeight: true,
      navigation: false,
      pagination: false,
      lazyLoad: true,
      afterInit: owl_keynav
    }); // Item carousel

    $(".item-carousel").owlCarousel({
      autoPlay: 2500,
      //stopOnHover: true,
      items: 3,
      itemsDesktop: [1199, 3],
      itemsTabletSmall: [768, 3],
      itemsMobile: [480, 1],
      navigation: false,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Item carousel

    $(".small-item-carousel").owlCarousel({
      autoPlay: 2500,
      stopOnHover: true,
      items: 6,
      itemsDesktop: [1199, 4],
      itemsTabletSmall: [768, 3],
      itemsMobile: [480, 2],
      pagination: false,
      navigation: false,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Single carousel

    $(".single-carousel").owlCarousel({
      singleItem: true,
      autoHeight: true,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Content Slider

    $(".content-slider").owlCarousel({
      slideSpeed: 350,
      singleItem: true,
      autoHeight: true,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Photo slider

    $(".photo-slider").owlCarousel({
      slideSpeed: 350,
      items: 4,
      itemsDesktop: [1199, 4],
      itemsTabletSmall: [768, 2],
      itemsMobile: [480, 1],
      autoHeight: true,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Work slider

    $(".work-full-slider").owlCarousel({
      slideSpeed: 350,
      singleItem: true,
      autoHeight: true,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Blog posts carousel

    $(".blog-posts-carousel").owlCarousel({
      autoPlay: 5000,
      stopOnHover: true,
      items: 3,
      itemsDesktop: [1199, 3],
      itemsTabletSmall: [768, 2],
      itemsMobile: [480, 1],
      pagination: false,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Blog posts carousel alt

    $(".blog-posts-carousel-alt").owlCarousel({
      autoPlay: 3500,
      stopOnHover: true,
      slideSpeed: 350,
      singleItem: true,
      autoHeight: true,
      pagination: false,
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Image carousel

    $(".image-carousel").owlCarousel({
      autoPlay: 5000,
      stopOnHover: true,
      items: 4,
      itemsDesktop: [1199, 3],
      itemsTabletSmall: [768, 2],
      itemsMobile: [480, 1],
      navigation: true,
      lazyLoad: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterInit: owl_keynav
    }); // Fullwidth slideshow

    var sync1 = $(".fullwidth-slideshow");
    var sync2 = $(".fullwidth-slideshow-pager");
    $(".fullwidth-slideshow").owlCarousel({
      autoPlay: 5000,
      stopOnHover: true,
      transitionStyle: "fade",
      slideSpeed: 350,
      singleItem: true,
      autoHeight: true,
      pagination: false,
      navigation: true,
      navigationText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>", "<i class='fa fa-angle-right' aria-hidden='true'></i>"],
      afterAction: syncPosition,
      responsiveRefreshRate: 200
    });
    $(".fullwidth-slideshow-pager").owlCarousel({
      autoPlay: 5000,
      stopOnHover: true,
      items: 8,
      itemsDesktop: [1199, 8],
      itemsDesktopSmall: [979, 7],
      itemsTablet: [768, 6],
      itemsMobile: [480, 4],
      autoHeight: true,
      pagination: false,
      navigation: false,
      responsiveRefreshRate: 100,
      afterInit: function afterInit(el) {
        el.find(".owl-item").eq(0).addClass("synced");
        el.find(".owl-item").attr({
          "role": "button",
          "tabindex": "0"
        });
        $(".fullwidth-slideshow").each(function () {
          var owl = $(this).data('owlCarousel');
          $(".fullwidth-slideshow-pager").find(".owl-item").keydown(function (e) {
            if (event.key === "Enter") {
              owl.goTo($(this).index());
            }
          });
        });
      }
    });

    function syncPosition(el) {
      var current = this.currentItem;
      $(".fullwidth-slideshow-pager").find(".owl-item").removeClass("synced").eq(current).addClass("synced");

      if ($(".fullwidth-slideshow-pager").data("owlCarousel") !== undefined) {
        center(current);
      }
    }

    $(".fullwidth-slideshow-pager").on("click", ".owl-item", function (e) {
      e.preventDefault();
      var number = $(this).data("owlItem");
      sync1.trigger("owl.goTo", number);
    });

    function center(number) {
      var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
      var num = number;
      var found = false;

      for (var i in sync2visible) {
        if (num === sync2visible[i]) {
          var found = true;
        }
      }

      if (found === false) {
        if (num > sync2visible[sync2visible.length - 1]) {
          sync2.trigger("owl.goTo", num - sync2visible.length + 2);
        } else {
          if (num - 1 === -1) {
            num = 0;
          }

          sync2.trigger("owl.goTo", num);
        }
      } else if (num === sync2visible[sync2visible.length - 1]) {
        sync2.trigger("owl.goTo", sync2visible[1]);
      } else if (num === sync2visible[0]) {
        sync2.trigger("owl.goTo", num - 1);
      }
    }

    var owl = $(".fullwidth-slideshow").data("owlCarousel");
    $(document.documentElement).keyup(function (event) {
      // handle cursor keys
      if (event.keyCode == 37) {
        owl.prev();
      } else if (event.keyCode == 39) {
        owl.next();
      }
    });

    if ($(".owl-carousel").length) {
      var owl = $(".owl-carousel").data('owlCarousel');
      owl.reinit();
    }
  })(jQuery);
}

;
/* ---------------------------------------------
     Fullscreen menu
   --------------------------------------------- */

var fm_menu_wrap = $("#fullscreen-menu");
var fm_menu_button = $(".fm-button");

function init_fullscreen_menu() {
  fm_menu_button.click(function () {
    if ($(this).hasClass("animation-process")) {
      return false;
    } else {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").css("z-index", "2001").addClass("animation-process");
        ;
        fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function () {
          fm_menu_wrap.fadeOut(function () {
            fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
            fm_menu_button.css("z-index", "1030").removeClass("animation-process");
          });
        });

        if ($(".owl-carousel").lenth) {
          $(".owl-carousel").data("owlCarousel").play();
        }
      } else {
        if ($(".owl-carousel").lenth) {
          $(".owl-carousel").data("owlCarousel").stop();
        }

        $(this).addClass("active").css("z-index", "2001").addClass("animation-process");
        fm_menu_wrap.fadeIn(function () {
          fm_menu_wrap.find(".fm-wrapper-sub").addClass("js-active");
          fm_menu_button.removeClass("animation-process");
        });
      }

      return false;
    }
  });
  $(document).keydown(function (e) {
    if (fm_menu_button.hasClass("animation-process")) {
      return false;
    } else {
      if (e.keyCode == 27 && fm_menu_button.hasClass("active")) {
        fm_menu_button.removeClass("active").css("z-index", "2001").addClass("animation-process");
        ;
        fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function () {
          fm_menu_wrap.fadeOut(function () {
            fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
            fm_menu_button.css("z-index", "1030").removeClass("animation-process");
          });
        });

        if ($(".owl-carousel").lenth) {
          $(".owl-carousel").data("owlCarousel").play();
        }

        return false;
      }
    }
  });
  fm_menu_button.click(function () {
    if ($(this).hasClass("animation-process")) {
      return false;
    } else {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active").css("z-index", "2001").addClass("animation-process");
        ;
        fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function () {
          fm_menu_wrap.fadeOut(function () {
            fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
            fm_menu_button.css("z-index", "1030").removeClass("animation-process");
          });
        });

        if ($(".owl-carousel").lenth) {
          $(".owl-carousel").data("owlCarousel").play();
        }
      } else {
        if ($(".owl-carousel").lenth) {
          $(".owl-carousel").data("owlCarousel").stop();
        }

        $(this).addClass("active").css("z-index", "2001").addClass("animation-process");
        fm_menu_wrap.fadeIn(function () {
          fm_menu_wrap.find(".fm-wrapper-sub").addClass("js-active");
          fm_menu_button.removeClass("animation-process");
        });
      }

      return false;
    }
  });
  $("#fullscreen-menu").find("a:not(.fm-has-sub)").click(function () {
    if (fm_menu_button.hasClass("animation-process")) {
      return false;
    } else {
      fm_menu_button.removeClass("active").css("z-index", "2001").addClass("animation-process");
      fm_menu_wrap.find(".fm-wrapper-sub").fadeOut("fast", function () {
        fm_menu_wrap.fadeOut(function () {
          fm_menu_wrap.find(".fm-wrapper-sub").removeClass("js-active").show();
          fm_menu_button.css("z-index", "1030").removeClass("animation-process");
        });
      });

      if ($(".owl-carousel").lenth) {
        $(".owl-carousel").data("owlCarousel").play();
      }
    }
  }); // Sub menu

  var fmHasSub = $(".fm-has-sub");
  var fmThisLi;
  fmHasSub.click(function () {
    fmThisLi = $(this).parent("li:first");

    if (fmThisLi.hasClass("js-opened")) {
      fmThisLi.find(".fm-sub:first").slideUp(function () {
        fmThisLi.removeClass("js-opened");
        fmThisLi.find(".fm-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
      });
    } else {
      $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
      fmThisLi.addClass("js-opened");
      fmThisLi.find(".fm-sub:first").slideDown();
    }

    return false;
  });
}
/* ---------------------------------------------
     Side panel
   --------------------------------------------- */


var side_panel = $(".side-panel");
var sp_button = $(".sp-button");
var sp_close_button = $(".sp-close-button");
var sp_overlay = $(".sp-overlay");

function sp_panel_close() {
  side_panel.animate({
    opacity: 0,
    left: -270
  }, 500, "easeOutExpo");
  sp_overlay.fadeOut();

  if ($(".owl-carousel").lenth) {
    $(".owl-carousel").data("owlCarousel").play();
  }
}

function init_side_panel() {
  (function ($) {
    "use strict";

    sp_button.click(function () {
      side_panel.animate({
        opacity: 1,
        left: 0
      }, 500, "easeOutExpo");
      setTimeout(function () {
        sp_overlay.fadeIn();
      }, 100);

      if ($(".owl-carousel").lenth) {
        $(".owl-carousel").data("owlCarousel").stop();
      }

      return false;
    });
    sp_close_button.click(function () {
      sp_panel_close();
      return false;
    });
    sp_overlay.click(function () {
      sp_panel_close();
      return false;
    });
    $("#side-panel-menu").find("a:not(.sp-has-sub)").click(function () {
      if (!($(window).width() >= 1199)) {
        sp_panel_close();
      }
    }); // Sub menu

    var spHasSub = $(".sp-has-sub");
    var spThisLi;
    spHasSub.click(function () {
      spThisLi = $(this).parent("li:first");

      if (spThisLi.hasClass("js-opened")) {
        spThisLi.find(".sp-sub:first").slideUp(function () {
          spThisLi.removeClass("js-opened");
          spThisLi.find(".sp-has-sub").find(".fa:first").removeClass("fa-angle-up").addClass("fa-angle-down");
        });
      } else {
        $(this).find(".fa:first").removeClass("fa-angle-down").addClass("fa-angle-up");
        spThisLi.addClass("js-opened");
        spThisLi.find(".sp-sub:first").slideDown();
      }

      return false;
    });
  })(jQuery);
}

function init_side_panel_resize() {
  (function ($) {
    "use strict";

    if ($(window).width() >= 1199) {
      side_panel.css({
        opacity: 1,
        left: 0
      });
      $(".side-panel-is-left").css("margin-left", "270px");
      sp_button.css("display", "none");
      sp_close_button.css("display", "none");
    } else {
      if (sp_close_button.is(":hidden")) {
        side_panel.css({
          opacity: 0,
          left: -270
        });
        $(".side-panel-is-left").css("margin-left", "0");
        sp_button.css("display", "block");
        sp_close_button.css("display", "block");
      }
    }
  })(jQuery);
}
/* ---------------------------------------------
 Portfolio section
 --------------------------------------------- */
// Projects filtering


var fselector = 0;
var work_grid = $("#work-grid, #isotope");

function initWorkFilter() {
  (function ($) {
    "use strict";

    var isotope_mode;

    if (work_grid.hasClass("masonry")) {
      isotope_mode = "masonry";
    } else {
      isotope_mode = "fitRows";
    }

    $(".filter").click(function () {
      $(".filter").removeClass("active");
      $(this).addClass("active");
      fselector = $(this).attr('data-filter');
      work_grid.imagesLoaded(function () {
        work_grid.isotope({
          itemSelector: '.mix',
          layoutMode: isotope_mode,
          filter: fselector
        });
      });
      return false;
    });

    if (window.location.hash) {
      $(".filter").each(function () {
        if ($(this).attr("data-filter") == "." + window.location.hash.replace("#", "")) {
          $(this).trigger('click');
          $("html, body").animate({
            scrollTop: $("#portfolio").offset().top
          });
        }
      });
    }

    work_grid.imagesLoaded(function () {
      work_grid.isotope({
        itemSelector: '.mix',
        layoutMode: isotope_mode,
        filter: fselector
      });
    }); // Lazy loading plus isotope filter

    $(".img-lazy-work").load(function () {
      masonry_update();
    });

    function masonry_update() {
      work_grid.imagesLoaded(function () {
        work_grid.isotope({
          itemSelector: '.mix',
          layoutMode: isotope_mode,
          filter: fselector
        });
      });
    }

    work_grid.on("arrangeComplete", function () {
      $(window).trigger("scroll");
    });
  })(jQuery);
}
/* ---------------------------------------------
 Height 100%
 --------------------------------------------- */


function js_height_init() {
  (function ($) {
    $(".js-height-full").height($(window).height());
    $(".js-height-parent").each(function () {
      $(this).height($(this).parent().first().height());
    });
  })(jQuery);
}
/* ---------------------------------------------
 Google map
 --------------------------------------------- */


var gmMapDiv = $("#map-canvas");

function init_map() {
  (function ($) {
    $(".map-section").click(function () {
      $(this).toggleClass("js-active");
      $(this).find(".mt-open").toggle();
      $(this).find(".mt-close").toggle();
      return false;
    });
  })(jQuery);
}
/* ---------------------------------------------
 WOW animations
 --------------------------------------------- */


function init_wow() {
  (function ($) {
    var wow = new WOW({
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 90,
      mobile: false,
      live: true
    });

    if ($("body").hasClass("appear-animate")) {
      wow.init();
    }
  })(jQuery);
}
/* ---------------------------------------------
 Masonry
 --------------------------------------------- */


function init_masonry() {
  (function ($) {
    $(".masonry").imagesLoaded(function () {
      $(".masonry").masonry();
    });
  })(jQuery);
}
/* ---------------------------------------------
 Split section
 --------------------------------------------- */


function split_height_init() {
  (function ($) {
    $(".ssh-table, .split-section-content").css("height", "auto");

    if ($(window).width() > 992) {
      $(".split-section").each(function () {
        var split_section_height = $(this).find(".split-section-content").innerHeight();
        $(this).find(".ssh-table").height(split_section_height);
      });
    }
  })(jQuery);
}
/* ---------------------------------------------
 Polyfill for :focus-visible
 --------------------------------------------- */

/**
 * https://github.com/WICG/focus-visible
 */


function init() {
  var hadKeyboardEvent = true;
  var hadFocusVisibleRecently = false;
  var hadFocusVisibleRecentlyTimeout = null;
  var inputTypesWhitelist = {
    text: true,
    search: true,
    url: true,
    tel: true,
    email: true,
    password: true,
    number: true,
    date: true,
    month: true,
    week: true,
    time: true,
    datetime: true,
    'datetime-local': true
  };
  /**
   * Helper function for legacy browsers and iframes which sometimes focus
   * elements like document, body, and non-interactive SVG.
   * @param {Element} el
   */

  function isValidFocusTarget(el) {
    if (el && el !== document && el.nodeName !== 'HTML' && el.nodeName !== 'BODY' && 'classList' in el && 'contains' in el.classList) {
      return true;
    }

    return false;
  }
  /**
   * Computes whether the given element should automatically trigger the
   * `focus-visible` class being added, i.e. whether it should always match
   * `:focus-visible` when focused.
   * @param {Element} el
   * @return {boolean}
   */


  function focusTriggersKeyboardModality(el) {
    var type = el.type;
    var tagName = el.tagName;

    if (tagName == 'INPUT' && inputTypesWhitelist[type] && !el.readOnly) {
      return true;
    }

    if (tagName == 'TEXTAREA' && !el.readOnly) {
      return true;
    }

    if (el.isContentEditable) {
      return true;
    }

    return false;
  }
  /**
   * Add the `focus-visible` class to the given element if it was not added by
   * the author.
   * @param {Element} el
   */


  function addFocusVisibleClass(el) {
    if (el.classList.contains('focus-visible')) {
      return;
    }

    el.classList.add('focus-visible');
    el.setAttribute('data-focus-visible-added', '');
  }
  /**
   * Remove the `focus-visible` class from the given element if it was not
   * originally added by the author.
   * @param {Element} el
   */


  function removeFocusVisibleClass(el) {
    if (!el.hasAttribute('data-focus-visible-added')) {
      return;
    }

    el.classList.remove('focus-visible');
    el.removeAttribute('data-focus-visible-added');
  }
  /**
   * Treat `keydown` as a signal that the user is in keyboard modality.
   * Apply `focus-visible` to any current active element and keep track
   * of our keyboard modality state with `hadKeyboardEvent`.
   * @param {Event} e
   */


  function onKeyDown(e) {
    if (isValidFocusTarget(document.activeElement)) {
      addFocusVisibleClass(document.activeElement);
    }

    hadKeyboardEvent = true;
  }
  /**
   * If at any point a user clicks with a pointing device, ensure that we change
   * the modality away from keyboard.
   * This avoids the situation where a user presses a key on an already focused
   * element, and then clicks on a different element, focusing it with a
   * pointing device, while we still think we're in keyboard modality.
   * @param {Event} e
   */


  function onPointerDown(e) {
    hadKeyboardEvent = false;
  }
  /**
   * On `focus`, add the `focus-visible` class to the target if:
   * - the target received focus as a result of keyboard navigation, or
   * - the event target is an element that will likely require interaction
   *   via the keyboard (e.g. a text box)
   * @param {Event} e
   */


  function onFocus(e) {
    // Prevent IE from focusing the document or HTML element.
    if (!isValidFocusTarget(e.target)) {
      return;
    }

    if (hadKeyboardEvent || focusTriggersKeyboardModality(e.target)) {
      addFocusVisibleClass(e.target);
    }
  }
  /**
   * On `blur`, remove the `focus-visible` class from the target.
   * @param {Event} e
   */


  function onBlur(e) {
    if (!isValidFocusTarget(e.target)) {
      return;
    }

    if (e.target.classList.contains('focus-visible') || e.target.hasAttribute('data-focus-visible-added')) {
      // To detect a tab/window switch, we look for a blur event followed
      // rapidly by a visibility change.
      // If we don't see a visibility change within 100ms, it's probably a
      // regular focus change.
      hadFocusVisibleRecently = true;
      window.clearTimeout(hadFocusVisibleRecentlyTimeout);
      hadFocusVisibleRecentlyTimeout = window.setTimeout(function () {
        hadFocusVisibleRecently = false;
        window.clearTimeout(hadFocusVisibleRecentlyTimeout);
      }, 100);
      removeFocusVisibleClass(e.target);
    }
  }
  /**
   * If the user changes tabs, keep track of whether or not the previously
   * focused element had .focus-visible.
   * @param {Event} e
   */


  function onVisibilityChange(e) {
    if (document.visibilityState == 'hidden') {
      // If the tab becomes active again, the browser will handle calling focus
      // on the element (Safari actually calls it twice).
      // If this tab change caused a blur on an element with focus-visible,
      // re-apply the class when the user switches back to the tab.
      if (hadFocusVisibleRecently) {
        hadKeyboardEvent = true;
      }

      addInitialPointerMoveListeners();
    }
  }
  /**
   * Add a group of listeners to detect usage of any pointing devices.
   * These listeners will be added when the polyfill first loads, and anytime
   * the window is blurred, so that they are active when the window regains
   * focus.
   */


  function addInitialPointerMoveListeners() {
    document.addEventListener('mousemove', onInitialPointerMove);
    document.addEventListener('mousedown', onInitialPointerMove);
    document.addEventListener('mouseup', onInitialPointerMove);
    document.addEventListener('pointermove', onInitialPointerMove);
    document.addEventListener('pointerdown', onInitialPointerMove);
    document.addEventListener('pointerup', onInitialPointerMove);
    document.addEventListener('touchmove', onInitialPointerMove);
    document.addEventListener('touchstart', onInitialPointerMove);
    document.addEventListener('touchend', onInitialPointerMove);
  }

  function removeInitialPointerMoveListeners() {
    document.removeEventListener('mousemove', onInitialPointerMove);
    document.removeEventListener('mousedown', onInitialPointerMove);
    document.removeEventListener('mouseup', onInitialPointerMove);
    document.removeEventListener('pointermove', onInitialPointerMove);
    document.removeEventListener('pointerdown', onInitialPointerMove);
    document.removeEventListener('pointerup', onInitialPointerMove);
    document.removeEventListener('touchmove', onInitialPointerMove);
    document.removeEventListener('touchstart', onInitialPointerMove);
    document.removeEventListener('touchend', onInitialPointerMove);
  }
  /**
   * When the polfyill first loads, assume the user is in keyboard modality.
   * If any event is received from a pointing device (e.g. mouse, pointer,
   * touch), turn off keyboard modality.
   * This accounts for situations where focus enters the page from the URL bar.
   * @param {Event} e
   */


  function onInitialPointerMove(e) {
    // Work around a Safari quirk that fires a mousemove on <html> whenever the
    // window blurs, even if you're tabbing out of the page. ¯\_(ツ)_/¯
    if (e.target.nodeName.toLowerCase() === 'html') {
      return;
    }

    hadKeyboardEvent = false;
    removeInitialPointerMoveListeners();
  }

  document.addEventListener('keydown', onKeyDown, true);
  document.addEventListener('mousedown', onPointerDown, true);
  document.addEventListener('pointerdown', onPointerDown, true);
  document.addEventListener('touchstart', onPointerDown, true);
  document.addEventListener('focus', onFocus, true);
  document.addEventListener('blur', onBlur, true);
  document.addEventListener('visibilitychange', onVisibilityChange, true);
  addInitialPointerMoveListeners();
  document.body.classList.add('js-focus-visible');
}
/**
 * Subscription when the DOM is ready
 * @param {Function} callback
 */


function onDOMReady(callback) {
  var loaded;
  /**
   * Callback wrapper for check loaded state
   */

  function load() {
    if (!loaded) {
      loaded = true;
      callback();
    }
  }

  if (['interactive', 'complete'].indexOf(document.readyState) >= 0) {
    callback();
  } else {
    loaded = false;
    document.addEventListener('DOMContentLoaded', load, false);
    window.addEventListener('load', load, false);
  }
}

if (typeof document !== 'undefined') {
  onDOMReady(init);
}
/* ---------------------------------------------
 Adding aria-hidden to Font Awesome and Et-line
 icons
 --------------------------------------------- */


(function () {
  var getIcons = document.querySelectorAll('i.fa, span[class^="icon"]');
  getIcons.forEach(function (iconEach) {
    var getIconAttr = iconEach.getAttribute('aria-hidden');

    if (!getIconAttr) {
      iconEach.setAttribute('aria-hidden', 'true');
    }
  });
})();

/***/ }),

/***/ "./resources/assets/front/js/bootstrap.min.js":
/*!****************************************************!*\
  !*** ./resources/assets/front/js/bootstrap.min.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*!
 * Bootstrap v3.3.4 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */

/*!
 * Generated using the Bootstrap Customizer (http://getbootstrap.com/customize/?id=fd1fa1a31efb51d94eb8)
 * Config saved to config.json and https://gist.github.com/fd1fa1a31efb51d94eb8
 */
if ("undefined" == typeof jQuery) throw new Error("Bootstrap's JavaScript requires jQuery");
+function (t) {
  "use strict";

  var e = t.fn.jquery.split(" ")[0].split(".");
  if (e[0] < 2 && e[1] < 9 || 1 == e[0] && 9 == e[1] && e[2] < 1) throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher");
}(jQuery), +function (t) {
  "use strict";

  function e(e) {
    return this.each(function () {
      var i = t(this),
          n = i.data("bs.tooltip"),
          r = "object" == _typeof(e) && e;
      (n || !/destroy|hide/.test(e)) && (n || i.data("bs.tooltip", n = new o(this, r)), "string" == typeof e && n[e]());
    });
  }

  var o = function o(t, e) {
    this.type = null, this.options = null, this.enabled = null, this.timeout = null, this.hoverState = null, this.$element = null, this.init("tooltip", t, e);
  };

  o.VERSION = "3.3.4", o.TRANSITION_DURATION = 150, o.DEFAULTS = {
    animation: !0,
    placement: "top",
    selector: !1,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: "hover focus",
    title: "",
    delay: 0,
    html: !1,
    container: !1,
    viewport: {
      selector: "body",
      padding: 0
    }
  }, o.prototype.init = function (e, o, i) {
    if (this.enabled = !0, this.type = e, this.$element = t(o), this.options = this.getOptions(i), this.$viewport = this.options.viewport && t(this.options.viewport.selector || this.options.viewport), this.$element[0] instanceof document.constructor && !this.options.selector) throw new Error("`selector` option must be specified when initializing " + this.type + " on the window.document object!");

    for (var n = this.options.trigger.split(" "), r = n.length; r--;) {
      var s = n[r];
      if ("click" == s) this.$element.on("click." + this.type, this.options.selector, t.proxy(this.toggle, this));else if ("manual" != s) {
        var a = "hover" == s ? "mouseenter" : "focusin",
            p = "hover" == s ? "mouseleave" : "focusout";
        this.$element.on(a + "." + this.type, this.options.selector, t.proxy(this.enter, this)), this.$element.on(p + "." + this.type, this.options.selector, t.proxy(this.leave, this));
      }
    }

    this.options.selector ? this._options = t.extend({}, this.options, {
      trigger: "manual",
      selector: ""
    }) : this.fixTitle();
  }, o.prototype.getDefaults = function () {
    return o.DEFAULTS;
  }, o.prototype.getOptions = function (e) {
    return e = t.extend({}, this.getDefaults(), this.$element.data(), e), e.delay && "number" == typeof e.delay && (e.delay = {
      show: e.delay,
      hide: e.delay
    }), e;
  }, o.prototype.getDelegateOptions = function () {
    var e = {},
        o = this.getDefaults();
    return this._options && t.each(this._options, function (t, i) {
      o[t] != i && (e[t] = i);
    }), e;
  }, o.prototype.enter = function (e) {
    var o = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
    return o && o.$tip && o.$tip.is(":visible") ? void (o.hoverState = "in") : (o || (o = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, o)), clearTimeout(o.timeout), o.hoverState = "in", o.options.delay && o.options.delay.show ? void (o.timeout = setTimeout(function () {
      "in" == o.hoverState && o.show();
    }, o.options.delay.show)) : o.show());
  }, o.prototype.leave = function (e) {
    var o = e instanceof this.constructor ? e : t(e.currentTarget).data("bs." + this.type);
    return o || (o = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, o)), clearTimeout(o.timeout), o.hoverState = "out", o.options.delay && o.options.delay.hide ? void (o.timeout = setTimeout(function () {
      "out" == o.hoverState && o.hide();
    }, o.options.delay.hide)) : o.hide();
  }, o.prototype.show = function () {
    var e = t.Event("show.bs." + this.type);

    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e);
      var i = t.contains(this.$element[0].ownerDocument.documentElement, this.$element[0]);
      if (e.isDefaultPrevented() || !i) return;
      var n = this,
          r = this.tip(),
          s = this.getUID(this.type);
      this.setContent(), r.attr("id", s), this.$element.attr("aria-describedby", s), this.options.animation && r.addClass("fade");
      var a = "function" == typeof this.options.placement ? this.options.placement.call(this, r[0], this.$element[0]) : this.options.placement,
          p = /\s?auto?\s?/i,
          l = p.test(a);
      l && (a = a.replace(p, "") || "top"), r.detach().css({
        top: 0,
        left: 0,
        display: "block"
      }).addClass(a).data("bs." + this.type, this), this.options.container ? r.appendTo(this.options.container) : r.insertAfter(this.$element);
      var h = this.getPosition(),
          f = r[0].offsetWidth,
          c = r[0].offsetHeight;

      if (l) {
        var d = a,
            u = this.options.container ? t(this.options.container) : this.$element.parent(),
            v = this.getPosition(u);
        a = "bottom" == a && h.bottom + c > v.bottom ? "top" : "top" == a && h.top - c < v.top ? "bottom" : "right" == a && h.right + f > v.width ? "left" : "left" == a && h.left - f < v.left ? "right" : a, r.removeClass(d).addClass(a);
      }

      var g = this.getCalculatedOffset(a, h, f, c);
      this.applyPlacement(g, a);

      var y = function y() {
        var t = n.hoverState;
        n.$element.trigger("shown.bs." + n.type), n.hoverState = null, "out" == t && n.leave(n);
      };

      t.support.transition && this.$tip.hasClass("fade") ? r.one("bsTransitionEnd", y).emulateTransitionEnd(o.TRANSITION_DURATION) : y();
    }
  }, o.prototype.applyPlacement = function (e, o) {
    var i = this.tip(),
        n = i[0].offsetWidth,
        r = i[0].offsetHeight,
        s = parseInt(i.css("margin-top"), 10),
        a = parseInt(i.css("margin-left"), 10);
    isNaN(s) && (s = 0), isNaN(a) && (a = 0), e.top = e.top + s, e.left = e.left + a, t.offset.setOffset(i[0], t.extend({
      using: function using(t) {
        i.css({
          top: Math.round(t.top),
          left: Math.round(t.left)
        });
      }
    }, e), 0), i.addClass("in");
    var p = i[0].offsetWidth,
        l = i[0].offsetHeight;
    "top" == o && l != r && (e.top = e.top + r - l);
    var h = this.getViewportAdjustedDelta(o, e, p, l);
    h.left ? e.left += h.left : e.top += h.top;
    var f = /top|bottom/.test(o),
        c = f ? 2 * h.left - n + p : 2 * h.top - r + l,
        d = f ? "offsetWidth" : "offsetHeight";
    i.offset(e), this.replaceArrow(c, i[0][d], f);
  }, o.prototype.replaceArrow = function (t, e, o) {
    this.arrow().css(o ? "left" : "top", 50 * (1 - t / e) + "%").css(o ? "top" : "left", "");
  }, o.prototype.setContent = function () {
    var t = this.tip(),
        e = this.getTitle();
    t.find(".tooltip-inner")[this.options.html ? "html" : "text"](e), t.removeClass("fade in top bottom left right");
  }, o.prototype.hide = function (e) {
    function i() {
      "in" != n.hoverState && r.detach(), n.$element.removeAttr("aria-describedby").trigger("hidden.bs." + n.type), e && e();
    }

    var n = this,
        r = t(this.$tip),
        s = t.Event("hide.bs." + this.type);
    return this.$element.trigger(s), s.isDefaultPrevented() ? void 0 : (r.removeClass("in"), t.support.transition && r.hasClass("fade") ? r.one("bsTransitionEnd", i).emulateTransitionEnd(o.TRANSITION_DURATION) : i(), this.hoverState = null, this);
  }, o.prototype.fixTitle = function () {
    var t = this.$element;
    (t.attr("title") || "string" != typeof t.attr("data-original-title")) && t.attr("data-original-title", t.attr("title") || "").attr("title", "");
  }, o.prototype.hasContent = function () {
    return this.getTitle();
  }, o.prototype.getPosition = function (e) {
    e = e || this.$element;
    var o = e[0],
        i = "BODY" == o.tagName,
        n = o.getBoundingClientRect();
    null == n.width && (n = t.extend({}, n, {
      width: n.right - n.left,
      height: n.bottom - n.top
    }));
    var r = i ? {
      top: 0,
      left: 0
    } : e.offset(),
        s = {
      scroll: i ? document.documentElement.scrollTop || document.body.scrollTop : e.scrollTop()
    },
        a = i ? {
      width: t(window).width(),
      height: t(window).height()
    } : null;
    return t.extend({}, n, s, a, r);
  }, o.prototype.getCalculatedOffset = function (t, e, o, i) {
    return "bottom" == t ? {
      top: e.top + e.height,
      left: e.left + e.width / 2 - o / 2
    } : "top" == t ? {
      top: e.top - i,
      left: e.left + e.width / 2 - o / 2
    } : "left" == t ? {
      top: e.top + e.height / 2 - i / 2,
      left: e.left - o
    } : {
      top: e.top + e.height / 2 - i / 2,
      left: e.left + e.width
    };
  }, o.prototype.getViewportAdjustedDelta = function (t, e, o, i) {
    var n = {
      top: 0,
      left: 0
    };
    if (!this.$viewport) return n;
    var r = this.options.viewport && this.options.viewport.padding || 0,
        s = this.getPosition(this.$viewport);

    if (/right|left/.test(t)) {
      var a = e.top - r - s.scroll,
          p = e.top + r - s.scroll + i;
      a < s.top ? n.top = s.top - a : p > s.top + s.height && (n.top = s.top + s.height - p);
    } else {
      var l = e.left - r,
          h = e.left + r + o;
      l < s.left ? n.left = s.left - l : h > s.width && (n.left = s.left + s.width - h);
    }

    return n;
  }, o.prototype.getTitle = function () {
    var t,
        e = this.$element,
        o = this.options;
    return t = e.attr("data-original-title") || ("function" == typeof o.title ? o.title.call(e[0]) : o.title);
  }, o.prototype.getUID = function (t) {
    do {
      t += ~~(1e6 * Math.random());
    } while (document.getElementById(t));

    return t;
  }, o.prototype.tip = function () {
    return this.$tip = this.$tip || t(this.options.template);
  }, o.prototype.arrow = function () {
    return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow");
  }, o.prototype.enable = function () {
    this.enabled = !0;
  }, o.prototype.disable = function () {
    this.enabled = !1;
  }, o.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled;
  }, o.prototype.toggle = function (e) {
    var o = this;
    e && (o = t(e.currentTarget).data("bs." + this.type), o || (o = new this.constructor(e.currentTarget, this.getDelegateOptions()), t(e.currentTarget).data("bs." + this.type, o))), o.tip().hasClass("in") ? o.leave(o) : o.enter(o);
  }, o.prototype.destroy = function () {
    var t = this;
    clearTimeout(this.timeout), this.hide(function () {
      t.$element.off("." + t.type).removeData("bs." + t.type);
    });
  };
  var i = t.fn.tooltip;
  t.fn.tooltip = e, t.fn.tooltip.Constructor = o, t.fn.tooltip.noConflict = function () {
    return t.fn.tooltip = i, this;
  };
}(jQuery), +function (t) {
  "use strict";

  function e(e) {
    return this.each(function () {
      var i = t(this),
          n = i.data("bs.popover"),
          r = "object" == _typeof(e) && e;
      (n || !/destroy|hide/.test(e)) && (n || i.data("bs.popover", n = new o(this, r)), "string" == typeof e && n[e]());
    });
  }

  var o = function o(t, e) {
    this.init("popover", t, e);
  };

  if (!t.fn.tooltip) throw new Error("Popover requires tooltip.js");
  o.VERSION = "3.3.4", o.DEFAULTS = t.extend({}, t.fn.tooltip.Constructor.DEFAULTS, {
    placement: "right",
    trigger: "click",
    content: "",
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  }), o.prototype = t.extend({}, t.fn.tooltip.Constructor.prototype), o.prototype.constructor = o, o.prototype.getDefaults = function () {
    return o.DEFAULTS;
  }, o.prototype.setContent = function () {
    var t = this.tip(),
        e = this.getTitle(),
        o = this.getContent();
    t.find(".popover-title")[this.options.html ? "html" : "text"](e), t.find(".popover-content").children().detach().end()[this.options.html ? "string" == typeof o ? "html" : "append" : "text"](o), t.removeClass("fade top bottom left right in"), t.find(".popover-title").html() || t.find(".popover-title").hide();
  }, o.prototype.hasContent = function () {
    return this.getTitle() || this.getContent();
  }, o.prototype.getContent = function () {
    var t = this.$element,
        e = this.options;
    return t.attr("data-content") || ("function" == typeof e.content ? e.content.call(t[0]) : e.content);
  }, o.prototype.arrow = function () {
    return this.$arrow = this.$arrow || this.tip().find(".arrow");
  };
  var i = t.fn.popover;
  t.fn.popover = e, t.fn.popover.Constructor = o, t.fn.popover.noConflict = function () {
    return t.fn.popover = i, this;
  };
}(jQuery), +function (t) {
  "use strict";

  function e(e) {
    return this.each(function () {
      var i = t(this),
          n = i.data("bs.tab");
      n || i.data("bs.tab", n = new o(this)), "string" == typeof e && n[e]();
    });
  }

  var o = function o(e) {
    this.element = t(e);
  };

  o.VERSION = "3.3.4", o.TRANSITION_DURATION = 150, o.prototype.show = function () {
    var e = this.element,
        o = e.closest("ul:not(.dropdown-menu)"),
        i = e.data("target");

    if (i || (i = e.attr("href"), i = i && i.replace(/.*(?=#[^\s]*$)/, "")), !e.parent("li").hasClass("active")) {
      var n = o.find(".active:last a"),
          r = t.Event("hide.bs.tab", {
        relatedTarget: e[0]
      }),
          s = t.Event("show.bs.tab", {
        relatedTarget: n[0]
      });

      if (n.trigger(r), e.trigger(s), !s.isDefaultPrevented() && !r.isDefaultPrevented()) {
        var a = t(i);
        this.activate(e.closest("li"), o), this.activate(a, a.parent(), function () {
          n.trigger({
            type: "hidden.bs.tab",
            relatedTarget: e[0]
          }), e.trigger({
            type: "shown.bs.tab",
            relatedTarget: n[0]
          });
        });
      }
    }
  }, o.prototype.activate = function (e, i, n) {
    function r() {
      s.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !1), e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded", !0), a ? (e[0].offsetWidth, e.addClass("in")) : e.removeClass("fade"), e.parent(".dropdown-menu").length && e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded", !0), n && n();
    }

    var s = i.find("> .active"),
        a = n && t.support.transition && (s.length && s.hasClass("fade") || !!i.find("> .fade").length);
    s.length && a ? s.one("bsTransitionEnd", r).emulateTransitionEnd(o.TRANSITION_DURATION) : r(), s.removeClass("in");
  };
  var i = t.fn.tab;
  t.fn.tab = e, t.fn.tab.Constructor = o, t.fn.tab.noConflict = function () {
    return t.fn.tab = i, this;
  };

  var n = function n(o) {
    o.preventDefault(), e.call(t(this), "show");
  };

  t(document).on("click.bs.tab.data-api", '[data-toggle="tab"]', n).on("click.bs.tab.data-api", '[data-toggle="pill"]', n);
}(jQuery), +function (t) {
  "use strict";

  function e() {
    var t = document.createElement("bootstrap"),
        e = {
      WebkitTransition: "webkitTransitionEnd",
      MozTransition: "transitionend",
      OTransition: "oTransitionEnd otransitionend",
      transition: "transitionend"
    };

    for (var o in e) {
      if (void 0 !== t.style[o]) return {
        end: e[o]
      };
    }

    return !1;
  }

  t.fn.emulateTransitionEnd = function (e) {
    var o = !1,
        i = this;
    t(this).one("bsTransitionEnd", function () {
      o = !0;
    });

    var n = function n() {
      o || t(i).trigger(t.support.transition.end);
    };

    return setTimeout(n, e), this;
  }, t(function () {
    t.support.transition = e(), t.support.transition && (t.event.special.bsTransitionEnd = {
      bindType: t.support.transition.end,
      delegateType: t.support.transition.end,
      handle: function handle(e) {
        return t(e.target).is(this) ? e.handleObj.handler.apply(this, arguments) : void 0;
      }
    });
  });
}(jQuery);

/***/ }),

/***/ "./resources/assets/front/js/jquery.easing.1.3.js":
/*!********************************************************!*\
  !*** ./resources/assets/front/js/jquery.easing.1.3.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery.easing.jswing = jQuery.easing.swing;
jQuery.extend(jQuery.easing, {
  def: "easeOutQuad",
  swing: function swing(e, a, c, b, d) {
    return jQuery.easing[jQuery.easing.def](e, a, c, b, d);
  },
  easeInQuad: function easeInQuad(e, a, c, b, d) {
    return b * (a /= d) * a + c;
  },
  easeOutQuad: function easeOutQuad(e, a, c, b, d) {
    return -b * (a /= d) * (a - 2) + c;
  },
  easeInOutQuad: function easeInOutQuad(e, a, c, b, d) {
    if ((a /= d / 2) < 1) return b / 2 * a * a + c;
    return -b / 2 * (--a * (a - 2) - 1) + c;
  },
  easeInCubic: function easeInCubic(e, a, c, b, d) {
    return b * (a /= d) * a * a + c;
  },
  easeOutCubic: function easeOutCubic(e, a, c, b, d) {
    return b * ((a = a / d - 1) * a * a + 1) + c;
  },
  easeInOutCubic: function easeInOutCubic(e, a, c, b, d) {
    if ((a /= d / 2) < 1) return b / 2 * a * a * a + c;
    return b / 2 * ((a -= 2) * a * a + 2) + c;
  },
  easeInQuart: function easeInQuart(e, a, c, b, d) {
    return b * (a /= d) * a * a * a + c;
  },
  easeOutQuart: function easeOutQuart(e, a, c, b, d) {
    return -b * ((a = a / d - 1) * a * a * a - 1) + c;
  },
  easeInOutQuart: function easeInOutQuart(e, a, c, b, d) {
    if ((a /= d / 2) < 1) return b / 2 * a * a * a * a + c;
    return -b / 2 * ((a -= 2) * a * a * a - 2) + c;
  },
  easeInQuint: function easeInQuint(e, a, c, b, d) {
    return b * (a /= d) * a * a * a * a + c;
  },
  easeOutQuint: function easeOutQuint(e, a, c, b, d) {
    return b * ((a = a / d - 1) * a * a * a * a + 1) + c;
  },
  easeInOutQuint: function easeInOutQuint(e, a, c, b, d) {
    if ((a /= d / 2) < 1) return b / 2 * a * a * a * a * a + c;
    return b / 2 * ((a -= 2) * a * a * a * a + 2) + c;
  },
  easeInSine: function easeInSine(e, a, c, b, d) {
    return -b * Math.cos(a / d * (Math.PI / 2)) + b + c;
  },
  easeOutSine: function easeOutSine(e, a, c, b, d) {
    return b * Math.sin(a / d * (Math.PI / 2)) + c;
  },
  easeInOutSine: function easeInOutSine(e, a, c, b, d) {
    return -b / 2 * (Math.cos(Math.PI * a / d) - 1) + c;
  },
  easeInExpo: function easeInExpo(e, a, c, b, d) {
    return a == 0 ? c : b * Math.pow(2, 10 * (a / d - 1)) + c;
  },
  easeOutExpo: function easeOutExpo(e, a, c, b, d) {
    return a == d ? c + b : b * (-Math.pow(2, -10 * a / d) + 1) + c;
  },
  easeInOutExpo: function easeInOutExpo(e, a, c, b, d) {
    if (a == 0) return c;
    if (a == d) return c + b;
    if ((a /= d / 2) < 1) return b / 2 * Math.pow(2, 10 * (a - 1)) + c;
    return b / 2 * (-Math.pow(2, -10 * --a) + 2) + c;
  },
  easeInCirc: function easeInCirc(e, a, c, b, d) {
    return -b * (Math.sqrt(1 - (a /= d) * a) - 1) + c;
  },
  easeOutCirc: function easeOutCirc(e, a, c, b, d) {
    return b * Math.sqrt(1 - (a = a / d - 1) * a) + c;
  },
  easeInOutCirc: function easeInOutCirc(e, a, c, b, d) {
    if ((a /= d / 2) < 1) return -b / 2 * (Math.sqrt(1 - a * a) - 1) + c;
    return b / 2 * (Math.sqrt(1 - (a -= 2) * a) + 1) + c;
  },
  easeInElastic: function easeInElastic(e, a, c, b, d) {
    e = 1.70158;
    var f = 0,
        g = b;
    if (a == 0) return c;
    if ((a /= d) == 1) return c + b;
    f || (f = d * 0.3);

    if (g < Math.abs(b)) {
      g = b;
      e = f / 4;
    } else e = f / (2 * Math.PI) * Math.asin(b / g);

    return -(g * Math.pow(2, 10 * (a -= 1)) * Math.sin((a * d - e) * 2 * Math.PI / f)) + c;
  },
  easeOutElastic: function easeOutElastic(e, a, c, b, d) {
    e = 1.70158;
    var f = 0,
        g = b;
    if (a == 0) return c;
    if ((a /= d) == 1) return c + b;
    f || (f = d * 0.3);

    if (g < Math.abs(b)) {
      g = b;
      e = f / 4;
    } else e = f / (2 * Math.PI) * Math.asin(b / g);

    return g * Math.pow(2, -10 * a) * Math.sin((a * d - e) * 2 * Math.PI / f) + b + c;
  },
  easeInOutElastic: function easeInOutElastic(e, a, c, b, d) {
    e = 1.70158;
    var f = 0,
        g = b;
    if (a == 0) return c;
    if ((a /= d / 2) == 2) return c + b;
    f || (f = d * 0.3 * 1.5);

    if (g < Math.abs(b)) {
      g = b;
      e = f / 4;
    } else e = f / (2 * Math.PI) * Math.asin(b / g);

    if (a < 1) return -0.5 * g * Math.pow(2, 10 * (a -= 1)) * Math.sin((a * d - e) * 2 * Math.PI / f) + c;
    return g * Math.pow(2, -10 * (a -= 1)) * Math.sin((a * d - e) * 2 * Math.PI / f) * 0.5 + b + c;
  },
  easeInBack: function easeInBack(e, a, c, b, d, f) {
    if (f == undefined) f = 1.70158;
    return b * (a /= d) * a * ((f + 1) * a - f) + c;
  },
  easeOutBack: function easeOutBack(e, a, c, b, d, f) {
    if (f == undefined) f = 1.70158;
    return b * ((a = a / d - 1) * a * ((f + 1) * a + f) + 1) + c;
  },
  easeInOutBack: function easeInOutBack(e, a, c, b, d, f) {
    if (f == undefined) f = 1.70158;
    if ((a /= d / 2) < 1) return b / 2 * a * a * (((f *= 1.525) + 1) * a - f) + c;
    return b / 2 * ((a -= 2) * a * (((f *= 1.525) + 1) * a + f) + 2) + c;
  },
  easeInBounce: function easeInBounce(e, a, c, b, d) {
    return b - jQuery.easing.easeOutBounce(e, d - a, 0, b, d) + c;
  },
  easeOutBounce: function easeOutBounce(e, a, c, b, d) {
    return (a /= d) < 1 / 2.75 ? b * 7.5625 * a * a + c : a < 2 / 2.75 ? b * (7.5625 * (a -= 1.5 / 2.75) * a + 0.75) + c : a < 2.5 / 2.75 ? b * (7.5625 * (a -= 2.25 / 2.75) * a + 0.9375) + c : b * (7.5625 * (a -= 2.625 / 2.75) * a + 0.984375) + c;
  },
  easeInOutBounce: function easeInOutBounce(e, a, c, b, d) {
    if (a < d / 2) return jQuery.easing.easeInBounce(e, a * 2, 0, b, d) * 0.5 + c;
    return jQuery.easing.easeOutBounce(e, a * 2 - d, 0, b, d) * 0.5 + b * 0.5 + c;
  }
});

/***/ }),

/***/ "./resources/assets/front/js/jquery.lazyload.min.js":
/*!**********************************************************!*\
  !*** ./resources/assets/front/js/jquery.lazyload.min.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*! Lazy Load 1.9.7 - MIT license - Copyright 2010-2015 Mika Tuupola */
!function (a, b, c, d) {
  var e = a(b);
  a.fn.lazyload = function (f) {
    function g() {
      var b = 0;
      i.each(function () {
        var c = a(this);
        if (!j.skip_invisible || c.is(":visible")) if (a.abovethetop(this, j) || a.leftofbegin(this, j)) ;else if (a.belowthefold(this, j) || a.rightoffold(this, j)) {
          if (++b > j.failure_limit) return !1;
        } else c.trigger("appear"), b = 0;
      });
    }

    var h,
        i = this,
        j = {
      threshold: 0,
      failure_limit: 0,
      event: "scroll",
      effect: "show",
      container: b,
      data_attribute: "original",
      skip_invisible: !1,
      appear: null,
      load: null,
      placeholder: "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
    };
    return f && (d !== f.failurelimit && (f.failure_limit = f.failurelimit, delete f.failurelimit), d !== f.effectspeed && (f.effect_speed = f.effectspeed, delete f.effectspeed), a.extend(j, f)), h = j.container === d || j.container === b ? e : a(j.container), 0 === j.event.indexOf("scroll") && h.bind(j.event, function () {
      return g();
    }), this.each(function () {
      var b = this,
          c = a(b);
      b.loaded = !1, (c.attr("src") === d || c.attr("src") === !1) && c.is("img") && c.attr("src", j.placeholder), c.one("appear", function () {
        if (!this.loaded) {
          if (j.appear) {
            var d = i.length;
            j.appear.call(b, d, j);
          }

          a("<img />").bind("load", function () {
            var d = c.attr("data-" + j.data_attribute);
            c.hide(), c.is("img") ? c.attr("src", d) : c.css("background-image", "url('" + d + "')"), c[j.effect](j.effect_speed), b.loaded = !0;
            var e = a.grep(i, function (a) {
              return !a.loaded;
            });

            if (i = a(e), j.load) {
              var f = i.length;
              j.load.call(b, f, j);
            }
          }).attr("src", c.attr("data-" + j.data_attribute));
        }
      }), 0 !== j.event.indexOf("scroll") && c.bind(j.event, function () {
        b.loaded || c.trigger("appear");
      });
    }), e.bind("resize", function () {
      g();
    }), /(?:iphone|ipod|ipad).*os 5/gi.test(navigator.appVersion) && e.bind("pageshow", function (b) {
      b.originalEvent && b.originalEvent.persisted && i.each(function () {
        a(this).trigger("appear");
      });
    }), a(c).ready(function () {
      g();
    }), this;
  }, a.belowthefold = function (c, f) {
    var g;
    return g = f.container === d || f.container === b ? (b.innerHeight ? b.innerHeight : e.height()) + e.scrollTop() : a(f.container).offset().top + a(f.container).height(), g <= a(c).offset().top - f.threshold;
  }, a.rightoffold = function (c, f) {
    var g;
    return g = f.container === d || f.container === b ? e.width() + e.scrollLeft() : a(f.container).offset().left + a(f.container).width(), g <= a(c).offset().left - f.threshold;
  }, a.abovethetop = function (c, f) {
    var g;
    return g = f.container === d || f.container === b ? e.scrollTop() : a(f.container).offset().top, g >= a(c).offset().top + f.threshold + a(c).height();
  }, a.leftofbegin = function (c, f) {
    var g;
    return g = f.container === d || f.container === b ? e.scrollLeft() : a(f.container).offset().left, g >= a(c).offset().left + f.threshold + a(c).width();
  }, a.inviewport = function (b, c) {
    return !(a.rightoffold(b, c) || a.leftofbegin(b, c) || a.belowthefold(b, c) || a.abovethetop(b, c));
  }, a.extend(a.expr[":"], {
    "below-the-fold": function belowTheFold(b) {
      return a.belowthefold(b, {
        threshold: 0
      });
    },
    "above-the-top": function aboveTheTop(b) {
      return !a.belowthefold(b, {
        threshold: 0
      });
    },
    "right-of-screen": function rightOfScreen(b) {
      return a.rightoffold(b, {
        threshold: 0
      });
    },
    "left-of-screen": function leftOfScreen(b) {
      return !a.rightoffold(b, {
        threshold: 0
      });
    },
    "in-viewport": function inViewport(b) {
      return a.inviewport(b, {
        threshold: 0
      });
    },
    "above-the-fold": function aboveTheFold(b) {
      return !a.belowthefold(b, {
        threshold: 0
      });
    },
    "right-of-fold": function rightOfFold(b) {
      return a.rightoffold(b, {
        threshold: 0
      });
    },
    "left-of-fold": function leftOfFold(b) {
      return !a.rightoffold(b, {
        threshold: 0
      });
    }
  });
}(jQuery, window, document);

(function ($) {
  "use strict";

  $(".img-lazy").lazyload({
    effect: "fadeIn",
    effectspeed: 1000,
    skip_invisible: false,
    threshold: 200
  });
  $(".img-lazy-work").lazyload({
    effect: "fadeIn",
    effectspeed: 1000,
    skip_invisible: false,
    threshold: 200
  });
})(jQuery);

/***/ }),

/***/ "./resources/assets/front/js/jquery.parallax-1.1.3.js":
/*!************************************************************!*\
  !*** ./resources/assets/front/js/jquery.parallax-1.1.3.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function (e) {
  var t = e(window);
  var n = t.height();
  t.resize(function () {
    n = t.height();
  });

  e.fn.parallax = function (r, i, s) {
    function l() {
      var s = t.scrollTop();
      o.each(function () {
        var t = e(this);
        var f = t.offset().top;
        var l = u(t);

        if (f + l < s || f > s + n) {
          return;
        }

        o.css("backgroundPosition", r + " " + Math.round((a - s) * i) + "px");
      });
    }

    var o = e(this);
    var u;
    var a;
    var f = 0;
    o.each(function () {
      a = o.offset().top;
    });

    if (s) {
      u = function u(e) {
        return e.outerHeight(true);
      };
    } else {
      u = function u(e) {
        return e.height();
      };
    }

    if (arguments.length < 1 || r === null) r = "50%";
    if (arguments.length < 2 || i === null) i = .1;
    if (arguments.length < 3 || s === null) s = true;
    t.bind("scroll", l).resize(l);
    l();
  };
})(jQuery);

/***/ }),

/***/ "./resources/assets/front/js/jquery.simple-text-rotator.min.js":
/*!*********************************************************************!*\
  !*** ./resources/assets/front/js/jquery.simple-text-rotator.min.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// Rotator Init 
(function ($) {
  "use strict";

  $(document).ready(function () {
    $(".text-rotate").textrotator({
      animation: "dissolve",
      // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",",
      // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 4000 // How many milliseconds until the next word show.

    });
  });
})(jQuery);

!function (e) {
  var t = {
    animation: "dissolve",
    separator: ",",
    speed: 2e3
  };

  e.fn.textrotator = function (n) {
    var r = e.extend({}, t, n);
    return this.each(function () {
      var t = e(this);
      var n = [];
      e.each(t.text().split(r.separator), function (e, t) {
        n.push(t);
      });
      t.text(n[0]);

      var i = function i() {
        switch (r.animation) {
          case "dissolve":
            t.animate({
              textShadowBlur: 20,
              opacity: 0
            }, 500, function () {
              s = e.inArray(t.text(), n);
              if (s + 1 == n.length) s = -1;
              t.text(n[s + 1]).animate({
                textShadowBlur: 0,
                opacity: 1
              }, 500);
            });
            break;

          case "flip":
            if (t.find(".back").length > 0) {
              t.html(t.find(".back").html());
            }

            var i = t.text();
            var s = e.inArray(i, n);
            if (s + 1 == n.length) s = -1;
            t.html("");
            e("<span class='front'>" + i + "</span>").appendTo(t);
            e("<span class='back'>" + n[s + 1] + "</span>").appendTo(t);
            t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip").show().css({
              "-webkit-transform": " rotateY(-180deg)",
              "-moz-transform": " rotateY(-180deg)",
              "-o-transform": " rotateY(-180deg)",
              transform: " rotateY(-180deg)"
            });
            break;

          case "flipUp":
            if (t.find(".back").length > 0) {
              t.html(t.find(".back").html());
            }

            var i = t.text();
            var s = e.inArray(i, n);
            if (s + 1 == n.length) s = -1;
            t.html("");
            e("<span class='front'>" + i + "</span>").appendTo(t);
            e("<span class='back'>" + n[s + 1] + "</span>").appendTo(t);
            t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip up").show().css({
              "-webkit-transform": " rotateX(-180deg)",
              "-moz-transform": " rotateX(-180deg)",
              "-o-transform": " rotateX(-180deg)",
              transform: " rotateX(-180deg)"
            });
            break;

          case "flipCube":
            if (t.find(".back").length > 0) {
              t.html(t.find(".back").html());
            }

            var i = t.text();
            var s = e.inArray(i, n);
            if (s + 1 == n.length) s = -1;
            t.html("");
            e("<span class='front'>" + i + "</span>").appendTo(t);
            e("<span class='back'>" + n[s + 1] + "</span>").appendTo(t);
            t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip cube").show().css({
              "-webkit-transform": " rotateY(180deg)",
              "-moz-transform": " rotateY(180deg)",
              "-o-transform": " rotateY(180deg)",
              transform: " rotateY(180deg)"
            });
            break;

          case "flipCubeUp":
            if (t.find(".back").length > 0) {
              t.html(t.find(".back").html());
            }

            var i = t.text();
            var s = e.inArray(i, n);
            if (s + 1 == n.length) s = -1;
            t.html("");
            e("<span class='front'>" + i + "</span>").appendTo(t);
            e("<span class='back'>" + n[s + 1] + "</span>").appendTo(t);
            t.wrapInner("<span class='rotating' />").find(".rotating").hide().addClass("flip cube up").show().css({
              "-webkit-transform": " rotateX(180deg)",
              "-moz-transform": " rotateX(180deg)",
              "-o-transform": " rotateX(180deg)",
              transform: " rotateX(180deg)"
            });
            break;

          case "spin":
            if (t.find(".rotating").length > 0) {
              t.html(t.find(".rotating").html());
            }

            s = e.inArray(t.text(), n);
            if (s + 1 == n.length) s = -1;
            t.wrapInner("<span class='rotating spin' />").find(".rotating").hide().text(n[s + 1]).show().css({
              "-webkit-transform": " rotate(0) scale(1)",
              "-moz-transform": "rotate(0) scale(1)",
              "-o-transform": "rotate(0) scale(1)",
              transform: "rotate(0) scale(1)"
            });
            break;

          case "fade":
            t.fadeOut(r.speed, function () {
              s = e.inArray(t.text(), n);
              if (s + 1 == n.length) s = -1;
              t.text(n[s + 1]).fadeIn(r.speed);
            });
            break;
        }
      };

      setInterval(i, r.speed);
    });
  };
}(window.jQuery);

/***/ }),

/***/ "./resources/assets/front/js/owl.carousel.min.js":
/*!*******************************************************!*\
  !*** ./resources/assets/front/js/owl.carousel.min.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

if (typeof Object.create !== "function") {
  Object.create = function (e) {
    function t() {}

    t.prototype = e;
    return new t();
  };
}

(function (e, t, n) {
  var r = {
    init: function init(t, n) {
      var r = this;
      r.$elem = e(n);
      r.options = e.extend({}, e.fn.owlCarousel.options, r.$elem.data(), t);
      r.userOptions = t;
      r.loadContent();
    },
    loadContent: function loadContent() {
      function r(e) {
        var n,
            r = "";

        if (typeof t.options.jsonSuccess === "function") {
          t.options.jsonSuccess.apply(this, [e]);
        } else {
          for (n in e.owl) {
            if (e.owl.hasOwnProperty(n)) {
              r += e.owl[n].item;
            }
          }

          t.$elem.html(r);
        }

        t.logIn();
      }

      var t = this,
          n;

      if (typeof t.options.beforeInit === "function") {
        t.options.beforeInit.apply(this, [t.$elem]);
      }

      if (typeof t.options.jsonPath === "string") {
        n = t.options.jsonPath;
        e.getJSON(n, r);
      } else {
        t.logIn();
      }
    },
    logIn: function logIn() {
      var e = this;
      e.$elem.data("owl-originalStyles", e.$elem.attr("style"));
      e.$elem.data("owl-originalClasses", e.$elem.attr("class"));
      e.$elem.css({
        opacity: 0
      });
      e.orignalItems = e.options.items;
      e.checkBrowser();
      e.wrapperWidth = 0;
      e.checkVisible = null;
      e.setVars();
    },
    setVars: function setVars() {
      var e = this;

      if (e.$elem.children().length === 0) {
        return false;
      }

      e.baseClass();
      e.eventTypes();
      e.$userItems = e.$elem.children();
      e.itemsAmount = e.$userItems.length;
      e.wrapItems();
      e.$owlItems = e.$elem.find(".owl-item");
      e.$owlWrapper = e.$elem.find(".owl-wrapper");
      e.playDirection = "next";
      e.prevItem = 0;
      e.prevArr = [0];
      e.currentItem = 0;
      e.customEvents();
      e.onStartup();
    },
    onStartup: function onStartup() {
      var e = this;
      e.updateItems();
      e.calculateAll();
      e.buildControls();
      e.updateControls();
      e.response();
      e.moveEvents();
      e.stopOnHover();
      e.owlStatus();

      if (e.options.transitionStyle !== false) {
        e.transitionTypes(e.options.transitionStyle);
      }

      if (e.options.autoPlay === true) {
        e.options.autoPlay = 5e3;
      }

      e.play();
      e.$elem.find(".owl-wrapper").css("display", "block");

      if (!e.$elem.is(":visible")) {
        e.watchVisibility();
      } else {
        e.$elem.css("opacity", 1);
      }

      e.onstartup = false;
      e.eachMoveUpdate();

      if (typeof e.options.afterInit === "function") {
        e.options.afterInit.apply(this, [e.$elem]);
      }
    },
    eachMoveUpdate: function eachMoveUpdate() {
      var e = this;

      if (e.options.lazyLoad === true) {
        e.lazyLoad();
      }

      if (e.options.autoHeight === true) {
        e.autoHeight();
      }

      e.onVisibleItems();

      if (typeof e.options.afterAction === "function") {
        e.options.afterAction.apply(this, [e.$elem]);
      }
    },
    updateVars: function updateVars() {
      var e = this;

      if (typeof e.options.beforeUpdate === "function") {
        e.options.beforeUpdate.apply(this, [e.$elem]);
      }

      e.watchVisibility();
      e.updateItems();
      e.calculateAll();
      e.updatePosition();
      e.updateControls();
      e.eachMoveUpdate();

      if (typeof e.options.afterUpdate === "function") {
        e.options.afterUpdate.apply(this, [e.$elem]);
      }
    },
    reload: function reload() {
      var e = this;
      t.setTimeout(function () {
        e.updateVars();
      }, 0);
    },
    watchVisibility: function watchVisibility() {
      var e = this;

      if (e.$elem.is(":visible") === false) {
        e.$elem.css({
          opacity: 0
        });
        t.clearInterval(e.autoPlayInterval);
        t.clearInterval(e.checkVisible);
      } else {
        return false;
      }

      e.checkVisible = t.setInterval(function () {
        if (e.$elem.is(":visible")) {
          e.reload();
          e.$elem.animate({
            opacity: 1
          }, 200);
          t.clearInterval(e.checkVisible);
        }
      }, 500);
    },
    wrapItems: function wrapItems() {
      var e = this;
      e.$userItems.wrapAll('<div class="owl-wrapper">').wrap('<div class="owl-item"></div>');
      e.$elem.find(".owl-wrapper").wrap('<div class="owl-wrapper-outer">');
      e.wrapperOuter = e.$elem.find(".owl-wrapper-outer");
      e.$elem.css("display", "block");
    },
    baseClass: function baseClass() {
      var e = this,
          t = e.$elem.hasClass(e.options.baseClass),
          n = e.$elem.hasClass(e.options.theme);

      if (!t) {
        e.$elem.addClass(e.options.baseClass);
      }

      if (!n) {
        e.$elem.addClass(e.options.theme);
      }
    },
    updateItems: function updateItems() {
      var t = this,
          n,
          r;

      if (t.options.responsive === false) {
        return false;
      }

      if (t.options.singleItem === true) {
        t.options.items = t.orignalItems = 1;
        t.options.itemsCustom = false;
        t.options.itemsDesktop = false;
        t.options.itemsDesktopSmall = false;
        t.options.itemsTablet = false;
        t.options.itemsTabletSmall = false;
        t.options.itemsMobile = false;
        return false;
      }

      n = e(t.options.responsiveBaseWidth).width();

      if (n > (t.options.itemsDesktop[0] || t.orignalItems)) {
        t.options.items = t.orignalItems;
      }

      if (t.options.itemsCustom !== false) {
        t.options.itemsCustom.sort(function (e, t) {
          return e[0] - t[0];
        });

        for (r = 0; r < t.options.itemsCustom.length; r += 1) {
          if (t.options.itemsCustom[r][0] <= n) {
            t.options.items = t.options.itemsCustom[r][1];
          }
        }
      } else {
        if (n <= t.options.itemsDesktop[0] && t.options.itemsDesktop !== false) {
          t.options.items = t.options.itemsDesktop[1];
        }

        if (n <= t.options.itemsDesktopSmall[0] && t.options.itemsDesktopSmall !== false) {
          t.options.items = t.options.itemsDesktopSmall[1];
        }

        if (n <= t.options.itemsTablet[0] && t.options.itemsTablet !== false) {
          t.options.items = t.options.itemsTablet[1];
        }

        if (n <= t.options.itemsTabletSmall[0] && t.options.itemsTabletSmall !== false) {
          t.options.items = t.options.itemsTabletSmall[1];
        }

        if (n <= t.options.itemsMobile[0] && t.options.itemsMobile !== false) {
          t.options.items = t.options.itemsMobile[1];
        }
      }

      if (t.options.items > t.itemsAmount && t.options.itemsScaleUp === true) {
        t.options.items = t.itemsAmount;
      }
    },
    response: function response() {
      var n = this,
          r,
          i;

      if (n.options.responsive !== true) {
        return false;
      }

      i = e(t).width();

      n.resizer = function () {
        if (e(t).width() !== i) {
          if (n.options.autoPlay !== false) {
            t.clearInterval(n.autoPlayInterval);
          }

          t.clearTimeout(r);
          r = t.setTimeout(function () {
            i = e(t).width();
            n.updateVars();
          }, n.options.responsiveRefreshRate);
        }
      };

      e(t).resize(n.resizer);
    },
    updatePosition: function updatePosition() {
      var e = this;
      e.jumpTo(e.currentItem);

      if (e.options.autoPlay !== false) {
        e.checkAp();
      }
    },
    appendItemsSizes: function appendItemsSizes() {
      var t = this,
          n = 0,
          r = t.itemsAmount - t.options.items;
      t.$owlItems.each(function (i) {
        var s = e(this);
        s.css({
          width: t.itemWidth
        }).data("owl-item", Number(i));

        if (i % t.options.items === 0 || i === r) {
          if (!(i > r)) {
            n += 1;
          }
        }

        s.data("owl-roundPages", n);
      });
    },
    appendWrapperSizes: function appendWrapperSizes() {
      var e = this,
          t = e.$owlItems.length * e.itemWidth;
      e.$owlWrapper.css({
        width: t * 2,
        left: 0
      });
      e.appendItemsSizes();
    },
    calculateAll: function calculateAll() {
      var e = this;
      e.calculateWidth();
      e.appendWrapperSizes();
      e.loops();
      e.max();
    },
    calculateWidth: function calculateWidth() {
      var e = this;
      e.itemWidth = Math.round(e.$elem.width() / e.options.items);
    },
    max: function max() {
      var e = this,
          t = (e.itemsAmount * e.itemWidth - e.options.items * e.itemWidth) * -1;

      if (e.options.items > e.itemsAmount) {
        e.maximumItem = 0;
        t = 0;
        e.maximumPixels = 0;
      } else {
        e.maximumItem = e.itemsAmount - e.options.items;
        e.maximumPixels = t;
      }

      return t;
    },
    min: function min() {
      return 0;
    },
    loops: function loops() {
      var t = this,
          n = 0,
          r = 0,
          i,
          s,
          o;
      t.positionsInArray = [0];
      t.pagesInArray = [];

      for (i = 0; i < t.itemsAmount; i += 1) {
        r += t.itemWidth;
        t.positionsInArray.push(-r);

        if (t.options.scrollPerPage === true) {
          s = e(t.$owlItems[i]);
          o = s.data("owl-roundPages");

          if (o !== n) {
            t.pagesInArray[n] = t.positionsInArray[i];
            n = o;
          }
        }
      }
    },
    buildControls: function buildControls() {
      var t = this;

      if (t.options.navigation === true || t.options.pagination === true) {
        t.owlControls = e('<div class="owl-controls"/>').toggleClass("clickable", !t.browser.isTouch).appendTo(t.$elem);
      }

      if (t.options.pagination === true) {
        t.buildPagination();
      }

      if (t.options.navigation === true) {
        t.buildButtons();
      }
    },
    buildButtons: function buildButtons() {
      var t = this,
          n = e('<div class="owl-buttons"/>');
      t.owlControls.append(n);
      t.buttonPrev = e("<div/>", {
        "class": "owl-prev",
        html: t.options.navigationText[0] || ""
      });
      t.buttonNext = e("<div/>", {
        "class": "owl-next",
        html: t.options.navigationText[1] || ""
      });
      n.append(t.buttonPrev).append(t.buttonNext);
      n.on("touchstart.owlControls mousedown.owlControls", 'div[class^="owl"]', function (e) {
        e.preventDefault();
      });
      n.on("touchend.owlControls mouseup.owlControls", 'div[class^="owl"]', function (n) {
        n.preventDefault();

        if (e(this).hasClass("owl-next")) {
          t.next();
        } else {
          t.prev();
        }
      });
    },
    buildPagination: function buildPagination() {
      var t = this;
      t.paginationWrapper = e('<div class="owl-pagination"/>');
      t.owlControls.append(t.paginationWrapper);
      t.paginationWrapper.on("touchend.owlControls mouseup.owlControls", ".owl-page", function (n) {
        n.preventDefault();

        if (Number(e(this).data("owl-page")) !== t.currentItem) {
          t.goTo(Number(e(this).data("owl-page")), true);
        }
      });
    },
    updatePagination: function updatePagination() {
      var t = this,
          n,
          r,
          i,
          s,
          o,
          u;

      if (t.options.pagination === false) {
        return false;
      }

      t.paginationWrapper.html("");
      n = 0;
      r = t.itemsAmount - t.itemsAmount % t.options.items;

      for (s = 0; s < t.itemsAmount; s += 1) {
        if (s % t.options.items === 0) {
          n += 1;

          if (r === s) {
            i = t.itemsAmount - t.options.items;
          }

          o = e("<div/>", {
            "class": "owl-page"
          });
          u = e("<span></span>", {
            text: t.options.paginationNumbers === true ? n : "",
            "class": t.options.paginationNumbers === true ? "owl-numbers" : ""
          });
          o.append(u);
          o.data("owl-page", r === s ? i : s);
          o.data("owl-roundPages", n);
          t.paginationWrapper.append(o);
        }
      }

      t.checkPagination();
    },
    checkPagination: function checkPagination() {
      var t = this;

      if (t.options.pagination === false) {
        return false;
      }

      t.paginationWrapper.find(".owl-page").each(function () {
        if (e(this).data("owl-roundPages") === e(t.$owlItems[t.currentItem]).data("owl-roundPages")) {
          t.paginationWrapper.find(".owl-page").removeClass("active");
          e(this).addClass("active");
        }
      });
    },
    checkNavigation: function checkNavigation() {
      var e = this;

      if (e.options.navigation === false) {
        return false;
      }

      if (e.options.rewindNav === false) {
        if (e.currentItem === 0 && e.maximumItem === 0) {
          e.buttonPrev.addClass("disabled");
          e.buttonNext.addClass("disabled");
        } else if (e.currentItem === 0 && e.maximumItem !== 0) {
          e.buttonPrev.addClass("disabled");
          e.buttonNext.removeClass("disabled");
        } else if (e.currentItem === e.maximumItem) {
          e.buttonPrev.removeClass("disabled");
          e.buttonNext.addClass("disabled");
        } else if (e.currentItem !== 0 && e.currentItem !== e.maximumItem) {
          e.buttonPrev.removeClass("disabled");
          e.buttonNext.removeClass("disabled");
        }
      }
    },
    updateControls: function updateControls() {
      var e = this;
      e.updatePagination();
      e.checkNavigation();

      if (e.owlControls) {
        if (e.options.items >= e.itemsAmount) {
          e.owlControls.hide();
        } else {
          e.owlControls.show();
        }
      }
    },
    destroyControls: function destroyControls() {
      var e = this;

      if (e.owlControls) {
        e.owlControls.remove();
      }
    },
    next: function next(e) {
      var t = this;

      if (t.isTransition) {
        return false;
      }

      t.currentItem += t.options.scrollPerPage === true ? t.options.items : 1;

      if (t.currentItem > t.maximumItem + (t.options.scrollPerPage === true ? t.options.items - 1 : 0)) {
        if (t.options.rewindNav === true) {
          t.currentItem = 0;
          e = "rewind";
        } else {
          t.currentItem = t.maximumItem;
          return false;
        }
      }

      t.goTo(t.currentItem, e);
    },
    prev: function prev(e) {
      var t = this;

      if (t.isTransition) {
        return false;
      }

      if (t.options.scrollPerPage === true && t.currentItem > 0 && t.currentItem < t.options.items) {
        t.currentItem = 0;
      } else {
        t.currentItem -= t.options.scrollPerPage === true ? t.options.items : 1;
      }

      if (t.currentItem < 0) {
        if (t.options.rewindNav === true) {
          t.currentItem = t.maximumItem;
          e = "rewind";
        } else {
          t.currentItem = 0;
          return false;
        }
      }

      t.goTo(t.currentItem, e);
    },
    goTo: function goTo(e, n, r) {
      var i = this,
          s;

      if (i.isTransition) {
        return false;
      }

      if (typeof i.options.beforeMove === "function") {
        i.options.beforeMove.apply(this, [i.$elem]);
      }

      if (e >= i.maximumItem) {
        e = i.maximumItem;
      } else if (e <= 0) {
        e = 0;
      }

      i.currentItem = i.owl.currentItem = e;

      if (i.options.transitionStyle !== false && r !== "drag" && i.options.items === 1 && i.browser.support3d === true) {
        i.swapSpeed(0);

        if (i.browser.support3d === true) {
          i.transition3d(i.positionsInArray[e]);
        } else {
          i.css2slide(i.positionsInArray[e], 1);
        }

        i.afterGo();
        i.singleItemTransition();
        return false;
      }

      s = i.positionsInArray[e];

      if (i.browser.support3d === true) {
        i.isCss3Finish = false;

        if (n === true) {
          i.swapSpeed("paginationSpeed");
          t.setTimeout(function () {
            i.isCss3Finish = true;
          }, i.options.paginationSpeed);
        } else if (n === "rewind") {
          i.swapSpeed(i.options.rewindSpeed);
          t.setTimeout(function () {
            i.isCss3Finish = true;
          }, i.options.rewindSpeed);
        } else {
          i.swapSpeed("slideSpeed");
          t.setTimeout(function () {
            i.isCss3Finish = true;
          }, i.options.slideSpeed);
        }

        i.transition3d(s);
      } else {
        if (n === true) {
          i.css2slide(s, i.options.paginationSpeed);
        } else if (n === "rewind") {
          i.css2slide(s, i.options.rewindSpeed);
        } else {
          i.css2slide(s, i.options.slideSpeed);
        }
      }

      i.afterGo();
    },
    jumpTo: function jumpTo(e) {
      var t = this;

      if (typeof t.options.beforeMove === "function") {
        t.options.beforeMove.apply(this, [t.$elem]);
      }

      if (e >= t.maximumItem || e === -1) {
        e = t.maximumItem;
      } else if (e <= 0) {
        e = 0;
      }

      t.swapSpeed(0);

      if (t.browser.support3d === true) {
        t.transition3d(t.positionsInArray[e]);
      } else {
        t.css2slide(t.positionsInArray[e], 1);
      }

      t.currentItem = t.owl.currentItem = e;
      t.afterGo();
    },
    afterGo: function afterGo() {
      var e = this;
      e.prevArr.push(e.currentItem);
      e.prevItem = e.owl.prevItem = e.prevArr[e.prevArr.length - 2];
      e.prevArr.shift(0);

      if (e.prevItem !== e.currentItem) {
        e.checkPagination();
        e.checkNavigation();
        e.eachMoveUpdate();

        if (e.options.autoPlay !== false) {
          e.checkAp();
        }
      }

      if (typeof e.options.afterMove === "function" && e.prevItem !== e.currentItem) {
        e.options.afterMove.apply(this, [e.$elem]);
      }
    },
    stop: function stop() {
      var e = this;
      e.apStatus = "stop";
      t.clearInterval(e.autoPlayInterval);
    },
    checkAp: function checkAp() {
      var e = this;

      if (e.apStatus !== "stop") {
        e.play();
      }
    },
    play: function play() {
      var e = this;
      e.apStatus = "play";

      if (e.options.autoPlay === false) {
        return false;
      }

      t.clearInterval(e.autoPlayInterval);
      e.autoPlayInterval = t.setInterval(function () {
        e.next(true);
      }, e.options.autoPlay);
    },
    swapSpeed: function swapSpeed(e) {
      var t = this;

      if (e === "slideSpeed") {
        t.$owlWrapper.css(t.addCssSpeed(t.options.slideSpeed));
      } else if (e === "paginationSpeed") {
        t.$owlWrapper.css(t.addCssSpeed(t.options.paginationSpeed));
      } else if (typeof e !== "string") {
        t.$owlWrapper.css(t.addCssSpeed(e));
      }
    },
    addCssSpeed: function addCssSpeed(e) {
      return {
        "-webkit-transition": "all " + e + "ms ease",
        "-moz-transition": "all " + e + "ms ease",
        "-o-transition": "all " + e + "ms ease",
        transition: "all " + e + "ms ease"
      };
    },
    removeTransition: function removeTransition() {
      return {
        "-webkit-transition": "",
        "-moz-transition": "",
        "-o-transition": "",
        transition: ""
      };
    },
    doTranslate: function doTranslate(e) {
      return {
        "-webkit-transform": "translate3d(" + e + "px, 0px, 0px)",
        "-moz-transform": "translate3d(" + e + "px, 0px, 0px)",
        "-o-transform": "translate3d(" + e + "px, 0px, 0px)",
        "-ms-transform": "translate3d(" + e + "px, 0px, 0px)",
        transform: "translate3d(" + e + "px, 0px,0px)"
      };
    },
    transition3d: function transition3d(e) {
      var t = this;
      t.$owlWrapper.css(t.doTranslate(e));
    },
    css2move: function css2move(e) {
      var t = this;
      t.$owlWrapper.css({
        left: e
      });
    },
    css2slide: function css2slide(e, t) {
      var n = this;
      n.isCssFinish = false;
      n.$owlWrapper.stop(true, true).animate({
        left: e
      }, {
        duration: t || n.options.slideSpeed,
        complete: function complete() {
          n.isCssFinish = true;
        }
      });
    },
    checkBrowser: function checkBrowser() {
      var e = this,
          r = "translate3d(0px, 0px, 0px)",
          i = n.createElement("div"),
          s,
          o,
          u,
          a,
          f = n.documentElement.style;
      i.style.cssText = "  -moz-transform:" + r + "; -ms-transform:" + r + "; -o-transform:" + r + "; -webkit-transform:" + r + "; transform:" + r;
      s = /translate3d\(0px, 0px, 0px\)/g;
      o = i.style.cssText.match(s);
      u = f.webkitTransition !== undefined || f.MozTransition !== undefined || f.OTransition !== undefined || f.transition !== undefined;
      a = "ontouchstart" in t || t.navigator.msMaxTouchPoints;
      e.browser = {
        support3d: u,
        isTouch: a
      };
    },
    moveEvents: function moveEvents() {
      var e = this;

      if (e.options.mouseDrag !== false || e.options.touchDrag !== false) {
        e.gestures();
        e.disabledEvents();
      }
    },
    eventTypes: function eventTypes() {
      var e = this,
          t = ["s", "e", "x"];
      e.ev_types = {};

      if (e.options.mouseDrag === true && e.options.touchDrag === true) {
        t = ["touchstart.owl mousedown.owl", "touchmove.owl mousemove.owl", "touchend.owl touchcancel.owl mouseup.owl"];
      } else if (e.options.mouseDrag === false && e.options.touchDrag === true) {
        t = ["touchstart.owl", "touchmove.owl", "touchend.owl touchcancel.owl"];
      } else if (e.options.mouseDrag === true && e.options.touchDrag === false) {
        t = ["mousedown.owl", "mousemove.owl", "mouseup.owl"];
      }

      e.ev_types.start = t[0];
      e.ev_types.move = t[1];
      e.ev_types.end = t[2];
    },
    disabledEvents: function disabledEvents() {
      var t = this;
      t.$elem.on("dragstart.owl", function (e) {
        e.preventDefault();
      });
      t.$elem.on("mousedown.disableTextSelect", function (t) {
        return e(t.target).is("input, textarea, select, option");
      });
    },
    gestures: function gestures() {
      function s(e) {
        if (e.touches !== undefined) {
          return {
            x: e.touches[0].pageX,
            y: e.touches[0].pageY
          };
        }

        if (e.touches === undefined) {
          if (e.pageX !== undefined) {
            return {
              x: e.pageX,
              y: e.pageY
            };
          }

          if (e.pageX === undefined) {
            return {
              x: e.clientX,
              y: e.clientY
            };
          }
        }
      }

      function o(t) {
        if (t === "on") {
          e(n).on(r.ev_types.move, a);
          e(n).on(r.ev_types.end, f);
        } else if (t === "off") {
          e(n).off(r.ev_types.move);
          e(n).off(r.ev_types.end);
        }
      }

      function u(n) {
        var u = n.originalEvent || n || t.event,
            a;

        if (u.which === 3) {
          return false;
        }

        if (r.itemsAmount <= r.options.items) {
          return;
        }

        if (r.isCssFinish === false && !r.options.dragBeforeAnimFinish) {
          return false;
        }

        if (r.isCss3Finish === false && !r.options.dragBeforeAnimFinish) {
          return false;
        }

        if (r.options.autoPlay !== false) {
          t.clearInterval(r.autoPlayInterval);
        }

        if (r.browser.isTouch !== true && !r.$owlWrapper.hasClass("grabbing")) {
          r.$owlWrapper.addClass("grabbing");
        }

        r.newPosX = 0;
        r.newRelativeX = 0;
        e(this).css(r.removeTransition());
        a = e(this).position();
        i.relativePos = a.left;
        i.offsetX = s(u).x - a.left;
        i.offsetY = s(u).y - a.top;
        o("on");
        i.sliding = false;
        i.targetElement = u.target || u.srcElement;
      }

      function a(o) {
        var u = o.originalEvent || o || t.event,
            a,
            f;
        r.newPosX = s(u).x - i.offsetX;
        r.newPosY = s(u).y - i.offsetY;
        r.newRelativeX = r.newPosX - i.relativePos;

        if (typeof r.options.startDragging === "function" && i.dragging !== true && r.newRelativeX !== 0) {
          i.dragging = true;
          r.options.startDragging.apply(r, [r.$elem]);
        }

        if ((r.newRelativeX > 8 || r.newRelativeX < -8) && r.browser.isTouch === true) {
          if (u.preventDefault !== undefined) {
            u.preventDefault();
          } else {
            u.returnValue = false;
          }

          i.sliding = true;
        }

        if ((r.newPosY > 10 || r.newPosY < -10) && i.sliding === false) {
          e(n).off("touchmove.owl");
        }

        a = function a() {
          return r.newRelativeX / 5;
        };

        f = function f() {
          return r.maximumPixels + r.newRelativeX / 5;
        };

        r.newPosX = Math.max(Math.min(r.newPosX, a()), f());

        if (r.browser.support3d === true) {
          r.transition3d(r.newPosX);
        } else {
          r.css2move(r.newPosX);
        }
      }

      function f(n) {
        var s = n.originalEvent || n || t.event,
            u,
            a,
            f;
        s.target = s.target || s.srcElement;
        i.dragging = false;

        if (r.browser.isTouch !== true) {
          r.$owlWrapper.removeClass("grabbing");
        }

        if (r.newRelativeX < 0) {
          r.dragDirection = r.owl.dragDirection = "left";
        } else {
          r.dragDirection = r.owl.dragDirection = "right";
        }

        if (r.newRelativeX !== 0) {
          u = r.getNewPosition();
          r.goTo(u, false, "drag");

          if (i.targetElement === s.target && r.browser.isTouch !== true) {
            e(s.target).on("click.disable", function (t) {
              t.stopImmediatePropagation();
              t.stopPropagation();
              t.preventDefault();
              e(t.target).off("click.disable");
            });
            a = e._data(s.target, "events").click;
            f = a.pop();
            a.splice(0, 0, f);
          }
        }

        o("off");
      }

      var r = this,
          i = {
        offsetX: 0,
        offsetY: 0,
        baseElWidth: 0,
        relativePos: 0,
        position: null,
        minSwipe: null,
        maxSwipe: null,
        sliding: null,
        dargging: null,
        targetElement: null
      };
      r.isCssFinish = true;
      r.$elem.on(r.ev_types.start, ".owl-wrapper", u);
    },
    getNewPosition: function getNewPosition() {
      var e = this,
          t = e.closestItem();

      if (t > e.maximumItem) {
        e.currentItem = e.maximumItem;
        t = e.maximumItem;
      } else if (e.newPosX >= 0) {
        t = 0;
        e.currentItem = 0;
      }

      return t;
    },
    closestItem: function closestItem() {
      var t = this,
          n = t.options.scrollPerPage === true ? t.pagesInArray : t.positionsInArray,
          r = t.newPosX,
          i = null;
      e.each(n, function (s, o) {
        if (r - t.itemWidth / 20 > n[s + 1] && r - t.itemWidth / 20 < o && t.moveDirection() === "left") {
          i = o;

          if (t.options.scrollPerPage === true) {
            t.currentItem = e.inArray(i, t.positionsInArray);
          } else {
            t.currentItem = s;
          }
        } else if (r + t.itemWidth / 20 < o && r + t.itemWidth / 20 > (n[s + 1] || n[s] - t.itemWidth) && t.moveDirection() === "right") {
          if (t.options.scrollPerPage === true) {
            i = n[s + 1] || n[n.length - 1];
            t.currentItem = e.inArray(i, t.positionsInArray);
          } else {
            i = n[s + 1];
            t.currentItem = s + 1;
          }
        }
      });
      return t.currentItem;
    },
    moveDirection: function moveDirection() {
      var e = this,
          t;

      if (e.newRelativeX < 0) {
        t = "right";
        e.playDirection = "next";
      } else {
        t = "left";
        e.playDirection = "prev";
      }

      return t;
    },
    customEvents: function customEvents() {
      var e = this;
      e.$elem.on("owl.next", function () {
        e.next();
      });
      e.$elem.on("owl.prev", function () {
        e.prev();
      });
      e.$elem.on("owl.play", function (t, n) {
        e.options.autoPlay = n;
        e.play();
        e.hoverStatus = "play";
      });
      e.$elem.on("owl.stop", function () {
        e.stop();
        e.hoverStatus = "stop";
      });
      e.$elem.on("owl.goTo", function (t, n) {
        e.goTo(n);
      });
      e.$elem.on("owl.jumpTo", function (t, n) {
        e.jumpTo(n);
      });
    },
    stopOnHover: function stopOnHover() {
      var e = this;

      if (e.options.stopOnHover === true && e.browser.isTouch !== true && e.options.autoPlay !== false) {
        e.$elem.on("mouseover", function () {
          e.stop();
        });
        e.$elem.on("mouseout", function () {
          if (e.hoverStatus !== "stop") {
            e.play();
          }
        });
      }
    },
    lazyLoad: function lazyLoad() {
      var t = this,
          n,
          r,
          i,
          s,
          o;

      if (t.options.lazyLoad === false) {
        return false;
      }

      for (n = 0; n < t.itemsAmount; n += 1) {
        r = e(t.$owlItems[n]);

        if (r.data("owl-loaded") === "loaded") {
          continue;
        }

        i = r.data("owl-item");
        s = r.find(".lazyOwl");

        if (typeof s.data("src") !== "string") {
          r.data("owl-loaded", "loaded");
          continue;
        }

        if (r.data("owl-loaded") === undefined) {
          s.hide();
          r.addClass("loading").data("owl-loaded", "checked");
        }

        if (t.options.lazyFollow === true) {
          o = i >= t.currentItem;
        } else {
          o = true;
        }

        if (o && i < t.currentItem + t.options.items && s.length) {
          t.lazyPreload(r, s);
        }
      }
    },
    lazyPreload: function lazyPreload(e, n) {
      function o() {
        e.data("owl-loaded", "loaded").removeClass("loading");
        n.removeAttr("data-src");

        if (r.options.lazyEffect === "fade") {
          n.fadeIn(400);
        } else {
          n.show();
        }

        if (typeof r.options.afterLazyLoad === "function") {
          r.options.afterLazyLoad.apply(this, [r.$elem]);
        }
      }

      function u() {
        i += 1;

        if (r.completeImg(n.get(0)) || s === true) {
          o();
        } else if (i <= 100) {
          t.setTimeout(u, 100);
        } else {
          o();
        }
      }

      var r = this,
          i = 0,
          s;

      if (n.prop("tagName") === "DIV") {
        n.css("background-image", "url(" + n.data("src") + ")");
        s = true;
      } else {
        n[0].src = n.data("src");
      }

      u();
    },
    autoHeight: function autoHeight() {
      function s() {
        var r = e(n.$owlItems[n.currentItem]).height();
        n.wrapperOuter.css("height", r + "px");

        if (!n.wrapperOuter.hasClass("autoHeight")) {
          t.setTimeout(function () {
            n.wrapperOuter.addClass("autoHeight");
          }, 0);
        }
      }

      function o() {
        i += 1;

        if (n.completeImg(r.get(0))) {
          s();
        } else if (i <= 100) {
          t.setTimeout(o, 100);
        } else {
          n.wrapperOuter.css("height", "");
        }
      }

      var n = this,
          r = e(n.$owlItems[n.currentItem]).find("img"),
          i;

      if (r.get(0) !== undefined) {
        i = 0;
        o();
      } else {
        s();
      }
    },
    completeImg: function completeImg(e) {
      var t;

      if (!e.complete) {
        return false;
      }

      t = _typeof(e.naturalWidth);

      if (t !== "undefined" && e.naturalWidth === 0) {
        return false;
      }

      return true;
    },
    onVisibleItems: function onVisibleItems() {
      var t = this,
          n;

      if (t.options.addClassActive === true) {
        t.$owlItems.removeClass("active");
      }

      t.visibleItems = [];

      for (n = t.currentItem; n < t.currentItem + t.options.items; n += 1) {
        t.visibleItems.push(n);

        if (t.options.addClassActive === true) {
          e(t.$owlItems[n]).addClass("active");
        }
      }

      t.owl.visibleItems = t.visibleItems;
    },
    transitionTypes: function transitionTypes(e) {
      var t = this;
      t.outClass = "owl-" + e + "-out";
      t.inClass = "owl-" + e + "-in";
    },
    singleItemTransition: function singleItemTransition() {
      function a(e) {
        return {
          position: "relative",
          left: e + "px"
        };
      }

      var e = this,
          t = e.outClass,
          n = e.inClass,
          r = e.$owlItems.eq(e.currentItem),
          i = e.$owlItems.eq(e.prevItem),
          s = Math.abs(e.positionsInArray[e.currentItem]) + e.positionsInArray[e.prevItem],
          o = Math.abs(e.positionsInArray[e.currentItem]) + e.itemWidth / 2,
          u = "webkitAnimationEnd oAnimationEnd MSAnimationEnd animationend";
      e.isTransition = true;
      e.$owlWrapper.addClass("owl-origin").css({
        "-webkit-transform-origin": o + "px",
        "-moz-perspective-origin": o + "px",
        "perspective-origin": o + "px"
      });
      i.css(a(s, 10)).addClass(t).on(u, function () {
        e.endPrev = true;
        i.off(u);
        e.clearTransStyle(i, t);
      });
      r.addClass(n).on(u, function () {
        e.endCurrent = true;
        r.off(u);
        e.clearTransStyle(r, n);
      });
    },
    clearTransStyle: function clearTransStyle(e, t) {
      var n = this;
      e.css({
        position: "",
        left: ""
      }).removeClass(t);

      if (n.endPrev && n.endCurrent) {
        n.$owlWrapper.removeClass("owl-origin");
        n.endPrev = false;
        n.endCurrent = false;
        n.isTransition = false;
      }
    },
    owlStatus: function owlStatus() {
      var e = this;
      e.owl = {
        userOptions: e.userOptions,
        baseElement: e.$elem,
        userItems: e.$userItems,
        owlItems: e.$owlItems,
        currentItem: e.currentItem,
        prevItem: e.prevItem,
        visibleItems: e.visibleItems,
        isTouch: e.browser.isTouch,
        browser: e.browser,
        dragDirection: e.dragDirection
      };
    },
    clearEvents: function clearEvents() {
      var r = this;
      r.$elem.off(".owl owl mousedown.disableTextSelect");
      e(n).off(".owl owl");
      e(t).off("resize", r.resizer);
    },
    unWrap: function unWrap() {
      var e = this;

      if (e.$elem.children().length !== 0) {
        e.$owlWrapper.unwrap();
        e.$userItems.unwrap().unwrap();

        if (e.owlControls) {
          e.owlControls.remove();
        }
      }

      e.clearEvents();
      e.$elem.attr("style", e.$elem.data("owl-originalStyles") || "").attr("class", e.$elem.data("owl-originalClasses"));
    },
    destroy: function destroy() {
      var e = this;
      e.stop();
      t.clearInterval(e.checkVisible);
      e.unWrap();
      e.$elem.removeData();
    },
    reinit: function reinit(t) {
      var n = this,
          r = e.extend({}, n.userOptions, t);
      n.unWrap();
      n.init(r, n.$elem);
    },
    addItem: function addItem(e, t) {
      var n = this,
          r;

      if (!e) {
        return false;
      }

      if (n.$elem.children().length === 0) {
        n.$elem.append(e);
        n.setVars();
        return false;
      }

      n.unWrap();

      if (t === undefined || t === -1) {
        r = -1;
      } else {
        r = t;
      }

      if (r >= n.$userItems.length || r === -1) {
        n.$userItems.eq(-1).after(e);
      } else {
        n.$userItems.eq(r).before(e);
      }

      n.setVars();
    },
    removeItem: function removeItem(e) {
      var t = this,
          n;

      if (t.$elem.children().length === 0) {
        return false;
      }

      if (e === undefined || e === -1) {
        n = -1;
      } else {
        n = e;
      }

      t.unWrap();
      t.$userItems.eq(n).remove();
      t.setVars();
    }
  };

  e.fn.owlCarousel = function (t) {
    return this.each(function () {
      if (e(this).data("owl-init") === true) {
        return false;
      }

      e(this).data("owl-init", true);
      var n = Object.create(r);
      n.init(t, this);
      e.data(this, "owlCarousel", n);
    });
  };

  e.fn.owlCarousel.options = {
    items: 5,
    itemsCustom: false,
    itemsDesktop: [1199, 4],
    itemsDesktopSmall: [979, 3],
    itemsTablet: [768, 2],
    itemsTabletSmall: false,
    itemsMobile: [479, 1],
    singleItem: false,
    itemsScaleUp: false,
    slideSpeed: 200,
    paginationSpeed: 800,
    rewindSpeed: 1e3,
    autoPlay: false,
    stopOnHover: false,
    navigation: false,
    navigationText: ["prev", "next"],
    rewindNav: true,
    scrollPerPage: false,
    pagination: true,
    paginationNumbers: false,
    responsive: true,
    responsiveRefreshRate: 200,
    responsiveBaseWidth: t,
    baseClass: "owl-carousel",
    theme: "owl-theme",
    lazyLoad: false,
    lazyFollow: true,
    lazyEffect: "fade",
    autoHeight: false,
    jsonPath: false,
    jsonSuccess: false,
    dragBeforeAnimFinish: true,
    mouseDrag: true,
    touchDrag: true,
    addClassActive: false,
    transitionStyle: false,
    beforeUpdate: false,
    afterUpdate: false,
    beforeInit: false,
    afterInit: false,
    beforeMove: false,
    afterMove: false,
    afterAction: false,
    startDragging: false,
    afterLazyLoad: false
  };
})(jQuery, window, document);

/***/ }),

/***/ "./resources/assets/front/js/timeline.js":
/*!***********************************************!*\
  !*** ./resources/assets/front/js/timeline.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(document).ready(function ($) {
  var timelines = $('.cd-horizontal-timeline'),
      eventsMinDistance = 140;
  timelines.length > 0 && initTimeline(timelines);

  function initTimeline(timelines) {
    timelines.each(function () {
      var timeline = $(this),
          timelineComponents = {}; //cache timeline components

      timelineComponents['timelineWrapper'] = timeline.find('.events-wrapper');
      timelineComponents['eventsWrapper'] = timelineComponents['timelineWrapper'].children('.events');
      timelineComponents['fillingLine'] = timelineComponents['eventsWrapper'].children('.filling-line');
      timelineComponents['timelineEvents'] = timelineComponents['eventsWrapper'].find('a');
      timelineComponents['timelineDates'] = parseDate(timelineComponents['timelineEvents']);
      timelineComponents['eventsMinLapse'] = minLapse(timelineComponents['timelineDates']);
      timelineComponents['timelineNavigation'] = timeline.find('.cd-timeline-navigation');
      timelineComponents['eventsContent'] = timeline.children('.events-content'); //assign a left postion to the single events along the timeline

      setDatePosition(timelineComponents, eventsMinDistance); //assign a width to the timeline

      var timelineTotWidth = setTimelineWidth(timelineComponents, eventsMinDistance); //the timeline has been initialize - show it

      timeline.addClass('loaded'); //detect click on the next arrow

      timelineComponents['timelineNavigation'].on('click', '.next', function (event) {
        event.preventDefault();
        updateSlide(timelineComponents, timelineTotWidth, 'next');
      }); //detect click on the prev arrow

      timelineComponents['timelineNavigation'].on('click', '.prev', function (event) {
        event.preventDefault();
        updateSlide(timelineComponents, timelineTotWidth, 'prev');
      }); //detect click on the a single event - show new event content

      timelineComponents['eventsWrapper'].on('click', 'a', function (event) {
        event.preventDefault();
        timelineComponents['timelineEvents'].removeClass('selected');
        $(this).addClass('selected');
        updateOlderEvents($(this));
        updateFilling($(this), timelineComponents['fillingLine'], timelineTotWidth);
        updateVisibleContent($(this), timelineComponents['eventsContent']);
      }); //on swipe, show next/prev event content

      timelineComponents['eventsContent'].on('swipeleft', function () {
        var mq = checkMQ();
        mq == 'mobile' && showNewContent(timelineComponents, timelineTotWidth, 'next');
      });
      timelineComponents['eventsContent'].on('swiperight', function () {
        var mq = checkMQ();
        mq == 'mobile' && showNewContent(timelineComponents, timelineTotWidth, 'prev');
      }); //keyboard navigation

      $(document).keyup(function (event) {
        if (event.which == '37' && elementInViewport(timeline.get(0))) {
          showNewContent(timelineComponents, timelineTotWidth, 'prev');
        } else if (event.which == '39' && elementInViewport(timeline.get(0))) {
          showNewContent(timelineComponents, timelineTotWidth, 'next');
        }
      });
    });
  }

  function updateSlide(timelineComponents, timelineTotWidth, string) {
    //retrieve translateX value of timelineComponents['eventsWrapper']
    var translateValue = getTranslateValue(timelineComponents['eventsWrapper']),
        wrapperWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')); //translate the timeline to the left('next')/right('prev')

    string == 'next' ? translateTimeline(timelineComponents, translateValue - wrapperWidth + eventsMinDistance, wrapperWidth - timelineTotWidth) : translateTimeline(timelineComponents, translateValue + wrapperWidth - eventsMinDistance);
  }

  function showNewContent(timelineComponents, timelineTotWidth, string) {
    //go from one event to the next/previous one
    var visibleContent = timelineComponents['eventsContent'].find('.selected'),
        newContent = string == 'next' ? visibleContent.next() : visibleContent.prev();

    if (newContent.length > 0) {
      //if there's a next/prev event - show it
      var selectedDate = timelineComponents['eventsWrapper'].find('.selected'),
          newEvent = string == 'next' ? selectedDate.parent('li').next('li').children('a') : selectedDate.parent('li').prev('li').children('a');
      updateFilling(newEvent, timelineComponents['fillingLine'], timelineTotWidth);
      updateVisibleContent(newEvent, timelineComponents['eventsContent']);
      newEvent.addClass('selected');
      selectedDate.removeClass('selected');
      updateOlderEvents(newEvent);
      updateTimelinePosition(string, newEvent, timelineComponents);
    }
  }

  function updateTimelinePosition(string, event, timelineComponents) {
    //translate timeline to the left/right according to the position of the selected event
    var eventStyle = window.getComputedStyle(event.get(0), null),
        eventLeft = Number(eventStyle.getPropertyValue("left").replace('px', '')),
        timelineWidth = Number(timelineComponents['timelineWrapper'].css('width').replace('px', '')),
        timelineTotWidth = Number(timelineComponents['eventsWrapper'].css('width').replace('px', ''));
    var timelineTranslate = getTranslateValue(timelineComponents['eventsWrapper']);

    if (string == 'next' && eventLeft > timelineWidth - timelineTranslate || string == 'prev' && eventLeft < -timelineTranslate) {
      translateTimeline(timelineComponents, -eventLeft + timelineWidth / 2, timelineWidth - timelineTotWidth);
    }
  }

  function translateTimeline(timelineComponents, value, totWidth) {
    var eventsWrapper = timelineComponents['eventsWrapper'].get(0);
    value = value > 0 ? 0 : value; //only negative translate value

    value = !(typeof totWidth === 'undefined') && value < totWidth ? totWidth : value; //do not translate more than timeline width

    setTransformValue(eventsWrapper, 'translateX', value + 'px'); //update navigation arrows visibility

    value == 0 ? timelineComponents['timelineNavigation'].find('.prev').addClass('inactive') : timelineComponents['timelineNavigation'].find('.prev').removeClass('inactive');
    value == totWidth ? timelineComponents['timelineNavigation'].find('.next').addClass('inactive') : timelineComponents['timelineNavigation'].find('.next').removeClass('inactive');
  }

  function updateFilling(selectedEvent, filling, totWidth) {
    //change .filling-line length according to the selected event
    var eventStyle = window.getComputedStyle(selectedEvent.get(0), null),
        eventLeft = eventStyle.getPropertyValue("left"),
        eventWidth = eventStyle.getPropertyValue("width");
    eventLeft = Number(eventLeft.replace('px', '')) + Number(eventWidth.replace('px', '')) / 2;
    var scaleValue = eventLeft / totWidth;
    setTransformValue(filling.get(0), 'scaleX', scaleValue);
  }

  function setDatePosition(timelineComponents, min) {
    for (i = 0; i < timelineComponents['timelineDates'].length; i++) {
      var distance = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][i]),
          distanceNorm = Math.round(distance / timelineComponents['eventsMinLapse']) + 2;
      timelineComponents['timelineEvents'].eq(i).css('left', distanceNorm * min + 'px');
    }
  }

  function setTimelineWidth(timelineComponents, width) {
    var timeSpan = daydiff(timelineComponents['timelineDates'][0], timelineComponents['timelineDates'][timelineComponents['timelineDates'].length - 1]),
        timeSpanNorm = timeSpan / timelineComponents['eventsMinLapse'],
        timeSpanNorm = Math.round(timeSpanNorm) + 4,
        totalWidth = timeSpanNorm * width;
    timelineComponents['eventsWrapper'].css('width', totalWidth + 'px');
    updateFilling(timelineComponents['eventsWrapper'].find('a.selected'), timelineComponents['fillingLine'], totalWidth);
    updateTimelinePosition('next', timelineComponents['eventsWrapper'].find('a.selected'), timelineComponents);
    return totalWidth;
  }

  function updateVisibleContent(event, eventsContent) {
    var eventDate = event.data('date'),
        visibleContent = eventsContent.find('.selected'),
        selectedContent = eventsContent.find('[data-date="' + eventDate + '"]'),
        selectedContentHeight = selectedContent.height();

    if (selectedContent.index() > visibleContent.index()) {
      var classEnetering = 'selected enter-right',
          classLeaving = 'leave-left';
    } else {
      var classEnetering = 'selected enter-left',
          classLeaving = 'leave-right';
    }

    selectedContent.attr('class', classEnetering);
    visibleContent.attr('class', classLeaving).one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function () {
      visibleContent.removeClass('leave-right leave-left');
      selectedContent.removeClass('enter-left enter-right');
    });
    eventsContent.css('height', selectedContentHeight + 'px');
  }

  function updateOlderEvents(event) {
    event.parent('li').prevAll('li').children('a').addClass('older-event').end().end().nextAll('li').children('a').removeClass('older-event');
  }

  function getTranslateValue(timeline) {
    var timelineStyle = window.getComputedStyle(timeline.get(0), null),
        timelineTranslate = timelineStyle.getPropertyValue("-webkit-transform") || timelineStyle.getPropertyValue("-moz-transform") || timelineStyle.getPropertyValue("-ms-transform") || timelineStyle.getPropertyValue("-o-transform") || timelineStyle.getPropertyValue("transform");

    if (timelineTranslate.indexOf('(') >= 0) {
      var timelineTranslate = timelineTranslate.split('(')[1];
      timelineTranslate = timelineTranslate.split(')')[0];
      timelineTranslate = timelineTranslate.split(',');
      var translateValue = timelineTranslate[4];
    } else {
      var translateValue = 0;
    }

    return Number(translateValue);
  }

  function setTransformValue(element, property, value) {
    element.style["-webkit-transform"] = property + "(" + value + ")";
    element.style["-moz-transform"] = property + "(" + value + ")";
    element.style["-ms-transform"] = property + "(" + value + ")";
    element.style["-o-transform"] = property + "(" + value + ")";
    element.style["transform"] = property + "(" + value + ")";
  } //based on http://stackoverflow.com/questions/542938/how-do-i-get-the-number-of-days-between-two-dates-in-javascript


  function parseDate(events) {
    var dateArrays = [];
    events.each(function () {
      var singleDate = $(this),
          dateComp = singleDate.data('date').split('T');

      if (dateComp.length > 1) {
        //both DD/MM/YEAR and time are provided
        var dayComp = dateComp[0].split('/'),
            timeComp = dateComp[1].split(':');
      } else if (dateComp[0].indexOf(':') >= 0) {
        //only time is provide
        var dayComp = ["2000", "0", "0"],
            timeComp = dateComp[0].split(':');
      } else {
        //only DD/MM/YEAR
        var dayComp = dateComp[0].split('/'),
            timeComp = ["0", "0"];
      }

      var newDate = new Date(dayComp[2], dayComp[1] - 1, dayComp[0], timeComp[0], timeComp[1]);
      dateArrays.push(newDate);
    });
    return dateArrays;
  }

  function daydiff(first, second) {
    return Math.round(second - first);
  }

  function minLapse(dates) {
    //determine the minimum distance among events
    var dateDistances = [];

    for (i = 1; i < dates.length; i++) {
      var distance = daydiff(dates[i - 1], dates[i]);
      dateDistances.push(distance);
    }

    return Math.min.apply(null, dateDistances);
  }
  /*
      How to tell if a DOM element is visible in the current viewport?
      http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  */


  function elementInViewport(el) {
    var top = el.offsetTop;
    var left = el.offsetLeft;
    var width = el.offsetWidth;
    var height = el.offsetHeight;

    while (el.offsetParent) {
      el = el.offsetParent;
      top += el.offsetTop;
      left += el.offsetLeft;
    }

    return top < window.pageYOffset + window.innerHeight && left < window.pageXOffset + window.innerWidth && top + height > window.pageYOffset && left + width > window.pageXOffset;
  }

  function checkMQ() {
    //check if mobile or desktop device
    return window.getComputedStyle(document.querySelector('.cd-horizontal-timeline'), '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, "");
  }
});

/***/ }),

/***/ 1:
/*!************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/assets/front/js/jquery.easing.1.3.js ./resources/assets/front/js/bootstrap.min.js ./resources/assets/front/js/all.js ./resources/assets/front/js/timeline.js ./resources/assets/front/js/jquery.lazyload.min.js ./resources/assets/front/js/jquery.simple-text-rotator.min.js ./resources/assets/front/js/owl.carousel.min.js ./resources/assets/front/js/jquery.parallax-1.1.3.js ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\jquery.easing.1.3.js */"./resources/assets/front/js/jquery.easing.1.3.js");
__webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\bootstrap.min.js */"./resources/assets/front/js/bootstrap.min.js");
__webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\all.js */"./resources/assets/front/js/all.js");
__webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\timeline.js */"./resources/assets/front/js/timeline.js");
__webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\jquery.lazyload.min.js */"./resources/assets/front/js/jquery.lazyload.min.js");
__webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\jquery.simple-text-rotator.min.js */"./resources/assets/front/js/jquery.simple-text-rotator.min.js");
__webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\owl.carousel.min.js */"./resources/assets/front/js/owl.carousel.min.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\general\resources\assets\front\js\jquery.parallax-1.1.3.js */"./resources/assets/front/js/jquery.parallax-1.1.3.js");


/***/ })

/******/ });