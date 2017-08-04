$(document).ready(function() {
  	$('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
		var $total = navigation.find('li').length;
		var $current = index+1;
		var $percent = ($current/$total) * 100;
		$('#rootwizard').find('.progress-bar').css({width:$percent+'%'});
	}});
	$('#rootwizard .finish').click(function() {
		alert('¡Gracias! Tu orden ha sido recibida. En breve recibirás un correo electrónico con la confirmación de tu orden. ');
		//$('#rootwizard').find("a[href*='tab1']").trigger('click');
		window.location.replace("http://witeventos.com");
	});

	//$(".col-nav").css({'height':($(".tab-content").height()+'px')});
	$(".col-nav-wizard").css({'height':($(".tab-content").height()+'px')});

	$('.wizard-option-list').css("overflow-y", "scroll");

	$('#fecha .datepicker').datepicker({
		weekStart: 1,
		viewMode: 2,
		format: 'dd/mm/yyyy'
	});

	$("#fechaevento").change(function() {
		var time = $(this).val();
		console.log(time);
		$.ajax({ 
		    type: 'GET', 
		    url: 'https://api.darksky.net/forecast/c47a70919de6e9f107ef72213ea130a0/20.97537,-89.61696,882967830?lang=es&units=si', /////aosdifjsaodifj 
		    data: { get_param: 'data' }, 
		    dataType: 'jsonp',
		    success: function (data) { 

		        //$('#clim-max').html(data.daily.data["0"].temperatureMax+' °C');
		        //$('#clim-min').html(data.daily.data["0"].temperatureMin+' °C');
		        //$('#clim-pro').html(data.daily.data["0"].summary);
		        //$('#clim-lluvia').html(data.daily.data["0"].precipType);

		    }
		});
	});
});