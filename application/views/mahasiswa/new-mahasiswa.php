<div class="container">
    <div class="row">

        <div class="col-md-6">
        <h3>Tambah Mahasiswa</h3>
        <hr>
            <div class="card">
                <div class="card-header">
                    Add Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama">
                            <small class="form-text text-danger">
                                <?= form_error('nama'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="text" class="form-control" name="email">
                            <small class="form-text text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="form-control" name="jurusan">
                                <option value="Tehnik Informatika">Tehnik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Management">Management</option>
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="<?= base_url();?>mahasiswa" class="btn btn-danger btn-sm btn-block">Kembali</a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm btn-block">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>