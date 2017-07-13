(function ($) {




	Drupal.behaviors.video_playlist = {
		attach: function (context, settings) {
			$('.field-collection-view-links .delete a', context).once(function() {
				$(this).html('<i class="fa fa-minus-square-o" title="Delete this bookmark" aria-hidden="true"></i>');
			});
			$('.field-collection-view-links .edit a', context).once(function() {
				$(this).html('<i class="fa fa-pencil-square-o" title="Edit this bookmark" aria-hidden="true"></i>');
			});
		}
	};

	Drupal.behaviors.searchtabs = {
		attach: function (context, settings) {

			alert("yay");
			//$('.accordion-tabs').hide();
			$('.accordion-tabs').each(function(index) {
				$(this).children('li').first().children('a').addClass('is-active').next().addClass('is-open').show();
			});
			$('.accordion-tabs').on('click', 'li > a.tab-link', function(event) {
				if (!$(this).hasClass('is-active')) {
					event.preventDefault();
					var accordionTabs = $(this).closest('.accordion-tabs');
					accordionTabs.find('.is-open').removeClass('is-open').hide();

					$(this).next().toggleClass('is-open').toggle();
					accordionTabs.find('.is-active').removeClass('is-active');
					$(this).addClass('is-active');
				} else {
					event.preventDefault();
				}
			});

		}
	};

















})(jQuery);
