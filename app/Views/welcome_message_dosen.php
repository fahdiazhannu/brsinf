<div class="container">
    <div class="card" style="width:400px">
        <div class="card-body">
            <h3 class="card-title"><?= session()->get('nama') ?></h3>
            <p class="card-text"><?= session()->get('nmr_induk') ?></p>
            <a href="<?= base_url('admin/users/edit') ?>" class="btn btn-primary">Lihat Profil</a>
        </div>
    </div>
    <br>
    <div class="card">
        <?php
