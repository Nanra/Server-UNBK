<?php require_once "core/init.php"; ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>
<!-- ISI KONTENT -->
<br>
<br>

<?php
if( isset($_POST['submit']) ){

    $pass    = $_POST['password'];
    $username     = $_POST['username'];

    if(!empty(trim($username)) && !empty(trim($pass))){

        if (cek_data($username, $pass) ){

          echo '
          <script>
          alert("Login Sukses !!");
          window.location.href="index.php";
          </script>'; // BERHASIL DAFTAR

          $query  = "SELECT namalengkap FROM user WHERE username = '$username'";
          $result = mysqli_query($link, $query);
          $pengawas = mysqli_fetch_assoc($result)['namalengkap'];

            $_SESSION['user'] = $pengawas;

        } else {
          echo '
          <script>
          alert("Gagal Masuk !! User Belum Terdaftar. Silahkan Hubungi Admin Untuk Proses Registrasi");
          window.location.href="daftar.php";
          </script>'; // BERHASIL DAFTAR
        }

    } else {
      echo '
      <script>
      alert("Error !! Pastikan Mengisi Semua Data Dengan Benar");
      </script>'; // FORM KOSONG
    }
}

?>


<div class="text-lighten-5 center container collection with-header">
    <h4> Silahkan Masukkan Username & Password Anda</h4>
</div>
<form class="col s6 container collection with-header" method="post" action="login.php">
    <div class="row">
        <div class="input-field col s5 offset-s3 ">
            <input id="username" type="text" name="username" class="validate" required>
            <label for="lblusername">Username</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s5 offset-s3">
            <input name="password" id="password" type="password" class="validate" required>
            <label for="password">Password</label>
        </div>
    </div>
    <div class="row">
        <button class="btn col offset-s3" type="submit" name="submit">Masuk<i class="material-icons right">send</i></button>
    </div>
</form>
<br>
<br>
<?php require_once "view/footer.php" ?>
