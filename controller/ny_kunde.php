<?php 
/*
	File: form_kunde.php
	Author: Jonas Solsvik
	Created: 03/08/16        */


include 'sqlconnect.php';

$kunde = $_POST['kunde'];

$query = <<<EOT
INSERT INTO kunder (
	fornavn,
	etternavn,
	telefon,
	epost,
	gate,
	postnummer,
	poststed,
	historie
) VALUES (
	'{$kunde['Fornavn']}',
	'{$kunde['Etternavn']}',
	'{$kunde['Telefon']}',
	'{$kunde['Epost']}',
	'{$kunde['Gate']}',
	'{$kunde['Postnummer']}',
	'{$kunde['Poststed']}',    
	'Empty')
EOT;

dbinject($query);

# Redirect back to overview
$host  = $_SERVER['HTTP_HOST'];
header('Location: http://' . $host . '/templates/kunder.php');
exit();
?>