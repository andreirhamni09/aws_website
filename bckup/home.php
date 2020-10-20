<?php 
session_start();
include('../frkh/koneksi.php'); 
  if (!isset($_SESSION['email'])){
    header("Location: login");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MobilePro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="layout/dist/img/favicon.ico">
    <link rel="stylesheet" href="layout/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="layout/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="layout/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="layout/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="hover"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link">Selamat datang, <?php echo $_SESSION['nama_lengkap']; ?>!</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link"><?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set("Asia/Jakarta");
$arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
$day = date("w");
echo $arrDay[$day] . ", " . date("d-m-Y");
?></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="layout/dist/img/CBI-logo.png" alt="Covid Tracker" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">MobilePro</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="home" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout" class="nav-link">
                                <i class="nav-icon fa fa-window-close"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Home</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Latest Update</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            data-toggle="tooltip" title="Remove">
                                            <i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>user_id</th>
                                                <th>name</th>
                                                <th>tanggal</th>
                                                <th>jenis_panen</th>
                                                <th>tbs_kirim</th>
                                                <th>tbs_dibayar</th>
                                                <th>estate</th>
                                                <th>id_estate</th>
                                                <th>afdeling</th>
                                                <th>tahun_tanam</th>
                                                <th>id_tt</th>
                                                <th>blok</th>
                                                <th>id_blok</th>
                                                <th>ancak</th>
                                                <th>id_ancak</th>
                                                <th>tph</th>
                                                <th>id_tph</th>
                                                <th>list_pemanen</th>
                                                <th>list_idpemanen</th>
                                                <th>tbs</th>
                                                <th>tbs_masak</th>
                                                <th>tbs_lewatmasak</th>
                                                <th>tbs_mentah</th>
                                                <th>tks</th>
                                                <th>vcut</th>
                                                <th>tikus</th>
                                                <th>tangkai_panjang</th>
                                                <th>abnormal</th>
                                                <th>latitude</th>
                                                <th>longitude</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                          $servername = "localhost";
                          $username = "srsssmsc_frkh";
                          $password = "wasd@@asdasd";
                          $dbname = "srsssmsc_mp";
                          
                          // Create connection
                          $conn = new mysqli($servername, $username, $password, $dbname);
                          // Check connection
                          if ($conn->connect_error) {
                              die("Connection failed: " . $conn->connect_error);
                          }
                          
                          $sql = "SELECT * FROM mp_panen_tbs";
                          $query = mysqli_query($conn, $sql);
                          
                          while ($row = mysqli_fetch_array($query)) {
                              echo "<tr>";
                          
                              echo "<td>" . $row['id'] . "</td>";
                              echo "<td>" . $row['user_id'] . "</td>";
                              echo "<td>" . $row['name'] . "</td>";
                              echo "<td>" . $row['tanggal'] . "</td>";
                              echo "<td>" . $row['jenis_panen'] . "</td>";
                              echo "<td>" . $row['tbs_kirim'] . "</td>";
                              echo "<td>" . $row['tbs_dibayar'] . "</td>";
                              echo "<td>" . $row['estate'] . "</td>";
                              echo "<td>" . $row['id_estate'] . "</td>";
                              echo "<td>" . $row['afdeling'] . "</td>";
                              echo "<td>" . $row['tahun_tanam'] . "</td>";
                              echo "<td>" . $row['id_tt'] . "</td>";
                              echo "<td>" . $row['blok'] . "</td>";
                              echo "<td>" . $row['id_blok'] . "</td>";
                              echo "<td>" . $row['ancak'] . "</td>";
                              echo "<td>" . $row['id_ancak'] . "</td>";
                              echo "<td>" . $row['tph'] . "</td>";
                              echo "<td>" . $row['id_tph'] . "</td>";
                              echo "<td>" . $row['list_pemanen'] . "</td>";
                              echo "<td>" . $row['list_idpemanen'] . "</td>";
                              echo "<td>" . $row['tbs'] . "</td>";
                              echo "<td>" . $row['tbs_masak'] . "</td>";
                              echo "<td>" . $row['tbs_lewatmasak'] . "</td>";
                              echo "<td>" . $row['tbs_mentah'] . "</td>";
                              echo "<td>" . $row['tks'] . "</td>";
                              echo "<td>" . $row['vcut'] . "</td>";
                              echo "<td>" . $row['tikus'] . "</td>";
                              echo "<td>" . $row['tangkai_panjang'] . "</td>";
                              echo "<td>" . $row['abnormal'] . "</td>";
                              echo "<td>" . $row['latitude'] . "</td>";
                              echo "<td>" . $row['longitude'] . "</td>";
                          
                              echo "</tr>";
                          }
                          ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b></b>
            </div>
            <strong><a href="#">MobilePro</a>.</strong> 2020
        </footer>
        <aside class="control-sidebar control-sidebar-light">
        </aside>
    </div>
    <script src="layout/plugins/jquery/jquery.min.js"></script>
    <script src="layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="layout/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="layout/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="layout/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="layout/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="layout/dist/js/adminlte.min.js"></script>
    <script src="layout/dist/js/demo.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": true,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $("#example3").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
</body>

</html>