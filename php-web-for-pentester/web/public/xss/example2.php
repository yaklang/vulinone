<?php require_once '../header.php'; ?>
Hello 
<?php
	 
	$name =  $_GET["name"];
	$name = preg_replace("/<script>/","", $name);
	$name = preg_replace("/<\/script>/","", $name);
echo $name;
?>
<?php require_once '../footer.php'; ?>

