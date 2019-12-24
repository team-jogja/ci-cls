<?php 
// var_dump($mahasiswa); 
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <h3>Detail Mahasiswa</h3>
        <hr>
            <div class="card shadow">
            <img src="<?= base_url();?>assets/img/img.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                    <p class="card-text">Jurusan : <?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-sm btn-outline-info btn-block">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>