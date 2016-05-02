$(document).ready(
		
         function() {
   		  $(function() {
               $("#tgl_lahir").datepicker({
               	  maxDate: new Date(),
				  showButtonPanel: true,
				  dateFormat: 'yy-mm-dd',
				  //alert('dateFormat');
				  showTime: true
				});
            });
   	   });