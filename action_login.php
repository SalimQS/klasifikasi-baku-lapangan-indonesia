<?php
    require_once("connection.php");
    $conn = OpenMYSQL();

    session_start();
    $email = $_POST['lEmail'];
    $pass = $_POST['lPassword'];

    $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        //---
        if($row['password'] != $pass) {
            $_SESSION["errPass"] = "Password salah.";
            header("Location: login.php");
        }
        else {
            $_SESSION["emailInp"] = $email;
            $_SESSION["passInp"] = $pass;
            header("Location: index.php");
        }
    } 
    else {
        $_SESSION["errEmail"] = "Akun tidak ditemukan.";
        header("Location: login.php");
    }
    CloseMYSQL($conn);
?>