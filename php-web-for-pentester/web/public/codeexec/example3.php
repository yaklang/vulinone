<?php require_once("../header.php"); ?>
<?php
	echo preg_replace($_GET["pattern"], $_GET["new"], $_GET["base"]);

?>


<?php require_once("../footer.php"); ?>
