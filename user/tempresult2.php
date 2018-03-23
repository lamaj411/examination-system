<?php
session_start();
include("connection.php");
include("usersession.php");
$QPID=$_SESSION["QPID"];
$rolno=$_SESSION["ROLNO"];
$username=$_SESSION["URNAME"];
$NOFQ=$_SESSION["nofq"];
$qno=$_SESSION["QNO"];
$score=$_SESSION["SCORE"];
if($qno <= $NOFQ)
{
	$resul=mysql_query("select OP from answerkey where QP_ID='$QPID' and  Q_NO='$qno' ");
	while($dat=mysql_fetch_array($resul))
	{
		$aop=$dat["OP"];
	}
	$result=mysql_query("select OP from user_choice where RNO='$rolno' and QP_ID='$QPID' and Q_NO='$qno' ");
	while($data=mysql_fetch_array($result))
	{
		$uop=$data["OP"];
	}
	if($aop==$uop)
	{
			$score=$score+1;
			$_SESSION["SCORE"]=$score;
			$qno=$qno+1;
			$_SESSION["QNO"]=$qno;
			header("location:tempresult2.php");
	}
	else
	{
			$qno=$qno+1;
			$_SESSION["QNO"]=$qno;
			header("location:tempresult2.php");
	}
}
else
{
	header("location:tempresult.php");
}
	
?>