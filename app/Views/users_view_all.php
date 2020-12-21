    <div class="container mt-5">
        <a href="<?= base_url('users/create') ?>" class="btn btn-success mb-2">Create</a>
        <h2> List User </h2>
        <div class="row mt-3">
            <div class="col-sm-12">
                <table class="table table-striped" id="tableUser">
                    <thead>
                        <tr>
                            <th>Nomor Induk</th>
                            <th>Nama</th>
                            <th>kategori</th>
                            <th>Email</th>
                            <th>Action</th>
                    </thead>
                    <tbody>
                        <?php if ($user) : ?>
                            <?php foreach ($user as $pengguna) : ?>
                                <tr>
                                    <td><?= $pengguna['nmr_induk']; ?></td>
                                    <td><?= $pengguna['nama']; ?></td>
                                    <td><?= $pengguna['kategori']; ?></td>
                                    <td><?= $pengguna['email']; ?></td>
                                    <td><a href="<?= base_url('users/edit/' . $pengguna['id']) ?>" class="btn btn-primary mb-2"><i class="fa fa-edit"></i></i></a>
                                        <a href="<?= base_url('users/delete/' . $pengguna['id']) ?>" class="btn btn-danger mb-2"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
            </div>
        </div>