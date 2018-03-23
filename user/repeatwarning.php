<?php
session_start();
include("connection.php");
include("usersession.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>User | Ritu</title>
<link rel="stylesheet" href="gravity-points/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body style="background-color: black;">
  <canvas id="c"></canvas>
  <script src='gravity-points/js/kzymdn.js'></script>

  

    <script  src="gravity-points/js/index.js"></script>
  <div class="container">
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 14pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
    
                <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-top: 14pc;">
                    <font color="white" size="5px">
            	     <?php
	echo "you already attended ";
	echo "Thank you!!!!!!!!";

?>
</font>
<br>
<br>
    <a href="userhome.php" class="btn btn-info"><font color="white">BACK</font></a>

</div>
            </div>
            
   </body>
</html>