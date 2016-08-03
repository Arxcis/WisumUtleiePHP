<!-- 
	File: form_utleie.php
	Author: Jonas Solsvik
	Created: 03/08/16        -->


<?php 

$kundeID = $_POST['KundeID'];
$selgerID = $_POST['SelgerID'];
$kontraktID = $_POST['KontraktID'];
$enhetID = $_POST['EnhetID'];

$antall = $_POST['Antall'];
$year = $_POST['Year'];
$month = $_POST['Month'];
$day = $_POST['Day'];


# Redirect back to overview
// $host  = $_SERVER['HTTP_HOST'];
// header('Location: http://' . $host . '/templates/utleie.php');
// exit();
?>