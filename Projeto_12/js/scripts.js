$(function(){
	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul');
		//fadeIn
		/*if(listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}else{
			listaMenu.fadeOut();
		}*/

		//slideToggle
		listaMenu.slideToggle();

		//Sem efeitos
		/*if(listaMenu.is(':hidden') == true){
			//listaMenu.show();
			listaMenu.css('display','block');
		}else{
			//listaMenu.hide();
			listaMenu.css('display','none');
		}*/
	})
})