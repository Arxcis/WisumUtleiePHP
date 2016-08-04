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
$tablerows = dbinject($query);
?>

<table>
	<thead>
		<th>Foravn</th>
		<th>Etternavn</th>
		<th>Telefon</th>
		<th>Epost</th>
	</thead>
	<tbody>
		<?php 
			foreach ($tablerows as $row){
				echo "<tr>";
				foreach ($row as $cellkey => $cell) {
					echo "<td>" . $cell . "</td>";
				}
				echo "</tr>";
			}
		?>
	</tbody>
</table>

<?php
include 'snippets/bottom.php';
?>