<?php include_once 'layout/header.php'; ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manajemen  User
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">Home
              </a>
            </li>
            <li class="breadcrumb-item active">User
            </li>
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
              <h5 class="card-title m-0 text-primary">
                <strong>User
                </strong>
              </h5>
            </div>
            <div class="card-body">
              <div class="col-md-12">
                <table id="example1"
                       class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO.
                      </th>
                      <th>USERNAME
                      </th>
                      <th>NAMA LENGKAP
                      </th>
                      <th>JABATAN
                      </th>
                      <th>DEPARTEMEN
                      </th>
                      <th>STATUS
                      </th>
                      <th>SETTING
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$db_host = "localhost";
$db_user = "srsssmsc_frkh";
$db_pass = "wasd@@asdasd";
$db_name = "srsssmsc_icu";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(mysqli_connect_errno()){
echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
if($urut){
$conn_user = mysqli_query($conn, "SELECT * FROM pengguna WHERE status_akun='$urut' ORDER BY user_id ASC");
}else{
$conn_user = mysqli_query($conn, "SELECT * FROM pengguna ORDER BY user_id ASC");
}
if(mysqli_num_rows($conn_user) == 0){
echo '<tr><td colspan="8">Tidak ada data.</td></tr>';
}else{
$no = 1;
while($row = mysqli_fetch_assoc($conn_user)){
echo '
<tr>
<td>'.$no.'</td>
<td>'.$row['email'].'</td>
<td>'.$row['nama_lengkap'].'</td>
<td>'.$row['jabatan'].'</td>
<td>'.$row['departemen'].'</td>
<td>';
if($row['status_akun'] == 1){
echo '<span class="label label-success">Aktif</span>';
}else{
echo '<span class="label label-warning">Tidak Aktif</span>';
}
echo '
</td>
<td>
<a href="profile.php?user_id='.$row['user_id'].'" title="Lihat Detail"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
<a href="edit.php?user_id='.$row['user_id'].'" title="Rubah Data"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
<a href="password.php?user_id='.$row['user_id'].'" title="Ganti Password"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></a>
<a href="avatar.php?user_id='.$row['user_id'].'" title="Ganti Foto"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></a>
<a href="index.php?aksi=delete&user_id='.$row['user_id'].'" title="Hapus Data" onclick="return confirm(\'Yakin?\')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
</td>
</tr>
';
$no++;
}
}
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once 'layout/footer.php' ?>
