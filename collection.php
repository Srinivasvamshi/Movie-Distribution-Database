<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Collection</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>

<?php
		
		require 'setUp.php';
        $sql2 = "SELECT TheatreID,DistID FROM collection";
        $result1 = $conn->query($sql2);
        if ($result1->num_rows > 0) {
            while($row = $result1->fetch_assoc()) {
                    $tid=$row['TheatreID'];
                    $did=$row['DistID'];
                    $sql1="Call UpdateCollec('{$tid}','{$did}')";
	                if($conn->query($sql1)) {
                    }
            }
        }
		$sql = "SELECT * FROM collection";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			echo "0 results";
		} else {
	?> 
	<body>
  <section>
  <!--for demo wrap-->
  <h1>Collection Details</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
		<tr>
			<th>TheatreID</th>
			<th>DistID</th>			
			<th>TotalAmount</th>	
		</tr>
		</thead>
          <tbody>
			<?php
				while($row = $result->fetch_assoc()) {
                    
					echo "<tr>
						<td> {$row['TheatreID']}</a></td>
						<td>{$row['DistID']}</td>
						<td>{$row['TotalAmount']}</td>
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
