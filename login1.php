<html>
<head>
	<title>PHP TEST</title>
</head>
<body>
	<?php	
		require 'setUp.php';
		$Email = $_POST['Email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM login WHERE Email='$Email' AND password='$password'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if($result->num_rows == 1){
			$_SESSION["Email"] = $row["Email"];
			header("Location: Admindetails.php");
            //echo "success";
		}
		else
			echo "fail";
		$conn->close();
		
	?>
</body>
</html>
