<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	if (isset($_GET['LogIn'])) {
		$email=$_GET['mobEmail'];
		$password=$_GET['newPassword'];
		$sqlSelect="SELECT * FROM `tblfacebook` WHERE MobileorEmail='$email' AND NewPassword='$password'";
		$query=mysqli_query($connect,$sqlSelect);
		$rows=mysqli_fetch_assoc($query);	
			if($rows['MobileorEmail']==$email && $rows['NewPassword']==$password){
				echo'<script>alert("Log In")</script>';
			}
			else{
				echo'<script>alert("Incorrect email or password")</script>';
			}	
	}
	else{
		echo'<script>alert("Empty Record")</script>';
	}

	
?>

</body>
</html>
