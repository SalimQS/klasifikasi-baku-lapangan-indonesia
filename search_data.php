<?php
require_once("connection.php");
$conn = OpenMYSQL();

$text = $_POST['string'];
$count = 0;
$retstring = array();

if($result = mysqli_query($conn, "SELECT * FROM `kbli` ORDER BY RAND() LIMIT 10")) {
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if(!ctype_alpha($row['kode'])) {
                $rangkuman = $row['kode'] . " - " . $row['judul'];
                if(strpos($rangkuman, $text)) {
                    $retstring[$count]['text'] = $rangkuman;
                    $retstring[$count]['id'] = $row['id'];
                    $count++;
                }
            }
        }
    }
}
//---
if($count > 0) {
    echo json_encode($retstring);
}

CloseMYSQL($conn);
?>