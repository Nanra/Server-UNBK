<?php
$server = 'localhost';
$uname = 'root';
$pass = '';
$db = 'sisunbk';
$link = mysqli_connect($server,$uname,$pass,$db);
if (!$link){
    die("Koneksi Gagal Boss !! ". mysqli_connect_error());
}
?>
