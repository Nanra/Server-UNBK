<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="assets/images/profile-image.png" class="circle" alt="">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>Pengawas Ujian</p>
                    <span title="Klik Untuk Keluar"><?php echo $_SESSION['user']; ?><i class="material-icons right">arrow_drop_down</i></span>
                </a>
            </div>
        </div>
        <div class="sidebar-account-settings">
            <ul>
                <li class="divider"></li>
                <li class="no-padding">
                    <a href="logout.php" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Keluar</a>
                </li>
            </ul>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
            <li class="no-padding active"><a class="waves-effect waves-grey active" href="index.php"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Data Siswa<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="#">Peserta Ujian</a></li>
                        <!-- <li><a href="search.html">Search</a></li>
                        <li><a href="todo.html">Todo</a></li> -->
                    </ul>
                </div>
            </li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">code</i>Cek Hasil Ujian<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="ui-accordions.html">Cetak Hasil Ujian</a></li>
                        <!-- <li><a href="ui-badges.html">Badges</a></li> -->
                    </ul>
                </div>
            </li>
                <li class="no-padding">
                    <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">desktop_windows</i>Menu Soal<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="#">Tulis Soal</a></li>
                            <li><a href="#">List Soal</a></li>
                        </ul>
                    </div>
                </li>
                <!-- For Admin Only -->
                <?php include "menuPengawas.php"; ?>
        </ul>
        <div class="footer">
            <p class="copyright">SISDIG UNIKOM ©</p>
            <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
        </div>
    </div>
</aside>
