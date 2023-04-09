<?php
    session_start();
    $username = $_SESSION["UserName"]; 
    if(!isset($username))
?>
