<?php 
/*
	File: delete_row.php
	Author: Jonas Solsvik
	Created: 05/08/16        

Get request: controller/delete_row.php?Table=name&ID=othervalue 
*/

include 'sqlconnect.php';

echo 'delete_row.php </br>';

$table = $_GET['Table'];
$ID = $_GET['ID'];

$query = <<<EOT
DELETE FROM {$table} WHERE ID = {$ID}
EOT;

dbinject($query);

// # Redirect back to overview
$host  = $_SERVER['HTTP_HOST'];
echo "Location: http://{$host}/templates/{$table}.php";
header("Location: http://{$host}/templates/{$table}.php");
exit();
?>

