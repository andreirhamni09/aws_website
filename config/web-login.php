<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn,"SELECT * FROM pengguna where email='$email' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['email'] = $email;
	$_SESSION['nama_lengkap'] = $data['nama_lengkap'];
    header("Location: ../pages/tabel/tabel");
} 
else {
    header("Location: ../pages/auth/login");
}
?>