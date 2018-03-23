<?php
session_start();
include("connection.php");
include("adminsession.php");
if(isset($_POST["start"])!=null)
{
	$start=$_POST["start"];
mysql_query("update start set START='$start' where NO=1");
}
$resul=mysql_query("select START from  start where NO=1");
while($data=mysql_fetch_array($resul))
{
    $START=$data["START"];
  }
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
        <div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">
<h4><font color="white">EXAM CONTROL</font></h4>
 <h4><font color="red"><?PHP echo $START;echo "ED";?></font></h4>

   
  <div class="btn" style="margin-top: 2pc;">
                <form id="form1" name="form1" method="post" action="#" >
       <input type="submit" name="start" id="start" class="btn btn-info" value="START"  />
   <input type="submit" name="start" id="stop" class="btn btn-info" value="STOP"/>
  <a href="adminhome.php" style="text-decoration:none" class="btn btn-danger" >BACK</a>
  </div>
  </form>
		</div>
        
	</div> </body>
</html>