<!DOCTYPE html>
<html class="no-js">
<head>

  <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">

  <meta name="author" content="Kelompok 5">

    <title>Sign Up</title>

   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body style="background-color:black;color:white;font-family: verdana">
    <center>
      <h1><font color="#77c879">SIGN</font> UP</h1><hr><br>
    </center>

    <form action="<?php echo base_url().'index.php/Login/aksi_signup'; ?>" method="post">

      <div class="form-group col-md-6 col-md-offset-3 box">
        <label>Full Name :</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Panjang Anda">
        </div>

        <div class="form-group col-md-6 col-md-offset-3 box">
        <label>Username :</label>
        <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda (Minimal 5 karakter dan maksimal 10 karakter)">
        </div>

        <div class="form-group col-md-6 col-md-offset-3 box">
        <label>Email:</label>
        <input type="text" class="form-control" name="email" placeholder="xxx@email.com">
          </select>
        </div>

        <div class="form-group col-md-6 col-md-offset-3 box">
        <label>Password :</label>
        <input type="password" class="form-control" name="password" placeholder="Masukkan password anda (Minimal 5 karakter)">
        </div>

      <div class="form-group col-md-6 col-md-offset-3 box">
        <button type="submit" class="btn btn-default" name="Tambah" >Register Now</button>
      </div>
    </form>
  </div>
</body>
</html>