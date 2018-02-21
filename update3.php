<?php
	error_reporting(E_ERROR|E_PARSE);
	?>
<!DOCTYPE html>
<html>
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
	<form action = "update3.php" method = "post">
		Location Pin: <input name = "LocationPin" type = "text"/>
		Location Name : <input name = "LocationName" type = "text"/>
		No of Theatre:<input name = "No_Of_Theatre" type = "text"/>
		DistID:<input name = "DistID" type = "text"/>
		
		<!--<button	 style="height: 34px;" type="submit" name="update">update</button>-->
        <input type="submit" value="UPDATE"/>
	</form>
  </div>
	
         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      
	
    </section>
    <?php
		require 'setUp.php';
		$LocationPin= $_POST['LocationPin'];
		$LocationName = $_POST['LocationName'];
		$No_Of_Theatre = $_POST['No_Of_Theatre'];
		$DistID = $_POST['DistID'];
		
		$sql = "update districtinfo set LocationPin='{$LocationPin}',LocationName='{$LocationName}',No_Of_Theatre='{$No_Of_Theatre}',DistID='{$DistID}' where LocationPin='{$LocationPin}'";
		
		$result = $conn->query($sql);
		if($conn->affected_rows>0) {
			header("Location: Admindetails.php");
		}
		
	?>
    </body>
</html>
