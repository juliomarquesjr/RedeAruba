<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulo; ?></title>
    <link rel="icon" type="image/png" href="<?php echo base_url('icon.ico'); ?>">
    <link href="<?php echo base_url('assets/css/bootstrap.css"'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sb-admin.css?'); ?>" rel="stylesheet">   
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>">
  	<script src="<?php echo base_url('assets/js/jquery-1.9.1.js');?>"></script>
  	<script src="<?php echo base_url('assets/js/jquery-ui.js');?>"></script>
  
  <script>
	$(function() {
		$("#datepicker").datepicker({ dateFormat: 'dd/mm/yy' }).val();
	});
  </script>
  </head>

  <body>