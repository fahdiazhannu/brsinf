
<div class="container">
    <div class="card" style="width:400px">
        <div class="card-body">
            <h3 class="card-title"><?= session()->get('nama') ?></h3>
            <p class="card-text"><?= session()->get('nmr_induk') ?></p>
            <a href="<?= base_url('users/edit') ?>" class="btn btn-primary">Lihat Profil</a>
        </div>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Info Mata Kuliah</h3>
            <?php if ($matakuliah) : ?>
                <div class="card-deck">
                    <?php foreach ($matakuliah as $matkul) : ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $matkul['nm_mk']; ?></h5>
                                <p class="card-text"><?= word_limiter($matkul['info_mk'], 20); ?></p>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-primary" href="<?= base_url('detailinfo/detail/' . $matkul['id']) ?>"> Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
        </div>
        <?php
