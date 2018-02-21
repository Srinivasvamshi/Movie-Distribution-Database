<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Distributers Details</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>
        <p>
			<form action="home2.html">
				<button>Logout</button>
			</form
		</p>

<body>
  <section>
  <!--for demo wrap-->
  <h1>Distributers Details</h1>
  
  <div class="tbl-header">
	<?php
		
		require 'setUp.php';
		$sql = "select * from distributer";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			echo "0 results";
		} else {
			
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
						<td> {$row['DistID']}</a></td>
						<td>{$row['DistCompany']}</td>
						<td>{$row['DistAddress']}</td>
						<td>{$row['DistAmt']}</td>
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
    </section>
	<div>
		<a href ="distdetails1.php" >Update Details</a> 
	</div>
</body>
</html>
