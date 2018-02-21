<?php
	error_reporting(E_ERROR|E_PARSE);
	?>
<html >
<head>
  <meta charset="UTF-8">
  <title>District Details</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>

<body>
	        <p>
			<form action="dist.html">
				<button>Logout</button>
    </form>
		</p>

  <section>
  <!--for demo wrap-->
  <h1>District Details</h1>
 
  <div class="tbl-header">
	<form action = "delete3.php" method = "post">
		
		Location PIN: <input name = "LocationPin" type = "text">
		
		<button	 style="height: 34px;" type="submit" name="delete">delete</button>
	</form>
  </div>
	
         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      
	
    </section>
    <?php
		require 'setUp.php';
	
		$LocationPin = $_POST['LocationPin'];
		
		$sql = "delete from districtinfo where LocationPin = '$LocationPin'";
       		$result = $conn->query($sql);
		if($conn->affected_rows>0) {
			header("Location: Admindetails.php");
		}
		$conn->close();
	?>
</body>
</html>
