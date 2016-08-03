<!-- 
	File: index.php
	Author: Jonas Solsvik
	Created: 02/07/16        -->

<?php
$STATIC = '../../static/';
$TEMPLATES = '../../templates/';
?>

<!DOCTYPE html>

<html lang="en">
	
<head>
	<title>Minnie's Haberdashery</title>
	<!-- Local CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $STATIC ?>style.css"/>
	<!--Boostrap -->
	<link rel="stylesheet" type="text/css" herf="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
	<!-- Google font API -->
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:300' >
	<!-- Font awesome -->
	<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' />
	<!-- jQuery API -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
<div class="container-fluid">
	<div class="headerflex">
		<header>
			<a href="/"><img src="<?php echo $STATIC ?>Wisum_logo.png" alt="Wisum logo" height="60" width="224"/> </a>
		</header>
	</div>

	<div class="mainflex">
	
		<nav>
			<div class="navitem">
				<a href="<?php echo $TEMPLATES;?>utleie.php">Utleie</a>
			    <a href="<?php echo $TEMPLATES;?>utleie_ny.php"><i class="fa fa-plus" aria-hidden="true"></i></a>   
			</div>
			<div class="navitem">
				<a href="<?php echo $TEMPLATES;?>enheter.php">Enheter</a>
				<a href="<?php echo $TEMPLATES;?>enheter_ny.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
			</div>
			<div class="navitem">
				<a href="<?php echo $TEMPLATES;?>kunder.php">Kunder</a>
				<a href="<?php echo $TEMPLATES;?>kunder_ny.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
			</div>
			<div class="navitem">
				<a href="<?php echo $TEMPLATES;?>kontrakter.php">Kontrakter</a>
				<a href="<?php echo $TEMPLATES;?>kontrakter_ny.php"><i class="fa fa-plus" aria-hidden="true"></i></a>
			</div>
			<div class="navitem"><a href="<?php echo $TEMPLATES;?>admin.php">Admin</a></div>
			<div class="navitem">Logg ut</div>
		</nav>

		<main>
		<!-- end of top.php-->