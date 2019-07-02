<?php 

include_once "koneksi.php";

	 class usr{}
	
	 $nim = $_POST["nim"];
	 $password = $_POST["password"];
	
	 if ((empty($nim))|| (empty($password))) { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom tidak boleh kosong"; 
	 	die(json_encode($response));
	 }
	
	 $query = mysqli_query($con, "SELECT * FROM users WHERE username='$nim AND password='$password'");
	
	 $row = mysqli_fetch_array($query);
	
	 if (!empty($row)){
	 	$response = new usr();
	 	$response->success = 1;
	 	$response->message = "Selamat datang ".$row['nim'];
	 	$response->id = $row['id'];
	 	$response->username = $row['nim'];
	 	die(json_encode($response));
		
	 } else { 
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Username atau password salah";
	 	die(json_encode($response));
	 }
	
     mysqli_close($con);
      ?>