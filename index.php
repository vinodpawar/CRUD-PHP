<?PHP
include_once 'dbconfig.php';
if(isset($_POST['btn-save'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	
	$sql_query = "INSERT INTO info(id,name,city) VALUES('$id','$name','$city');";
	
	$query_success = FALSE;
	
	$query_success = mysql_query($sql_query);
	
	if(!$query_success) {
		
		echo "Data not stored to the database";
	}
	
}
?>

<html>
	<head>
		
	</head>
	
	<body>
		<form action="index.php" method="post">
		
			<center>
				<table style="margin-top: 200px;">
					<tr>
						<td><input type="text" name="id" placeholder="ID" required></td>
					</tr>
					<tr>
						<td><input type="text" name="name" placeholder="Name" required></td>
					</tr>
					<tr>
						<td><input type="text" name="city" placeholder="City" required></td>
					</tr>
					<tr>
						<td><button type="submit" name="btn-save">Save</button></td>
					</tr>
				</table>
			</center>
		
		</form>
	
	
	</body>
	
	
</html>