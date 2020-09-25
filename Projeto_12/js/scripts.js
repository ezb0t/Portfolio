$(function(){
	var map
	
	function initialize(){
	    var mapProp = {
	        center: new google.maps.LatLng(-23.586330988,-46.655330712),
	        zoom: 14,
	   	    scrollwheel: false,
	        styles: [{
	            stylers: [{
	                saturation: -100
	            }]
	        }],
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    map=new google.maps.Map(document.getElementById("map"),mapProp)
	}

	function addMarker(lat,long,icon,content,showInfoWindow,openInfoWindow){
		var myLatLng = {lat:lat,lng:long}

		if(icon === ''){
			var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    icon: icon
			})
		}else{
		    var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    icon: icon
			})
		}

		var infoWindow = new google.maps.InfoWindow({
	        content: content,
	        maxWidth: 200
	    })

		google.maps.event.addListener(infoWindow, 'domready', function(){
		    var iwOuter = $('.gm-style-iw')
		    var iwBackground = iwOuter.prev()
		    iwBackground.children(':nth-child(2)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'})
		    iwBackground.children(':nth-child(4)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'})
		    iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'display:none;'})
			iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'display:none;'})
		})
		  	if(showInfoWindow == undefined){
		        google.maps.event.addListener(marker, 'click', function () {
		            infoWindow.open(map, marker);
		        });
	    	}else if(openInfoWindow == true){
	    		infoWindow.open(map, marker);
	    	}
	}

	$('nav.mobile').click(function(){
		var listaMenu = $('nav.mobile ul')
		if(listaMenu.is(':hidden') == true){
			var icone = $('.botao-menu-mobile').find('i')
			icone.removeClass('fa-bars')
			icone.addClass('fa-times')
			listaMenu.slideToggle()
		}
		else{
			var icone = $('.botao-menu-mobile').find('i')
			icone.removeClass('fa-times')
			icone.addClass('fa-bars')
			listaMenu.slideToggle()
		}

	})

	if($('target').length > 0){
		var elemento = '#'+$('target').attr('target')
		var divScroll = $(elemento).offset().top
		$('html,body').animate({scrollTop:divScroll},2000)
	}

	carregarDinamico()
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime')
			$('.container-principal').hide()
			$('.container-principal').load(include_path+'pages/'+pagina+'.php')
			
			setTimeout(function(){
				initialize();
				addMarker(-23.586330988,-46.655330712,'',"Parque do Ibirapuera",undefined,false)
            },1000)
            
			$('.container-principal').fadeIn(1000)
			window.history.pushState('', '',pagina)
			return false
		})
	}

})