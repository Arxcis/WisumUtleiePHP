<?php 
/*
	File: kunder.php
	Author: Jonas Solsvik
	Created: 29/07/16       */


include 'snippets/top.php';
include '../controller/sqlconnect.php'; // dbinject($sql)
?>

<?php
$query = 'SELECT * FROM kunder';
$tablerows = dbinject($query);

?>

<h1> Kunder </h1>

<table>
	<thead>
		<th>ID</th>
		<th>Fornavn</th>
		<th>Etternavn</th>
		<th>Telefon</th>
		<th>Epost</th>
		<th>Gate</th>
		<th>Postnummer</th>
		<th>Poststed</th>
		<th>Historie</th>
	</thead>
	<tbody>
		<?php
			$id = '';
			$count = 0; 
			foreach ($tablerows as $row){
				echo "<tr>";
				foreach ($row as $cellkey => $cell) {
					if ($count % 2 == 0){
						if ($count == 0){
							$id = $cell;
						}
						echo "<td>" . $cell . "</td>";
					}
					$count += 1;
				}
				$delete_button = <<<EOT
					<td>
					<a href="../controller/delete_row.php?Table=kunder&ID={$id}">
						<i class="fa fa-times" aria-hidden="true"></i>
					</a>
					</td>
EOT;
				echo $delete_button;
				echo "</tr>";
			  $count = 0;
			}
		?>
	</tbody>
</table>

<?php
include 'snippets/bottom.php';
?>