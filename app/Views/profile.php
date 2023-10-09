<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head> -->
<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<body>
<center>
<img src="<?= $user['foto'] ?? 'assets/img/abdi.png' ?>" class="rounded-circle mx-auto d-block py-3" alt="..." width="140" height="180">
  <table class="mx-auto">
    <!-- <img src="<?php echo base_url('assets/img/abdi.png');?>" alt=""> -->
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
<!-- </html> -->
