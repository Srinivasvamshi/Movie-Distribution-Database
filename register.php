<!DOCTYPE html>
<html>
<head>

</head>
<body>
	<?php	
		require 'setUp.php';
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$aadhar_no = $_POST['aadhar_no'];
		$phno = $_POST['phno'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confpass = $_POST['confpass'];
		//to check if user already exist
		$sql1 = "select email,password from citizen where email = '$email' and password = '$password' and aadhar_no='$aadhar_no'";
		$res = $conn->query($sql1);
		$row = $res->fetch_assoc();
		if($res->num_rows == 1){
			echo 'account already exist';
		}
		else if($password == $confpass) {
			$sql = "insert into citizen(aadhar_no,first_name,last_name,phno,email,address,password) values('$aadhar_no','$first_name','$last_name','$phno','$email','$address','$password')";
		}
		$result = $conn->query($sql);
		if($result){
			echo "Welcome" . " " . $first_name; 
		}
		$conn->close();
	?>
</body>
</html>
