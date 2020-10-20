<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "database_aws";

    $tkon = mysqli_connect($server, $user, $pass, $database);
    // Check connection
    if (!$tkon) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $tsql = "SELECT * FROM tabel_aws1 ORDER BY tanggal ASC";
    $result = mysqli_query($tkon, $tsql);
?>