$(document).ready(function() {

	var win = $(window);
	var counter = $("#counter");
	var pos = counter.position().top-(win.height()/2);

	console.log(pos);
	
	win.scroll(startCounter);

	function startCounter() {
		if (win.scrollTop() > pos) {
			win.off("scroll", startCounter);
			$('.count').each(function () {
				var $this = $(this);
					jQuery({ Counter: 0 }).animate({ Counter: $this.attr('data-value') }, {
						duration: 1200,
						easing: 'swing',
						step: function () {
							$this.text(Math.ceil(this.Counter).toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ","));
						}
					});
			});
		}
	}
})