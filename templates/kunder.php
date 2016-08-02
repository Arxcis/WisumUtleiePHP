<!-- 
	File: kunder.php
	Author: Jonas Solsvik
	Created: 29/07/16        -->

<?php 
include '../data/sqlconnect.php'; // dbinject($sql)
include 'snippets/top.php';
echo 'kunder.php';
?>

<?php
$query = 'SELECT * FROM kunder';
// $result = dbinject($query);
// echo $result[0];
// echo 'Script passed here.';
testinject($query);

?>

<?php
include 'snippets/bottom.php';
?>