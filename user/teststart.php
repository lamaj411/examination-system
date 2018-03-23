<?php
session_start();
include("connection.php");
include("usersession.php");
//$QPID=$_SESSION["QPID"];
$rolno=$_SESSION["ROLNO"];
$username=$_SESSION["URNAME"];
$sem=$_SESSION["SEM"];

//$NOFQ=$_SESSION["nofq"];
//$duration=$_SESSION["DURATION"];
//$_SESSION['start'] = time(); // Taking now logged in time.
//$_SESSION['expire'] = $_SESSION['start'] + (2 * 60);

$res=mysql_query("select CQPID from current_qpid where SEM='$sem'");
while($dat=mysql_fetch_array($res))
{
  $QPID=$dat["CQPID"];
    //$_SESSION["QPID"]=$QPID;

}
$res=mysql_query("select NOOF_Q,DURATION from test_details where QP_ID='$QPID' and SEM='$sem' ");
while($dat=mysql_fetch_array($res))
{
  $nofq=$dat["NOOF_Q"];
  //$_SESSION["nofq"]=$nofq;
  $duration=$dat["DURATION"];
  //$_SESSION["DURATION"]=$duration;

}

// Ending a session in 30 minutes from the starting time.
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
  <div class=" form-group row col-lg-5 col-md-5 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>




<div class="row col-lg-7 col-md-7 col-sm-10 col-xs-12" style="margin-top: 1pc;" >
      <h2><font color="red">INSTRUCTIONS</font></h2>
    <font color="white" >
    <h3>1) <?php echo"Total number of questions : ";echo $nofq; ?></h3>
    <h3>2) <?php echo"Time alloted :"; echo $duration; echo" minutes.";?></h3>
    <h3>3) <?php echo"Each question carry 4 mark, no negative marks.";?></h3>
    <h3>4) Click SAVE Button to submit your answer.</h3>
    <h3>5) Click BACK Button to go back.</h3>
    <h3>6) Click NEXT Button to go next.</h3>
    <h3>7) Click icons in the status section to go specified question.</h3>
    <h3>8) You can see the selected answer in status section.</h3>



  </font>
       <div class="btn">

    <a href="testdata.php" class="btn btn-primary">START</a>
    </div>           

</div>
         
            
  </div>
</body>
</html>