<?php
session_start();
$conn = mysqli_connect("localhost", "srsssmsc_frkh", "wasd@@asdasd" , "srsssmsc_icu") or die (mysqli_error());

$email = 'f';
$password = 'f';

$result = mysqli_query($conn,"SELECT * FROM pengguna where email='$email' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['email'] = $email;
    header("Location: ../content");
} 
else {
    header("Location: ../login");
}
?>