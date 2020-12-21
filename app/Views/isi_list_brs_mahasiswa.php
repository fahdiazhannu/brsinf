<?php
use App\Models\MatkulModel;
use App\Models\BrsModel;
$model = new MatkulModel;
$models = new BrsModel;
?>

<div class="container mt-5">
    <h2> List BRS <?= $nama; ?> </h2>
    <div class="row mt-3">
        <div class="col-sm-12">
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success"><?= session()->getFlashdata('msg') ?></div>
            <?php endif ?>
            <h3><?= $nim; ?></h3>
            <?php $nmr_induk = $nim ?>
            <?php $data1 = $models->where('nmr_induk', $nmr_induk)->first();
            if($data1['verifikasi']=="verified"){ ?>
            <div class="alert alert-success">
                <?php echo "BRS ".$nama." sudah diverifikasi"; ?>
                </div>
            <?php
            }
            ?>            
            <form action="<?= base_url('dosen/verif'); ?>" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
                <table class="table table-striped" id="tableUser">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kode Matakuliah</th>
                            <th>Nama Matakuliah</th>
                            <th>SKS</th>
                            <th>Jenis MK</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($matakuliah) : ?>
                            <?php $i=1; $select = array();$s = array(); ?>
                            <?php foreach ($matakuliah as $mk) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $mk; ?></td>
                                    <td><?php $data = $model->where('kode_mk', $mk)->first();
                                        echo $data['nm_mk'] ?></td>
                                    <td><?= $data['sks']; ?></td>
                                    <td><?= $data['kt_mk']; ?></td>
                                    <?php
                                        $selectedarray = $mk;
                                        $select[] = $selectedarray;
                                        $i++;
                                        $s = ['kdmk' => $select[$i-2],
                                            'id' => $id];
                                        $si = implode("_",$s);
                                    ?>
                                    <?php if($data1['verifikasi']=="verified"){ ?>
                                        <td><a class="btn btn-success mb-2"><i class="fa fa-check"></i></a></td>
                                    <?php
                                        }else{
                                    ?>
                                    <td><a href="<?= base_url('dosen/deletebrs/'.$si) ?>" class="btn btn-danger mb-2"><i class="fa fa-trash"></i></a></td>
                                    <?php
                                        }
                                    ?>
                                </tr>
                            <?php endforeach; ?>                       
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php if($data1['verifikasi']!="verified"){ ?>
                <table class="table" id="tableUser">
                    <tbody>
                        <tr>
                            <td><button type="submit" id="submit" name="submit" class="btn btn-success">Verifikasi</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php
                }
                ?>
            </form>
        </div>
    </div>