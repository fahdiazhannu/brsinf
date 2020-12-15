<nav id="sidebar">
    <div class="sidebar-header">
        <img src="/assets/images/logo.png" alt="logo" class="logo" width="170">
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="<?= base_url('admin/dashboard'); ?>">Home</a>
        </li>

        <li>
            <a href="<?= base_url('admin/brs'); ?>">Ambil BRS</a>
        </li>
        <li>
            <a href="<?= base_url('admin/brs/list'); ?>">List BRS</a>
        </li>
        <li>
            <a href="<?= base_url('calc/index'); ?>">Kalkulator IPK</a>
        </li>
        <li>
            <a href="<?= base_url('admin/matakuliah/index'); ?>">Info Mata Kuliah</a>
        </li>
        <li>
            <a href="<?= base_url(); ?>">Logout</a>
        </li>
    </ul>

</nav>