<!-- 
	File: form_enhet.php
	Author: Jonas Solsvik
	Created: 03/08/16        -->


<?php 
include 'sqlconnect.php';

$enhet = $_POST['enhet'];

$query = <<<EOT
INSERT INTO enheter (
	antall,
	navn,
	qrkode,
	serienummer,
	gruppe,
	undergruppe,
	pris,
	beskrivelse
) VALUES (
	{$enhet['Antall']},
	'{$enhet['Varenavn']}',
	'{$enhet['QRkode']}',
	'{$enhet['Serienummer']}',
	'{$enhet['Gruppe']}',
	'{$enhet['Undergruppe']}',
	'{$enhet['Pris']}',
	'{$enhet['Beskrivelse']}')
EOT;
# Antall og Varenavn bytter plass i neste versjon. og navn skifter til varenavn.

dbinject($query);

# Redirect back to overview
$host  = $_SERVER['HTTP_HOST'];
header('Location: http://' . $host . '/templates/enheter.php');
exit();
?>

