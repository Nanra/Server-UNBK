<?php
require_once "core/init.php";
if ( !isset($_SESSION['user']) ) {
    //Untuk me-Redirect ke halaman yang dituju
    header('Location: login.php');
}
?>
