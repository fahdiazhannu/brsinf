<div class="container mt-5">
    <h2> Ambil BRS </h2>
    <div class="row mt-3">
        <div class="col-sm-12">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
            <?php endif ?>
            <form action="<?= base_url('brs/store') ?>" method="POST">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Pilih Semester
                    </button>
                    <div class="dropdown-menu">
                        <option value=""></option>
                        <a class="dropdown-item" value="2" href="<?= base_url('brs/semester/2');  ?>">Semester 2</a>
                        <a class="dropdown-item" value="3" href="<?= base_url('brs/semester/3');  ?>">Semester 3</a>
                        <a class="dropdown-item" value="4" href="<?= base_url('brs/semester/4'); ?>">Semester 4</a>
                        <a class="dropdown-item" value="5" href="<?= base_url('brs/semester/5'); ?>">Semester 5</a>
                        <a class="dropdown-item" value="6" href="<?= base_url('brs/semester/6');  ?>">Semester 6</a>
                        <a class="dropdown-item" value="6" href="<?= base_url('brs/semester/7');  ?>">Semester 7</a>
                        <br><br>
                    </div>
                </div>
                <br>

                <table class=" table table-striped" id="tableUser">
                    <thead>
                        <tr>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah<sup>Semester</sup></th>
                            <th>SKS</th>
                            <th>Jenis MK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($matakuliah) : ?>
                            <?php foreach ($matakuliah as $mk) : ?>
                                <tr>
                                    <td><?= $mk['kode_mk']; ?></td>
                                    <td><?= $mk['nm_mk']; ?><sup><?= $mk['semester']; ?></td>
                                    <td><?= $mk['sks']; ?></td>
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