<?php require_once("../header.php"); ?>

<?php 
  $str="echo \"Hello ".$_GET['name']."!!!\";";

  eval($str);
?>
<?php require_once("../footer.php"); ?>
