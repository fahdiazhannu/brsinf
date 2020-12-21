<div class="container">
    <h1> Edit Profil</h1>
    <div class="row">
        <div class="col-sm-9">
            <?php if (session()->getFlashdata('msgpwd')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('msgpwd') ?></div>
            <?php endif ?>
            <form action="<?= base_url('admin/update'); ?>" method="POST">
                <input type="hidden" name="id" value="<?= $matakuliah['id'] ?>">
                <div class="form-group">
                    <label for="kode_mk">Kode MK</label>
                    <input type="text" name="kode_mk" class="form-control" id="kode_mk" placeholder="Masukkan Nama" value="<?= $matakuliah['kode_mk'] ?>">
                </div>
                <div class="form-group">
                    <label for="nm_mk">Nama MK</label>
                    <input type="text" name="nm_mk" class="form-control" id="nm_mk" placeholder="Masukkan Nama" value="<?= $matakuliah['nm_mk'] ?>">
                </div>
                <div class="form-group">
                    <label for="sks">SKS</label>
                    <input type="text" name="sks" class="form-control" id="sks" placeholder="Masukkan Nama" value="<?= $matakuliah['sks'] ?>">
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" name="semester" class="form-control" id="semester" placeholder="Masukkan Nama" value="<?= $matakuliah['semester'] ?>">
                </div>
                <div class="form-group">
                    <label for="kt_mk">Kategori MK</label>
                    <input type="text" name="kt_mk" class="form-control" id="kt_mk" placeholder="Masukkan Nama" value="<?= $matakuliah['kt_mk'] ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan MK</label>
                    <input type="text" name="keterangan" class="form-control" id="keterangan" placeholder="Masukkan Nama" value="<?= $matakuliah['keterangan'] ?>">
                </div>
                <textarea class="ckeditor" name="info_mk" id="info_mk" rows="10" cols="80">
              <?= $matakuliah['info_mk']; ?>
            </textarea>
            <br>
                <div class="form-group">
                    <button type="submit" id="send_form" class="btn btn-success">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    CKEDITOR.replace('editor1');
</script>