<?php
	error_reporting(E_ERROR|E_PARSE);
	?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Theatre Details</title>
  
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
  <h1>Theatre Details</h1>
 
  <div class="tbl-header">
	<form action = "delete2.php" method = "post">
		
		TheatreID : <input name = "TheatreID" type = "text">
		
		<button	 style="height: 34px;" type="submit" name="delete">delete</button>
	</form>
  </div>
	
         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      
	
    </section>
    <?php
		require 'setUp.php';
	
		$TheatreID = $_POST['TheatreID'];
		
		$sql = "delete from theatre where TheatreID = '$TheatreID'";
       $result=$conn->query($sql);
		if($conn->affected_rows>0) {
			header("Location: Admindetails.php");
		}
		
	?>
</body>
</html>
