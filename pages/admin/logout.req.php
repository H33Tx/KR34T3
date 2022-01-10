<?php

session_destroy();
session_unset();
setcookie("kr34t3_loggedin", "", time() - 3600, "/");
setcookie("kr34t3_passhash", "", time() - 3600, "/");
header("location: $url");

?>
