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
    <link rel="stylesheet" href="layout/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
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

            <div class="content">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-primary"><strong>Ringkasan Panen</strong></h5>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="card-title">Ripeness Estate</h6>
                                            <canvas id="ripChart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>

                                        <div class="col-md-6">
                                            <h6 class="card-title">Rotasi Panen</h6><br>
                                            <h6>Mei 2020</h6>
                                            <div id="chart_div"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; position: absolute;top: 50%; left: 50%; margin-right: -50%; transform: translate(-50%, -50%)">
                                            </div>
                                        </div>
                                    </div><br><br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="card-title">Ripeness Afdeling</h6>
                                            <div id="columnchart_values"
                                                style="min-height: 250px; height: 400px; max-height: 400px; max-width: 100%;">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <h6 class="card-title">Perbandingan Ripeness</h6><br>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Panen</th>
                                                        <th>Janjang Matang %</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Data Hari Kemarin (22 May)</td>
                                                        <td align='right'>2,791</td>
                                                        <td align='right'>99.79</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hari ini (23 May)</td>
                                                        <td align='right'>0</td>
                                                        <td align='right'>0.00</td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bulan berjalan (May 2020)</td>
                                                        <td align='right'>226.825</td>
                                                        <td align='right'>99.57</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tahun berjalan (2020)</td>
                                                        <td align='right'>799.531</td>
                                                        <td align='right'>99.31</td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><br><br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="card-title">Standar Panen</h6>
                                            <canvas id="pie1Chart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>

                                        <div class="col-md-6">
                                            <h6 class="card-title">Jenis Panen</h6><br>
                                            <canvas id="pie2Chart"
                                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                        </div>
                                    </div><br><br><br>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0 text-primary"><strong>Backlog</strong></h5>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div id="baclog_chart"
                                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="layout/plugins/jquery/jquery.min.js"></script>
    <script src="layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="layout/plugins/chart.js/Chart.min.js"></script>
    <script src="layout/dist/js/adminlte.min.js"></script>
    <script src="layout/dist/js/demo.js"></script>
    <script>
        $.getJSON("data/data-pie-rip.php", function (data) {

            //array untuk chart label dan chart data
            var isi_labels = [];
            var isi_data = [];
            var isi_dataInt = [];

            //push ke dalam array isi label dan isi data
            var tbs = 0;
            var tbs_lewatmasak = 0;
            var tbs_mentah = 0;
            var tks = 0;
            var tbs_masak = 0;
            $(data).each(function (i) {

                //jml item dalam persentase
                tbs += parseInt(data[i].tbs);
                tbs_masak += parseInt(data[i].tbs_masak);
                tbs_mentah += parseInt(data[i].tbs_mentah);
                tbs_lewatmasak += parseInt(data[i].tbs_lewatmasak);
                tks += parseInt(data[i].tks);
            });

            var persenMasak = ((tbs_masak / tbs) * 100).toFixed(2);
            var persenMentah = ((tbs_mentah / tbs) * 100).toFixed(2);
            var persenLewat = ((tbs_lewatmasak / tbs) * 100).toFixed(2);
            var persenTks = ((tks / tbs) * 100).toFixed(2);

            //jumlah data
            isi_data.push(persenMasak);
            isi_data.push(persenMentah);
            isi_data.push(persenLewat);
            isi_data.push(persenTks);

            //buat label
            isi_labels.push("Masak: " + persenMasak + "%");
            isi_labels.push("Mentah: " + persenMentah + "%");
            isi_labels.push("Lewat Masak: " + persenLewat + "%");
            isi_labels.push("Tandan Kosong: " + persenTks + "%");

            //buat tooltip
            isi_dataInt.push(tbs_masak);
            isi_dataInt.push(tbs_mentah);
            isi_dataInt.push(tbs_lewatmasak);
            isi_dataInt.push(tks);

            var TabelData = "";
            TabelData += "<tr><td>" + isi_labels[0] + "</td><td>" + tbs_masak + "</td></tr>";
            TabelData += "<tr><td>" + isi_labels[1] + "</td><td>" + tbs_mentah + "</td></tr>";
            TabelData += "<tr><td>" + isi_labels[2] + "</td><td>" + tbs_lewatmasak + "</td></tr>";
            TabelData += "<tr><td>" + isi_labels[3] + "</td><td>" + tks + "</td></tr>";

            $("#DataTabelRipeness").html(TabelData);
            var ctx = document.getElementById('ripChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: isi_labels,
                    datasets: [{
                        label: 'Data Ripeness',
                        //isi chart
                        data: isi_data,

                        backgroundColor: ['#00a65a', '#f56954', '#f39c12', '#00c0ef'],
                    }]
                },

                options: {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: true,
                        position: 'right'
                    },

                    tooltips: {
                        callbacks: {
                            label: function (tooltipItem, data) {
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                var labels = data.labels[tooltipItem.index];
                                var currentValue = isi_dataInt[tooltipItem.index];
                                return labels + " [" + currentValue + "]";
                            }
                        }
                    }
                }
            });

            var pieChartCanvas = $('#pie1Chart').get(0).getContext('2d')
            var pieData = {
                labels: [
                    'Data1',
                    'Data2',
                    'Data3',
                    'Data4',
                ],
                datasets: [{
                    data: [700, 500, 400, 600],
                    backgroundColor: ['#00a65a', '#f56954', '#f39c12', '#00c0ef'],
                }]
            }
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: true,
                    position: 'right'
                }
            }

            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })

            var pieChartCanvas = $('#pie2Chart').get(0).getContext('2d')
            var pieData = pieData;
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: true,
                    position: 'right'
                }
            }

            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })

            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                        label: 'OB',
                        backgroundColor: 'rgba(60,141,188,0.9)',
                        borderColor: 'rgba(60,141,188,0.8)',
                        pointRadius: false,
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                        label: 'OA',
                        backgroundColor: 'rgba(210, 214, 222, 1)',
                        borderColor: 'rgba(210, 214, 222, 1)',
                        pointRadius: false,
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [65, 59, 80, 81, 56, 55, 40]
                    },
                ]
            }

            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })
        });
    </script>
    <script>
        var chartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                type: 'line',
                label: 'Dataset 1',
                borderColor: window.chartColors.blue,
                borderWidth: 2,
                fill: false,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ]
            }, {
                type: 'bar',
                label: 'Dataset 2',
                backgroundColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                borderColor: 'white',
                borderWidth: 2
            }, {
                type: 'bar',
                label: 'Dataset 3',
                backgroundColor: window.chartColors.green,
                data: [
                    10, 20, 30, 40
                ]
            }]

        };
        window.onload = function () {
            var ctx = document.getElementById('barline').getContext('2d');
            window.myMixedChart = new Chart(ctx, {
                type: 'bar',
                data: chartData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Chart.js Combo Bar Line Chart'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
        };

        document.getElementById('randomizeData').addEventListener('click', function () {
            chartData.datasets.forEach(function (dataset) {
                dataset.data = dataset.data.map(function () {
                    return randomScalingFactor();
                });
            });
            window.myMixedChart.update();
        });
    </script>
    <script>
        google.charts.load('current', {
            'packages': ['gauge']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Label', 'Value'],
                ['Rotasi', 2.46]
            ]);

            var options = {
                width: 250,
                height: 250,
                redFrom: 0,
                redTo: 23 / 7 / 4,
                greenFrom: 23 / 7 * 3 / 4,
                greenTo: 23 / 7,
                yellowFrom: 23 / 7 / 4,
                yellowTo: 23 / 7 / 2,
                minorTicks: 4,
                max: (31 / 7).toFixed(2)
            };

            var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

            chart.draw(data, options);

        }
    </script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Siap Kirim', 'Backlog', 'Evacuated'],
                ['Januari', 165, 21, 140],
                ['Februari', 155, 40, 110],
                ['Maret', 135, 20, 100],
                ['April', 157, 7, 143],
                ['Mei', 139, 27, 67]
            ]);

            var options = {
                startup: true,
                title: '',
                vAxis: {
                    title: 'Janjang'
                },
                hAxis: {
                    title: 'Bulan'
                },
                seriesType: 'bars',
                series: {
                    0: {
                        color: '#90EE90'
                    },
                    1: {
                        type: 'line',
                        pointsVisible: true,
                        pointShape: 'square',
                        lineWidth: 4,
                        pointSize: 15
                    },
                    2: {
                        type: 'line',
                        pointsVisible: true,
                        color: 'green',
                        lineWidth: 4,
                        pointSize: 15
                    }
                }
            };

            var chart = new google.visualization.ComboChart(document.getElementById('baclog_chart'));
            chart.draw(data, options);
        }
    </script>
    <script>
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Afdeling", "Ripeness", {
                    role: "style"
                }],
                ["OA", 97.43, "red"],
                ["OB", 94.33, "green"],
                ["OC", 98.40, "blue"],
                ["OD", 96.10, "purple"]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: "",
                bar: {
                    groupWidth: "75%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
    </script>
</body>

</html>