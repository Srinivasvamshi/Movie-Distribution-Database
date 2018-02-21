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
			<form action="home2.html">
				<button>Logout</button>
    </form>
		</p>
  <section>
  <!--for demo wrap-->
  <h1>Distributers Details</h1>
  <div>
	<form action="distdetails1.php" method = "post">
		<label>Enter the distributor company name:</label>
		<input name = "DistCompany" type = "text"/>
		<button	 style="height: 34px;" type="submit" name="search">search</button>
 	</form>
  </div>
  <div class="tbl-header">
	<?php
		
		require 'setUp.php';
		$DistCompany = $_POST['DistCompany'];
		$sql = "select * from distributer where DistCompany = '$DistCompany'";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			echo "0 results";
		} 
		else {	
	?> 
   <table cellpadding="0" cellspacing="0" border="0">
      <thead>
		<tr>
			<th>DistID</th>
			<th>DistCompany</th>			
			<th>DistAddress</th>
			<th>DistAmt</th>			
		</tr>
		</thead>
          <tbody>
			<?php 
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>" .$row['DistID']."</td>
						<td>".$row['DistCompany']."</td>
						<td>".$row['DistAddress']."</td>
						<td>".$row['DistAmt']."</td>
						</tr>\n";
    				}
			?>
			
          </table>
      </div>
         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      
	<?php 
		
		}
		$conn->close();
	?>
    </section>
	<div class="links">
		<a href = "insert.php"><button	 style="height: 34px;" type="submit" name="search">insert >></button></a>
		<a href = "delete.php"><button	 style="height: 34px;" type="submit" name="search">delete >></button></a>
		<a href = "update.php"><button	 style="height: 34px;" type="submit" name="search">update >></button></a>
	</div>
</body>
</html>
