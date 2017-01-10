<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: ../vue/page_connexion.php");

?>