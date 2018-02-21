<?php
	error_reporting(E_ERROR|E_PARSE);
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Distributers Details</title>
  
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
  <h1>Distributers Details</h1>
 
  <div class="tbl-header">
	<form action = "update.php" method = "post">
		DistID : <input name = "DistID" type = "text"/>
		DistCompany : <input name = "DistCompany" type = "text"/>
		DistAddress:<input name = "DistAddress" type = "text"/>
		DistAmt:<input name = "DistAmt" type = "text"/>
		<!--<button	 style="height: 34px;" type="submit" name="update">update</button>-->
        <input type="submit" value="UPDATE"/>
	</form>
  </div>
	
         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      
	
    </section>
    <?php
		require 'setUp.php';
		$DistID = $_POST['DistID'];
		$DistCompany = $_POST['DistCompany'];
		$DistAddress = $_POST['DistAddress'];
		$DistAmt = $_POST['DistAmt'];
		$sql = "update distributer set DistID='{$DistID}',DistCompany='{$DistCompany}',DistAddress='{$DistAddress}',DistAmt='{$DistAmt}' where DistID='{$DistID}'";
		
		$result = $conn->query($sql);
		if($conn->affected_rows>0) {
			header("Location: distdetails.php");
		}
		
	?>
    </body>
</html>
