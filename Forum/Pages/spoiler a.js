$(document).ready(function(){
	$('.block_title').click(function(event) {
		$(this).toggleClass('active').nextAll().slideToggle(300);
	});
});