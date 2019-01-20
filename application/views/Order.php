<!DOCTYPE html>
<html>
<head>
<title>Hipotesa Cinema</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png') ?>"  />
<style>
footer {
    padding: 1em;
    color: white;
    background-color: #2b2c30;
    clear: left;
    text-align: center;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #2b2c30;
}

li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.hexagon {
  position: relative;
  width: 180px; 
  height: 103.92px;
  margin: 51.96px 0;
  border-left: solid 5px #ffffff;
  border-right: solid 5px #ffffff;
}

.hexagon:before,
.hexagon:after {
  content: "";
  position: absolute;
  z-index: 1;
  width: 127.28px;
  height: 127.28px;
  -webkit-transform: scaleY(0.5774) rotate(-45deg);
  -ms-transform: scaleY(0.5774) rotate(-45deg);
  transform: scaleY(0.5774) rotate(-45deg);
  background-color: inherit;
  left: 21.3604px;
}

.hexagon:before {
  top: -63.6396px;
  border-top: solid 7.0711px #ffffff;
  border-right: solid 7.0711px #ffffff;
}

.hexagon:after {
  bottom: -63.6396px;
  border-bottom: solid 7.0711px #ffffff;
  border-left: solid 7.0711px #ffffff;
}
</style>
</head>
<body bgcolor="black">
<header>
<ul>
  <img src="<?php echo base_url('f.png') ?>" >
  <li><a href="<?php echo base_url().'index.php/Login/Logout';?>" onclick="alert('You have been logged out. Thank you for visiting us.');" >Logout</a></li>
  <li><a href="#" >Hai,<?php echo $this->session->userdata("nama"); ?></a></li>
</ul>
</header>

 <!--
        Welcome Slider
        ==================================== -->
<div class="container">
  </div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="<?php echo base_url('e.jpg') ?>"  alt="Chania" width="460" height="345">
        <div class="carousel-caption">
        <div>
          <img class="wow fadeInUp" src="<?php echo base_url('ayo1.png') ?>" alt="Meghna">
        </div>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url('h.jpg') ?>"  alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <div>
          <img class="wow fadeInUp" src="<?php echo base_url('coming.png') ?>" alt="Meghna">
          <button type="button" class="btn btn-success btn-lg"> <a href=http://www.imdb.com/title/tt2771200/videoplayer/vi3119363609?ref_=tt_ov_vi>
          <font color="white">View Trailer </a>  </font></button>
        </div>
        </div>
      </div>
    
      <div class="item">
        <img src="<?php echo base_url('g.jpg') ?>"  alt="Flower" width="460" height="345">
        <div class="carousel-caption">
        <div>
          <img class="wow fadeInUp" src="<?php echo base_url('coming.png') ?>" alt="Meghna">
          <button type="button" class="btn btn-success btn-lg"> <a href=http://www.imdb.com/title/tt0974015/videoplayer/vi3894261529?ref_=tt_ov_vi>
          <font color="white">View Trailer </a>  </font></button>
        </div>
        </div>
      </div>
 
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control " href="#myCarousel" role="button" data-slide="prev">
    <br><br><br><br><br><br><br><br><br><br>
      <span class="fa fa-chevron-left fa-4x" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <br><br><br><br><br><br><br><br><br><br>
      <span class="fa fa-chevron-right fa-4x" aria-hidden="true"></span>
    </a>
  </div>
</div>

  <!-- Start About Us
    =========================================== -->
  <section id="about" style="background-color:#333439">
    <div class="container">
      <div class="row">
      <br><br>
        
      <!-- section title -->
      <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
        <h2 style="color:white;font-weight:bold;font-size:35px; font-family:verdana;letter-spacing: -3px">ABOUT <font color="#6cb56e"> US</h2>
        <hr width="35%"></font>
        <br><br><br>
        <div class="border"></div>
      </div>

  

          <!-- About item -->
          <div class="col-md-4 text-center " data-wow-duration="500ms" >
          <center>
          <div class="hexagon">
          <font color="white">  
            <div class="wrap-about"><br>              
              <i class="fa fa-thumbs-o-up fa-4x"></i>
            </div>
          </div> <br>           
            <!-- Express About Yourself -->
            <div class="about-content text-center">
              <h3 class="ddd">Easy</h3>       
                <p>Easy in every transaction</p>
            </div>
          </div>
          </font>
          <!-- End About item -->
          
         <!-- About item -->
          <div class="col-md-4 text-center " data-wow-duration="500ms" >
          <center>
          <div class="hexagon">
          <font color="white">  
            <div class="wrap-about"> <br>            
              <i class="fa fa-send-o fa-4x"></i>
            </div>
          </div><br>            
            <!-- Express About Yourself -->
            <div class="about-content text-center">
              <h3 class="ddd">Fast</h3>     
                <p>Booked quickly with just a touch of a finger</p>
            </div>
          </div>
          </font>
          <!-- End About item -->
          
          <!-- About item -->
          <div class="col-md-4 text-center " data-wow-duration="500ms" >
          <center>
          <div class="hexagon">
          <font color="white">  
            <div class="wrap-about">  <br>             
              <i class="fa fa-gears fa-4x"></i>
            </div>
          </div><br>          
            <!-- Express About Yourself -->
            <div class="about-content text-center">
              <h3 class="ddd">Services</h3>    
                <p>Your comfort is our satisfaction</p>
            </div>
          </div>
          </font>
          <!-- End About item -->
          
        </div>    <!-- End row -->
      </div>    <!-- End container -->
      <br>  <br>  
    </section>   <!-- End section -->



  <!-- Start Our Film
    =========================================== -->
  <section id="showcase" style="background-color:#2b2c30">
    <div class="container">
      <div class="row">
      <br><br>
        
      <!-- section title -->
      <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
        <h2 style="color:white;font-weight:bold;font-size:35px; font-family:verdana;letter-spacing: -3px">OUR <font color="#6cb56e"> FILM</h2>
        <hr width="35%"></font>
        <br><br><br>
        <div class="border"></div>
      </div>

  <div class="row">
    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/ouija.jpg') ?>" alt="Meghna"></div>

    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/mechanic.jpg') ?>" alt="Meghna"></div>

    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/conjuring.jpg') ?>" alt="Meghna"></div>

    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/iceage.jpg') ?>" alt="Meghna"></div>

    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/insidious.jpg') ?>" alt="Meghna"></div>

    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/doctorstrange.jpg') ?>" alt="Meghna"></div>

    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/civilwar.jpg') ?>" alt="Meghna"></div>

    <div class="col-sm-3"> <img class="img-responsive" src="<?php echo base_url('assets/images/film/fsb.jpg') ?>" alt="Meghna"></div>

  </div>
