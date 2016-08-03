<!-- 
	File: kunder.php
	Author: Jonas Solsvik
	Created: 29/07/16        -->

<?php 
include 'snippets/top.php';
include '../controller/sqlconnect.php'; // dbinject($sql)
?>

<?php
$query = 'SELECT * FROM kunder';
dbinject($query);
?>

<?php
include 'snippets/bottom.php';
?>