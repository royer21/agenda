<!DOCTYPE html>
<html lang="es">
	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="<?= base_url('css/mistylo.css') ?>" rel="stylesheet" media="screen">
		<link href="<?= base_url('css/bootstrap.css') ?>" rel="stylesheet">
		<link href="<?= base_url('css/jquery.datetimepicker.css') ?>" rel="stylesheet" >
		
		<script src="<?= base_url('js/jquery.js') ?>" rel="stylesheet"></script>
		<script src="<?= base_url('js/jquery.datetimepicker.js')?>" rel="stylesheet"></script>
		
				
		<title> Agenda Institucional </title> 
	

	</head>
	<header>
	

            <section class="container">
                <div  class="titulo centrar">
                    <h2 >Actividades Oficiales - Agenda Alcalde</h2>
                    
                </div>
            </section>

	       <!-- <div class="logo">
				<img src="<?= base_url('img/logo.png') ?>" alt="logo de la unjbg">
			</div>
			<div class="agenda">
				<img src="<?= base_url('img/agenda.png') ?>" alt="">
			</div> -->
    <script>
				$(document).ready(function(){

					jQuery('#datetimepicker1').datetimepicker({
					 lang:'de',
					 i18n:{
					  de:{
					   months:[
					    'Januar','Februar','März','April',
					    'Mai','Juni','Juli','August',
					    'September','Oktober','November','Dezember',
					   ],
					   dayOfWeek:[
					    "So.", "Mo", "Di", "Mi", 
					    "Do", "Fr", "Sa.",
					   ]
					  }
					 },
					 timepicker:false,
					 format:'d.m.Y'
					});

					jQuery('#datetimepicker2').datetimepicker({
					  datepicker:false,
					  format:'H:i'
					});

					jQuery('#datetimepicker3').datetimepicker({
					  datepicker:false,
					  format:'H:i'
					});

				});

			</script>
		

	</header>
			
