<html>
<center>
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	<?PHP
	
	
		include_once 'dbconfig.php';
		
		if(isset($_POST['btn-update'])){
			
			$id = $_POST['id'];
			$name = $_POST['name'];
			$city = $_POST['city'];
			
			$query = "UPDATE info SET id=$id, name='$name' ,city='$city' WHERE id = $id";
			
			$insert_result = mysql_query($query);
			
			if(!$insert_result){
				
				echo "Could not update the data!";
			}
			
			else
				echo "Data updated successfully!";
		}
	
		
	
		if(isset($_POST['btn-go'])) {
			
			$id_update = $_POST['idupdate'];
			
			$sql_query = "SELECT id, name, city FROM info WHERE id = $id_update";
			
			$result_set = mysql_query($sql_query);
			
			while($row_new = mysql_fetch_array($result_set)) {
				
	?>
				ID <input type="text" name="id" value="<?PHP echo $row_new['id'];?>">
				Name <input type="text" name="name" value="<?PHP echo $row_new['name'];?>">
				City <input type="text" name="city" value="<?PHP echo $row_new['city'];?>">
				
				<br/><br/>
				
				
	<?PHP
	
			}
			
			?><button type="submit" name="btn-update">Update</button><?PHP
	}		
	
	/* Code for retrival of data from database */
	
	/* $sql_query = "SELECT * FROM info";
	$result_set = mysql_query($sql_query); */
	?>
			
	
	</form>	
    

	
	
	<form action="" method="POST">
	
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
	$sql_query = "SELECT id, name, city FROM info;"; 
	
	$result_set = mysql_query($sql_query);
	
	while($row = mysql_fetch_assoc($result_set)) {
			
	?>
	
	<table>
		<tr>
			<td>
				<?php echo $row['id']; ?>
			</td>
			
			<td>
				<?php echo $row['name']; ?>
			</td>
				
			<td>
				<?php echo $row['city']; ?>
				
			</td>			
		</tr>
	</table>
	
	<?php
	}
	?>
	
	Enter ID to update: <input type="text" name="idupdate" placeholder="Enter the ID">
	
	<button name="btn-go">Go</button>
	</form>
</center>
</html>


