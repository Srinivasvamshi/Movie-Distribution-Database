<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Details</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>
         <p>
			<form action="home2.html">
				<button>Logout</button>
			</form
		</p>
<?php
		
		require 'setUp.php';
		$sql = "SELECT * FROM filmdetails";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			echo "0 results";
		} else {
	?> 
	<body>
  <section>
  <!--for demo wrap-->
  <h1>Admin Details</h1>
        <a href="TheatherDetails.php" >Theatre Details</a>
	    <a href="DistrictInfo.php">District Information</a>
        <a href="collection.php">Collection Details</a>
		<a href ="Admindetails1.php" >Update FILM Details </a> 
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
		<tr>
			<th>FilmID</th>
			<th>FlimName</th>			
			<th>Director</th>
			<th>Producer</th>
			<th>Actor</th>
			<th>ReleaseDate</th>	
		</tr>
		</thead>
          <tbody>
			<?php
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td> {$row['FilmID']}</a></td>
						<td>{$row['FlimName']}</td>
						<td>{$row['Director']}</td>
						<td>{$row['Producer']}</td>
						<td>{$row['Actor']}</td>
						<td>{$row['ReleaseDate']}</td>
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
