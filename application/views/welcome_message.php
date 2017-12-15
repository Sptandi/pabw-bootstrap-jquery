<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/css/welcome.css"); ?>" />
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#opener" ).on( "click", function() {
      $( "#dialog" ).dialog( "open" );
    });
  } );
  </script>
</head>
<body>


<div class="container-fluid no-padding">
	<div class="row row-centered">
		</video>
		<div class="col-md-12 col-centered">
		

		<h1>CRUD Bootcamp</h1>
<div class="modal">
		<div id="dialog" title="Registration" >
		  <p style="color: white">Register not started yet!</p>
		</div>
</div>		 
		<button type="button" id="opener" class="btn btn-primary" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#myModal">Register</button>

		</div>
	</div>
</div>
<div class="container">
	<div class="row second">
		<div class="col-md-6">
			
				<img src="https://qzprod.files.wordpress.com/2017/08/bootcamp.jpg?quality=80&strip=all&w=3945" class="img-responsive" class="img-rounded">		
			
		</div>
		<div class="col-md-6">
			<div class="content" id="down">
				
			<h4>Why join this program ?</h4>
			<li>Learn with master</li>
			<li>Learn what you want</li>
			<li>Ready for work</li>
			<li>Lern new technology</li>
			</div>
		</div>	
	
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>

