<?php
	include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database Results</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>Email or mobile number</th>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Birthdate</th>
			<th>Birthmonth</th>
			<th>Birthyear</th>
			<th>Gender</th>
			<th>Action</th>
		</tr>
		<?php
			$sqlSelect="SELECT * FROM tblfacebook";
			$query=mysqli_query($connect,$sqlSelect);
			$num=mysqli_num_rows($query);
			while($row=mysqli_fetch_assoc($query)){
			?>
			<tr>
				<td><?=$row['MobileOrEmail']?></td>
				<td><?=$row['Firstname']?></td>
				<td><?=$row['Lastname']?></td>
				<td><?=$row['Birthdate']?></td>
				<td><?=$row['Birthmonth']?></td>
				<td><?=$row['Birthyear']?></td>
				<td><?=$row['Gender']?></td>
			</tr>	
				<?php
			}
		?>
		<tr>
			<td><?=$num?>  Record(s) Found</td>
		</tr>
	</table>
</body>
</html>