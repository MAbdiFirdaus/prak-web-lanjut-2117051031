<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <h3 class="mt-5">DATA MAHASISWA</h3>
    <a class="btn btn-success ml-auto mb-3" href="<?= base_url('user/create') ?>">Tambah Mahasiswa</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>NPM</td>
          <td>Kelas</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($users as $user) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['npm'] ?></td>
            <td><?= $user['nama_kelas'] ?></td>
            <td>
            <a class="btn btn-primary" href="<?= base_url('user/' . $user['id']) ?>">Detail</a>
              <a class="btn btn-warning" href="">Edit</a>
              <a class="btn btn-danger" href="">Hapus</a>

            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection('content') ?>