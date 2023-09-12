<?php
    session_start();
    require_once("../connection.php");
    require_once("../function.php");
    //---
    if(isset($_POST['tSubmit']) && (getUserData('admin') == 1 || getUserData('admin') == 2)) {
        $conn = OpenMYSQL();

        $kode = $_POST['tKode'];
        $judul = $_POST['tJudul'];
        $uraian = $_POST['tUraian'];
        $mother = $_POST['tMother'];
        $url = $_POST['url'];

        $uraian = str_replace("'", "`", $uraian);

        if(mysqli_query($conn, "INSERT INTO `kbli`(`kode`, `judul`, `keterangan`, `mother`) VALUES ('$kode','$judul','$uraian','$mother')")) {
            header("Location: $url");
        } else {
            echo("ERROR " . mysqli_error($conn));
        }
    } else {
        header("Location: $url");
    }
?>