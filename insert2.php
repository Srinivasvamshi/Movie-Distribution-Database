<?php
	error_reporting(E_ERROR|E_PARSE);
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Theatre Details</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>
        <p>
			<form action="dist.html">
				<button>Logout</button>
    </form>
		</p>

<body>
	
  <section>
  <!--for demo wrap-->
  <h1>Theatre Details</h1>
 
  <div class="tbl-header">
	<form action = "insert2.php" method = "post">
		TheatreID : <input name = "TheatreID" type = "text"/>
		FilmID : <input name = "FilmID" type = "text"/>
		Theatre Name:<input name = "TheatreName" type = "text"/>
		Location Pin:<input name = "LocationPin" type = "text"/>
		Theatre Amount:<input name = "TheAmt" type = "text"/>
        Distributer ID: <input name ="DistID" type="text"/>
		<!--<button	 style="height: 34px;" type="submit" name="insert">insert</button>-->
        <input type="submit" value="INSERT">
	</form>
  </div>
	
         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      
	
    </section>
    <?php
		require 'setUp.php';
		$TheatreID = $_POST['TheatreID'];
		$FilmID = $_POST['FilmID'];
		$TheatreName = $_POST['TheatreName'];
		$LocationPin = $_POST['LocationPin'];
		$TheAmt = $_POST['TheAmt'];
        $DistID = $_POST['DistID'];
		$sql = "insert into theatre values ('$TheatreID','$FilmID','$TheatreName','$LocationPin','$TheAmt','$DistID');";
		$result = $conn->query($sql);
		if($result) {
			header("Location: Admindetails.php");
		}
		
	?>
</body>
</html>
