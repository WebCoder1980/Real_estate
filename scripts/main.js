$(document).ready(function() {
	$('input.number').on('keypress keyup', function() {
        $(this).val($(this).val().replace(/[^0-9]/, ''));
    });
	$('#rooms label:not(:last-child)').on('click', function() {
		if($(this).children('div').hasClass('checked')) { $(this).css('background', 'rgba(255, 255, 255, 0.2)'); }
		else { $(this).css('background', '#F27130'); } 
	});
	$('#rooms label:last-child').on('click', function() {
		$('#rooms label:not(:last-child)').css({
			'background' : 'rgba(255, 255, 255, 0.2)',
		});
		$('#rooms label:not(:last-child) div').removeClass('checked');
		$('#rooms label:not(:last-child) div input').prop('checked', false);
	});
	$('#rooms label:not(:last-child)').on('click', function() {
		$('#rooms label:last-child').css({
			'background' : 'rgba(255, 255, 255, 0.2)',
		});
		$('#rooms label:last-child div').removeClass('checked');
		$('#rooms label:last-child div input').prop('checked', false);
	});
});
(function($) {
		$(function() {
			$('select, option, li, input').styler({
				selectSmartPositioning: false,
			});
		$('.jq-selectbox').on('focusin', function() {
				var item = $(this).children('.jq-selectbox__select').children('.jq-selectbox__trigger');
				item.css('border-left', '2px solid #4a8dc9');
				item.css('box-shadow', 'none');
				item = item.children('.jq-selectbox__trigger-arrow');
				item.css('border-top', '10px solid #4a8dc9');
		});
		$('.jq-selectbox').on('focusout', function() {
				var item = $(this).children('.jq-selectbox__select').children('.jq-selectbox__trigger');
				item.css('border-left', '2px solid #152F46');
				item.css('box-shadow', 'none');
				item = item.children('.jq-selectbox__trigger-arrow');
				item.css('border-top', '10px solid #152F46');
		});
	});
})(jQuery);