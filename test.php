<?php
    session_start();
    require_once("connection.php");
    require_once("function.php");
    //---
    if(getUserData('admin') == 1 || getUserData('admin') == 2) {
        echo "admin";
    } else {
        echo "not";
    }
?>