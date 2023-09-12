<?php
    session_start();
    require_once("../connection.php");
    require_once("../function.php");
    //---
    if(isset($_POST['tSubmit']) && (getUserData('admin') == 1 || getUserData('admin') == 2)) {
        require_once("../connection.php");
        $conn = OpenMYSQL();

        $kode = $_POST['tKode'];
        $judul = $_POST['tJudul'];
        $uraian = $_POST['tUraian'];
        $id = $_POST['tID'];
        $url = $_POST['url'];

        if(!empty($kode) && !empty($judul) && !empty($uraian)) {
            $uraian = str_replace("'", "`", $uraian);

            if(mysqli_query($conn, "UPDATE `kbli` SET `kode`='$kode', `judul`='$judul', `keterangan`='$uraian' WHERE `id`='$id'")) {
                header("Location: $url");
            } else {
                echo("ERROR " . mysqli_error($conn));
            }
        } else {
            if(!empty($kode)) {
                if(mysqli_query($conn, "UPDATE `kbli` SET `kode`='$kode' WHERE `id`='$id'")) {
                    header("Location: $url");
                } else {
                    echo("ERROR " . mysqli_error($conn));
                }
            }
            //---
            if(!empty($judul)) {
                if(mysqli_query($conn, "UPDATE `kbli` SET `judul`='$judul' WHERE `id`='$id'")) {
                    header("Location: $url");
                } else {
                    echo("ERROR " . mysqli_error($conn));
                }
            }
            //---
            if(!empty($uraian)) {
                $uraian = str_replace("'", "`", $uraian);
                //---
                if(mysqli_query($conn, "UPDATE `kbli` SET `keterangan`='$uraian' WHERE `id`='$id'")) {
                    header("Location: $url");
                } else {
                    echo("ERROR " . mysqli_error($conn));
                }
            }
        }
    } else {
        echo("<script>history.back()</script>");
    }
?>