<?php require_once("../header.php") ?>
<?php
class User{
  public $id, $name, $age;
  function __construct($id, $name, $age){
    $this->name= $name;
    $this->age = $age;
    $this->id = $id;
  }   
}
  require_once('../header.php');
  require_once('../sqli/db.php');
	$sql = "SELECT * FROM users ";

	$order = $_GET["order"];
	$result = mysql_query($sql);
  if ($result) {
		while ($row = mysql_fetch_assoc($result)) {
      $users[] = new User($row['id'],$row['name'],$row['age']);
    }
    if (isset($order)) { 
      usort($users, create_function('$a, $b', 'return strcmp($a->'.$order.',$b->'.$order.');'));
    }
	}   

		?>
		<table class='table table-striped' >
		<tr>
			<th><a href="example2.php?order=id">id</th>
			<th><a href="example2.php?order=name">name</th>
			<th><a href="example2.php?order=age">age</th>
		</tr>
		<?php

    foreach ($users as $user) {  
			echo "<tr>";
    			echo "<td>".$user->id."</td>";
    			echo "<td>".$user->name."</td>";
    			echo "<td>".$user->age."</td>";
			echo "</tr>";
		}	
		echo "</table>";
  require '../footer.php';
?>

<?php require_once("../footer.php") ?>
