<?php require_once("../header.php"); ?>
<pre>
<?php
  if (!(preg_match('/^\d{1,3}\.\d{1,3}\.\d{1,3}.\d{1,3}$/', $_GET['ip']))) {
     header("Location: example3.php?ip=127.0.0.1");
  }
  system("ping -c 2 ".$_GET['ip']);
?>
</pre>
<?php require_once("../footer.php"); ?>
