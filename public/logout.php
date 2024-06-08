<?php
session_start(); // Mulai session

// Hapus semua data session
session_unset();

// Hapus session dari penyimpanan
session_destroy();

// Redirect ke halaman login atau halaman lain yang diinginkan setelah logout
header("Location: index.php");
exit(); // Hentikan proses script setelah melakukan redirect
?>
