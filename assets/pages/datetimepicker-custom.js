//Date Range picker

	$(function() {
    $('input[name="daterange"]').daterangepicker();
	
	});
	

 $('input[name="daterangetime"]').daterangepicker({
	 format: 'MM/DD/YYYY',
    "timePicker": true,
    "startDate": "03/19/2017",
    "endDate": "03/25/2017"

	});
	
 $('input[name="daterangelimit"]').daterangepicker({
	  format: 'MM/DD/YYYY',
		minDate: '03/19/2017',
		maxDate: '07/25/2017',
		dateLimit: {
	    days: 6
 }
 
});	

 // Time Picker
	$('#timepicker').timepicker({
		defaultTIme : false
	});
	
	$('#timepicker2').timepicker({
		showMeridian : false
	});
	
	$('#timepicker3').timepicker({
		minuteStep : 15
	});

//date picker
	
   $('.default-date-picker').datepicker({
        format: 'dd-mm-yyyy',
    });
	
    $('.default-date-picker-autoclose').datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true
    });

	 $('#date-range').datepicker({
			toggleActive: true
	 });
			
   
//Color Picker

  $('.colorpicker-default').colorpicker({
                format: 'hex'
    });
	
   $('.colorpicker-rgba').colorpicker();
