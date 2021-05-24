<?php

    // hubungkan dengan file functions.php
    require "functions.php";

    // tangkapa id yang dikrim melalui url
    $id = $_GET["id"];

    // periksa apakah data berhasil dihapus
    if( hapus($id) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'data_mahasiswa_akademis.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus');
                document.location.href = 'data_mahasiswa_akademis.php';
            </script>
        ";
    }

?>