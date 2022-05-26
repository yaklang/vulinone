<?php require_once("../header.php"); 

  $x = "<data><users><user><name>hacker</name><message>Hello hacker</message><password>pentesterlab</password></user><user><name>admin</name><message>Hello admin</message><password>s3cr3tP4ssw0rd</password></user></users></data>";

  $xml=simplexml_load_string($x);
  $xpath = "users/user/name[.='".$_GET['name']."']/parent::*/message";
  $res = ($xml->xpath($xpath));
  while(list( ,$node) = each($res)) {
  	echo $node;
  } 
?>
<?php require_once("../footer.php"); ?>
