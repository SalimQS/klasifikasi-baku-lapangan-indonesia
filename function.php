<?php
function isUserLoggedIn() {
    if(isset($_SESSION["emailInp"])  && $_SESSION["passInp"]) {
        $email = $_SESSION["emailInp"];
        $pass = $_SESSION["passInp"];
        //---
        require_once("connection.php");
        $conn = OpenMYSQL();
        //---
        $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        //---
        if($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            //---
            if($row['password'] == $pass)
                return 1;
        } 
        CloseMYSQL($conn);
    }
    return 0;
}

function getAdminName($level) {
    switch($level) {
        case 1:
            return 'Admin';
        case 2:
            return 'Super Admin';
        default:
            return 'User';
    }
}

function getURL() {
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
        
    $url.= $_SERVER['HTTP_HOST'];   
    $url.= $_SERVER['REQUEST_URI'];    
      
    return $url;
}

function getUserData($data) {
    if(isset($_SESSION["emailInp"])  && $_SESSION["passInp"]) {
        $email = $_SESSION["emailInp"];
        $pass = $_SESSION["passInp"];
        //---
        require_once("connection.php");
        $conn = OpenMYSQL();
        //---
        $sql = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        //---
        if($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            //---
            return $row[$data];
        } 
        CloseMYSQL($conn);
    }
    return 0;
}

function sortTurunan($kode, $kode2)//1 atas, 2 bawah
{
    switch($kode)
    {
        case "A":
            if($kode2 == "01" || $kode2 == "02" || $kode2 == "03")
                return 1;
            else
                return 0;
        case "B":
            if($kode2 == "05" || $kode2 == "06" || $kode2 == "07" ||
            $kode2 == "08" || $kode2 == "09")
                return 1;
            else
                return 0;
        case "C":
            if(intval($kode2) >= 10 && intval($kode2) <= 33)
                return 1;
            else
                return 0;
        case "D":
            if($kode2 == "35")
                return 1;
            else
                return 0;
        case "E":
            if(intval($kode2) >= 36 && intval($kode2) <= 38)
                return 1;
            else
                return 0;
        case "F":
            if(intval($kode2) >= 41 && intval($kode2) <= 43)
                return 1;
            else
                return 0;
        case "G":
            if(intval($kode2) >= 45 && intval($kode2) <= 47)
                return 1;
            else
                return 0;
        case "H":
            if(intval($kode2) >= 49 && intval($kode2) <= 53)
                return 1;
            else
                return 0;
        case "I":
            if($kode2 == "55" || $kode2 == "56")
                return 1;
            else
                return 0;
        case "J":
            if(intval($kode2) >= 58 && intval($kode2) <= 63)
                return 1;
            else
                return 0;
        case "K":
            if(intval($kode2) >= 64 && intval($kode2) <= 66)
                return 1;
            else
                return 0;
        case "L":
            if($kode2 == "68")
                return 1;
            else
                return 0;
        case "M":
            if(intval($kode2) >= 69 && intval($kode2) <= 75)
                return 1;
            else
                return 0;
        case "N":
            if(intval($kode2) >= 77 && intval($kode2) <= 82)
                return 1;
            else
                return 0;
        case "O":
            if($kode2 == "84")
                return 1;
            else
                return 0;
        case "P":
            if($kode2 == "85")
                return 1;
            else
                return 0;
        case "Q":
            if(intval($kode2) >= 86 && intval($kode2) <= 88)
                return 1;
            else
                return 0;
        case "R":
            if(intval($kode2) >= 90 && intval($kode2) <= 93)
                return 1;
            else
                return 0;
        case "S":
            if(intval($kode2) >= 94 && intval($kode2) <= 96)
                return 1;
            else
                return 0;
        case "T":
            if($kode2 == "97" || $kode2 == "98")
                return 1;
            else
                return 0;
        case "U":
            if($kode2 == "99")
                return 1;
            else
                return 0;
        default:
            if(strpos($kode2, $kode) == 0)
                return 1;
            else 
                return 0;
    }
}
?>