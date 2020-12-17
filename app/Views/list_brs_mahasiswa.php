<?php
use App\Models\MatkulModel;
$model = new MatkulModel;
?>

<div class="container mt-5">
        <h2> List BRS yang diambil Mahasiswa</h2>
        <div class="row mt-3">
            <div class="col-sm-12">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
            <?php endif ?>
                    <table class="table table-striped" id="tableUser">
                        <thead>
                            <tr>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Kode Matakuliah yang diambil</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($mahasiswa) : ?>
                                <?php foreach ($mahasiswa as $mhs) : ?>
                                    <form action="<?= base_url('dosen/lihat'); ?>" method="POST">
                                    <tr>
                                        <td><?= $mhs['nama']; ?></td>
                                        <td><?= $mhs['nmr_induk']; ?></td>
                                        <td><?= $mhs['kode_mk']; ?></td>
                                        <td><?= $mhs['verifikasi']; ?></td>
                                        <td><a href="<?= base_url('dosen/lihat/'.$mhs['id']); ?>" type="submit" id="send_form" class="btn btn-success">Lihat</a></td>
                                    </tr>
                                    </form>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
            </div>
        </div>