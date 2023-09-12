<?php
    require_once("connection.php");
    $conn = OpenMYSQL();

    session_start();
    $name = $_POST['rName'];
    $email = $_POST['rEmail'];
    $pass = $_POST['rPassword'];
    $pass2 = $_POST['rPassword2'];

    $sql = "SELECT * FROM user WHERE name='$name' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0) {
        $_SESSION["errName"] = "This name already exist";
        header("Location: register.php");
    } else {
        if(!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $_SESSION["errName"] = "Only letters and white space allowed";
            header("Location: register.php");
        } else {
            $sql2 = "SELECT * FROM user WHERE email='$email' LIMIT 1";
            $result2 = mysqli_query($conn, $sql);
            if($result2->num_rows > 0) {
                $_SESSION["errEmail"] = "Someone already use this Email";
                header("Location: register.php");
            } else {
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                    $_SESSION["errEmail"] = "You Entered An Invalid Email Format"; 
                    header("Location: register.php");
                } else{
                    if(strlen($pass) < 8) {
                        $_SESSION["errPass"] = "Your Password Must Contain At Least 8 Characters!";
                        header("Location: register.php");
                    }
                    else if(!preg_match("#[0-9]+#", $pass)) {
                        $_SESSION["errPass"] = "Your Password Must Contain At Least 1 Number!";
                        header("Location: register.php");
                    }
                    else if(!preg_match("#[A-Z]+#", $pass)) {
                        $_SESSION["errPass"] = "Your Password Must Contain At Least 1 Capital Letter!";
                        header("Location: register.php");
                    }
                    else if(!preg_match("#[a-z]+#", $pass)) {
                        $_SESSION["errPass"] = "Your Password Must Contain At Least 1 Lowercase Letter!";
                        header("Location: register.php");
                    } 
                    else if($pass != $pass2) {
                        $_SESSION["errPass2"] = "Password not match!";
                        header("Location: register.php");
                    } else{
                        //$sql3 = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$name', '$email', '$pass')";
                        //$result3 = mysqli_query($conn, $sql);
                        echo implode(", ", $_POST);
                    }
                }
            }
        }
    }
    CloseMYSQL($conn);
?>