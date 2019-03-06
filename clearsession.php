<?php
session_start();
$_SESSION["score"] = 0;
$_SESSION["total"] = 0;
header("Location: index.php");
?>
