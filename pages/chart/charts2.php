<?php
include_once '../layout/header.php';

date_default_timezone_set("Asia/Jakarta");

include("../../config/koneksi.php");

$database = 'database_aws';

$tkon = mysqli_connect($server, $user, $pass, $database);
if (!$tkon) {
    die("Connection failed: " . mysqli_connect_error());
}

$tanggal = date('Y-m-d');

$tsql = "SELECT * FROM tabel_aws1 WHERE tanggal='$tanggal'";
$result = mysqli_query($tkon, $tsql);


$dataSuhuKel='';

$dataSoilMoisture ='';

$dataLeafwetnes = '';
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
          if(mysqli_num_rows($result) > 0){
            while ($row = mysqli_fetch_array($result)) {
              $date = DateTime::createFromFormat('H:i:s', $row['jam']);
              $jam_formatted = $date->format('H:i');
              $dataSuhuKel.= "['".$jam_formatted."', 
                              {v:".$row['suhu_Udara'].", f:'".$row['suhu_Udara']." °C'},
                              {v:".$row['kelembaban'].", f:'".$row['kelembaban']."%'}],";    
                              
                              
              $dataSoilMoisture.= "['".$jam_formatted."', 
                              {v:".$row['soil_Moisture_1'].", f:'".$row['soil_Moisture_1']." Cbar'},
                              {v:".$row['kelembaban'].", f:'".$row['kelembaban']."%'},
                              {f:'".$row['soil_Moisture_1']." Cbar'},
                              {f:'".$row['soil_Moisture_1']." Cbar'},
                            ],";
              $leafwetnes_1;
              $leafwetnes_2;
              if(empty($row['leafwetnes_1']) && empty($row['leafwetnes_2']))
              {
                $leafwetnes_1=0;
                $leafwetnes_2=0;
              }
              $dataLeafwetnes .= "['" . $jam_formatted . "', 
                  {v:" . $leafwetnes_1 . ", f:'" . $leafwetnes_1 . " cbar'},
                  {f:'" . $leafwetnes_2 . " cbar'},
              ],";
                              
            }
          }  
        ?>

          <!-- Suhu & Kelembaban Udara -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Suhu & Kelembaban Udara</h3>

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

          <!-- Soil Moisture -->
          <div class="card card-secondary">
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

          <!-- Leafwetness -->
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Leafwetness</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="chart" id="leafwetnes_aws1">
              </div>
            </div><!-- /.card-body -->
          </div><!-- Leafwetness -->

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

  function drawStuff() {

    //--Suhu Kelembaban
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Jam');
    data.addColumn('number', 'Suhu');
    data.addColumn('number', 'Kelembaban');
    data.addRows([
      <?php echo $dataSuhuKel; ?>
    ]);

    var options = {
      chartArea: {},
      series: {
        1: {targetAxisIndex: 1}
      },
      hAxis: {},
      vAxes: {
        0: {title : 'Suhu Dalam °C'},
        1: {title : 'Dalam % Kelembaban'}
      },
      theme: 'material',
      legend: {position: 'top'}
    };

    var suhu_kelembaban = new google.visualization.LineChart(document.getElementById('suhu_udara_aws1'));
    suhu_kelembaban.draw(data, options);
    //Suhu Kelembaban--

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
        1: {targetAxisIndex: 1}
      },
      hAxis: {},
      vAxes: {
        0: {title : 'Soil Moisture Dalam Cbar'},
        1:{title : 'Soil Moisture Dalam Cbar'},
      },
      theme: 'material',
      legend: {position: 'top'}
    };

    var soilMoisture = new google.visualization.LineChart(document.getElementById('soil_moisture_aws1'));
    soilMoisture.draw(data_soilmoisture, options_SoilMoisture);
    //Soil Moisture--


    //--Soil Moisture
    var data_leafwetnes = new google.visualization.DataTable();
    data_leafwetnes.addColumn('string', 'Jam');
    data_leafwetnes.addColumn('number', 'Leafwetnes 1');
    data_leafwetnes.addColumn('number', 'Leafwetnes 2');
    data_leafwetnes.addRows([
      <?php echo $dataLeafwetnes; ?>
    ]);

    var options_leafwetness = {
      chartArea: {},
      series: {
        1: {targetAxisIndex: 1}
      },
      hAxis: {},
      vAxes: {
        0: {title : 'Soil Moisture Dalam Cbar'},
      },
      theme: 'material',
      legend: {position: 'top'}
    };

    var leafwetnes = new google.visualization.LineChart(document.getElementById('soil_moisture_aws1'));
    leafwetnes.draw(data_leafwetnes, options_leafwetness);
    //Soil Moisture--


  }
  $(window).resize(function() {
    drawStuff();
  });
</script>