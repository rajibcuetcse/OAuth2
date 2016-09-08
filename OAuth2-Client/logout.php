<?php
@session_start();
$_SESSION["current_token"] = null;
header('Location: index.php');
?>

