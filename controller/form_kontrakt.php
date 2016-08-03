<!-- 
	File: form_kontrakt.php
	Author: Jonas Solsvik
	Created: 03/08/16        -->


<?php
include 'sqlconnect.php';

$title = $_POST['Tittel'];
$author = $_POST['Forfatter'];
$document = $_POST['Dokument'];
// echo $title . $author . $document;

$query = 'INSERT INTO kontrakter (tittel, forfatter, dokument) ';
$query .= 'VALUES (\''.$title.'\', \''.$author.'\', \''.$document.'\')';
echo $query;

dbinject($query);


# Redirect back to overview
// $host  = $_SERVER['HTTP_HOST'];
// header('Location: http://' . $host . '/templates/kontrakter.php');
// exit();
?>