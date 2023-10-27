<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<body>
<center>
<img src="<?=$user['foto']  ?>" style="width : 200px;">  <table class="mx-auto">
  </center>
  <br>
  <center> 
    <table>
      <tr>
      <td>
        <button class="p-2 bg-secondary text-white" style="width: 300px;"><?= $user['nama'] ?></button>
      </td>
      </tr>
      <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $user['npm'] ?></button>
      </td>
      </tr>
      <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $user['nama_kelas'] ?></button>
      </td>
      </tr>
    </table>
  </center>
</body>
<?= $this->endSection('content') ?>
