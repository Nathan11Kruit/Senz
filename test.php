<?php

$url = 'json/container2.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$containers = json_decode($data); // decode the JSON feed


?>

<table>
	<tbody>
		<tr>
			<th>Datum</th>
			<th>Temperatuur</th>
			<th>Vulgraad</th>
		</tr>
			<?php	
			foreach ($containers as $container) {
				echo '<tr>';
				echo '<td>' . $container->date . '</td>';
				echo '<td>' . $container->temperature . '</td>';
				echo '<td>' . $container->distance . '</td>';
				echo '</tr>';
			}
			?>
	</tbody>
</table>

