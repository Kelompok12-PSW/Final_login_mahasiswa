<?php

    // hubungkan dengan file functions.php
    require "functions_prodi.php";

    // tangkapa id yang dikrim melalui url
    $id = $_GET["id"];

    // periksa apakah data berhasil dihapus
    if( hapus($id) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'data_mahasiswa_prodi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'data_mahasiswa_prodi.php';
            </script>
        ";
    }

?>