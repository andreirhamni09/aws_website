<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set("Asia/Jakarta");
$arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$day = date("w");
echo date("H:i:s") . "</br>" . $arrDay[$day] . ", " . date("d-m-Y");
?>