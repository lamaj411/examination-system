<?php
session_start();
include("connection.php");
include("adminsession.php");
$PQPID=$_SESSION["PQPID"];
$NOFQ=$_SESSION["nofq"];
$qno=$_SESSION["QNO"];
if(isset($_POST["bt_next"])!=null)
{
$qno=$qno+1;
$_SESSION["QNO"]=$qno;
	header("location:previewtest.php");
}
else if(isset($_POST["bt_edit"])!=null)
{
		header("location:editquestion.php");

}
else
{
		header("location:qsready.php");
}
?>