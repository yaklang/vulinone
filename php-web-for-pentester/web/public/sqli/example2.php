<?php
  require_once('../header.php');
  require_once('db.php');

	if (preg_match('/ /', $_GET["name"])) {
		die("ERROR NO SPACE");	
	}
	$sql = "SELECT * FROM users where name='";
	$sql .= $_GET["name"]."'";

	$result = mysql_query($sql);
	if ($result) {
		?>
		<table class='table table-striped'>
      <tr><th>id</th><th>name</th><th>age</th></tr>
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

