<?php
  require_once("../header.php");
  // ensure name is not empty 
  assert(trim("'".$_GET['name']."'"));
  echo "Hello ".htmlentities($_GET['name']);
  require_once("../footer.php");
?> 
