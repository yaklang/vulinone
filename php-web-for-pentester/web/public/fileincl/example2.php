<?php require_once '../header.php'; ?>

<?php
	if ($_GET["page"]) {
    $file = $_GET["page"].".php";
    // simulate null byte issue
    $file = preg_replace('/\x00.*/',"",$file);
		include($file);

	} 



?>

<?php require_once '../footer.php'; ?>