</div>
</div>


<!-- Start Our Team =========================================== -->
 <section id="our-team" style="background-color:#2b2c30">
    <div class="container">
      <div class="row">
      <br><br>
        
      <!-- section title -->
      <div class="title text-center wow fadeInUp" data-wow-duration="500ms">
        <h2 style="color:white;font-weight:bold;font-size:35px; font-family:verdana;letter-spacing: -3px">OUR <font color="#6cb56e"> TEAM</h2>
        <hr width="35%"></font>
        <br><br><br>
        <div class="border"></div>
      </div>

<center>
  <div class="row">
    <div class="col-sm-6 col-md-4"> <img class="img-responsive" src="<?php echo base_url('assets/images/team/windy.jpg') ?>" alt="Meghna"><font color="white"><br><font size="4px">Windy Putri Shabrina</font> <br>140810150020<hr width="77%">BACK-END DEVELOPER <br><br><br></div>
    

    <div class="col-sm-6 col-md-4"> <img class="img-responsive" src="<?php echo base_url('assets/images/team/syafira.jpg') ?>" alt="Meghna"><font color="white"><br><font size="4px">Syafira Predeisyanti</font><br>140810150016<hr width="77%">FRONT-END DEVELOPER <br><br><br></div>


    <div class="col-sm-6 col-md-4"> <img class="img-responsive" src="<?php echo base_url('assets/images/team/yoshe.jpg') ?>" alt="Meghna"><font color="white"><br><font size="4px">Yoshe Zaneta</font><br>140810150060<hr width="77%">BACK-END DEVELOPER<br><br><br></div>


    <div class="col-sm-6 col-md-6"> <img class="img-responsive" src="<?php echo base_url('assets/images/team/daus.jpg') ?>" alt="Meghna"><font color="white"><br><font size="4px">Fikri Firdaus</font><br>140810150008<hr width="50%">PROJECT MANAGER<br></div>
    <br>

    <div class="col-sm-6 col-md-6"> <img class="img-responsive" src="<?php echo base_url('assets/images/team/dicky.jpg') ?>" alt="Meghna"><font color="white"><br><font size="4px">Dicky Abdul Baki</font><br>140810150012<hr width="50%">FRONT-END DEVELOPER<br></div>
  </div>
</center>
















<footer>
<br>
<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
<h2 style="color:white;font-weight:bold;font-size:35px; font-family:verdana;letter-spacing: -3px;  word-spacing: -10px">CON <font color="#6cb56e">TACT</h2></font>
        <hr width="35%">
        <br>
        <h4 style="color:white;font-weight:bold;font-family:verdana;letter-spacing: -3px">CONTACT DETAILS</h3>
        <div class="border"></div>
      </div>
            <p>Hipotesa is based cinema technology to allow its users to book movie tickets and get satisfaction in watching movies.</p>
      <center>
      <div class="contact-details">
      <table>
      <tr>
        <div class="con-info clearfix">
                <td> <i class="fa fa-home fa-xs"></i> </td>
                <td> <span>Jakarta, Indonesia</span> </td>
        </div>
            </tr>
      <tr>
              <div class="con-info clearfix">
                <td> <i class="fa fa-phone fa-xs"></i> </td>
                <td> <span>+62 227-798-983 </span> </td>
              </div>
            </tr>
      <tr>
              <div class="con-info clearfix">
                <td> <i class="fa fa-fax fa-xs"></i> </td>
                <td> <span>+62 227-794-545</span> </td>
              </div>
            </tr>
      <tr>
              <div class="con-info clearfix">
                <td> <i class="fa fa-envelope fa-xs"></i> </td>
                <td> <span>support@hipotesa.com</span><br> </td>
              </div>
      </tr>
    </table>
    </div>
    
    <!-- copyright -->
        <br><br><br><img src="<?php echo base_url('logo-meghna.png') ?>" >
        <br>
      </div>
    </center>

</body>
</html>
