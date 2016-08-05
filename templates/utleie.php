<?php 
/*
	File: utleie.php
	Author: Jonas Solsvik
	Created: 29/07/16       */


include 'snippets/top.php';
include '../controller/sqlconnect.php'; // dbinject($sql)
?>

<?php
$query = 'SELECT * FROM utleie';
$tablerows = dbinject($query);
?>

<h1> Utleie </h1>

<table>
	<thead>
		<th>ID</th>
		<th>KundeID</th>
		<th>SelgerID</th>
		<th>EnhetID</th>
		<th>KontraktID</th>
		<th>Utlevert</th>
		<th>Tilbakelevert</th>
		<th>Datout</th>
		<th>Datotilbake</th>
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
					<a href="../controller/delete_row.php?Table=utleie&ID={$id}">
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
