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
