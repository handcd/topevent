$(document).ready(function() {

	// Code for the Validator
    var $validator = $('form').validate({
        rules: {
            nombre: {
              required: true,
              minlength: 5
            },
            apellidos: {
              required: true,
              minlength: 5
            },
            email: {
              required: true,
              email: true,
            },
            fechaevento: {
            	required: true,
            },
            duracion: {
            	required: true,
            },
            noInvitados: {
            	required: true,
            	number: true,
            },
            introduccion: {
            	required: true,
            	maxlength: 255,
            },
            tipoEvento: {
            	required: true,
            },
            lugarEvento: {
            	required: true,
                minlength: 10
            },
            direccionLugar: {
            	minlength: 10,
            },
            nombreLugar: {
            	minlength: 10,
            },
        },
        errorPlacement: function(error, element) {
            $(element).parent('div').addClass('has-error');
        }
    });

  	$('#rootwizard').bootstrapWizard({
  		onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#rootwizard').find('.progress-bar').css({width:$percent+'%'});
		},

		onNext: function(tab, navigation, index) {
        	var $valid = $('#formGeneral').valid();
        	if(!$valid) {
        		$validator.focusInvalid();
        		return false;
        	}
        },
	});

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