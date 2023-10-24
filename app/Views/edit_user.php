<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
    
<?php $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <h1 class="mb-4">INPUT DATA MAHASISWA</h1>

    <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>

    <form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
            <label for="foto" class="form-label">Foto :</label>
            <img src="<?= $user ['foto'] ?? '<default-foto>' ?>">
            <input type="file" class="form-control" name="foto" id="foto">
        </div>
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama :</label>
            <input type="text" class="form-control <?= (empty(validation_show_error('nama'))) ? '':'is-invalid' ?>"
            name="nama" value="<?= $user ['nama'] ?>" id="nama"   >
                <div class="invalid-feedback">
                    <?= validation_show_error('nama') ?>
                </div>
        </div>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM :</label>
            <input type="text" class="form-control <?= (empty(validation_show_error('npm'))) ? '':'is-invalid' ?>"  
                    value="<?= $user['npm'] ?>" name="npm" id="npm">
                    <div class="invalid-feedback">
                    <?= validation_show_error('npm') ?>
                </div>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas :</label>
            <select name="kelas" id="kelas">
                <?php
                foreach ($kelas as $item) {
                    ?>

                    <option value="<?= $item['id'] ?>" <?user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                        <?= $item['nama_kelas'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <!-- <input type="text" class="form-control" name="kelas" id="kelas"> -->
        </div>
        <input type="hidden" name="_method"value="PUT">
        <? csrf_field() ?>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
<?=$this->endSection('content') ?>