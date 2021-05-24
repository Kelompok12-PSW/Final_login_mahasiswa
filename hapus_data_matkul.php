<?php

    // koneksi ke file functions_matkul
    require "functions_matkul.php";

    // tangkap data yg dikirim melalui url berdasarkan id
    $id = $_GET["id"];

    // periksa apakah data berhasil dihapus
    // isi parameter dengan $id yg telah menampung data dari url
    if( hapus($id) > 0 ) {
        echo "
            <script>
                alert('Data BERHASIL DIHAPUS!');
                document.location.href = 'data_mahasiswa_matkul.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data GAGAL Dihapus!');
                document.location.href = 'data_mahasiswa_matkul.php';
            </script>
        ";
    }

?>