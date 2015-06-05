<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- about this site -->
<meta name="description" content="A web platform that helps to expose the upcoming Entrepreneurs.">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Market & Advertise You Africa">
<meta name="Resource-type" content="Document">
<!-- Attaching the MAYA Icon logo -->
<link rel="shortcut icon" type="img/x-icon" href="<?php echo base_url() .'assets/icons/maya_logo.png'?>"/>
<!-- all the constant css in all the pages -->
<link rel="stylesheet" media="screen" href="<?php echo base_url() .'assets/css/style_general.css'?>"/>
<link rel="stylesheet" media="screen" href="<?php echo base_url() .'assets/css/slider_show.css'?>"/>
<link rel="stylesheet" media="screen" href="<?php echo base_url() .'assets/css/style_menu.css'?>"/>
<!-- dynamic files includes all the .js Functions & Changing -->
 	<?php      	
		$this->load->view('utils/dynamic_files');//..............this is to autoload the dynamic css and js files
	?>
<!-- Loading the google plus[+] widget -->
<script src="https://apis.google.com/js/platform.js" async defer></script>	
<!-- Lock screen scroll x-axis -->
<!--<script src="<?php //echo base_url() .'assets/js/disable_scroll.js'?>"></script> -->
<!-- Here is the title of Each page Module -->
<title>Market & Advertise You Africa | <?php echo $title; ?></title>

</head>

<body>

<!-- Start of the Page Contents -->

<div class="hero"> 
