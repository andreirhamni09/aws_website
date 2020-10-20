<?php
 header('Content-Type: application/json; charset=utf8');

 $server = "localhost";
 $user = "srsssmsc_frkh";
 $pass = "wasd@@asdasd";
 $dbname = "srsssmsc_mp";

 $koneksi = mysqli_connect($server,$user,$pass,$dbname);

 $sql="SELECT *  FROM mp_panen_tbs";
 $query=mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

 $array=array();
 while($data=mysqli_fetch_assoc($query)) $array[]=$data; 

 echo json_encode($array);
?>