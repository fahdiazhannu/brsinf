
    <div class="container mt-5">
        <h1>Kalkulator IPK</h1>
        <div class="row">
            <div class="col-sm-5">
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
                     <?php endif ?>
                <form action="<?= base_url('calc/hitung'); $ipk = 0;?>" method="POST">
                    <div class="form-group">
                        <label for="nama">IP Semester 1</label>
                        <input type="text" name="bil1" class="form-control" id="bil1" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group">
                        <label for="nama">IP Semester 2</label>
                        <input type="text" name="bil2" class="form-control" id="bil2" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group">
                        <label for="nama">IP Semester 3</label>
                        <input type="text" name="bil3" class="form-control" id="bil3" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group">
                        <label for="nama">IP Semester 4</label>
                        <input type="text" name="bil4" class="form-control" id="bil4" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group">
                        <label for="nama">IP Semester 5</label>
                        <input type="text" name="bil5" class="form-control" id="bil5" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group">
                        <label for="nama">IP Semester 6</label>
                        <input type="text" name="bil6" class="form-control" id="bil6" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group">
                        <label for="nama">IP Semester 7</label>
                        <input type="text" name="bil7" class="form-control" id="bil7" placeholder="Masukkan Nilai">
                    </div>
                    <div class="form-group">
                        <label for="nama">IP Semester 8</label>
                        <input type="text" name="bil8" class="form-control" id="bil8" placeholder="Masukkan Nilai">
                    </div>
                     
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                    </div>
            </form>
        </div>    
    </div>
</div>
