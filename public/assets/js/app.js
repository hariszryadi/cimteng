/**
 * Table of contents
 * -----------------------------------
 * 1.0 JQUERY WINDOW LOAD FUNCTION
 * 1.1 PORTFOLIO FILTER
 ==================
 * 2.0 DOCUMENT READY FUNCTION
 * 2.1 STICKY NAV
 * 2.2 RESPONSIVE NAV
 * 2.3 SEARCH TOGGLE
 * 2.4 TEXT ANIMATION
 * 2.5 MATERILIZE SLIDER
 * 2.6 OWL SLIDER 1
 * 2.7 TEAM CAROUSEL
 * 2.8 TESTIMONIAL CAROUSEL 2 COLUMN
 * 2.9 TESTIMONIAL CAROUSEL 1 COLUMN
 * 2.10 CLIENTS CAROUSEL
 * 2.11 MAGNIFIC POPUP NAV
 * 2.12 COUNTER JS
 * 2.13 SKILL BARS
 * 2.14 VIDEO POP-UP
 * 2.15 FAQ COLLAPSE
 * 2.16 COMING SOON COUNT DOWN
 * 2.17 LOCAL SUBSCRIPTION FORM
 * 2.18 CONTACT MAP
 * 2.19 CONTACT FORM
 ==================
 *
 */
