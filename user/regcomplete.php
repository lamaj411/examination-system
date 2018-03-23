<?php
session_start();
include("connection.php");
$an=$_SESSION["adno"];
$result=mysql_query("select USERNAME,PASSWORD from student_details where RNO='$an'");
while($data=mysql_fetch_array($result))
{   
$USERAME=$data["USERNAME"];
$PASSWORD=$data["PASSWORD"];
}
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Home | Ritu</title>

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
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 100px;">
</div>
        <div class="form-group col-lg-3 col-md-5">
          <font size="5px">
            <table class="table" style="color: white; margin-top: 6pc;">


<tr>
<td align="center">
<?php
echo "Registration completed";
?>
</td>
</tr>

<tr>
<td align="center">USERNAME : 
<?php
echo $USERAME;
?>
</td>
</tr>

<tr>
<td align="center">
  PASSWORD : 
<?php
echo $PASSWORD;
?>
</td>
</tr>


<tr>
<td align="center">
<?php
echo "Thank you!!!";
?>
</td>
</tr>
<tr>
  <td>
        <a href="../index.php" class="btn btn-info"><font color="white">BACK</font></a>
</td>
</tr>
</table>
</font>
            </div>
            
                
        
	</div> </body>
</html>