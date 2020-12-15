<div class="container mt-5">
    <h2> Ambil BRS </h2>
    <div class="row mt-3">
        <div class="col-sm-12">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
            <?php endif ?>
            <div class="dropdown">
                <label for="kategori">Pilih Kategori</label>
                <select class="dropdown" name="semester">
                    <option id="tombol" href="<?= base_url('brs/store'); ?>">Semester 2</option>
                    <option id="tombol" href="<?= base_url('brs/store'); ?>">Semester 3</option>
                    <option id="tombol" href="<?= base_url('brs/store'); ?>">Semester 4</option>
                    <option id="tombol" href="<?= base_url('brs/store'); ?>">Semester 5</option>
                    <option id="tombol" href="<?= base_url('brs/store'); ?>">Semester 6</option>
                    <option id="tombol" href="<?= base_url('brs/store'); ?>">Semester 7</option>
                </select>
            </div>
            <form action="<?= base_url('brs/store') ?>" method="POST">
                <table class="table table-striped" id="tableUser">
                    <thead>
                        <tr>
                            <th>Nama Matakuliah</th>
                            <th>Kode Matakuliah</th>
                            <th>Jenis Matakuliah</th>
                            <th>Kategori Matakuliah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($matakuliah) : ?>
                            <?php foreach ($matakuliah as $mk) : ?>
                                <tr>
                                    <td><?= $mk['nm_mk']; ?></td>
                                    <td><?= $mk['kode_mk']; ?></td>
                                    <td><?= $mk['keterangan']; ?></td>
                                    <td><?= $mk['kt_mk']; ?></td>
                                    <td><input type="checkbox" id="ceklis" name="ceklis[<?= $mk['id']; ?>]" value="<?= $mk['kode_mk']; ?>"></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <table class="table" id="tableUser">
                    <tbody>
                        <tr>
                            <td><button type="submit" id="submit" name="submit" class="btn btn-success">Submit</button></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>