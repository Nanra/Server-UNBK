<?php
require_once "core/init.php";
if ( !isset($_SESSION['user']) ) {
    //Untuk me-Redirect ke halaman yang dituju
    header('Location: login.php');
}
?>
<?php require_once "view/header.php"; ?>
<?php require_once "view/navbar.php"; ?>
<?php require_once "view/sidebar.php"; ?>
<!-- Bagian Main -->
<main class="mn-inner inner-active-sidebar">
    <div class="middle-content">
        <div class="row no-m-t no-m-b">
            <div class="col s12 m12 l4">
                <div class="card stats-card">
                    <div class="card-content">
                        <div class="card-options">
                            <ul>
                            </ul>
                        </div>
                        <span class="card-title">Jumlah Peserta Ujian</span>
                        <span class="stats-counter"><span class="counter">60</span><small>Siswa</small></span>
                    </div>
                    <div id="sparkline-bar"></div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card stats-card">
                    <div class="card-content">
                        <div class="card-options">
                        </div>
                        <span class="card-title">Peserta Yang Sedang Ujian</span>
                        <span class="stats-counter"><span class="counter">37</span><small>Online</small></span>
                    </div>
                    <div id="sparkline-line"></div>
                </div>
            </div>
            <div class="col s12 m12 l4">
                <div class="card stats-card">
                    <div class="card-content">
                        <span class="card-title">Sudah Selesai Ujian</span>
                        <span class="stats-counter"><span class="counter">23</span><small>Siswa</small></span>
                    </div>
                    <div id="sparkline-line"></div>
                </div>
            </div>
        </div>
        <div class="row no-m-t no-m-b">
            <div class="col s12 m12 l12">
                <div class="card invoices-card">
                    <div class="card-content">
                        <div class="card-options">
                            <input type="text" class="expand-search" placeholder="Search" autocomplete="off">
                        </div>
                        <span class="card-title">Monitoring Siswa Yang Sedang Ujian</span>
                        <table class="responsive-table bordered">
                            <thead>
                                <tr>
                                    <th data-field="id">Nomor Peserta Ujian</th>
                                    <th data-field="number">Nama Siswa</th>
                                    <th data-field="date">Tanggal Ujian</th>
                                    <!-- <th data-field="progress">Progress</th> -->
                                    <th data-field="total">Jenis Soal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#117</td>
                                    <td>Nanra Sukedy</td>
                                    <td><?php echo date("d - m - Y");?></td>
                                    <!-- <td><span class="pie">3/8</span></td> -->
                                    <td>Bahasa Indonesia</td>
                                </tr>
                                <tr>
                                    <td>#123</td>
                                    <td>Raka Maulana</td>
                                    <td><?php echo date("d - m - Y");?></td>
                                    <!-- <td><span class="pie">5/8</span></td> -->
                                    <td>Bahasa Indonesia</td>
                                </tr>
                                <tr>
                                    <td>#255</td>
                                    <td>Fitrah Arsalan</td>
                                    <td><?php echo date("d - m - Y");?></td>
                                    <!-- <td><span class="pie">3/8</span></td> -->
                                    <td>Bahasa Indonesia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Bagian Main -->

<?php require_once "view/footer.php"; ?>
