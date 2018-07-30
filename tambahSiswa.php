<?php require_once "cekSession.php"; ?>
<?php require_once "functions/addSiswa.php" ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbarChild.php"; ?>
<div class="row"></div>
<div class="text-lighten-5 container">
    <h4> Silahkan Isi Data Siswa Dengan Benar</h4>
</div>
<script src="assets/js/pages/pass.js"></script>
<?php
if( isset($_POST['submit']) ){

    $namalengkap    = $_POST['nama'];
    $tempatLahir    = $_POST['lahir'];
    $jenisKelamin    = $_POST['kelamin'];
    $nomorUjian   = $_POST['nomorUjian'];
    $namaOrangTua   = $_POST['orangtua'];

    if(!empty(trim($namalengkap)) && !empty(trim($nomorUjian))){


        if (cek_siswa($namaLengkap) ){

     if ( simpan_data($namalengkap, $tempatLahir, $jenisKelamin, $nomorUjian, $namaOrangTua)){
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
            alert("Maaf !! Data Siswa Dengan Nama Yang Sama Sudah Terdaftar");
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
        <form class="col s12" method="post" action="tambahSiswa.php">
            <div class="row">
                <div class="input-field col s6">
                    <input id="nama" type="text" name="nama" class="validate" required>
                    <label for="lblnama">Nama Lengkap Siswa</label>
                </div>
                <div class="input-field col s6">
                    <input id="lahir" type="text" name="lahir" class="validate" required>
                    <label for="lbllahir">Tempat/Tanggal Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l6 m6">
                    <input id="kelamin" type="text" name="kelamin" class="validate" required>
                    <label for="lblkelamin">Jenis Kelamin</label>
                </div>
                <div class="input-field col s12 m6 l6">
                    <input id="nomorUjian" type="number" name="nomorUjian" class="validate" required>
                    <label for="nomorUjian" data-error="Masukkan Nomor Ujian">Nomor Peserta Ujian</label>
                </div>
              </div>
            <div class="row">
                <div class="input-field col s12 l12 m12">
                    <input id="orangtua" type="text" name="orangtua" class="validate" required>
                    <label for="orangtua" data-error="Penulisan Email Salah !!">Nama Orang Tua/Wali</label>
                </div>
            </div>
            <div class="row">
              <div class="col">
                <button class="btn" type="submit" name="submit">Simpan Data<i class="material-icons right">save</i></button>
              </div>
            </div>
        </form>
    </div>
</div>
<!-- Tutup Form -->

<?php require_once "view/footer.php" ?>
