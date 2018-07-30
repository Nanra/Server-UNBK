<?php

//Fungsi memasukkan data pendaftaran ke database

function register_user($namalengkap, $username, $pass, $email, $hp){
    global $link; //Variabel Koneksi Database dijadikan Variabel Global


    //Mencegah sql_injection
    $namalengkap    = mysqli_real_escape_string($link, $namalengkap);
    $username    = mysqli_real_escape_string($link, $username);
    $pass    = mysqli_real_escape_string($link, $pass);
    $email   = mysqli_real_escape_string($link, $email);
    $hp   = mysqli_real_escape_string($link, $hp);
    $query = "INSERT INTO user (namalengkap, username, password, email, hp) VALUES ('$namalengkap','$username','$pass','$email','$hp')";

    if (mysqli_query($link, $query) ){
        return true;
    }else {
        return false;
    }
}


//Menguji user apakah sudah terdaftar sebelumnya, yang dijadikan penguji adalah USERNAME

function register_cek_user($username) {
    global $link;
    $username       = mysqli_real_escape_string($link, $username);
    $query     = "SELECT * FROM user WHERE username = '$username'";
    if ($hasil = mysqli_query($link, $query) ){
        if (mysqli_num_rows($hasil) == 0) return true;
        else return false;
    }

}


//Mencari NIM & Pass User

function cek_data($username, $pass){

    global $link;

    //Mencegah sql_injection
    $username   = mysqli_real_escape_string($link, $username);
    $pass   = mysqli_real_escape_string($link, $pass);

    $query  = "SELECT password FROM user WHERE username = '$username'";
    $result = mysqli_query($link, $query);
    $passdb = mysqli_fetch_assoc($result)['password'];
    //die($hash);

    //Digunakan untuk melihat password yang sudah di hash di database apakah ada
    if ( $pass == $passdb ){
        return true;
    }else {
        return false;
    }

}



?>
