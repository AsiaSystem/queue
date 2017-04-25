<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Antrian Bank BRI</title>

    <!-- Bootstrap -->
    <link href="{css_path}bootstrap.min.css" rel="stylesheet">
    <link href="{css_path}custom-style.css" rel="stylesheet">
    <link href="{css_path}mobile.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{js_path}jquery-1.12.4-min.js"></script>
  </head>
  <body>
		<?php $this->load->view($template) ?> 
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{js_path}bootstrap.min.js"></script>
    <?php if($template == 'tiket' || $template == 'call'){ ?>
    
    <script type="text/javascript">
		$(document).ready(function() {
		// Create two variable with the names of the months and days in an array
		var monthNames = [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desemver" ]; 
		var dayNames= ["Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu"]

		// Create a newDate() object
		var newDate = new Date();
		// Extract the current date from Date object
		newDate.setDate(newDate.getDate());
		// Output the day, date, month and year   
		$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

		setInterval( function() {
			// Create a newDate() object and extract the seconds of the current time on the visitor's
			var seconds = new Date().getSeconds();
			// Add a leading zero to seconds value
			$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
			},1000);
			
		setInterval( function() {
			// Create a newDate() object and extract the minutes of the current time on the visitor's
			var minutes = new Date().getMinutes();
			// Add a leading zero to the minutes value
			$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
			},1000);
			
		setInterval( function() {
			// Create a newDate() object and extract the hours of the current time on the visitor's
			var hours = new Date().getHours();
			// Add a leading zero to the hours value
			$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
			}, 1000);	
		});
	</script>
    <?php } ?>
  </body>
</html>