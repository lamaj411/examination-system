<?php
session_start();
include("connection.php");
include("usersession.php");
$QPID=$_SESSION["QPID"];
$rno=$_SESSION["ROLNO"];
$username=$_SESSION["URNAME"];
$NOFQ=$_SESSION["nofq"];
$qno=$_SESSION["QNO"];
$score=$_SESSION["SCORE"];




$resul=mysql_query("select NAME,ROLNO from student_details where RNO='$rno'");
while($data=mysql_fetch_array($resul))
{
    $rolno=$data["ROLNO"];
    $name=$data["NAME"];


  }


  $date=date("Y-m-d H:i:s");




mysql_query("insert into result(RNO,NAME,ROLNO,QP_ID,SCORE,DATE) values('".$rno."','".$name."','".$rolno."','".$QPID."','".$score."','".$date."')")or die(mysql_error());




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
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 100px;">
</div>          
      
    
                <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-top:8PC;" >
                  
<table class="table" style="color: white; margin-top: 5pc;">
<tr>
<td align="center">
<?PHP
$resul=mysql_query("select SCORE from result where RNO='$rno' and QP_ID='$QPID'");
while($dat=mysql_fetch_array($resul))
{
	$SCORE=$dat["SCORE"];
}
?>

<?php
echo "your score";
?>
</td>
</tr>
<tr>
<td align="center">
<?php
echo $SCORE;
?>
</td>
</tr>
</table>
            	
            </div>
            <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-left:8pc;">
        <div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">
<font color="white">
      <?PHP //<a href="utresult.php" style="text-decoration:none" class="btn btn-success" >RANKLIST</a>?>
               <a href="logout.php" class="btn btn-primary" style="text-decoration:none">LOGOUT</a>


</font>
        </div>
    </div>
            </div>
  </body>
</html>