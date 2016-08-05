<!-- 
	File: form_utleie.php
	Author: Jonas Solsvik
	Created: 03/08/16        -->


<?php 
include 'sqlconnect.php';

$utleie = $_POST['utleie'];
$datotilbake = $utleie['Year'] . '-' . $utleie['Month'] . '-' . $utleie['Day'] . ' ' . '16:00:00';

$query = <<<EOT
INSERT INTO utleie (
	kund_ID, 
	enhe_ID, 
	selg_ID, 
	kont_ID, 
	utlevert, 
	tilbakelevert, 
	datout, 
	datotilbake
) VALUES (
 	{$utleie['KundID']},
 	{$utleie['EnheID']},
 	{$utleie['BrukID']},
 	{$utleie['KontID']},
 	1,
 	0,
 	now(),
 	'$datotilbake')
EOT;
# WE need to use {} curly braces around these kinds of variables variable['key'].

dbinject($query);

# Redirect back to overview
$host  = $_SERVER['HTTP_HOST'];
header('Location: http://' . $host . '/templates/utleie.php');
exit();
?>