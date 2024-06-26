<?php session_start();?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="plugin/fontawesome/fontawesome.js"></script>
    <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css"></link>
    <script src="plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugin/jquery/jquery.js"></script>
    <style>
        @font-face {
            font-family: Montserrat;
            src: url(Montserrat.ttf);
        }
        :root{
            --radius: 6px;
        }
        *{
            padding: 0;
            margin: 0;
            font-family: Montserrat;
        }
        body{
            background-color: rgb(232, 232, 232);
        }
        .container{
           /* margin: 10px 5vw;
            padding: 10px;*/
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 40px;
        }

        .mg-01, .mg-02{
            background-color: white;
            padding: 2.5vh;
            border-radius: 7.5px;
            box-shadow: 0px 2px 2.5px 1px rgb(195, 195, 195);
        }
        .mg-01 input[type="text"], .mg-01 select{
            background-color: rgb(237, 237, 237);
            outline: none;
            border: none;
            width: auto;
            padding: 10px;
            border-radius: 6px;
        }
        .mg-01 select{ width: calc(20vw - 30px); }
        .mg-01 input[type="text"]{ width: calc(60vw - 40px); }

        .search-bar{
            width: fit-content;
        }
        
        .data{
            display: none;
            background-color: white;
            position: absolute;
            box-shadow: 1px 2px 10px rgb(177, 177, 177);
            width: calc(60vw - 40px);
            cursor: pointer;
        }
        .data a{
            text-decoration: none;
            color: black;
            display: block;
            margin: 5px 0;
            padding: 5px 20px;
        }
        .data a:not(.data-child-no-hover):hover{
            background-color: rgb(244, 244, 244);
        }

        .mh{
            border: 1px solid black;
            color: black;
            display: flex;
            padding: 10px;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            width: 98%;
            margin-top: 10px;
            height: fit-content;
            align-items: center!important;
        }
        .mh:nth-child(1){
            margin-top: 0px;
        }

        .my{
            text-decoration: none;
            display: block;
        }
        .mx{
            border: 1px solid black;
            color: black;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            width: 98%;
            margin-top: 10px;
            height: fit-content;
            font-weight: 500;
        }

        .mz{
            font-weight: 600;
        }

        .mx hr{
            margin: 5px 0;
        }

        .mi{
            background-color: #f2f2f2;
            width: fit-content;
            padding: 8px 15px;
            border-radius: 6px;
            margin-right: 10px;
            display: inline-block;
        }
        .mj{
            display: block;
            height: 100%;

        }

        .logo{
            display: flex;
            width: fit-content;
            box-shadow: 0px 2px 2.5px 1px rgba(0, 0, 0, 0.219);
            border-radius: var(--radius);
        }
        .logo div{
            padding: 15px 30px;
            color: white;
        }
        .logo div:nth-child(1){
            background-color: #9b1f15;
            border-top-left-radius: var(--radius);
            border-bottom-left-radius: var(--radius);
        }
        .logo div:nth-child(2){
            background-color: #272727;
            border-top-right-radius: var(--radius);
            border-bottom-right-radius: var(--radius);
        }

        .kbli-detail h4, .kbli-detail p{
            margin-top: 20px;
        }

        .navbar{
            background-color: #9b1f15;
            color: white;
            width: auto;
            height: fit-content;
            padding: 10px 30px;
            align-items: center;
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }
        .navbar h2, .daftar, .masuk{
            display: inline-block;
        }
        .navbar h2{
            color: rgba(255, 255, 255, 0.249);
            margin: 0 15px;
        }
        .navbar a{
            text-decoration: none;
            color: white;
            user-select: none;
            text-transform: uppercase;
        }
        .navbar a:hover{
            color: rgb(233, 233, 233);
        }
        .navbar-left, .navbar-right{
            margin: 10px;
        }
        .navbar-left{
            justify-self: left;
        }
        .navbar-left h3{
            cursor: pointer;
            user-select: none;
        }
        .navbar-right{
            justify-self: right;
        }
        .navbar-align-l, .navbar-align-r{
            width: 50%;
            display: flex;
        }
        .profile{
            border: 1px solid white;
            color: white;
            border-radius: 50px;
            padding: 5px 15px;
            cursor: pointer;
            user-select: none;

            transition: background-color 0.3s, color 0.3s;
        }
        .profile:hover{
            background-color: white;
            color: rgb(82, 82, 82);
        }
        .kbli-menu{
            margin: 0 20px;
            cursor: pointer;
            padding: 15px 20px;
            font-size: large;

            background-color: transparent;
            border: none;
        }
        .kbli-logo-wrap{
            display: inline-block;
        }

        .kbli-dropdown{
            display: inline-block;
        }

        .body-container{
            left: 0px;
            top: 0px;
            position: absolute;
            width: 100vw;
            height: 100vh;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
        }
        .modal-container{
            background-color: white;
            padding: 20px;
        }
        #tUraian{
            resize: none;
        }
        .modal-container input, .modal-container textarea{
            box-sizing: border-box;
            outline: none;
            width: 20vw;
            padding: 5px 15px;
        }
        .centering-div{
            max-width: 80vw;
        }
        .search-bar-button{
            position: absolute;
            background-color: transparent;
            color: #9b1f15;
            border: none;
            margin-left: -40px;
            margin-top: 10px;
            padding: 0 5px;
        }

        #user-dropdown{
            left: auto;
            margin-top: -10px;
        }

        #user-dropdown a{
            color: black;
            text-transform: none;
        }

        mark{
            background-color: #8fc2ff;
            color: white;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <span class="navbar-align-l" style="justify-content: left;">
            <div class="navbar-left">
                <h5><a href="index.php">KLASIFIKASI BAKU LAPANGAN USAHA INDONESIA (KBLI)</a></h5>
            </div>
        </span>
        <span class="navbar-align-r" style="justify-content: right;">
            <div class="navbar-right">
                <?php
                    require_once("function.php");
                    //---
                    if(isUserLoggedIn()){
                        echo("
                            <div class='profile' role='button' data-bs-toggle='dropdown' data-bs-target='#user-dropdown' aria-expanded='false'>" . getUserData('name') . " -  " . getAdminName(getUserData('admin')) . "</div>
                            <ul class='dropdown-menu' id='user-dropdown'>
                                <li><a href='logout.php' class='dropdown-item'>Logout</a></li>
                            </ul>
                        ");
                    } else {
                        echo("<div class='account'><div class='daftar'><a href='register.php'>Daftar</a></div><h2>|</h2><div class='masuk'><a href='login.php'>Masuk</a></div></div>");
                    }
                ?>
            </div>
        </span>
    </div>
    <div class="container">
        <div class="centering-div">
        <div class="mg-01">
            <div class="search-bar">
                <input class="search-bar-input" id="search-bar-input" type="text" list="kbli" placeholder="Masukkan Sesuatu">
                <button class="search-bar-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                <div class="data" id="data-list">
                    <a class="data-child-no-hover data-child-none" id="data-child">No data available.</a>
                </div>
                <select class="search-bar-select">
                    <option value="1">Semua KBLI</option>
                    <option value="2">Kode KBLI</option>
                    <option value="3">Judul KBLI</option>
                    <option value="4">Uraian KBLI</option>
                </select>
            </div>
        </div>
        <div class="mg-02" style="margin-top: 20px;">
            <div class="dashboard">
                <?php
                    require_once("connection.php");
                    $conn = OpenMYSQL();

                    if($result = mysqli_query($conn, "SELECT * FROM `kbli` WHERE 1"))
                    {
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                if(ctype_alpha($row['kode']))
                                    echo "<a class='mh' href='index.php?detail=" . $row['id'] . "'><div class='mi'>" . $row['kode'] . "</div><div class='mj'>" . $row['judul'] . "</div></a>";
                            }
                        }
                        else
                        {
                            echo "<a class='mh' href='#'><div class='mi'>N/A</div>NULL</a>";
                        }
                    }

                    CloseMYSQL($conn);
                ?>
            </div>
            <?php
                if(isset($_GET['detail']) && !empty($_GET['detail'])) {
                    require_once("connection.php");
                    $conn = OpenMYSQL();

                    if($result = mysqli_query($conn, "SELECT * FROM `kbli` WHERE `id`='" . $_GET['detail'] . "'")) {
                        if(mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $kode = $row['kode'];
                            ?>
                                <div class="kbli-detail">
                                    <div class="kbli-logo-wrap">
                                        <div class="logo">
                                            <div>KBLI 2020</div>
                                            <div><?= $row['kode'] ?></div>
                                        </div>
                                    </div>
                                    <?php
                                        if(getUserData('admin') == 1 || getUserData('admin') == 2) {
                                            echo('
                                            <div class="kbli-dropdown">
                                                <button class="kbli-menu" type="button" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><button class="dropdown-item" data-bs-target="#insert-data-modal" data-bs-toggle="modal">Buat Turunan</button></li>
                                                    <li><button class="dropdown-item" data-bs-target="#edit-data-modal" data-bs-toggle="modal">Edit Data</button></li>
                                                    <li><button class="dropdown-item" data-bs-target="#delete-data-modal" data-bs-toggle="modal">Delete Data</button></li>
                                                </ul>
                                            </div>'
                                            );
                                        }
                                    ?>
                                    <p><?= $row['judul'] ?></p>
                                    <h6>URAIAN</h6>
                                    <p><?= $row['keterangan'] ?></p>
                                    <!---->
                                    <?php
                                        require_once("function.php");
                                        $count = 0;
                                        if($result2 = mysqli_query($conn, "SELECT * FROM `kbli` WHERE 1")) {
                                            if(mysqli_num_rows($result2) > 0) {
                                                echo("<h6 class='turunan-text'>TURUNAN</h6>");
                                                while($row2 = mysqli_fetch_assoc($result2)) {
                                                    if($row2['mother'] == $_GET['detail']) {
                                                        echo "<a class='mh' href='index.php?detail=" . $row2['id'] . "'><div class='mi'>" . $row2['kode'] . "</div><div class='mj'>" . $row2['judul'] . "</div></a>";
                                                        $count += 1;
                                                    }
                                                }
                                            }
                                        }
                                        if($count <= 0) {
                                            echo("<script>document.querySelector('.turunan-text').remove();</script>");
                                        }
                                    ?>
                                </div>
                            <?php
                        }
                        else
                        {
                            ?>
                                <div class="kbli-detail">
                                    <div class="logo">
                                        <div>KBLI 2020</div>
                                        <div>N/A</div>
                                    </div>
                                    <p>N/A</p>
                                    <h6>URAIAN</h6>
                                    <p>N/A</p>
                                </div>
                            <?php
                        }
                    }
                    CloseMYSQL($conn);

                    echo("<script>
                    document.querySelector('.dashboard').style.display = 'none'; 
                    document.querySelector('.kbli-detail').style.display = 'block';
                    document.querySelector('.kbli-search').style.display = 'none';
                    </script>");
                } 
                else if(isset($_GET['search']) && !empty($_GET['search'])) {
                    $search = $_GET['search'];
                    //---
                    if(!isset($_GET['type']) || empty($_GET['type']))
                        $type = 1;
                    else
                        $type = $_GET['type'];
                    //---
                    if($type < 1 || $type > 4)
                        $type = 1;
                    //---
                    $count = 0;
                    ?>
                        <div class="kbli-search">
                            <?php
                                require_once("connection.php");
                                $conn = OpenMYSQL();
                                //---
                                if($result = mysqli_query($conn, "SELECT * FROM `kbli` ORDER BY rand() LIMIT 40")) {
                                    if(mysqli_num_rows($result) > 0) {
                                        switch($type) {
                                            case 1://semua kbli
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    if(!ctype_alpha($row['kode'])) {
                                                        $kbli = $row['kode'] . " - " . $row['judul'] . " - " . $row['keterangan'];
                                                        //---
                                                        if(strpos($kbli, $search)) {
                                                            echo('<a class="my" href="index.php?detail=' . $row['id'] . '"><div class="mx"><div class="mz">'.$row['kode'].' - '.$row['judul'].'</div><hr>'.$row['keterangan'].'</div></a>');
                                                            $count++;
                                                        }
                                                    }
                                                }
                                            case 2://kode
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    if(!ctype_alpha($row['kode'])) {
                                                        if(strpos($row['kode'], $search)) {
                                                            echo('<a class="my" href="index.php?detail=' . $row['id'] . '"><div class="mx"><div class="mz">'.$row['kode'].' - '.$row['judul'].'</div><hr>'.$row['keterangan'].'</div></a>');
                                                            $count++;
                                                        }
                                                    }
                                                }
                                            case 3://judul
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    if(!ctype_alpha($row['kode'])) {
                                                        if(strpos($row['judul'], $search)) {
                                                            echo('<a class="my" href="index.php?detail=' . $row['id'] . '"><div class="mx"><div class="mz">'.$row['kode'].' - '.$row['judul'].'</div><hr>'.$row['keterangan'].'</div></a>');
                                                            $count++;
                                                        }
                                                    }
                                                }
                                            case 4://keterangan
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    if(!ctype_alpha($row['kode'])) {
                                                        if(strpos($row['keterangan'], $search)) {
                                                            echo('<a class="my" href="index.php?detail=' . $row['id'] . '"><div class="mx"><div class="mz">'.$row['kode'].' - '.$row['judul'].'</div><hr>'.$row['keterangan'].'</div></a>');
                                                            $count++;
                                                        }
                                                    }
                                                }
                                        }
                                    } 
                                    if($count <= 0){
                                        echo("<div style='min-height: 50vh; display: flex; justify-content: center; align-items: center; color: black; text-align: center;'><h3>Error 404<br>Nothing Found</h3></div>");
                                    }
                                }

                                CloseMYSQL($conn);
                            ?>
                        </div>
                        <script>
                            document.querySelector('.search-bar-input').value = "<?= $search ?>";
                            document.querySelector('.search-bar-select').value = "<?= $type ?>";
                        </script>
                    <?php

                    echo("<script>
                    document.querySelector('.dashboard').style.display = 'none'; 
                    document.querySelector('.kbli-detail').style.display = 'none';
                    document.querySelector('.kbli-search').style.display = 'block';
                    </script>");
                }
            ?>
        </div>
        </div>
    </div>
    <?php
    require_once("function.php");
    if(getUserData('admin') == 1 || getUserData('admin') == 2) {
    ?>
    <div class="modal fade" id="insert-data-modal" aria-hidden="true" aria-labelledby="insert-data-modal-label" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form action="action/add_turunan.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="insert-data-modal-label">Tambahkan Turunan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="tKode"><small>Kode:</small></label><br>
                        <input name="tKode" id="tKode" class="form-control" type="text" required><br>
                        <label for="tJudul"><small>Judul:</small></label><br>
                        <input name="tJudul" id="tJudul" class="form-control" type="text" required><br>
                        <label for="tUraian"><small>Uraian:</small></label><br>
                        <textarea name="tUraian" id="tUraian" class="form-control" cols="30" rows="10" required></textarea>
                        <input type="hidden" name="tMother" value="<?= $_GET['detail'] ?>">
                        <input type="hidden" name="url" value="<?= getURL(); ?>">
                    </div>
                    <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" name="tSubmit" value="Tambah">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="edit-data-modal" aria-hidden="true" aria-labelledby="edit-data-modal-label" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form action="action/edit_data.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="edit-data-modal-label">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="tKode"><small>Kode:</small></label><br>
                        <input name="tKode" id="tKode" class="form-control" type="text"><br>
                        <label for="tJudul"><small>Judul:</small></label><br>
                        <input name="tJudul" id="tJudul" class="form-control" type="text"><br>
                        <label for="tUraian"><small>Uraian:</small></label><br>
                        <textarea name="tUraian" id="tUraian" class="form-control" cols="30" rows="10"></textarea>
                        <input type="hidden" name="tID" value="<?= $_GET['detail'] ?>">
                        <input type="hidden" name="url" value="<?= getURL(); ?>">
                    </div>
                    <div class="modal-footer">
                        <input name="tSubmit" class="btn btn-primary" type="submit" value="Edit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="modal fade" id="delete-data-modal" aria-hidden="true" aria-labelledby="delete-data-modal-label" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <form action="action/delete_data.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="delete-data-modal-label">Hapus Data</h1>
                    </div>
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus data KBLI ini?</p>
                        <input type="hidden" name="url" value="<?= getURL(); ?>">
                        <input type="hidden" name="dID" value="<?= $_GET['detail'] ?>">
                    </div>
                    <div class="modal-footer">
                        <input name="dSubmit" type="submit" value="Confirm" type="button" class="btn btn-primary" aria-label="Confirm">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    }
    ?>
    <script>
        document.querySelector(".search-bar-button").addEventListener("click", () => {
            var input = document.querySelector('.search-bar-input');
            var type = document.querySelector('.search-bar-select');
            //---
            if(input.value != "") 
                window.location.href = "index.php?search=" + input.value + "&type=" + type.value;
        })
        document.querySelector('.search-bar-input').addEventListener("keypress", (event) => {
            if(event.code == "Enter") {
                var input = document.querySelector('.search-bar-input');
                var type = document.querySelector('.search-bar-select');
                //---
                if(input.value != "")
                    window.location.href = "index.php?search=" + input.value + "&type=" + type.value;
            }
        });
        //---
        document.querySelector('.search-bar-input').addEventListener("input", () => {
            document.querySelector('.data').style.display = "block";
            //---
            if(document.querySelector('.search-bar-input').value == "") {
                document.querySelector(".data-child-none").style.display = "block";
                $(".data-child").remove();
            } else {
                $.post({url: "search_data.php",
                    type: "POST",
                    data: {string: document.querySelector('.search-bar-input').value},
                    success: (result) => {
                        if(!result) {
                            $(".data-child").remove();
                            document.querySelector(".data-child-none").style.display = "block";
                        } else {
                            $(".data-child").remove();
                            //---
                            var res = JSON.parse(result);
                            if(res.length > 0) {
                                for(var i = 0; i < res.length; i++) {
                                    var text = res[i].text.replaceAll(document.querySelector('.search-bar-input').value, `<mark>${document.querySelector('.search-bar-input').value}</mark>`);
                                    var element = '<a href="index.php?detail=' + res[i].id + '" class="data-child" id="data-child">' + text + '</a>';
                                    $(".data").append(element);
                                }
                            }
                            document.querySelector(".data-child-none").style.display = "none";
                        }
                    }
                });
            }
        });
        document.body.addEventListener("click", (event) => {
            if(event.target.id == "search-bar-input" || event.target.id == "data-child") {
                document.querySelector('.data').style.display = "block";
            } else {
                document.querySelector('.data').style.display = "none";
            }
        });
    </script>
</body>
</html>