(function ($) {
    "use strict"; // this function is executed in strict mode 
    /* ------------------------------------
        1.0 JQUERY WINDOW LOAD FUNCTION
    ------------------------------------ */
    $(window).on('load', function () {
    /******************** 1.1 PORTFOLIO FILTER ********************/
        var $portfolio_selectors = $('.portfolio-filter >li>a');

        if ($portfolio_selectors.length) {

            var $portfolio = $('.portfolio-boxes');
            $portfolio.isotope({
                itemSelector: '.portfolio-box',
                layoutMode: 'fitRows'
            });

            $portfolio_selectors.on('click', function() {
                $portfolio_selectors.removeClass('active');
                $(this).addClass('active');
                var selector = $(this).attr('data-filter');
                $portfolio.isotope({
                    filter: selector
                });
                return false;
            });
        }

    });
    /* ------------------------------------
        2.0 DOCUMENT READY FUNCTION
    ------------------------------------ */
    $(function () {
        
        /******************** 2.1 STICKY NAV ********************/
		var $header = $("#header");
		if( $header.length ){
		    $header.sticky({
				topSpacing: 0
			});	
		}

        
        /******************** 2.2 RESPONSIVE NAV ********************/
        $('li.dropdown').find('.fa-angle-down').each(function() {
            $(this).on('click', function() {
                if ($(window).width() < 768) {
                    $(this).parent().next().slideToggle();
                }
                return false;
            });
        });
        
        /******************** 2.3 SEARCH TOGGLE ********************/
        $('.fa-search').on('click', function() {
            $('.field-toggle').fadeToggle(200);
        });
        
        /******************** 2.4 TEXT ANIMATION ********************/
		var $tlt1 = $('.tlt1'),
			$tlt = $('.tlt');
			
		if( $tlt1.length ){
			$tlt1.textillate({
				loop: true,
				in: {
					effect: 'fadeInDown',
				},
				out: {
					effect: 'flip',
				},
			});
		}
		//
		if( $tlt.length ){
			$tlt.textillate({
				loop: true,
				in: {
					effect: 'fadeInRight',
				},
				out: {
					effect: 'fadeOutLeft',
				},
			});
		}
        
        /******************** 2.5 MATERILIZE SLIDER ********************/
		var $slider = $('.slider');
		if( $slider.length ){
			$slider.slider({
				transition: 1000,
				interval: 5000,
			});
        }
        /******************** 2.6 OWL SLIDER 1 ********************/
        var $allslider = $(".all-slide"),
            $slidertext = $(".slider-text *");
		
		if( $allslider.length ){
		
			$allslider.owlCarousel({
				items: 1,
				dots: true,
				nav: false,
				autoplay: true,
				autoplayTimeout: 5000,
				autoplaySpeed:1000,
				smartSpeed:1000,
				loop: true,
				navText: ["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
				mouseDrag: false,
				touchDrag: false,
			});

			$allslider.on("translate.owl.carousel", function() {
				$slidertext.removeClass("animated fadeInUp").css("opacity", "0");
				$slidertext.removeClass("animated fadeInDown").css("opacity", "0");
			});

			$allslider.on("translated.owl.carousel", function() {
				$slidertext.addClass("animated fadeInUp").css("opacity", "1");
				$slidertext.addClass("animated fadeInDown").css("opacity", "1");
			});
		
		}
        
        /******************** 2.7 TEAM CAROUSEL ********************/
		var $teamcarousel = $('.team-carousel');
		if( $teamcarousel.length ){
			$teamcarousel.owlCarousel({
				loop: true,
				dots: false,
				nav: true,
				margin: 15,
				navText: ["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
				autoplay: false,
				autoplayTimeout: 5000,
				autoplaySpeed:1000,
				smartSpeed:1000,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 2
					},
					1000: {
						items: 3
					}
				}
			});
		}
        
        /******************** 2.8 TESTIMONIAL CAROUSEL 2 COLUMN ********************/
		
		var $feedbacktwo = $('.feedback-two-col');
		
		if( $feedbacktwo.length ){
			$feedbacktwo.owlCarousel({
				loop: true,
				nav: false,
				autoplay: true,
				margin: 15,
				autoplayTimeout: 5000,
				autoplaySpeed:1000,
				smartSpeed:1000,
				navText: ["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 1
					},
					1000: {
						items: 2
					}
				}
			});
		}


        /******************** 2.9 TESTIMONIAL CAROUSEL 1 COLUMN ********************/
		var $feedbackone = $('.feedback-one-col');
		if( $feedbackone.length ){
			$feedbackone.owlCarousel({
				loop: true,
				dots: false,
				nav: true,
				margin: 15,
				navText: ["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
				autoplay: true,
				autoplayTimeout: 5000,
				autoplaySpeed:1000,
				smartSpeed:1000,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 1
					},
					1000: {
						items: 1
					}
				}
			});
		}

        /******************** 2.10 CLIENTS CAROUSEL ********************/
		var $clients = $('.clients-carousel');
		if( $clients.length ){
			$clients.owlCarousel({
				loop: true,
				dots: false,
				nav: true,
				margin: 15,
				navText: ["<i class='fa fa-angle-double-left'></i>", "<i class='fa fa-angle-double-right'></i>"],
				autoplay: true,
				autoplayTimeout: 5000,
				autoplaySpeed:1000,
				smartSpeed:1000,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 3
					},
					1000: {
						items: 4
					}
				}
			});
		}


        /******************** 2.11 MAGNIFIC POPUP NAV ********************/
		
		var $portfolioLightbox = $('.portfolio-lightbox');
		if( $portfolioLightbox.length ){
			$portfolioLightbox.magnificPopup({
				type: 'image',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				fixedContentPos: false
				// other options
			});
		}

        /******************** 2.12 COUNTER JS ********************/
		var $counter = $('.counter');
		if( $counter.length ){
			$counter.counterUp({
				delay: 10,
				time: 3000
			});
		}

        /******************** 2.13 SKILL BARS ********************/
        var $skills = $('.contact-info-box, .team-content'),
            $skillProgressBars = $skills.find('.progress-bars');
			
		if( $skillProgressBars.length ){
			$skillProgressBars.find('.progress-bar').each(function() {
				var $t = $(this);

				$t.css('width', 0);

				$t.waypoint(function() {
					$t.css('width', $t.data('value') + '%');
				}, {
					triggerOnce: true,
					offset: 'bottom-in-view'
				});
			});
		}

    /******************** 2.14 VIDEO POP-UP ********************/
		var $jsmodal = $(".js-modal-btn");
		if( $jsmodal.length ){
			$(".js-modal-btn").modalVideo();
		}
        
        
    /******************** 2.15 FAQ COLLAPSE ********************/
    $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse')
            .on('show.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').addClass('active');
            })
            .on('hide.bs.collapse', function(a) {
                $(a.target).prev('.panel-heading').removeClass('active');
            });
			
	
		/******************** 2.16 COMING SOON COUNT DOWN ********************/
		var $countdown = $('.countdown');
		if( $countdown.length ){
			$countdown.downCount({
				date: '06/10/2020 12:00:00', // Set your site lonch date and time here
				offset: +10
			}, function () {
				alert('WOOT WOOT, done!');
			});
		}
		/******************** 2.17 LOCAL SUBSCRIPTION FORM ********************/
		
		var $subscribe = $("#subscribe");
		if( $subscribe.length ){	
			$subscribe.on( 'submit', function(e){
				e.preventDefault();
				var email = $("#subscriber-email").val();
				var dataString = 'email=' + email;
					$.ajax({
						type: "POST",
						url: "subscribe/subscribe.php",
						data: dataString,
						success: function () {
							$('.success-msg').fadeIn(1000);
							$('.error-msg').fadeOut(500);
							$('.hide-after').fadeOut(500);
						}
					});
				return false;
			});
		}	
			
			
    });

    /******************** 2.18 CONTACT MAP ********************/
    
    var $mapSelector = $('#contact');

    if( $mapSelector.length ){
        $mapSelector
          .gmap3({
            center:[51.492465, -0.230184], // Go https://www.latlong.net/ to find your area lat long code
            zoom:4,
            scrollwheel: false
          })
          .marker([
            {position:[51.492465, -0.230184]}, // Go https://www.latlong.net/ to find your area lat long code
          ])
    }
    
    /******************** 2.19 CONTACT FORM ********************/
    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
    };
	
	var $contact = $("#contact-form");
	
	if( $contact.length ){
		$contact.on('submit', function(e) {
			e.preventDefault();
			var success = $(this).find('.email-success'),
				failed = $(this).find('.email-failed'),
				loader = $(this).find('.email-loading'),
				postUrl = $(this).attr('action');

			var data = {
				name: $(this).find('.contact-name').val(),
				email: $(this).find('.contact-email').val(),
				subject: $(this).find('.contact-subject').val(),
				message: $(this).find('.contact-message').val()
			};
			if (isValidEmail(data['email']) && (data['message'].length > 1) && (data['name'].length > 1)) {
				$.ajax({
					type: "POST",
					url: postUrl,
					data: data,
					beforeSend: function() {
						loader.fadeIn(1000);
					},
					success: function(data) {
						loader.fadeOut(1000);
						success.delay(500).fadeIn(1000);
						failed.fadeOut(500);
					},
					error: function(xhr) { // if error occured
						loader.fadeOut(1000);
						failed.delay(500).fadeIn(1000);
						success.fadeOut(500);
					},
					complete: function() {
						loader.fadeOut(1000);
					}
				});
			} else {
				loader.fadeOut(1000);
				failed.delay(500).fadeIn(1000);
				success.fadeOut(500);
			}
			return false;
		});
	}
    
    
})(jQuery);