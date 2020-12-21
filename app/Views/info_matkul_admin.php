
    <div class="container mt-5">
        <h2> Master Mata Kuliah </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="tableMK">
                    <thead>
                        <tr>
                            <th>Kode MK</th>
                            <th>Nama mk</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                        <?php if ($matakuliah) : ?>
                            <?php foreach ($matakuliah as $matkul) : ?>
                                <tr>
                                    <td><?= $matkul['kode_mk']; ?></td>
                                    <td><?= $matkul['nm_mk']; ?></td>
                                    <td><?= $matkul['kt_mk']; ?></td>
                                    <td><?= $matkul['semester']; ?></td>
                                    <td><a href="<?= base_url('admin/matkuledit/' . $matkul['id']) ?>" class="btn btn-primary mb-2"><i class="fa fa-edit"></i></i></a>
                                        <a href="<?= base_url('admin/delete/' . $matkul['id']) ?>" class="btn btn-danger mb-2"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
            </div>
        </div>