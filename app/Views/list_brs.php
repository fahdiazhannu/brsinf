<?php
use App\Models\MatkulModel;
$model = new MatkulModel;
?>

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
                                <th>Nama Matakuliah</th>
                                <th>SKS</th>
                                <th>Kategori</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($matakuliah) : ?>
                                <?php foreach ($matakuliah as $mk) : ?>
                                    <tr>
                                        <td><?= $mk; ?></td>
                                        <td><?php $data = $model->where('kode_mk', $mk)->first(); echo $data['nm_mk'] ?></td>
                                        <td><?= $data['sks']; ?></td>
                                        <td><?= $data['kt_mk']; ?></td>
                                        <td><?= $data['keterangan']; ?></td>
                                        <td><a href="<?= base_url('brs/delete/' .$data['id']) ?>" class="btn btn-danger mb-2"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
            </div>
        </div>