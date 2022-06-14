(function($){
	var slide = function(pic, options){
		var $pic = $(pic);
		var setting = {
			speed: 1000, 
			interval: 2000,
		};
		$.extend(true, setting, options);
		var states = [
			
			{$zindex: 1, width: 200, height: 301, top: 59, left: 0, $opacity: 0.4},
			{$zindex: 2, width: 300, height: 451, top: -25, left: 0, $opacity: 0.7},
			
			{$zindex: 3, width: 350, height: 527, top: -65, left: 0, $opacity: 1},
			{$zindex: 2, width: 300, height: 451, top: -25, left: 0, $opacity: 0.7},
			{$zindex: 1, width: 200, height: 301, top: 59, left: 0, $opacity: 0.4},
			
		];
		var $lis = $pic.find('li');
		var timer = null;

		$pic.find('.next').on('click', function() {
			next();
		});

		$pic.find('.prev').on('click', function() {
			states.push(states.shift());
			move();
		});

		$pic.on('mousecenter', function() {
			clearInterval(timer);
			timer = null;
		}).on('mouseleave', function() {
			autoplay();
		});

		move();
		autoplay();

		function move(){
			$lis.each(function(index, element) {
				var state = states [index]
				$(element).css('zindex', state.$zindex).finish().animate(state, setting.speed).find('img').css('opacity', state.$opacity);
			});
		}

		function next() {
			states.unshift(states.pop());
			move();
		}

		function autoplay() {
			timer = setinterval(next, setting.interval);
		}
	}

	$.fn.h1slide = function(options) {
		$(this).each(function(index, pic) {
			slide(pic, options);
		});

		return this;
	}
}) (jQuery)