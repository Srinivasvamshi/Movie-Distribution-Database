<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>DistrictInfo</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>

<?php
		
		require 'setUp.php';
		$sql = "SELECT * FROM DistrictInfo";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			echo "0 results";
		} else {
	?> 
	<body>
  <section>
  <!--for demo wrap-->
  <h1>District Info</h1>
      <div>
		<a href = "insert3.php"><button	 style="height: 34px;" type="submit" name="search">insert >></button></a>
		<a href = "delete3.php"><button	 style="height: 34px;" type="submit" name="search">delete >></button></a>
		<a href = "update3.php"><button	 style="height: 34px;" type="submit" name="search">update >></button></a>
	</div>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
		<tr>
			<th>LocationPin</th>
			<th>LocationName</th>			
			<th>No_Of_Theatre</th>
			<th>DistID</th>	
		</tr>
		</thead>
          <tbody>
			<?php
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td> {$row['LocationPin']}</a></td>
						<td>{$row['LocationName']}</td>
						<td>{$row['No_Of_Theatre']}</td>
						<td>{$row['DistID']}</td>
						</tr>\n";
    				}
			?>
		</tbody>
          </table>
      </div>

         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      

	<?php 
		}
		$conn->close();
	?>
