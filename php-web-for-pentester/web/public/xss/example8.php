<?php 
  require_once '../header.php'; 

  if (isset($_POST["name"])) {
    echo "HELLO ".htmlentities($_POST["name"]);
  }
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  Your name:<input type="text" name="name" />
  <input type="submit" name="submit"/>

<?php 
   
  require_once '../footer.php'; 

?>
