<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Dashboard') ?>">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <?php if ($this->session->userdata('akses') == '0') {?>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">Kelola Perpustakaan</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo site_url('Buku'); ?>">Buku</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Anggota</a>
                    </li>
                </ul>
            </div>
        </li>

        <?php } else {?>
        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Dokumentasi</span>
            </a>
        </li>
        <?php }?>


    </ul>
</nav>