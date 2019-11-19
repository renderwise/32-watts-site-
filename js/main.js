/* ===================================================================
 * Dazzle - Main JS
 *
 * ------------------------------------------------------------------- */



        $(document).ready(function () {



            $('.32_carousel').slick({



                infinite: true,



                slidesToShow: 3,



                slidesToScroll: 1,



                responsive: [



                    {



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



                    // You can unslick at a given breakpoint now by adding:



                    // settings: "unslick"



                    // instead of a settings object



                ]



            });



            $('.dropdown-toggle').dropdown()



        });















        $(window).load(function () {



            $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({
                default_offset_pct: 0.7
            });



            $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({
                default_offset_pct: 0.3,
                orientation: 'vertical'
            });



        });
    






        document.addEventListener("DOMContentLoaded",

            function () {

                var div, n,

                    v = document.getElementsByClassName("youtube-player");

                for (n = 0; n < v.length; n++) {

                    div = document.createElement("div");

                    div.setAttribute("data-id", v[n].dataset.id);

                    div.innerHTML = labnolThumb(v[n].dataset.id);

                    div.onclick = labnolIframe;

                    v[n].appendChild(div);

                }

            });



        function labnolThumb(id) {

            var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',

                play = '<div class="play"></div>';

            return thumb.replace("ID", id) + play;

        }



        function labnolIframe() {

            var iframe = document.createElement("iframe");

            var embed = "https://www.youtube.com/embed/ID?autoplay=1";

            iframe.setAttribute("src", embed.replace("ID", this.dataset.id));

            iframe.setAttribute("frameborder", "0");

            iframe.setAttribute("allowfullscreen", "1");

            this.parentNode.replaceChild(iframe, this);

        }








        function myFunction() {



            var dots = document.getElementById("dots");



            var moreText = document.getElementById("more");



            var btnText = document.getElementById("myBtn");







            if (dots.style.display === "none") {



                dots.style.display = "inline";



                btnText.innerHTML = "Load more";



                moreText.style.display = "none";



            } else {



                dots.style.display = "none";



                btnText.innerHTML = "Load less";



                moreText.style.display = "inline";



            }



        }
    



(function ($) {

	"use strict";

	var cfg = {
		scrollDuration: 800, // smoothscroll duration
		mailChimpURL: 'https://facebook.us8.list-manage.com/subscribe/post?u=cdb7b577e41181934ed6a6a44&amp;id=e6957d85dc'  // mailchimp url
	},

		$WIN = $(window);

	// Add the User Agent to the <html>
	// will be used for IE10 detection (Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0))
	var doc = document.documentElement;
	doc.setAttribute('data-useragent', navigator.userAgent);


	/* Preloader 
	 * -------------------------------------------------- */
	var ssPreloader = function () {

		$WIN.on('load', function () {

			// force page scroll position to top at page refresh
			$('html, body').animate({ scrollTop: 0 }, 'normal');

			// will fade out the whole preloader DIV that covers the website.
			$("#preloader").delay(500).fadeOut('slow');

		});
	};


	/* Mobile Menu
	 * ---------------------------------------------------- */
	var ssMobileMenu = function () {

		var toggleButton = $('.header-menu-toggle'),
			nav = $('#header-nav-wrap');

		toggleButton.on('click', function (event) {
			event.preventDefault();

			toggleButton.toggleClass('is-clicked');
			nav.slideToggle();
		});

		if (toggleButton.is(':visible')) nav.addClass('mobile');

		$(window).resize(function () {
			if (toggleButton.is(':visible')) nav.addClass('mobile');
			else nav.removeClass('mobile');
		});

		$('#header-nav-wrap').find('a').on("click", function () {

			if (nav.hasClass('mobile')) {
				toggleButton.toggleClass('is-clicked');
				nav.slideToggle();
			}
		});

	};


	/* FitVids
	 * ---------------------------------------------------- */
	var ssFitVids = function () {
		$(".fluid-video-wrapper").fitVids();
	};



	/* Owl Carousel
	  * ------------------------------------------------------ */
	var ssOwlCarousel = function () {

		$(".owl-carousel").owlCarousel({
			loop: true,
			nav: false,
			autoHeight: true,
			items: 1
		});

	};


	/* Highlight the current section in the navigation bar
	  * ------------------------------------------------------ */
	var ssWaypoints = function () {

		var sections = $("section"),
			navigation_links = $(".vertical-nav li a");

		sections.waypoint({

			handler: function (direction) {

				var active_section;

				active_section = $('section#' + this.element.id);

				if (direction === "up") active_section = active_section.prev();

				var active_link = $('.vertical-nav li a[href="#' + active_section.attr("id") + '"]');

				navigation_links.parent().removeClass("current");
				active_link.parent().addClass("current");

			},

			offset: '25%'

		});
	};


	/* Smooth Scrolling
	  * ------------------------------------------------------ */
	var ssSmoothScroll = function () {

		$('.smoothscroll').on('click', function (e) {
			var target = this.hash,
				$target = $(target);

			e.preventDefault();
			e.stopPropagation();

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, cfg.scrollDuration, 'swing', function () {
				window.location.hash = target;
			});

		});

	};





	/* Alert Boxes
	------------------------------------------------------- */
	var ssAlertBoxes = function () {

		$('.alert-box').on('click', '.close', function () {
			$(this).parent().fadeOut(500);
		});

	};



	/* Animate On Scroll
		  * ------------------------------------------------------ */
	var ssAOS = function () {

		AOS.init({
			offset: 200,
			duration: 600,
			easing: 'ease-in-sine',
			delay: 300,
			once: true,
			disable: 'mobile'
		});

	};


	/* AjaxChimp
	  * ------------------------------------------------------ */
	var ssAjaxChimp = function () {

		$('#mc-form').ajaxChimp({
			language: 'es',
			url: cfg.mailChimpURL
		});

		// Mailchimp translation
		//
		//  Defaults:
		//	 'submit': 'Submitting...',
		//  0: 'We have sent you a confirmation email',
		//  1: 'Please enter a value',
		//  2: 'An email address must contain a single @',
		//  3: 'The domain portion of the email address is invalid (the portion after the @: )',
		//  4: 'The username portion of the email address is invalid (the portion before the @: )',
		//  5: 'This email address looks fake or invalid. Please enter a real email address'

		$.ajaxChimp.translations.es = {
			'submit': 'Submitting...',
			0: '<i class="fa fa-check"></i> We have sent you a confirmation email',
			1: '<i class="fa fa-warning"></i> You must enter a valid e-mail address.',
			2: '<i class="fa fa-warning"></i> E-mail address is not valid.',
			3: '<i class="fa fa-warning"></i> E-mail address is not valid.',
			4: '<i class="fa fa-warning"></i> E-mail address is not valid.',
			5: '<i class="fa fa-warning"></i> E-mail address is not valid.'
		}

	};



	/* Back to Top
	  * ------------------------------------------------------ */
	var ssBackToTop = function () {

		var pxShow = 500,         // height on which the button will show
			fadeInTime = 400,         // how slow/fast you want the button to show
			fadeOutTime = 400,         // how slow/fast you want the button to hide
			scrollSpeed = 300,         // how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
			goTopButton = $("#go-top")

		// Show or hide the sticky footer button
		$(window).on('scroll', function () {
			if ($(window).scrollTop() >= pxShow) {
				goTopButton.fadeIn(fadeInTime);
			} else {
				goTopButton.fadeOut(fadeOutTime);
			}
		});
	};


	/* Initialize
	 * ------------------------------------------------------ */
	(function ssInit() {

		ssPreloader();
		ssMobileMenu();
		ssFitVids();
		ssOwlCarousel();
		ssWaypoints();
		ssSmoothScroll();
		ssPlaceholder();
		ssAlertBoxes();
		ssAOS();
		ssBackToTop();

		// to use the mailchimp form, uncomment the 
		// function call ssAjaxChimp() below:
		// ssAjaxChimp(); 

	})();


})(jQuery);