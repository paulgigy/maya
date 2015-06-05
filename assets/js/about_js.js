
		 
	$(document).ready(function() {
			

		$('#bigslider').css('margin-top', ($(window).height() - $('#bigslider').height())/0 + 'px');
					
					$('.guide_links ul li').click(function() {
						$('#bigslider #pages').animate({marginLeft : -($(this).index() * $('#bigslider #pages .page').width()) + 'px'});
						$('.guide_links ul li')
					});
	});
