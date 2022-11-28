<?php 
// mengaktifkan session
session_start();
 
// menghapus semua sessions
session_destroy();
 
// mengalihkan halaman sambil mengirim pesan logout
header("location:../index.php?pesan=logout");
?>























