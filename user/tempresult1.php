<?php
session_start();
include("connection.php");
include("usersession.php");
$rolno=$_SESSION["ROLNO"];
$name=$_SESSION["URNAME"];
$res=mysql_query("select CQPID from current_qpid where NO=0");
while($dat=mysql_fetch_array($res))
{
	$QPID=$dat["CQPID"];
    $_SESSION["QPID"]=$QPID;

}
$res=mysql_query("select NOOF_Q from test_details where QP_ID='$QPID' ");
while($dat=mysql_fetch_array($res))
{
	$nofq=$dat["NOOF_Q"];
	$_SESSION["nofq"]=$nofq;

}
$n=1;
$_SESSION["QNO"]=$n;
$x=0;
$_SESSION["SCORE"]=$x;

		header("location:tempresult2.php");


?>

