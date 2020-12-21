<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">Info Mata Kuliah</h3>
            <?php if ($matakuliah) : ?>
                <div class="card-deck">
                    <?php foreach ($matakuliah as $matkul) : ?>
                        <div class="col-sm-4">
                            <div class="card" style='width:100%; height:100%'>
                                <div class="card-body">
                                    <h5 class="card-title"><?= $matkul['nm_mk']; ?></h5>
                                    <p class="card-text"><?= word_limiter($matkul['info_mk'], 30); ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?= base_url('matakuliah/detail/' . $matkul['id']) ?>" class="btn btn-primary mb-2">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
        </div>
        <?php
