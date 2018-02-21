<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Theather Details</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>

<?php
		
		require 'setUp.php';
		$sql = "SELECT * FROM theatre";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			echo "0 results";
		} else {
	?> 
	<body>
  <section>
  <!--for demo wrap-->
  <h1>Theatre Details</h1>
      <div>
		<a href ="TheatherDetails1.php" >Update Theatre Details</a> 
	</div>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
		<tr>
			<th>TheatreID</th>
			<th>FilmID</th>			
			<th>TheatreName</th>
			<th>LocationPin</th>
			<th>TheAmt</th>
		</tr>
		</thead>
          <tbody>
			<?php
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td> {$row['TheatreID']}</a></td>
						<td>{$row['FilmID']}</td>
						<td>{$row['TheatreName']}</td>
						<td>{$row['LocationPin']}</td>
						<td>{$row['TheAmt']}</td>
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
