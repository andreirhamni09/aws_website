<?php
include_once '../layout/header.php';
?>
<div class="content-wrapper">
  <!-- //Content Header AWS 1-->
  <section class="content-header">
    <div class="content-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            Dashboard AWS 1
          </h1>
        </div>
      </div>
    </div>
  </section>
  <!--Content Header AWS 1//-->

  <!-- // Main content AWS 1-->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <!--//Suhu Ruangan-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Suhu Ruangan</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="temp_in1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_temp_in1" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Suhu Ruangan//-->

        <!--//Kelembaban Ruangan-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Kelembaban Ruangan</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="hum_in1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_hum_in1" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Kelembaban Ruangan//-->

        <!--//Suhu Udara-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Suhu Udara</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="temp_out1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_temp_out1" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Suhu Udara//-->

        <!--//Kelembaban Udara//-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Kelembaban Udara</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="hum_out1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_hum_out1" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Kelembaban Udara//-->

        <!--//Curah Hujan Sekarang-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Sekarang</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_rn1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_rn1" class="fas fa-cloud-rain fa-2x "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Sekarang//-->

        <!--//Curah Hujan Hari Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Hari Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_d1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_d1" class="fas fa-cloud-rain fa-2x "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Hari Ini//-->

        <!--//Curah Hujan Bulan Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Bulan Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_m1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_m1" class="fas fa-cloud-rain fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Bulan Ini//-->

        <!--//Curah Hujan Tahun Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Tahun Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_y1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_y1" class="fas fa-cloud-rain fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Tahun Ini//-->

        <!--//Evapotranspirasi Hari Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">ET Hari Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="et_d1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_et_d1" class="fas fa-water fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Evapotranspirasi Hari Ini//-->

        <!--//Evapotranspirasi Hari Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">ET Bulan Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="et_m1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_et_m1" class="fas fa-water fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Evapotranspirasi Hari Ini//-->        

        <!--//Index Ultraviolet-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Index Ultraviolet</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="uv_1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_uv_1" class="far fa-sun fa-2x "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--//Index Ultraviolet//-->    
        
        <!--//Radiasi-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Radiasi</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="radiasi_1">31.2 ºC</div>
                </div>
                <div class="col-auto">
                  <i id="s_radiasi_1" class="fas fa-sun fa-2x" style="color: rgb(255, 153, 0);"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--//Index Ultraviolet//-->            
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content AWS 1 //-->

  <!--Coba Tambah Koment -->

  <!-- //Content Header AWS 2-->
  <section class="content-header">
    <div class="content-fluid">
      <div class="row mb-2 mt-5">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            Dashboard AWS 2
          </h1>
        </div>
      </div>
    </div>
  </section>
  <!--Content Header AWS 2//-->

  <!-- // Main content AWS 2-->
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        <!--//Suhu Ruangan-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Suhu Ruangan</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="temp_in2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_temp_in2" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Suhu Ruangan//-->

        <!--//Kelembaban Ruangan-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Kelembaban Ruangan</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="hum_in2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_hum_in2" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Kelembaban Ruangan//-->

        <!--//Suhu Udara-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Suhu Udara</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="temp_out2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_temp_out2" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Suhu Udara//-->

        <!--//Kelembaban Udara//-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Kelembaban Udara</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="hum_out2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_hum_out2" class="fas fa-thermometer-three-quarters fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Kelembaban Udara//-->

        <!--//Curah Hujan Sekarang-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Sekarang</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_rn2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_rn2" class="fas fa-cloud-rain fa-2x "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Sekarang//-->

        <!--//Curah Hujan Hari Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Hari Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_d2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_d2" class="fas fa-cloud-rain fa-2x "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Hari Ini//-->

        <!--//Curah Hujan Bulan Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Bulan Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_m2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_m2" class="fas fa-cloud-rain fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Bulan Ini//-->

        <!--//Curah Hujan Tahun Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Curah Hujan Tahun Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="rain_y2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_rain_y2" class="fas fa-cloud-rain fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Curah Hujan Tahun Ini//-->

        <!--//Evapotranspirasi Hari Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">ET Hari Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="et_d2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_et_d2" class="fas fa-water fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Evapotranspirasi Hari Ini//-->

        <!--//Evapotranspirasi Hari Ini-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">ET Bulan Ini</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="et_m2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_et_m2" class="fas fa-water fa-2x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Evapotranspirasi Hari Ini//-->        

        <!--//Index Ultraviolet-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Index Ultraviolet</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="uv_2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_uv_2" class="far fa-sun fa-2x "></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--//Index Ultraviolet//-->    
        
        <!--//Radiasi-->
        <div class="col-md-3">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-title">Radiasi</div>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h5 mb-0 font-weight-bold text-gray-800" id="radiasi_2">Belum Terkoneksi</div>
                </div>
                <div class="col-auto">
                  <i id="s_radiasi_2" class="fas fa-sun fa-2x" style="color: rgb(255, 153, 0);"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--//Index Ultraviolet//-->            
        
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content AWS 2 //-->
</div>



<footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b></b>
        </div>
        <strong><a href="#">AWS</a>.</strong> GG l
    </footer>   
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../layout/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../layout/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../layout/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../layout/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../layout/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../layout/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../layout/dist/js/demo.js"></script>
    <!-- page script -->

    <script>
        $(function() {
        });
    </script>
</body>

</html>