                 <!-- 
        Fixed Navigation
        ==================================== -->
         <header id="navigation" class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <!-- /responsive nav button -->
          
          <!-- logo -->
                    <a class="navbar-brand" href="#body">
            <h1 id="logo">
              <img src="assets/images/logo-meghna.png" alt="Meghna" />
            </h1>
          </a>
          <!-- /logo -->
                </div>



        <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#showcase">Film</a></li>
                        <li><a href="#our-team">Team</a></li>
                        <li><a href="#contact-us">Contact</a></li>
                    </ul>
                    <a href="#" class="btn btn-transparent btn-xs" role="button" onclick="alert('Silahkan Login terlebih dahuhlu untuk Order!');" >Booking</a>
                    <a type="button" class="btn btn-transparent btn-xs" role="button" data-toggle="modal" data-target="#myModal">Log In</a>
                   <a type="button" class="btn btn-transparent btn-xs" role="button" data-toggle="modal" href="<?php echo base_url().'Login/signup'; ?>"#myModal">Sign Up</a>
                </nav>
               
        <!-- /main nav -->
        
        </header>
        </div>

             <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                      <!-- Modal content-->
                      <font color="black">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 align="center" class="modal-title">Login</h4>
                        </div>
                        <div class="modal-body">
                            <?php form_open('Login/aksi_login'); ?>
                            <form class="form-horizontal" action="<?php echo base_url().'index.php/Login/aksi_login'; ?>" method="post">
                                  <div class="form-group">
                                      <label class="control-label col-sm-4" for="username">Username</label>
                                      <div class="col-sm-5">
                                        <input type="text" name="username"placeholder="isi Username anda"><br>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label col-sm-4" for="password">Password</label>
                                      <div class="col-sm-5">
                                        <input type="password" name="password" placeholder="*********">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-sm-15">
                                      <center>
                                      <input type="submit" class="btn-success btn-lg" type="submit" value="Login">
                                      </div>
                                  </div>
                                </form>
                                <?php form_close(); ?>

                        </div>

                        
                        <div class="modal-footer">
                          
                        </div>
                        </font>
                      </div>
                      
                    </div>
                  </div>

                <!--
        End Fixed Navigation
        ==================================== -->