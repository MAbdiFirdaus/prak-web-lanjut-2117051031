<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <h3 class="mt-5">DATA KELAS</h3>
    <a class="btn btn-success ml-auto mb-3" href="<?= base_url('kelas/create') ?>">Tambah Kelas</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <td>No</td>
          <td>Kelas</td>
          <td>Aksi</td>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($kelas as $kelas) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $kelas['nama_kelas'] ?></td>
            <td>
            <a class="btn btn-warning" href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>">Edit</a>
            <form action="<?= base_url('/kelas/' .  $kelas['id']) ?>" method="post">
              <input type="hidden" name="_method" value="DELETE">
              <?= csrf_field() ?>
              <button type="submit" class="btn btn-danger" >Delete</button>
              </form>

            </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection('content') ?>