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
		height: 45px;
		border: 4px solid green;
	}
	</style>
</head>
<body style="background-color:black;color:white;font-family: verdana">
	<div class="container" style="margin-top: 10px">
		<center> <h1 style="font-family:verdana">Daftar ticket yang dibooking</h1> </center> <hr> <br> <br>
		
		<table style="margin:20px auto;" border="1">
			<tr> 
				<th> <center> No. </center> </th>
				<th> <center> No. Tiket </center> </th>
				<th> <center> Nama Pemesan </center> </th>
				<th> <center> Tanggal Pesan </center> </th>
				<th> <center> Judul Film </center> </th>
				<th> <center> Tempat Duduk </center> </th>
				<th> <center> Hari Tayang </center> </th>
				<th> <center> Jam Tayang </center> </th>
				<th> <center> Action </center> </th>
			</tr>
			<?php
			$no = 1;
			foreach($tiket as $u){
			?>
			<tr >
				<td> <center> <?php echo $no++ ?> </center> </td>
				<td width="150px"> <center> <?php echo $u->id_tiket ?> </center> </td>
				<td width="200px"> <center> <?php echo $u->nama_pemesan ?> </center> </td>
				<td width="200px"> <center> <?php echo $u->tanggal_pesan ?> </center> </td>
				<td width="200px"> <center> <?php echo $u->judul_film ?> </center> </td>
				<td width="150px"> <center> <?php echo $u->tempat_duduk1 ?>
				<?php echo $u->tempat_duduk2;?> </center> </td>
				<td width="200px"> <center> <?php echo $u->tanggal_operasi ?> </center> </td>
				<td width="200px"> <center> <?php echo $u->waktu_operasi ?> </center> </td>
				<td width="200px"> <center> 
					<div role="button" class="btn btn-warning"> <?php echo anchor('Admin/edit/'.$u->id_tiket,'Edit'); ?> </div>
					<div role="button" class="btn btn-danger"> <?php echo anchor('Admin/hapus/'.$u->id_tiket,'Hapus'); ?> </div> </center> 
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>