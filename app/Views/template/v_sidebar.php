<nav id="sidebar">
    <div class="sidebar-header">
        <img src="/assets/images/logo.png" alt="logo" class="logo" width="170">
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="<?= base_url('dashboard'); ?>"><i class="fas fa-columns"></i> Dashboard</a>
        </li>

        <li>
            <a href="<?= base_url('brs'); ?>"><i class="fas fa-tasks"></i> Ambil BRS</a>
        </li>
        <li>
            <a href="<?= base_url('brs/list'); ?>"><i class="fas fa-list"></i> List BRS</a>
        </li>
        <li>
            <a href="<?= base_url('calc/index'); ?>"><i class="fas fa-calculator"></i> Kalkulator IPK</a>
        </li>
        <li>
            <a href="<?= base_url('matakuliah/index'); ?>"> <i class="fas fa-info-circle"></i> Info Mata Kuliah</a>
        </li>
        <li>
            <a href="<?= base_url('login/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
    </ul>

</nav>