<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$id = $_GET['id'];
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "UPDATE users set username = '$username', email ='$email' , password = '$password' where id={$id}";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: user.php");
            echo "<script>alert('Selamat, edit user berhasil!')</script>";
            $username = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
        } else {
            echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
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
 
    <title>Form Edit User</title>
</head>
<body>
    <div class="container">
        <?php 

            $data = mysqli_query($conn,"select * from users where id='$id'");
            while($d = mysqli_fetch_array($data)){
         ?>
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Edit User</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username"  value="<?php echo $d['username']; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email"  value="<?php echo $d['email']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Edit</button>
            </div>
        </form>
        <?php 
            }
        ?>
    </div>
</body>
</html>