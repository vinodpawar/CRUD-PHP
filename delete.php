<html>
<body>
<center>
<?PHP

	include_once 'dbconfig.php';
	
	$query = "SELECT id, name, city from info";
	
	$result = mysql_query($query);
	
	if(!$result) {
		
		echo "No records found!";
	}
	
	while($row = mysql_fetch_assoc($result)){
		
		?><tr>
			<td><?PHP echo $row['id']; ?></td>
			<td><?PHP echo $row['name']; ?></td>
			<td><?PHP echo $row['city']; ?></td>
			<br /><br />
		</tr>
	<?PHP
	}
	
?>

<form action="" method="POST">
	Select ID to delete: <input type="text" name="id" placeholder="Enter ID">
	<button type="submit" name="btn-go">Go</button>
	
	<?PHP
	
	if(isset($_POST['btn-go'])) {
	
		$id = $_POST['id'];
		
		$query_delete = "delete from info where id = $id";
		
		$delete_result = mysql_query($query_delete);
		
		if(!$query_delete) {
			
			echo "No records found!";
		}
		
		else {
			echo "Record deleted successfully!";
			
	
			
		}
	}
	?>

</form>

</center>
</body>
</html>