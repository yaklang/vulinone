<?php

  require_once('../header.php');
  require_once('db.php');
	$sql = "SELECT * FROM users ORDER BY `";
	$sql .= mysql_real_escape_string($_GET["order"])."`";
	$result = mysql_query($sql);
	
	if ($result) {
		?>
		<table  class='table table-striped'>
		<tr>
			<th><a href="example8.php?order=id">id</th>
			<th><a href="example8.php?order=name">name</th>
			<th><a href="example8.php?order=age">age</th>
		</tr>
		<?php
		while ($row = mysql_fetch_assoc($result)) {
			echo "<tr>";
    			echo "<td>".$row['id']."</td>";
    			echo "<td>".$row['name']."</td>";
    			echo "<td>".$row['age']."</td>";
			echo "</tr>";
		}	
		echo "</table>";
	}
    require '../footer.php';
?>

