<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbuser = "srsssmsc_icu";

$conn = new mysqli($server, $user, $pass, $dbuser);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$konek = $conn->query("SELECT * FROM db_tracking ORDER BY id DESC");
$assoc = $konek->fetch_assoc();

$connu = new mysqli($server, $user, $pass, $dbuser);
if ($connu->connect_error) {
    die("Connection failed: " . $connu->connect_error);
}

// $sql = "SELECT * FROM frkh_tracking";
// $query = mysqli_query($conn, $sql);

// $uploadfoto = new mysqli($server, $user, $pass, $db);

// // Check connection
// if ($uploadfoto->connect_error) {
//     die("gagal bos: " . $uploadfoto->connect_error);
// }
?>