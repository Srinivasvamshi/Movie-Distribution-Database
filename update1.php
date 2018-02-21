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
 
  <div class="tbl-header">
	<form action = "update1.php" method = "post">
		FilmID : <input name = "FilmID" type = "text"/>
		FlimName : <input name = "FlimName" type = "text"/>
		Director:<input name = "Director" type = "text"/>
		Producer:<input name = "Producer" type = "text"/>
		Actor:<input name = "Actor" type = "text"/>
		ReleaseDate:<input name = "ReleaseDate" type = "text"/>
		<!--<button	 style="height: 34px;" type="submit" name="update">update</button>-->
        <input type="submit" value="SUBMIT"/>
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
		$sql = "update filmdetails set FilmID='{$FilmID}',FlimName='{$FlimName}',Director='{$Director}',Producer='{$Producer}',Actor='{$Actor}',ReleaseDate='{$ReleaseDate}' where FilmID='{$FilmID}'";
		
		$result = $conn->query($sql);
		if($conn->affected_rows>0) {
			header("Location: Admindetails.php");
		}
		
	?>
    </body>
</html>
