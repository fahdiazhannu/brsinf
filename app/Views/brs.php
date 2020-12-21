

    <div class="container">
      <h1> Edit User</h1>
        <div class="row">
            <div class="col-sm-9">
                <form action="<?= base_url('brs/update'); ?>" method="POST">
                <input type="hidden" name="id" value="<?=$matakuliah['id']?>">    
                <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama" value="<?= $users['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email" value="<?= $users['email'] ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Edit</button>
                    </div>
            </form>
        </div>    
    </div>
</div>