<!-- 
	File: form_kunde.php
	Author: Jonas Solsvik
	Created: 03/08/16        -->


<?php 



# Redirect back to overview
$host  = $_SERVER['HTTP_HOST'];
header('Location: http://' . $host . '/templates/kunder.php');
exit();
?>