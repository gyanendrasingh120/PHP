// Gallery Effect Script //

$(function(){
			$('#portfolio li', this ).mouseenter(function() {
				$('.description', this).slideDown('fast');
			});
			$('#portfolio li', this ).mouseleave(function() {
				$('.description', this).slideUp('fast');
			});
		});
		
// Slider Script //

$(window).load(function() {
			$('#slider').nivoSlider({
				effect:'fade', // Specify sets like: 'fold,fade,sliceDown'
				pauseTime:10000, // How long each slide will show
				directionNav:false, // Next & Prev navigation
        		directionNavHide:false, // Only show on hover
				keyboardNav:true, // Use left & right arrows
				pauseOnHover:true, // Stop animation while hovering
				});
		});
		
// Scroll

$(function(){
	$('a[href*=#]').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
			if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset}, 1000);     
				return false;         
			}
		}
	});  
});

// Form
	
$(document).ready(function() {
		$('#submitform').ajaxForm({
			target: '#error',
			success: function() {
			$('#error').fadeIn('slow');
			}
		});
	});