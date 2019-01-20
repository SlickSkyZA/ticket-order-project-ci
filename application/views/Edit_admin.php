<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">

  <meta name="author" content="Kelompok 5">

    <title>Update Ticket Data</title>

   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body style="background-color:black;color:white;font-family: verdana">
  <div class="container" style="margin-top: 10px">
    <center>
      <h1><font color="#77c879">UPDATE</font>DATA</h1><hr>
      <div>
        <img src="<?php echo base_url('a.png') ?>" >
      </div>
    </center>
    <?php foreach($tiket as $u){ ?>

    <form action="<?php echo base_url().'Admin/edit_tiket/'; ?>" method="post">

      <div class="form-group col-md-6 col-md-offset-3 box">
          <label for="id_tiket">Nama Pemesan</label>
          <input class="form-control" type="hidden" name="id_tiket" value="<?php echo $u->id_tiket ?>">
          <input class="form-control" type="text" name="nama_pemesan" value="<?php echo $u->nama_pemesan ?>">
      </div>

      <div class="form-group col-md-6 col-md-offset-3 box">
          <label for="id_tiket">Tanggal Pemesan</label>
          <input class="form-control" type="text" name="tanggal_pesan" value="<?php echo $u->tanggal_pesan ?>">
      </div>

      <div class="form-group col-md-6 col-md-offset-3 box">
        <label for="id_tiket">Judul Film :</label>
        <select class="form-control" name="judul_film">
          <option value="Ouija: The Origin of Evil">Ouija: The Origin of Evil</option>
          <option value="The Mechanic: Resurrection">The Mechanic: Resurrection</option>
          <option value="The Conjuring 2">The Conjuring 2</option>
          <option value="Dr. Strange">Dr. Strange</option>
          <option value="Ice Age: Collision Course">Ice Age: Collision Course</option>
          <option value="Insidious">Insidious</option>
          <option value="The Secret Life of Pets">The Secret Life of Pets</option>
          <option value="Taken 3">Taken 3</option>
          <option value="Trolls">Trolls</option>
          <option value="Star Wars: Rogue One">Star Wars: Rogue One</option>
          <option value="Captain America: Civil War">Captain America: Civil War</option>
          <option value="Fifty Shades of Black">Fifty Shades of Black</option>
          </select>
        </div>

        <div class="form-group col-md-6 col-md-offset-3 box">
          <label for="id_tiket">Tempat Duduk</label>
        </div>

        <div class="form-group col-md-1 col-md-offset-3 box form-inline">
        
        <select class="form-control" name="tempat_duduk1">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>
              <option value="F">F</option>
          </select>
          <select class="form-control" name="tempat_duduk2">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
          </select>
      </div>

      <div class="form-group col-md-6 col-md-offset-3 box">
        <label for="id_tiket">Hari Tayang :</label>
        <select class="form-control" name="tanggal_operasi">
          <option value="Senin">Senin</option>
          <option value="Selasa">Selasa</option>
          <option value="Rabu">Rabu</option>
          <option value="Kamis">Kamis</option>
          <option value="Jumat">Jumat</option>
          <option value="Sabtu">Sabtu</option>
          <option value="Minggu">Minggu</option>
        </select>
        </div>

        <div class="form-group col-md-6 col-md-offset-3 box">
          <label for="id_tiket">Jam Tayang :</label>
          <select class="form-control" name="waktu_operasi">
            <option value="13.00">13.00</option>
            <option value="15.00">15.00</option>
            <option value="17.00">17.00</option>
            <option value="19.00">19.00</option>
            <option value="21.00">21.00</option>
            <option value="23.00">23.00</option>
          </select>
        </div>

      <div class="form-group col-md-6 col-md-offset-3 box">
          <label for="nama_pemesan"></label>
            <input  class="btn btn-success" type="submit" value="Simpan">
      </div>
    </form>
  </div>
  <?php } ?>
</body>
</html>