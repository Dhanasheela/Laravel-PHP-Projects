<?php
session_start();
session_destroy();
header("Location: sign-in.php"); //use for the redirection to some page

?>
<title>TechAdvise-sign-out</title>