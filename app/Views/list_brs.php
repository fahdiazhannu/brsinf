<div class="container mt-5">
        <h2> List BRS </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
            <?php endif ?>
                    <table class="table table-striped" id="tableUser">
                        <thead>
                            <tr>
                                <th>Kode Matakuliah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($matakuliah) : ?>
                                <?php foreach ($matakuliah as $mk) : ?>
                                    <tr>
                                        <td><?= $mk; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
            </div>
        </div>