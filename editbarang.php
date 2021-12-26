<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$id = $_GET['id'];
 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $tipe = $_POST['tipe'];
    $status = $_POST['status'];

    $namaFile = $_FILES['foto']['name'];
    $namaSementara = $_FILES['foto']['tmp_name'];
    // tentukan lokasi file akan dipindahkan
    $dirUpload = "upload/";

    // pindahkan file
    if ($namaFile) {
        $upload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);
    }
 
    if ($id) {
        $filepath = $dirUpload.$namaFile;
        if ($namaFile) {
            $sql = "UPDATE barang set nama = '$nama', harga ='$harga' , deskripsi = '$deskripsi' , tipe = '$tipe' , status = '$status', filepath = '$filepath' where id={$id}";
        }else{
            $sql = "UPDATE barang set nama = '$nama', harga ='$harga' , deskripsi = '$deskripsi' , tipe = '$tipe' , status = '$status' where id={$id}";
        }

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: barang.php");
            echo "<script>alert('Selamat, edit barang berhasil!')</script>";
            $nama = "";
            $harga = "";
            $deskripsi = "";
            $tipe = "";
            $status = "";
            $email = "";
            $_POST['nama'] = "";
            $_POST['harga'] = "";
            $_POST['deskripsi'] = "";
            $_POST['tipe'] = "";
            $_POST['status'] = "";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
            echo "<script>alert('Upload Gagal! Terjadi kesalahan.')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="css/styles.css">
 
    <title>Form Edit Barang</title>
</head>
<body>
    <div class="container">
        <?php 

            $data = mysqli_query($conn,"select * from barang where id='$id'");
            while($d = mysqli_fetch_array($data)){
         ?>
        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit Barang</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" value="<?php echo $d['nama']; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Harga" name="harga" value="<?php echo $d['harga']; ?>" required>
            </div>
            <div class="input-group">
                <textarea type="text" placeholder="Deskripsi" name="deskripsi" required><?php echo $d['deskripsi']; ?></textarea>
            </div>
            <div class="input-group">
                <select name="tipe">
                    <option value="">Pilih Tipe</option>
                    <option value="1" <?php echo $d['tipe'] === '1' ? "selected":""; ?>>Makanan</option>
                    <option value="2" <?php echo $d['tipe'] === '2' ? "selected":""; ?>>Minuman</option>
                </select>
            </div>
            <div class="input-group">
                <select name="status">
                    <option value="">Pilih Status</option>
                    <option value="1" <?php echo $d['status'] === '1' ? "selected":""; ?>>Aktif</option>
                    <option value="2" <?php echo $d['status'] === '2' ? "selected":""; ?>>Tidak Aktif</option>
                </select>
            </div>
            <div class="input-group text-center">
                <input type="file" placeholder="Gambar Produk" name="foto">
            </div>
            <div class="input-group">
                <a href="<?php echo $d['filepath']; ?>" target="_blank" class="btn">Lihat Gambar</a>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Edit</button><br>
            </div>
            <div class="input-group">
                <a href="barang.php" class="btn">Batal</button>
            </div>
        </form>
        <?php 
            }
        ?>
    </div>
</body>
</html>