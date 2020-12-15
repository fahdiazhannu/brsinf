<div class="container mt-5">
    <h2> Ambil BRS </h2>
    <div class="row mt-3">
        <div class="col-sm-12">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
            <?php endif ?>
            <div class="container">
                <div class="modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Konfirmasi Pendaftaran</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-striped" id="tableUser">
                                    <thead>
                                        <tr>
                                            <th>Nama Matakuliah</th>
                                            <th>Kode Matakuliah</th>
                                            <th>SKS</th>
                                            <th>Kategori Matakuliah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($matakuliah) : ?>
                                            <?php foreach ($matakuliah as $mk) : ?>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a class="btn btn-primary mb-2"><i class="fas fa-trash"></i></i></a>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                            <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <form id="myform" action="<?= base_url('admin/brs/store') ?>" method="POST">
                <table class="table table-striped" id="tableUser">
                    <thead>
                        <tr>
                            <th>Kode MK</th>
                            <th>Nama MK</th>
                            <th>SKS</th>
                            <th>Kategori Matakuliah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($matakuliah) : ?>
                            <?php foreach ($matakuliah as $mk) : ?>
                                <tr>
                                    <td><?= $mk['kode_mk']; ?></td>
                                    <td><?= $mk['nm_mk']; ?></td>
                                    <td><?= $mk['sks']; ?></td>
                                    <td><?= $mk['kt_mk']; ?></td>
                                    <td><input type="checkbox" name="mk" id="checkbox" value="<?= $mk['kode_mk']; ?>">
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <input class="btn btn-primary" type="button" id="tombol" value="Simpan">
            </form>
        </div>
    </div>
    <div id="tampil"></div>
    <script>
        $(document).ready(function() {
            $('#proses').click(function() {
                $('#myform').submit();
            });
        });
        var btn = document.getElementById("tombol");
        btn.onclick = function() {
            var checkbox = document.getElementsByName("mk");
            var mk = "";
            for (var i = 0; i < checkbox.length; i++) {
                if (checkbox[i].checked) {
                    mk = mk + checkbox[i].value + ", ";
                }
            }
           document.getElementById("tampil").innerText = mk.replace(/,\s*$/, "");
        }
    </script>