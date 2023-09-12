<?php
    session_start();
    require_once("../connection.php");
    require_once("../function.php");
    $url = $_POST['url'];
    //---
    if(isset($_POST['dSubmit']) && (getUserData('admin') == 1 || getUserData('admin') == 2)) {
        $conn = OpenMYSQL();

        $id = $_POST['dID'];

        if(mysqli_query($conn, "DELETE FROM `kbli` WHERE `id`='$id'")) {
            header("Location: ../index.php");
        } else {
            echo("ERROR " . mysqli_error($conn));
        }
    } else {
        header("Location: $url");
    }
?>