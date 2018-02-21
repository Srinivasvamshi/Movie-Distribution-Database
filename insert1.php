<?php
	error_reporting(E_ERROR|E_PARSE);
	?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Film Details</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="style2.css">

  
</head>
        <p>
			<form action="home2.html">
				<button>Logout</button>
    </form>
		</p>

<body>
	
  <section>
  <!--for demo wrap-->
  <h1>FILM DETAILS</h1>
 
  <div class="tbl-header">
	<form action = "insert1.php" method = "post">
		FilmID : <input name = "FilmID" type = "text">
		FlimName : <input name = "FlimName" type = "text">
		Director<input name = "Director" type = "text">
		Producer<input name = "Producer" type = "text">
		Actor<input name = "Actor" type = "text">
		ReleaseDate<input name = "ReleaseDate" type = "text">
		<button	 style="height: 34px;" type="submit" name="insert">insert</button>
	</form>
  </div>
	
         
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
      
	
    </section>
    <?php
		require 'setUp.php';
		$FilmID = $_POST['FilmID'];
		$FlimName = $_POST['FlimName'];
		$Director = $_POST['Director'];
		$Producer = $_POST['Producer'];
		$Actor = $_POST['Actor'];
		$ReleaseDate = $_POST['ReleaseDate'];
		$sql = "insert into filmdetails values ('{$FilmID}','{$FlimName}','{$Director}','{$Producer}','{$Actor}','{$ReleaseDate}');";
		$result = $conn->query($sql);
		if($result) {
			header("Location: Admindetails.php");
		}
		
	?>
</body>
</html>
