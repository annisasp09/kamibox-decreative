<?php

session_start();

	include 'connect_db.php';

	//variabel inputan form
		$otp1 = $_POST['otp1'];
		$otp2 = $_POST['otp2'];
		$otp3 = $_POST['otp3'];
		$otp4 = $_POST['otp4'];


		


		if($otp1=== ""){
			$validasi['otp1'] = 'kolom ke-1 harus diisi.';
		}else{
			if(!is_numeric($otp1)){
				$validasi['otp1'] = 'isi kolom ke-1 harus berupa angka.';	
			}
		}

		if($otp2=== ""){
			$validasi['otp2'] = 'kolom ke-2 harus diisi.';
		}else{
			if(!is_numeric($otp2)){
				$validasi['otp2'] = 'isi kolom ke-2 harus berupa angka.';	
			}
		}

		if($otp3=== ""){
			$validasi['otp3'] = 'kolom ke-3 harus diisi.';
		}else{
			if(!is_numeric($otp3)){
				$validasi['otp3'] = 'isi kolom ke-3 harus berupa angka.';	
			}
		}

		if($otp4=== ""){
			$validasi['otp4'] = 'kolom ke-4 harus diisi.';
		}else{
			if(!is_numeric($otp4)){
				$validasi['otp4'] = 'isi kolom ke-4 harus berupa angka.';	
			}
		}


		if(empty($validasi)){
			//jika validasi form valid maka cek inputan otp
			
			$data_implode_otp = array($otp1,$otp2,$otp3,$otp4);
            $dataotp = implode('', $data_implode_otp); //*

			//$kodeotp = $_SESSION['kode_otp'];
			$id_otp = $_SESSION['idotp'];

			$cek_otp = mysqli_query($conn,"select * from kode_otp where id_kodeotp='$id_otp' and active='Y'");
			$data = mysqli_fetch_assoc($cek_otp);
            $kodeotp = $data['kodeotp'];

			if($dataotp==$kodeotp){
				//jika kode otp sudah sukses untuk pendaftaran maka 
				//update idotp itu tidak aktif
				$update_status_otp = mysqli_query($conn,"update kode_otp set active ='N' where id_kodeotp='$id_otp'");

				$id_user = $_SESSION['iduser'];
				//update iduser status aktif
				$update_status_user = mysqli_query($conn,"update users set active ='1' where id_user='$id_user'");

				echo "OTP Valid. Silahkan Masuk Login!";
				//header('location:login.php');
				//die("<script>alert('Kode OTP Valid. Silahkan Masuk ke Sistem.')</script>");
			}else{
				//jika otp tidak valid
				//die("<script>alert('Maaf Kode OTP tidak Valid.')</script>");
				echo "OTP Tidak Valid. Silahkan Masukkan Kembali!";
				//kirim ulang otp update kodeotp dari idotp itu
			}


		}else{
			//jiika validasi form otp tidak valid
			$_SESSION['validasi'] = $validasi;
			header('location:otp.php?pesan=validasi');
		}



?>