<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
<center>
    <img src="<?php echo base_url('assets/img/abdi.png');?>" alt="">
  </center>
  <br>
  <center> 
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td> <?=$nama?> </td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td> <?=$kelas?> </td>
      </tr>
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td> <?=$npm?> </td>
      </tr>
    </table>
  </center>
</body>
</html>