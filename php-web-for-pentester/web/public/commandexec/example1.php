<?php require_once("../header.php"); ?>
<pre>
<?php
  system("ping -c 2 ".$_GET['ip']);
?>
</pre>
<?php require_once("../footer.php"); ?>
