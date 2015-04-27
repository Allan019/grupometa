(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		$('.navbar-toggle').click(function(event) {
			$(this).parents('.nav').toggleClass('active')
		});
		

		$('input[type=tel]').mask("(99) 9999-9999?9");
		// DOM ready, take it away
		
		$("#owl-demo").owlCarousel({

			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem:true,

			// "singleItem:true" is a shortcut for:
			// items : 1, 
			// itemsDesktop : false,
			// itemsDesktopSmall : false,
			// itemsTablet: false,
			// itemsMobile : false

			});

		$(".veja-tambem .box-list").owlCarousel({

			slideSpeed : 300,
			paginationSpeed : 400,
			items:3,

			// "singleItem:true" is a shortcut for:
			// items : 1, 
			// itemsDesktop : 3,
			// itemsDesktopSmall : 2,
			// itemsTablet: 1,
			// itemsMobile : 1

			});


		$('.grupo-list a > img, .post-data a > img').each(function(index, el) {
			$(el).parent().attr('data-lightbox','roadtrip')
		});
	});

	
})(jQuery, this);
