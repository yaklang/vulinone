<?php require_once("../header.php"); ?>
Hello  
<?php
  $xml=simplexml_load_string($_GET['xml']);
  print_r((string)$xml);
?>
<?php require_once("../footer.php"); ?>
