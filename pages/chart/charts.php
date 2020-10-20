<?php
include_once '../layout/header.php';

date_default_timezone_set("Asia/Jakarta");

include("../../config/koneksi.php");

$database = 'database_aws';

$tkon = mysqli_connect($server, $user, $pass, $database);
if (!$tkon) {
  die("Connection failed: " . mysqli_connect_error());
}


$tsql = "SELECT * FROM tabel_aws1";
$result = mysqli_query($tkon, $tsql);


$dataSuhuKel      = '';

$dataRadiasi      = '';

$dataTekUdara     = '';

$dataKecAngin     = '';

$dataSoilMoisture = '';

$dataSuhuTanah    = '';

$dataET = '';

$dataUltraviolet = '';

$dataArahAngin = '';

$dataCurahHujan = '';

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">

  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <?php
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
              $date = DateTime::createFromFormat('H:i:s', $row['jam']);
              $jam_formatted = $date->format('H:i');
              $dataSuhuKel .= "['" . $jam_formatted . "', {v:" . $row['suhu_Udara'] . ", f:'" . $row['suhu_Udara'] . " °C'}, {v:" . $row['kelembaban'] . ", f:'" . $row['kelembaban'] . "%'}],";

              $dataRadiasi .= "['" . $jam_formatted . "', {v:" . $row['radiasi'] . ", f:'" . $row['radiasi'] . " W/m²'}],";

              $dataTekUdara .= "['" . $jam_formatted . "', {v:" . $row['tekanan_Udara'] . ", f:'" . $row['tekanan_Udara'] . " mbar'}],";

              $dataKecAngin .= "['" . $jam_formatted . "', {v:" . $row['kecepatan_Angin'] . ", f:'" . $row['kecepatan_Angin'] . " m/s'}],";

              $dataSoilMoisture .= "['" . $jam_formatted . "', 
                              {v:" . $row['soil_Moisture_1'] . ", f:'" . $row['soil_Moisture_1'] . " Cbar'},
                              {f:'" . $row['soil_Moisture_2'] . " Cbar'},
                              {f:'" . $row['soil_Moisture_3'] . " Cbar'},
                              {f:'" . $row['soil_Moisture_4'] . " Cbar'},
                            ],";

              $dataSuhuTanah .= "['" . $jam_formatted . "', 
                                  {v:" . $row['suhu_Tanah_1'] . ", f:'" . $row['suhu_Tanah_1'] . " °C'},
                                  {f:'" . $row['suhu_Tanah_2'] . " °C'},
                                  {f:'" . $row['suhu_Tanah_3'] . " °C'},
                                  {f:'" . $row['suhu_Tanah_4'] . " °C'},
                              ],";

              $dataET .= "['" . $jam_formatted . "', 
                          {v:" . $row['evapotranspirasi'] . ", f:'" . $row['evapotranspirasi'] . " °C'},
                        ],";

              //ultraviolet                      
              $dataUltraviolet .= "['" . $jam_formatted . "', 
                  {v:" . $row['index_UV'] . ", f:'" . $row['index_UV'] . "'},
                ],";
              //Ultraviolet

              //Arah Angin 
              $arahAngin = '';
              if ($row['arah_Angin'] > 337.5) {
                $arahAngin = ' U';
              }
              // N
              else if ($row['arah_Angin'] >= 0 && $row['arah_Angin'] <= 22.5) {
                $arahAngin = ' U';
              }
              // NE
              else if ($row['arah_Angin'] > 22.5 && $row['arah_Angin'] <= 67.5) {
                $arahAngin = ' TL';
              }
              // E
              else if ($row['arah_Angin'] > 67.5 && $row['arah_Angin'] <= 112.5) {
                $arahAngin = ' T';
              }
              // SE
              else if ($row['arah_Angin'] > 112.5 && $row['arah_Angin'] <= 157.5) {
                $arahAngin = ' TG';
              }
              // S
              else if ($row['arah_Angin'] > 157.5 && $row['arah_Angin'] <= 202.5) {
                $arahAngin = ' S';
              }
              // SW
              else if ($row['arah_Angin'] > 202.5 && $row['arah_Angin'] <= 247.5) {
                $arahAngin = ' BD';
              }
              // W
              else if ($row['arah_Angin'] > 247.5 && $row['arah_Angin'] <= 292.5) {
                $arahAngin = ' B';
              }
              // NW
              else if ($row['arah_Angin'] > 292.5 && $row['arah_Angin'] <= 337.5) {
                $arahAngin = ' BL';
              }

              $dataArahAngin .= "['" . $jam_formatted . "', 
                  {v:" . $row['arah_Angin'] . ", f:'" . $row['arah_Angin'] . "$arahAngin'},
                ],";
              //Arah Angin--


              $dataCurahHujan .= "['" . $jam_formatted . "', 
                {v:" . $row['curah_Hujan'] . ", f:'" . $row['curah_Hujan'] . " mm'},
              ],";
            }
          }
          ?>

          <!-- Curah Hujan -->
          <div class="card card-purple">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-cloud-rain pr-2"></i>Curah Hujan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="curah_hujan_aws1">
              </div>
            </div><!-- /.card-body -->
          </div><!-- Curah Hujan -->

          <!-- Suhu & Kelembaban Udara -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-thermometer-three-quarters pr-2"></i>Suhu & Kelembaban Udara</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="suhu_udara_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- Suhu & Kelembaban Udara -->

          <!-- Tekanan Udara -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title"><i class="fab fa-cloudscale pr-2"></i>Tekanan Udara</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="tekanan_udara_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- Tekanan Udara -->

          <!-- Kecepatan Angin -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-fan pr-2"></i>Kecepatan Angin</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="kecepatan_angin_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- Kecepatan Angin -->

          <!-- Soil Moisture -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-tint pr-2"></i>Soil Moisture</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="soil_moisture_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- Soil Moisture -->

          <!-- Suhu Tanah -->
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-thermometer-three-quarters pr-2"></i> Suhu Tanah</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="suhu_tanah_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- Suhu Tanah -->

          <!-- Radiasi -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"><i class="far fa-sun pr-2"></i>Radiasi</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="radiasi_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- Radiasi -->

          <!-- ET -->
          <div class="card card-indigo">
            <div class="card-header">
              <h3 class="card-title"><i class="fas fa-water pr-2"></i>ET</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="evapotranspirasi_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- ET -->

          <!-- Ultraviolet -->
          <div class="card card-lime">
            <div class="card-header">
              <h3 class="card-title"><i class="far fa-sun pr-2"></i>Ultraviolet</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="ultraviolet_aws1">
              </div>
            </div><!-- /.card-body -->
          </div><!-- Ultraviolet -->

          <!-- Arah Angin -->
          <div class="card card-navy">
            <div class="card-header">
              <h3 class="card-title"><i class="far fa-compass pr-2"></i>Arah Angin</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="arah_angin_aws1">
              </div>
            </div><!-- /.card-body -->

          </div><!-- Arah Angin -->

        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<!-- jQuery -->
