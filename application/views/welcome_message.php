<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>e-inventory</title>
	
	<!-- Bootstrap core CSS -->
 	<link href="<?php echo base_url('/asset/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
 
 	<link href="navbar-fixed-top.css" rel="stylesheet">
	
	
</head>
<body>

<!-- Fixed navbar -->
 <nav class="navbar navbar-default navbar navbar-inverse" role = "navigation">
 	<div class="container">
 		<div class="navbar-header">
 			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				 <span class="sr-only">Toggle navigation</span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
			</button>
 			<a class="navbar-brand" href="<?php echo base_url(); ?>">E-INVENTORY</a>
 		</div>
 		<div id="navbar" class="navbar-collapse collapse">
 			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url() ?>">Home</a></li>
				<li><a href="<?php echo base_url().'welcome/about'?>">About</a></li>
				<li><a href="<?php echo base_url().'welcome/kontak' ?>">Contact</a></li> 
			</ul>			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url().'welcome/login' ?>">Login</a></li>			
			</ul>
 		</div><!--/.nav-collapse --> 		
 	</div>
 </nav>
 <div class="container">
 	
    <div class="row">    	
   		<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">   			
   			<?= $contents ?>    
   		</div>
   		<div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div>			
 	</div>
 </div> <!-- /container -->
 
  
</body>
<script type = "text/javascript">
   $(function () { $('#collapseFour').collapse({
      toggle: false
   })});
  
   $(function () { $('#collapseTwo').collapse('show')});
   $(function () { $('#collapseThree').collapse('toggle')});
   $(function () { $('#collapseOne').collapse('hide')});
</script>  
<script src="<?php echo base_url('asset/jquery/dist/jquery.js')?>"></script>
<script src="<?php echo base_url('asset/bootstrap/dist/js/bootstrap.min.js')?>"></script>
</html>