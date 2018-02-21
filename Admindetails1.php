<?php
	error_reporting(E_ERROR|E_PARSE);
	?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin Details</title>
  
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
  <h1>Film Details</h1>
  <div>
	<form action="Admindetails1.php" method = "post">
		<label>Enter the Release Date:</label>
		<input name = "ReleaseDate" type = "text"/>
		<button	 style="height: 34px;" type="submit" name="search">search</button>
 	</form>
  </div>
  <div class="tbl-header">
	<?php
		
		require 'setUp.php';
		$ReleaseDate = $_POST['ReleaseDate'];
		$sql = "select * from filmdetails where ReleaseDate = '$ReleaseDate'";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			//echo "0 results";
		} 
		else {	
	?> 
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
						<td>" .$row['FilmID']."</td>
						<td>".$row['FlimName']."</td>
						<td>".$row['Director']."</td>
						<td>".$row['Producer']."</td>
				        <td>".$row['Actor']."</td>
						<td>".$row['ReleaseDate']."</td>
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
	<div>
		<a href = "insert1.php"><button	 style="height: 34px;" type="submit" name="search">insert >></button></a>
		<a href = "delete1.php"><button	 style="height: 34px;" type="submit" name="search">delete >></button></a>
		<a href = "update1.php"><button	 style="height: 34px;" type="submit" name="search">update >></button></a>
	</div>
</body>
</html>
