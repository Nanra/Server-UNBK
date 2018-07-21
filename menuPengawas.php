<?php if (isset($_SESSION['user'])){
  if ($_SESSION['user'] == 'Administrator'){
    echo '<li class="no-padding">
        <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">face</i>Data Pengawas<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
        <div class="collapsible-body">
            <ul>
                <li><a href="layout-blank.html">List Pengawas</a></li>
                <li><a href="layout-boxed.html">Tambah Pengawas</a></li>
            </ul>
        </div>
    </li>';
  }
}?>
