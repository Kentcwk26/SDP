<?php  
session_start();

session_unset();
session_destroy();

header("Location: vet_login.php");
exit;