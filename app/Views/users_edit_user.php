

    <div class="container">
      <h1> Edit Profil</h1>
        <div class="row">
            <div class="col-sm-9">
              <?php if (session()->getFlashdata('msgpwd')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('msgpwd') ?></div>
                     <?php endif ?>
                <form action="<?= base_url('users/update'); ?>" method="POST">
                <input type="hidden" name="nmr_induk" value="<?=$user['nmr_induk']?>">    
                <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="form-control" id="nama" placeholder="Masukkan Nama" value="<?= session()->get('nama') ?>" readonly>
                    </div>
                <div class="form-group">
                        <label for="name">Ubah Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Nama" value="<?= session()->get('password') ?>" >
                    </div>
                    <input type="checkbox" onclick="myFunction()">Show Password</>
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
</script>