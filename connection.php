<?php
function OpenMYSQL()
{
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "revivemy_salimqs";
    
    $conn = mysqli_connect($server, $user, $pass, $database);
    
    if (!$conn) 
    {
        die("Gagal tersambung dengan database.");
    }
    return $conn;
}

function CloseMYSQL($conn)
{
    mysqli_close($conn);
}
?>