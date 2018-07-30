<?php include "cekSession.php"; ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbarChild.php"; ?>
<div class="container">
<h3>Data Lengkap Siswa Peserta Ujian</h3>
</div>
<div id="listtabel" class="container">
  <table border="1" class="striped bordered responsive-table">
      <tr style="background-color:#00bfa5;">
          <th>Nomor Ujian</th>
          <th>Nama Lengkap Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Tempat/Tanggal Lahir</th>
          <th>Nama Orang Tua Wali</th>
      </tr>
      <?php

global $link;
 $input_cari = @$_POST['input_cari'];
 $cari = @$_POST['cari'];

 // jika tombol cari di klik
 if($cari) {

  // jika kotak pencarian tidak sama dengan kosong
  if($input_cari != "") {
  // query mysql untuk mencari berdasarkan nama negara. .
  $sql = mysqli_query($link,"SELECT * FROM idSiswa WHERE namaLengkap like '%$input_cari%' OR nomorUjian like '%$input_cari%'") or die (mysql_error());
  } else {
  $sql = mysqli_query($link,"SELECT * FROM idSiswa") or die (mysql_error());
  }
  } else {
  $sql = mysqli_query($link,"SELECT * FROM idSiswa") or die (mysql_error());
  }

 // mengecek data
 $cek = mysqli_num_rows($sql);
 // jika data kurang dari 1
 if($cek < 1) {
  ?>
      <tr>
          <!--muncul peringatan bahwa data tidak di temukan-->
          <td colspan="7" align="center" style="padding:10px;">
            <h4>Data Tidak Ditemukan</h4>
          </td>
      </tr>
      <?php
 } else {

 // mengulangi data agar tidak hanya 1 yang tampil
 while($data = mysqli_fetch_array($sql)) {

 ?>
          <tr>
            <td>
                <?php echo $data['nomorUjian'] ?>
            </td>
              <td>
                  <?php echo $data['namaLengkap'] ?>
              </td>
              <td>
                  <?php echo $data['jenisKelamin'] ?>
              </td>
              <td align="center">
                  <?php echo $data['tempatLahir'] ?>
              </td>
              <td align="center">
                  <?php echo $data['orangtua'] ?>
              </td>
          </tr>
          <?php

}
}
?>
  </table>
</div>

<?php require_once "view/footer.php" ?>
