<html>

	<?PHP

	include_once 'dbconfig.php';
	
	$sql_query = "SELECT * FROM info";
	
	$result_set = mysql_query($sql_query);
	
	while($row = mysql_fetch_assoc($result_set)) {
		
		echo $row['name'];
	}
	?>

</html>