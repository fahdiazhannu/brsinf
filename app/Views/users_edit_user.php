

    <div class="container">
      <h1> Edit Profil</h1>
        <div class="row">
            <div class="col-sm-9">
              <?php if (session()->getFlashdata('msgpwd')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('msgpwd') ?></div>
                     <?php endif ?>
                <form action="<?= base_url('users/update'); ?>" method="POST">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <div class="form-grup">
                                    <label for="name">Nama</label>
                                    <br>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama"
                                    value="<?= $user['nama'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <label for="email">Email</label>
                                    <br>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan Email"
                                    value="<?= $user['email'] ?>">
                                    <br>
                                </div>
                                 <div class="form-grup">
                                    <label for="contact">Nomor Induk</label>
                                    <br>
                                    <input type="text" name="nmr_induk" class="form-control" id="nmr_induk" placeholder="Masukkan Nomor Contact"
                                    value="<?= $user['nmr_induk'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <label for="contact">Password</label>
                                    <br>
                                    <input type="text" name="password" class="form-control" id="password" placeholder="Masukkan Password"
                                    value="<?= $user['password'] ?>">
                                    <br>
                                </div>
                                <div class="form-grup">
                                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
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
</script>