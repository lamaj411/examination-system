<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="gravity-points/css/style.css">

<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<title>Ritu | RIT</title>
</head>

<body style="background-color: black;">
  <canvas id="c"></canvas>
  <script src='gravity-points/js/kzymdn.js'></script>

  

    <script  src="gravity-points/js/index.js"></script>

  <div class="container" ">


        <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 1000px;">
</div>





  
        <div class=" form-group row col-lg-5 col-md-5 col-sm-10 col-xs-12 " style=" background-color:; margin-top:15pc;" >


<div class="panel panel-primary" style="margin-top: 2pc;">
  <div class="panel-heading">
          <h4><font color="white"> Login</font></h4>
  </div>
  <div class="panel-body">



          <font color="black" size="4px">
            	<?php
$s=0;
include("connection.php");
session_start();
if(isset($_POST["log_btn"])!=null)
{
	$username=$_POST["username"];
	$pasword=$_POST["pasword"];
$result=mysql_query("select USERNAME,PASWORD from admin");
while($data=mysql_fetch_array($result))
{   
$ANAME=$data["USERNAME"];
$APAS=$data["PASWORD"];
if($ANAME==$username && $APAS==$pasword)
{
		$_SESSION["ARNAME"]=$username;
		$_SESSION["a"]=$username;
		header("location:adminhome.php");

}
else
{
	$s=1;
}

}
$rst=mysql_query("select USERNAME,PASSWORD from student_details");
while($dat=mysql_fetch_array($rst))
{   
$UNAME=$dat["USERNAME"];
$UPAS=$dat["PASSWORD"];
if($UNAME==$username && $UPAS==$pasword)
{
		$_SESSION["URNAME"]=$username;
		$_SESSION["u"]=$username;
		header("location:userhome.php");

}
else
{
	$s=1;
}
}
}
if($s==1)
{
	?>

<?php
echo"Enter a valid data";
?>

<?php
}
?>
      <form id="form1" name="form1" class="form-horizontal" method="post" action="">
      Username:
      <label for="username"></label>
      <input type="text" class="form-control" name="username" id="username" required value=""/>
      Password:
      <label for="pasword"></label>
      <input class="form-control" type="password" name="pasword" id="pasword" required value=""/>
  <div class="btn">
    <input type="submit" name="log_btn" id="log_btn" class="btn btn-info" align="middle" value="LOGIN"/>
              <a href="userregistration.php" class="">New user</a>

</div>
    </form>
</font>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
          
</html>