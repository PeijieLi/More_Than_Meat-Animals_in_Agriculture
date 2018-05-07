jQuery( document ).ready(function( $ ) {
	var $index = $('#index'),
			$wrap = $('#wrap-list'),
			$wrap_index = $('#wrap-index'),
			$list = $('#list'),
			$items = $('> li', $list),
			n = $items.length,
			$btn_prev = $('[data-toggle=prev]'),
			$btn_next = $('[data-toggle=next]');

	// modify style
	$items.css({
		width: (100/n) + '%'
	});
	$list.css({
		width: n*100 + '%'
	}).removeClass('hide');
	var i_padding = $wrap_index.width();
	$index.css({
		width: n*200 + i_padding*2 + 'px',
		'padding-left': i_padding + 'px',
		'padding-right': i_padding + 'px',
	});

	function goToStep(step){
		var $i_active = $('li', $index).removeClass('active').eq(step).addClass('active');
		$items.removeClass('show-me').eq(step).addClass('show-me');
		$list.css({
			'margin-left': -step*100 + '%'
		});
		$('html, body').scrollLeft(0);

		//
		$btn_prev.add($btn_next).removeClass('disabled');
		if (step == 0){
			$btn_prev.addClass('disabled');
		}
		if (step == n - 1){
			$btn_next.addClass('disabled');
		}
		
		// scroll wrap index to center active
		$wrap_index.animate({
			scrollLeft: $i_active.position().left - $wrap_index.width()/2 + 100
		}, 300);
	}

	// events
	$('a', $index).click(function(){
		var $li = $(this).parent();
		if ($li.hasClass('active')){
			return false;
		}
		// step want to go next
		var step  = $('li', $index).index($li);
		goToStep(step);
		return false;
	}).eq(0).trigger('click');

	$btn_prev.click(function(){
		var $li = $('li.active', $index).prev('li');
		if ($li.length){
			$('a', $li).trigger('click');
		}
		return false;
	});

	$btn_next.click(function(){
		var $li = $('li.active', $index).next('li');
		if ($li.length){
			$('a', $li).trigger('click');
		}
		return false;
	});

});
