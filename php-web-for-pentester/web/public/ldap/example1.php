<?php
  require "../header.php" ; 
  $ld = ldap_connect("localhost") or die("Could not connect to LDAP server");
  ldap_set_option($ld, LDAP_OPT_PROTOCOL_VERSION, 3); 
  ldap_set_option($ld, LDAP_OPT_REFERRALS, 0);
  if ($ld) {
   if (isset($_GET["username"])) { 
     $user = "uid=".$_GET["username"]."ou=people,dc=pentesterlab,dc=com";
   }
   $lb = @ldap_bind($ld, $user,$_GET["password"]);

    if ($lb) {
       echo "AUTHENTICATED";
    }
    else {
       echo "NOT AUTHENTICATED";
    }
  }
  require "../footer.php" ; 
?>
