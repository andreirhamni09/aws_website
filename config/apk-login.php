<?php

    $conn = mysqli_connect("localhost", "srsssmsc_frkh", "wasd@@asdasd" , "srsssmsc_icu") or die (mysqli_error());

	class usr{}
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	if ((empty($email)) || (empty($password))) { 
        $response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
	 	die(json_encode($response));
	}
	
	$query = mysqli_query($conn, "SELECT * FROM pengguna WHERE email='$email' AND password='$password' ");
	
	$row = mysqli_fetch_array($query);
	
	if (!empty($row) AND $row['status_akun'] == '1' ){
        $response = new usr();
	 	$response->success = 1;
	 	$response->message = "Selamat datang ".$row['nama_lengkap'];
	 	$response->user_id = $row['user_id'];
	 	$response->email = $row['email'];
	 	$response->no_hp = $row['no_hp'];
	 	$response->departemen = $row['departemen'];
	 	$response->jabatan = $row['jabatan'];
	 	$response->akses_level = $row['akses_level'];
	    $response->lokasi_kerja = $row['lokasi_kerja'];
	 	$response->password = $row['password'];
	 	$response->nama_lengkap = $row['nama_lengkap'];
	 	die(json_encode($response));
		
	 } else if (!empty($row) AND $row['status_akun'] == '2'){
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Akun belum aktif, mohon tunggu 1x24 jam";
	 	die(json_encode($response));
		
	} else { 
        $response = new usr();
	 	$response->success = 0;
	 	$response->message = "Username atau password salah, silahkan cek kembali";
	 	die(json_encode($response));
	}
	
	mysqli_close($conn);

?>