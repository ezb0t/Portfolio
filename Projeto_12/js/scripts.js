$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul')
		//fadeIn
		/*if(listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}else{
			listaMenu.fadeOut();
		}*/

		//Sem efeitos
		/*if(listaMenu.is(':hidden') == true){
			listaMenu.show();
			listaMenu.css('display','block');
		}else{
			listaMenu.hide();
			listaMenu.css('display','none');
		}*/

		//slideToggle
		if(listaMenu.is(':hidden') == true){
			var icone = $('.btn-mobile').find('i')
			icone.removeClass('fa-bars')
			icone.addClass('fa-times')
			listaMenu.slideToggle()
		}else{
			var icone = $('.btn-mobile').find('i')
			icone.removeClass('fa-times')
			icone.addClass('fa-bars')
			listaMenu.slideToggle()
		}
	})

	//Scroll Dinamico

	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target')
		var divScroll = $(elemento).offset().top
		$('html,body').animate({'scrollTop':divScroll},1000)
	}
})