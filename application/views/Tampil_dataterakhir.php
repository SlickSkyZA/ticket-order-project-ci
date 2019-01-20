<!DOCTYPE html>
<html>
<head>
	<title>Order</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--bootstrap-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style> 
	.div1 {
		text-align: center;
		width: 350px;
		height: 105px;
		border: 1px solid green;
	}
	</style>
</head>
<body style="background-color:black;color:white;font-family: verdana">
		<center>
			<h1><font color="#77c879">TICKET</font> CONFIRMATION</h1><hr>
			<h2>Thank You<br></h2>
			<p style="font-family:Adobe Fan Heiti Std B; font-color:white; font-size:20px">Your reservation is now confirmed</p><br>
	<div class="container" style="margin-top: 10px">
	<table>
	<td>
		No. Tiket : <?php echo $tiket->id_tiket ?>
		<br>
		Nama : <?php echo $tiket->nama_pemesan ?>
		<br>
		Tanggal Pemesanan : <?php echo $tiket->tanggal_pesan ?>
		<br>
		Judul Film : <?php echo $tiket->judul_film ?>
		<br>
		Tempat Duduk : <?php echo $tiket->tempat_duduk1 ?>
		<?php echo $tiket->tempat_duduk2 ?>
		<br>
		Hari Tayang : <?php echo $tiket->tanggal_operasi ?>
		<br>
		Jam Tayang : <?php echo $tiket->waktu_operasi ?>
		<br>
		Harga : <?php
		 if($tiket->tanggal_operasi=="Senin"){
			echo 'Rp 25.000';
		}
		
		 elseif($tiket->tanggal_operasi=="Senin"){
			echo 'Rp 25.000';
		}
		elseif($tiket->tanggal_operasi=="Selasa"){
			echo 'Rp 25.000';
		}
		elseif($tiket->tanggal_operasi=="Rabu"){
			echo 'Rp 25.000';
		}
		elseif($tiket->tanggal_operasi=="Kamis"){
			echo 'Rp 25.000';
		}
		elseif($tiket->tanggal_operasi=="Jumat"){
			echo 'Rp 30.000';
		}
		elseif($tiket->tanggal_operasi=="Sabtu"){
			echo 'Rp 35.000';
		}else{
			echo 'Rp 35.000';
		}
		?>
		<br>
	</td>	
	</table><br><br><br><br><br>
	<div class="div1">
		<p style="font-family:Adobe Fan Heiti Std B; font-color:white; font-size:18px">Some important information:<br>
- Screenshoot this page if you want to pay <br>
- We only accept cash<br>
- You should pay the ticket within 3 days<br>
	</div>
</p><br><br><br>
	</div>
</body>
</html>