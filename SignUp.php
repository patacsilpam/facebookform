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
	$EmptyError=$patternError=""; 
	//signup btn
	if (isset($_GET['SignUp'])) {
		if (isset($_GET['gender'])) {
			$Gender=$_GET['gender'];
			$firstname=$_GET['firstname'];
			$lastname=$_GET['lastname'];
			$MobileEmail=$_GET['mobEmail'];
			$newPassword=$_GET['newPassword'];
			$birthdate=$_GET['dob-day'];
			$birthmonth=$_GET['dob-month'];
			$birthyear=$_GET['dob-year'];
			$sqlInsert="INSERT INTO `tblfacebook`(`Firstname`,`Lastname`,`MobileorEmail`,`NewPassword`,`Birthdate`,`Birthmonth`,`Birthyear`,`Gender`) VALUES('$firstname','$lastname','$MobileEmail','$newPassword','$birthdate','$birthmonth','$birthyear','$Gender')";
			$query=mysqli_query($connect,$sqlInsert);	
		}
			if (!empty($firstname)|| !empty($lastname) ||!empty($MobileEmail)||!empty($newPassword)||!empty($birthdate)||!empty($birthyear)||!empty($Gender)) {
				echo'<script>alert("Record added")</script>';
			}
				else{
					$EmptyError="*Please enter this field";	
				}
		}	
?>


</body>
</html>