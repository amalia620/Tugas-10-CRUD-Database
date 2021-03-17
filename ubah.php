<?php 
require 'function.php';

$id = $_GET["id"];

$prd = query("SELECT * FROM produk WHERE id = $id")[0];


if (isset($_POST["submit"])) {


    if( ubah($_POST)>0) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
                </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'index.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data produk</title>
</head>
<body>
    <h1>Ubah data produk</h1>
    <form action="" method ="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $prd["id"]; ?>">
        <ul>
        <li> <label for="nama_produk">Nama_Produk :</label>
            <input type="text" name = "nama_produk" id ="nama_poduk"  value="<?= $prd["nama_produk"];?>">
        </li>
        <li> <label for="keterangan">Keterangan :</label>
            <input type="text" name = "keterangan" id ="keterangan"  value = "<?= $prd["keterangan"];?>"> 
        </li>
        <li> <label for="harga">Harga :</label>
            <input type="text" name = "harga" id ="harga"  value = "<?= $prd["harga"];?>">
        </li>
        <li> <label for="jumlah">Jumlah :</label>
            <input type="text" name = "jumlah" id ="jumlah"  value = "<?= $prd["jumlah"];?>">
        </li>
        <li>
        <button type = "submit" name="submit"> Ubah Data</button>
        </li>
        </ul>
    </form>
</body>
</html>