(function () {
	var $input = $('.blog-filter-element');
	var $blogs = $('.blog');
	run();

	function run() {
		attachEvents();
	}

	function attachEvents() {
		$input.keyup(filterElements);
		$('.blog-filter-submit').click(filterElements);
	}

	function filterElements() {
		var searchTerm = $input.val().toLowerCase();
		$blogs.addClass('hide');
		$blogs.each(function () {
			var $blog = $(this);
			if($blog.find('.blog-title').text().toLowerCase().indexOf(searchTerm) > -1)
				$blog.removeClass('hide');
			else if($blog.find('.blog-subtitle').text().toLowerCase().indexOf(searchTerm) > -1)
				$blog.removeClass('hide');
			else if($blog.find('.blog-text').text().toLowerCase().indexOf(searchTerm) > -1)
				$blog.removeClass('hide');
		});
	}
})();