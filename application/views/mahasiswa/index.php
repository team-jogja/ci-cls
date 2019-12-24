<?php
// var_dump($mahasiswa);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <hr>
            <?php if ($this->session->flashdata()): ?>
            <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash');?>"></div>
            <?php endif;?>
            <a href="<?=base_url();?>mahasiswa/tambah" class='btn btn-outline-primary btn-block'>Add Mahasiswa</a>
            <hr>
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search for ..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>

            <?php if (empty($mahasiswa)): ?>
            <h4>Data tidak ditemukan</h4>
            <?php endif;?>

            <ul class="list-group shadow">
                <?php foreach ($mahasiswa as $mhs): ?>
                <li class="list-group-item list-group-item-action">
                    <i class="fas fa-arrow-circle-right"></i> &nbsp; <?=$mhs['nama'];?>
                    <a href="<?=base_url();?>mahasiswa/hapus/<?=$mhs['id'];?>"
                        class="btn btn-sm btn-outline-danger float-right tombol-hapus" title="delete"><i
                            class="fas fa-trash"></i></a>
                    <a href="<?=base_url();?>mahasiswa/ubah/<?=$mhs['id'];?>"
                        class="btn btn-sm btn-outline-warning float-right mr-1" title="edit"><i
                            class="fas fa-edit"></i></a>
                    <a href="<?=base_url();?>mahasiswa/detail/<?=$mhs['id'];?>"
                        class="btn btn-sm btn-outline-info float-right mr-1" title="view"><i
                            class="fas fa-info-circle"></i></a>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>