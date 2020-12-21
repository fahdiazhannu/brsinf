
    <div class="container mt-5">
        <h1> Registrasi Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-9">
                <form action="<?= base_url('users/store'); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Pilih Kategori</label>
                        <input type="text" name="nmr_induk" class="form-control" id="nmr_induk" placeholder="Masukkan Nomor Induk" value="Mahasiswa" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmr_induk">Nomor Induk</label>
                        <input type="text" name="nmr_induk" class="form-control" id="nmr_induk" placeholder="Masukkan Nomor Induk">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                    </div>
            </form>
        </div>    
    </div>
</div>
