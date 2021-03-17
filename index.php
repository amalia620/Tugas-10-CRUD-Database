<?php
require 'function.php';
$produk = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fazztrack</title>
</head>
<body>
    
    <h1>Daftar Produk</h1>

    <a href="tambah.php">Tambah data produk</a>

    <br>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama_Produk</th>
        <th>Keterangan</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
    <?php $i = 1;?>
    <?php foreach($produk as $row) : ?>
    <tr>
        <td><?= $i;?></td>
        <td>
            <a href="ubah.php?id=<?=$row["id"];?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"];?>"onclick="return confirm ('yakin?');">hapus</a>
        </td>
        <td><?= $row["nama_produk"];?></td>
        <td><?= $row["keterangan"];?></td>
        <td><?= $row["harga"];?></td>
        <td><?=$row["jumlah"];?></td>
    </tr>
        <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>