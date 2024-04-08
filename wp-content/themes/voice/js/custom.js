(function($) {
    $(document).ready(function() {
		let element = $('.search_header');
		for(let i = 0; i < element.length; i++) {
			element[i].removeAttribute('href');
		}
		
		let header = $('.entry-header a');
		for(let n = 0; n < header.length; n++) {
			header[n].style.fontSize = '20px';
			header[n].style.lineHeight = '17px';
		}
		
		let li = $('#vce_social_menu li a');
		for(let b = 0; b < li.length; b++) {
			li[b].setAttribute('aria-label', 'Social Network');
		}
	});
})(jQuery);