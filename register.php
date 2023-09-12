<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .form-container{
            border: 1px solid black;
            width: 20vw;
            height: fit-content;
            padding: 20px;
            border-radius: 6px;

            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .form-container input{
            outline: none;
            border: 1px solid black;
            padding: 10px 15px;
            width: calc(100% - 31.6px);
        }
        .form-container label{
            font-size: small;
        }
        .form-container h2{
            text-align: center;
            padding: 15px 0;
        }
        .form-container input[type="submit"]{
            margin-top: 10px;
            width: 100%;
        }
        .header{
            margin: 10px;
        }
        .header a{
            text-decoration: none;
            color: rgb(70, 70, 70);
            font-weight: bold;
        }
        .header a:hover{
            color: black;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
        session_start();
    ?>
    <div class="header">
        <a href="index.php">< Kembali Ke Beranda</a>
    </div>
    <div class="form-container">
        <h2>Daftar</h2>
        <form method="post" action="action_register.php">
            <label for="rName">Username</label><br>
            <input autocomplete="false" type="text" id="rName" name="rName" placeholder="Masukkan Username Anda..." required><br>
            <?php
                if(isset($_SESSION["errName"])) {
                    echo("<small><p style='color: red; width: 100%;'>" . $_SESSION["errName"] . "</p></small>");
                }
            ?>

            <label for="rEmail">Email</label><br>
            <input autocomplete="false" type="email" id="rEmail" name="rEmail" placeholder="Masukkan Email Anda..." required><br>
            <?php
                if(isset($_SESSION["errEmail"])) {
                    echo("<small><p style='color: red; width: 100%;'>" . $_SESSION["errEmail"] . "</p></small>");
                }
            ?>

            <label for="rPassword">Password</label><br>
            <input autocomplete="false" type="password" id="rPassword" name="rPassword" placeholder="Masukkan Password Anda..." required><br>
            <?php
                if(isset($_SESSION["errPass"])) {
                    echo("<small><p style='color: red; width: 100%;'>" . $_SESSION["errPass"] . "</p></small>");
                }
            ?>

            <label for="rPassword2">Password Confirm</label><br>
            <input autocomplete="false" type="password" id="rPassword2" name="rPassword2" placeholder="Masukkan Password Kembali..." required><br>
            <?php
                if(isset($_SESSION["errPass2"])) {
                    echo("<small><p style='color: red; width: 100%;'>" . $_SESSION["errPass2"] . "</p></small>");
                }
            ?>

            <input type="submit" value="Daftar">
        </form>
    </div>
    <?php
        $_SESSION["errEmail"] = null;
        $_SESSION["errPass"] = null;
        $_SESSION["errName"] = null;
        $_SESSION["errPass2"] = null;
    ?>
</body>
</html>