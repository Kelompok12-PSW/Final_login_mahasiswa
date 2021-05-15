<?php
    session_start();
    

    // tangkap data id
    // if(!isset($_SESSION["id"])) {
    //     header("Location: ../index.php?pesan=belum_login");
    // }
    
    require "functions.php";

    if($_SESSION["status"] != "login") {
        header("Location: ../index.php?pesan=belum_login");
    }
    // $id = $_SESSION["id"];
    $mahasiswa = query("SELECT * FROM mahasiswa_akademis WHERE id='2' ");

?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="style.css" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
    body {font-family: Arial, Helvetica, sans-serif;}

    .navbar {
        width: 100%;
        background-color: rgba(227, 241, 18, 0.938);
        overflow: none;
    }

    .navbar a {
        float: left;
        padding: 12px;
        color: rgb(17, 16, 16);
        text-decoration: none;
        font-size: 17px;
    }

    .navbar a:hover {
        background-color: rgb(31, 128, 219);
    }

    .active {
        background-color: #e5e912;
    }

    .dropdown {
        background-color: rgb(17, 16, 16);
    }

    </style>
<body>
<!-- AWAL CONTAINER -->
<div class="container">
<div class="navbar">
  <a class="active" href="#"><i class="fa fa-fw fa-university"></i> E-campus </a> 
  <a href="home.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="modul.php"><i class="fa fa-fw fa-book"></i> Modul</a> 
  <!-- <a href="data_mahasiswa_akademis.php"><i class="fa fa-fw fa-graduation-cap"></i> Data Mahasiswa</a> -->
  <div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-fw fa-user"></i>
        Akun
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <a class="dropdown-item" href="data_mahasiswa_akademis.php">Data Akademis</a>
        <a class="dropdown-item" href="data_mahasiswa_pribadi.php">Data Pribadi</a>
    </div>
  </div>
        <!-- <a href="#"><i class="fa fa-fw fa-user"></i> Data Akademik</a>  -->
        <!-- <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user"></i>
                Data Akademik
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="data_mahasiswa_prodi.php">Data Prodi</a>
                <a class="dropdown-item" href="data_mahasiswa_matkul.php">Data Mata Kuliah</a>
            </div>
            </div> -->
            <a href="logout.php"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
    </div>

    <h3>Home/Dashboard</h3><hr>
    <?php foreach($mahasiswa as $mhs ) : ?>
    <form action="">
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $mhs["nama"]; ?></td>
        </tr>
        <br>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $mhs["nim"]; ?></td>
        </tr>
        <br>
        <tr>
            <td>Angkatan</td>
            <td>:</td>
            <td><?= $mhs["angkatan"]; ?></td>
        </tr>
        <br>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><?= $mhs["program_studi"]; ?></td>
        </tr>
        <br>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= $mhs["kelas"]; ?></td>
        </tr>
    </table>
    </form>

    <?php endforeach; ?>


<!-- END CONTAINER -->
</div>
  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>



</body>
</html>