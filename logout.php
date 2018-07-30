<?php

require_once "core/init.php";

// Untuk Menghapus Session dan di redirect ke halaman Login
session_destroy();
header('Location: login.php');


?>
