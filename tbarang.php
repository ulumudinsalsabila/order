<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();

// if (!isset($_SESSION['username'])) {
//     header("Location: index.php");
// }
$username = $_POST['username'] ? $_POST['username'] : '';
 
 
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
    $upload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

    if ($upload) {
        $filepath = $dirUpload.$namaFile;

        $sql = "INSERT INTO barang (nama, harga, deskripsi, tipe, status, filepath)
                VALUES ('$nama', '$harga', '$deskripsi', '$tipe', '$status', '$filepath')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Tambah data berhasil!')</script>";
            header("Location: barang.php");
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
 
    <title>Form Tambah Menu</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Tambah Menu</p>
            <div class="input-group">
                <input type="text" placeholder="Nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Harga" name="harga" value="<?php echo $harga; ?>" required>
            </div>
            <div class="input-group">
                <textarea type="text" placeholder="Deskripsi" name="deskripsi" required><?php echo $deskripsi; ?></textarea>
            </div>
            <div class="input-group">
                <select name="tipe">
                    <option value="">Pilih Tipe</option>
                    <option value="1">Makanan</option>
                    <option value="2">Minuman</option>
                </select>
            </div>
            <div class="input-group">
                <select name="status">
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="2">Tidak Aktif</option>
                </select>
            </div>
            <div class="input-group">
                <input type="file" placeholder="Gambar Produk" name="foto" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Tambah</button><br>
            </div>
            <div class="input-group">
                <a href="barang.php" class="btn">Batal</button>
            </div>
        </form>
    </div>
</body>
</html>