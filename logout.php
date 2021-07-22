<?php 

session_start();
session_unset();
// unset($_SESSION["admin_id"]);
// unset($_SESSION["voter_id"]);
// session_destroy();
header("Location: index.php");

?>