<?php
		
		require 'setUp.php';
		$sql = "SELECT * FROM fir";
		$result = $conn->query($sql);		
		if (!($result->num_rows > 0)) { // output data of each row
			echo "0 results";
		} else {
	?>    			   					    					
	<table class="container tabu">
		<thead>
		<tr>
			<th>fir_id</th>
			<th>aadhar no</th>			
			<th>Type of Crime</th>
			<th>place</th>			
			<th>Reason</th>
		</tr>
		</thead>
		<tbody>
			<?php
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td> {$row['fir_id']}</a></td>
						<td><a href='del.php'>{$row['aadhar_no']}</td>
						<td>{$row['type_crime']}</td>
						<td>{$row['place']}</td>
						<td>{$row['reason']}</td>
					      </tr>\n";
    				}
			?>
		</tbody>
	</table>
	<?php 
		}
		$conn->close();
	?>
