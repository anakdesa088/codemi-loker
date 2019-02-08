//Date Range picker

	$(function() {
    $('input[name="daterange"]').daterangepicker();
	
	});
	

 $('input[name="daterangetime"]').daterangepicker({
	 format: 'YYYY/MM/DD',
    "timePicker": true,
    "startDate": "03/19/2017",
    "endDate": "03/25/2017"

	});
	
 $('input[name="daterangelimit"]').daterangepicker({
	  format: 'YYYY/MM/DD',
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
        format: 'yyyy/mm-dd',
    });
	
    $('.default-date-picker-autoclose').datepicker({
        format: 'yyyy/mm-dd',
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
