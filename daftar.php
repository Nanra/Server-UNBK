<?php include "cekAdmin.php"; ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbarChild.php"; ?>
<div class="row"></div>
<div class="text-lighten-5 container">
    <h4> Silahkan Isi Data Dengan Benar</h4>
</div>
<script src="assets/js/pages/pass.js"></script>
<?php
if( isset($_POST['submit']) ){

    $namalengkap    = $_POST['nama'];
    $username    = $_POST['username'];
    $pass    = $_POST['password'];
    $email   = $_POST['email'];
    $hp   = $_POST['hp'];

    if(!empty(trim($namalengkap)) && !empty(trim($pass))){


        if (register_cek_user($username) ){

     if ( register_user($namalengkap, $username, $pass, $email, $hp)){
         echo '
         <script>
         alert("Sukses !! Data Pengawas Berhasil Disimpan");
         window.location.href="index.php";
         </script>'; // BERHASIL DAFTAR
     }else {
       echo '
       <script>
       alert("ERROR !! Terjadi Kegagalan Database. Segera Hubungi Administrator");
       </script>'; // GAGAL DATABASE
     }
        }else {
            echo '
            <script>
            alert("Maaf !! Data Pengawas Dengan Username Yang Sama Sudah Terdaftar");
            </script>'; // NIM SUDAH TERDAFTAR
        }

    } else {
      echo '
      <script>
      alert("Gagal !! Pastikan Semua Data Terisi Dengan Benar");
      </script>'; // FORM TIDAK BOLEH KOSONG
    }
}
?>

<!-- FORM -->
<div class="jarak"></div>
<div class="container">
    <div class="row">
        <form class="col s12" method="post" action="daftar.php">
            <div class="row">
                <div class="input-field col s6">
                    <input id="nama" type="text" name="nama" class="validate" required>
                    <label for="lblnama">Nama Lengkap</label>
                </div>
                <div class="input-field col s6">
                    <input id="username" type="text" name="username" class="validate" required>
                    <label for="lblusername">Username</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6 m6">
                    <input id="password" type="password" name="password" class="validate" required>
                    <label for="lblpassword">Password</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="passwordConfirm" type="password" name="passwordConfirm" class="validate" required>
                    <label id="lblpasswordConfirm" data-error="Password not match" data-success="Password Match" for="passwordConfirm">Konfirmasi Password</label>
                </div>
              </div>
            <div class="row">
                <div class="input-field col s12 l6 m6">
                    <input id="email" type="email" name="email" class="validate" required>
                    <label for="email" data-error="Penulisan Email Salah !!">Email</label>
                </div>
                <div class="input-field col s12 l6 m6">
                    <input id="hp" type="number" min="0" name="hp" class="validate" required>
                    <label for="lblhp" data-error="Masukkan Nomor Telephone">Nomor HP</label>
                </div>
            </div>
            <div class="row">
              <div class="col">
                <button class="btn" type="submit" name="submit">DAFTAR<i class="material-icons right">people</i></button>
              </div>
            </div>
        </form>
    </div>
</div>
<!-- Tutup Form -->

<?php require_once "view/footer.php" ?>
