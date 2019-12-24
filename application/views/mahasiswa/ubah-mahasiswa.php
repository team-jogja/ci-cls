<?php 
// var_dump($mahasiswa); 
?>
<div class="container">
    <div class="row">

        <div class="col-md-6">
        <h3>Ubah Mahasiswa</h3>
        <hr>
            <div class="card shadow">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('nama'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="jurusan">
                            <?php foreach($jurusan as $j) : ?>
                                <?php if ($j == $mahasiswa['jurusan']) : ?>
                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                <?php else : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>    
                                <?php endif; ?>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="<?= base_url();?>mahasiswa" class="btn btn-danger btn-sm btn-block">Kembali</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>