<script src="../../layout/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../layout/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="../../layout/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../layout/dist/js/demo.js"></script>
<!-- page script -->


<script>
  google.charts.load('current', {
    'packages': ['corechart']
  });
  google.charts.setOnLoadCallback(drawStuff);

  function tampilkanGrafik(){

  }

  function drawStuff() {

    //--menampilkan chart data suhu dan kelembaban

  
    var data_SuhuKel = new google.visualization.DataTable();
    data_SuhuKel.addColumn('string', 'Name');
    data_SuhuKel.addColumn('number', 'Suhu Udara');
    data_SuhuKel.addColumn('number', 'Kelembaban');
    data_SuhuKel.addRows([
      <?php echo $dataSuhuKel ?>
    ]);

    var options_SuhuKel = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      vAxes: {
        0: {
          title: 'Suhu Dalam °C'
        },
        1: {
          title: 'Dalam % Kelembaban'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };


    var suhu_kelembaban = new google.visualization.LineChart(document.getElementById('suhu_udara_aws1'));
    suhu_kelembaban.draw(data_SuhuKel, options_SuhuKel);
    //menampilkan chart data suhu dan kelembaban--


    //--menampilkan chart data radiasi
    var data_Radiasi = new google.visualization.DataTable();
    data_Radiasi.addColumn('string', 'Name');
    data_Radiasi.addColumn('number', 'Radiasi');
    data_Radiasi.addRows([
      <?php echo $dataRadiasi; ?>
    ]);
    var options_Radiasi = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Radiasi Dalam W/m²'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var radiasi = new google.visualization.LineChart(document.getElementById('radiasi_aws1'));
    radiasi.draw(data_Radiasi, options_Radiasi);
    //menampilkan chart data radiasi--


    //--menampilkan chart data tekanan Udara
    var data_TekUdara = new google.visualization.DataTable();
    data_TekUdara.addColumn('string', 'Name');
    data_TekUdara.addColumn('number', 'Tekanan Udara');
    data_TekUdara.addRows([
      <?php echo $dataTekUdara; ?>
    ]);
    var options_TekUdara = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Tekanan Udara mbar'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var tekananUdara = new google.visualization.LineChart(document.getElementById('tekanan_udara_aws1'));
    tekananUdara.draw(data_TekUdara, options_TekUdara);
    //menampilkan chart tekanan Udara--


    //--menampilkan chart data Kecepatan Angin
    var data_KecAngin = new google.visualization.DataTable();
    data_KecAngin.addColumn('string', 'Name');
    data_KecAngin.addColumn('number', 'Kecepatan Angin');
    data_KecAngin.addRows([
      <?php echo $dataKecAngin; ?>
    ]);
    var options_KecAngin = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Kecepatan Angin Dalam m/s'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var kecepatanAngin = new google.visualization.LineChart(document.getElementById('kecepatan_angin_aws1'));
    kecepatanAngin.draw(data_KecAngin, options_KecAngin);
    //menampilkan chart tekanan Udara--  


    //--Soil Moisture
    var data_soilmoisture = new google.visualization.DataTable();
    data_soilmoisture.addColumn('string', 'Jam');
    data_soilmoisture.addColumn('number', 'Soil Moisture 1');
    data_soilmoisture.addColumn('number', 'Soil Moisture 2');
    data_soilmoisture.addColumn('number', 'Soil Moisture 3');
    data_soilmoisture.addColumn('number', 'Soil Moisture 4');
    data_soilmoisture.addRows([
      <?php echo $dataSoilMoisture; ?>
    ]);

    var options_SoilMoisture = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Soil Moisture Dalam Cbar'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var soilMoisture = new google.visualization.LineChart(document.getElementById('soil_moisture_aws1'));
    soilMoisture.draw(data_soilmoisture, options_SoilMoisture);
    //Soil Moisture--

    //--Suhu Tanah
    var data_SuhuTanah = new google.visualization.DataTable();
    data_SuhuTanah.addColumn('string', 'Jam');
    data_SuhuTanah.addColumn('number', 'Suhu Tanah 1');
    data_SuhuTanah.addColumn('number', 'Suhu Tanah 2');
    data_SuhuTanah.addColumn('number', 'Suhu Tanah 3');
    data_SuhuTanah.addColumn('number', 'Suhu Tanah 4');
    data_SuhuTanah.addRows([
      <?php echo $dataSuhuTanah; ?>
    ]);

    var options_SuhuTanah = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Suhu Tanah Dalam °C'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var suhuTanah = new google.visualization.LineChart(document.getElementById('suhu_tanah_aws1'));
    suhuTanah.draw(data_SuhuTanah, options_SuhuTanah);
    //Suhu Tanah--

    //--ET
    var data_ET = new google.visualization.DataTable();
    data_ET.addColumn('string', 'Jam');
    data_ET.addColumn('number', 'ET');
    data_ET.addRows([
      <?php echo $dataET; ?>
    ]);

    var options_ET = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Data Evapotranspirasi'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var eT = new google.visualization.LineChart(document.getElementById('evapotranspirasi_aws1'));
    eT.draw(data_ET, options_ET);
    //ET--

    //--Ultraviolet
    var data_Ultraviolet = new google.visualization.DataTable();
    data_Ultraviolet.addColumn('string', 'Jam');
    data_Ultraviolet.addColumn('number', 'Radiasi');
    data_Ultraviolet.addRows([
      <?php echo $dataUltraviolet; ?>
    ]);

    var options_Ultraviolet = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Data Ultraviolet'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var ultraviolet = new google.visualization.LineChart(document.getElementById('ultraviolet_aws1'));
    ultraviolet.draw(data_Ultraviolet, options_Ultraviolet);
    //Ultraviolet--

    //--Arah Angin
    var data_ArahAngin = new google.visualization.DataTable();
    data_ArahAngin.addColumn('string', 'Jam');
    data_ArahAngin.addColumn('number', 'Radiasi');
    data_ArahAngin.addRows([
      <?php echo $dataArahAngin; ?>
    ]);

    var options_ArahAngin = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Arah Angin'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var arahangin = new google.visualization.ColumnChart(document.getElementById('arah_angin_aws1'));
    arahangin.draw(data_ArahAngin, options_ArahAngin);
    //Arah Angin--

    //--Curah Hujan
    var data_CurahHujan = new google.visualization.DataTable();
    data_CurahHujan.addColumn('string', 'Jam');
    data_CurahHujan.addColumn('number', 'Curah Hujan');
    data_CurahHujan.addRows([
      <?php echo $dataCurahHujan; ?>
    ]);

    var options_CurahHujan = {
      chartArea: {},
      series: {
        1: {
          targetAxisIndex: 1
        }
      },
      hAxis: {},
      vAxes: {
        0: {
          title: 'Curah Hujan Dalam mm'
        }
      },
      theme: 'material',
      legend: {
        position: 'top'
      }
    };

    var curahhujan = new google.visualization.ColumnChart(document.getElementById('curah_hujan_aws1'));
    curahhujan.draw(data_CurahHujan, options_CurahHujan);
    //Curah Hujan--

  }
  $(window).resize(function() {
    drawStuff();
  });
</script>