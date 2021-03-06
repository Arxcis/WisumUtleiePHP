<?php 
/*
	File: sqlconnect.php
	Author: Jonas Solsvik
	Created: 01/08/16        */

function echoAll($data){
	echo '</br>';
	$count = 0;
	foreach($data as $row){
    	foreach ($row as $key => $value) {
    		if ($count % 2 == 0){
    			echo $key . ' --> ' . $value . '</br>';	} 
    		$count++;	
    	}
    }
}

function dbinject($sql){
	// Function that uses an object-oriented algoritm to connect.

	$servername = "localhost";
	$username = "root";
	$password = "root";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=wisutleie", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    // echo "Connected successfully"; 
	    }
	catch(PDOException $e)
	    {
	   	// echo "Connection failed: " . $e->getMessage();
	    }

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	try{
		$res = $stmt->fetchAll();
	} catch(Exception $e){
		echo "<script>console.log(Error: {$e})</script>";
	}
	// echo '</br>Execute Success!';

	$conn = null;
	return $res;
}
/*
	1.--
	As the above for-loop suggest, the format of which data is returned
	 from the fetchAll()-method is a 2D-array of associative arrays.
	
	Example: [[key1->value1, key2->value1],        Row 1
	          [key1->value1, key2->value2],        Row 2
	          ..........................,          Row Nth
	          ]]



	2.--
	I think that it is worth pointing out an interesting thing bout php objects. An object can reference its members in two ways. Either use the $this-> prefix, or use the self:: prefix. 
	- $this is used to reference the non-static members of the current object. 
	- self:: is used to reference STATIC members of the object and the class.

	A static member of an object, is a member that is shared between all objects that are derived from the class. A static member only exists only one place in memory. Therefore, if a static member is modified by one object, the change cascades to all other objects of the same class.
	
   3.--
   It is worth noting that PHP variables does not carry between 
    scripts.*/

?>
