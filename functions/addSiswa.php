<?php

//Fungsi memasukkan data siswa pendaftaran ke database

function simpan_data($namalengkap, $tempatLahir, $jenisKelamin, $nomorUjian, $namaOrangTua)
{
    global $link;

    $namalengkap    = mysqli_real_escape_string($link, $namalengkap);
    $tempatLahir    = mysqli_real_escape_string($link, $tempatLahir);
    $jenisKelamin    = mysqli_real_escape_string($link, $jenisKelamin);
    $nomorUjian   = mysqli_real_escape_string($link, $nomorUjian);
    $namaOrangnamaOrangTua   = mysqli_real_escape_string($link, $namaOrangTua);
    $query = "INSERT INTO idSiswa (namaLengkap, jenisKelamin, tempatLahir, orangtua, nomorUjian) VALUES ('$namalengkap','$jenisKelamin','$tempatLahir','$namaOrangTua','$nomorUjian')";

    if (mysqli_query($link, $query) )
    {return true;}
    else {return false;}
}

function cek_siswa($namaLengkap)
{
    global $link;
    $namaLengkap       = mysqli_real_escape_string($link, $namaLengkap);
    $query     = "SELECT * FROM idSiswa WHERE namaLengkap = '$namaLengkap'";
    if ($hasil = mysqli_query($link, $query) )
    {
        if (mysqli_num_rows($hasil) == 0) return true;
        else return false;
    }

}

?>
