<!-- 
	File: form_kontrakt.php
	Author: Jonas Solsvik
	Created: 03/08/16        -->


<?php
include 'sqlconnect.php';

$kontrakt = $_POST['kontrakt'];
// echo $title . $author . $document;

$query = <<<EOT
INSERT INTO kontrakter (
	tittel, forfatter, dokument
) VALUES (
'{$kontrakt['Tittel']}', 
'{$kontrakt['Forfatter']}',
'{$kontrakt['Dokument']}') 
EOT;

dbinject($query);

# Redirect back to overview
$host  = $_SERVER['HTTP_HOST'];
header('Location: http://' . $host . '/templates/kontrakter.php');
exit();
?>