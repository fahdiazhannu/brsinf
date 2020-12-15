
    <div class="container mt-5">
        <h1> Create User</h1>
        <div class="row">
            <div class="col-sm-9">
                <form action="<?= base_url('admin/users/store'); ?>" method="POST">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                    </div>
            </form>
        </div>    
    </div>
</div>
