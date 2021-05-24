<?php

    // hubungkan dengan file function_pribadi
    require "functions_pribadi.php";

    //tangkap id yang dikirim melalui url
    $id = $_GET["id"];

    // periksa apakah data berhasil dihapus
    if ( hapus($id) > 0) {
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'data_mahasiswa_pribadi.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data berhasil dihapus');
                document.location.href = 'data_mahasiswa_pribadi.php';
            </script>
        ";
    }

?>