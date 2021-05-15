<?php

    // aktifkan session
    session_start();

    // menghapus session
    session_destroy();

    // mengalihkan halaman sambil mengirim pesan logout
    header("Location: ../login/index.php?pesan=logout");

?>