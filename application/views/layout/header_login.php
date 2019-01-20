<!DOCTYPE html>
<html>
<head>
<style>
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
</style>
</head>
<body>

<ul>
  <img src="<?php echo base_url('f.png') ?>" >
  <li><a href="<?php echo base_url().'index.php/Login/Logout';?>" onclick="alert('You have been logged out. Thank you for visiting us.');" >Logout</a></li>
  <li><a href="#" >Hai,<?php echo $this->session->userdata("nama"); ?></a></li>
</ul>


</body>
</html>
