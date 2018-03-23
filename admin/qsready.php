
<?php
session_start();
include("connection.php");
include("adminsession.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin | Ritu</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body style="background-color: black;">
  <div class="container">
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 100px;">
</div>        
      <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-top: 10pc;">
    <table  class="table" style="color: white; margin-top: 5pc;">
<tr>
<td><?php
echo " QUESTION PAPER IS READY";
?>
</td>
</tr>
<tr>
<td><?php
echo " THANK YOU";
?>
</td>
</tr>
</table>

      
            
		</div>
    <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-left:8pc;"> 
<div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">
<font color="white">
               <a href="adminhome.php" class="btn btn-success" style="text-decoration:none">BACK</a>

</font>
        </div>
      </div>
        
	</div> </body>
</html>