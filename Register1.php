<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php	
		require 'setUp.php';
		
		$Email = $_POST['Email'];
		$user=$_POST['user'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		//to check if user already exist
		$sql1 = "SELECT Email,password FROM login where Email = '$Email' and password = '$password'";
		$res = $conn->query($sql1);
		$row = $res->fetch_assoc();
		if($res->num_rows == 1){
			echo 'account already exist';
		}
		else if($password == $confirmPassword) {
			$sql = "INSERT INTO login(user,Email,password) VALUES('$user','$Email','$password')";
		}
		$result = $conn->query($sql);
		if($result){
			echo "Welcome" . " " . $user; 
		}
		$conn->close();
	?>
</body>
</html>
