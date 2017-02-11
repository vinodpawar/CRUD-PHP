<html>

	<?PHP

	include_once 'dbconfig.php';

	$sql_query = "SELECT * FROM info";

	$result_set = mysql_query($sql_query);

	?>
	
	<table>
		<tr>
			<td>
				ID
			</td>
			<td>
				Name
			</td>
			
			<td>
				City
			</td>			
		</tr>
	
	</table>
	<?php
	
	while($row = mysql_fetch_row($result_set)) {
			
	?>
	
	<table>
		<tr>
			<td><?php echo $row[0]; ?></td>
			
			<td><?php echo $row[1]; ?></td>
					
			<td><?php echo $row[2]; ?></td>			
		</tr>
		
	</table>
	
	<?php
	}
	?>

</html>