<?php
session_start();
include("connection.php");
include("adminsession.php");
 $PQPID=$_SESSION["PQPID"];
$res=mysql_query("select NOOF_Q,DURATION from test_details where QP_ID='$PQPID' ");
while($dat=mysql_fetch_array($res))
{
	$nofq=$dat["NOOF_Q"];
	$_SESSION["nofq"]=$nofq;
}
$n=1;
$_SESSION["QNO"]=$n;

		header("location:previewtest.php");


?>

