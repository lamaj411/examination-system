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


        <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 14pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>
                                  <a href="#myModal" class="" data-toggle="modal"><font color="white">Devoloped By:jamaludheen.M</font></a>



          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 1000px;">
</div>





  
        <div class=" form-group row col-lg-3 col-md-3 col-sm-10 col-xs-12 " style=" background-color:; margin-top:15pc;" >



          <h4><font color="white"> Login</font></h4>



          <font color="white" size="4px">
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
		header("location:admin/adminhome.php");

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
		header("location:user/userhome.php");

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
              <a href="user/userregistration.php" class=""><font color="white">New user</font></a>





</div>
    </form>
</font>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content col-lg-4">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-weight:700;">Devoloped By</h4>
        </div>
        <div class="modal-body">
              <h4><font color="black">LAMAJ<=</font></h4>
              <h4><font color="black">ph:8113905955</font></h4>
              <h4><font color="black">jamal.mayangod@gmail.com</font></h4>
              <h4><font color="black">2015-2018 Batch</font></h4>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Great</button>
        </div>
      </div>
      </div>
    </div>
  </body>
          
</html>