
	var _slidesSrc = [];
	for (var i = 0, len = slides.length; i < len; i++) {
		_slidesSrc.push({
			src: slides[i],
			fade: 1000
		});
	}
	var bannerSlider = $('.banner_slider');

	bannerSlider.vegas({
		slides: _slidesSrc
	});
