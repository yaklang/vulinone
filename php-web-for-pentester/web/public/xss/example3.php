<?php require_once '../header.php'; ?>
Hello 
<?php
	 
	$name =  $_GET["name"];
	$name = preg_replace("/<script>/i","", $name);
	$name = preg_replace("/<\/script>/i","", $name);
echo $name;
?>

<?php require_once '../footer.php'; ?>

