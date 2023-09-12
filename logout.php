<?php
    session_start();
    $_SESSION["emailInp"] = null;
    $_SESSION["passInp"] = null;
    header("Location: index.php");
?>