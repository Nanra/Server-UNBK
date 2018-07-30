<?php include "cekAdmin.php"; ?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbarChild.php"; ?>

<!-- Bagian Kontent -->
<div class="container">
  <fieldset>
      <legend>
          <h4>Cari Pengawas Ujian</h4>
      </legend>
      <div style="margin-bottom:15px;">
          <form action="" method="post">
              <input type="text" name="input_cari" placeholder="Masukkan Kata Kunci" class="css-input" style="width:400px;" required/>
              <input type="submit" name="cari" value="Cari" class="btn"/>
              <div>
                      <p>Pilih Salah Satu Kata Kunci Dibawah ini:
                         <ol>
                          <li>Username</li>
                          <li>Nama Lengkap</li>
                      </ol>
                  </div>
          </form>
      </div>
    </fieldset>
    </div>
    <div class="row"></div>
    <div class="row"></div>
    <div class="row">
      <div class="col offset-s5">
        <a href="listPengawas.php" class="waves-effect waves-light btn-large"><i class="material-icons right">cached</i>Refreash Tabel</a>
      </div>
    </div>
  <div id="listtabel" class="container">
      <table border="1" class="striped bordered responsive-table">
          <tr style="background-color:#00bfa5;">
              <th>Nomor ID</th>
              <th>Nama Lengkap</th>
              <th>Username</th>
              <th>Email</th>
              <th>Nomor HP</th>
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
      $sql = mysqli_query($link,"SELECT * FROM user WHERE username like '%$input_cari%' OR namalengkap like '%$input_cari%'") or die (mysql_error());
      } else {
      $sql = mysqli_query($link,"SELECT * FROM user") or die (mysql_error());
      }
      } else {
      $sql = mysqli_query($link,"SELECT * FROM user") or die (mysql_error());
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
                   <script type='text/javascript'>
                   $(document).ready(function(){
                   $('.modal').modal({
                   dismissible: true,
                   opacity: .4,
                   in_duration: 400,
                   out_duration: 100,
                   });
                   $('#modal3').modal('open');
                   });
                   </script>
              </td>
          </tr>
          <?php
     } else {

     // mengulangi data agar tidak hanya 1 yang tampil
     while($data = mysqli_fetch_array($sql)) {

     ?>
              <tr>
                <td>
                    <?php echo $data['id'] ?>
                </td>
                  <td>
                      <?php echo $data['namalengkap'] ?>
                  </td>
                  <td>
                      <?php echo $data['username'] ?>
                  </td>
                  <td align="center">
                      <?php echo $data['email'] ?>
                  </td>
                  <td align="center">
                      <?php echo $data['hp'] ?>
                  </td>
              </tr>
              <?php

    }
   }
  ?>
      </table>
    </div>

<?php require_once "view/footer.php" ?>
