<?php
session_start();
include("connection.php");
include("usersession.php");
$rolno=$_SESSION["ROLNO"];
$QPID=$_SESSION["QPID"];
$username=$_SESSION["URNAME"];
$NOFQ=$_SESSION["nofq"];
$qno=$_SESSION["QNO"];
$abc=$_SESSION["abc"];




if(isset($_POST["bt_submit"])!=null )
{
	$op=$_POST["Q"];
	
		//mysql_query("insert into user_choice(RNO,QP_ID,Q_NO,OP) values('".$rolno."','".$QPID."','".$abc."','".$op.	"')")or die(mysql_error());
	if($op=='A' || $op=='B'|| $op=='C'||$op=='D')
	{
	mysql_query("UPDATE user_choice SET OP = '$op' WHERE RNO = '$rolno' AND QP_ID='$QPID' AND Q_NO=$abc;");
		$qno=$qno+1;
		$_SESSION["QNO"]=$qno;
	}
		//$index=$index+1;
		//$_SESSION["index"]=$index;
		if($qno==$NOFQ)
		{
			$qno=$qno-1;
			$_SESSION["QNO"]=$qno;
		}
		header("location:testtemp.php");					
	}
	//if(isset($_POST["bt_finish"])!=null)
	//{
		//header("location:tempresult1.php");
    //}
	







/*if(isset($_POST["bt_skip"])!=null)
{
	$skip=x;
	$x=0;
	$rst=mysql_query("select DISTINCT Q_NO from user_choice where RNO='$rolno'and QP_ID='$QPID'");
	while($dat=mysql_fetch_array($rst))
	{   
		$QNUMBER=$dat["Q_NO"];
		if($abc==$QNUMBER)
		{
			$x=1;
		}
	}
	if($x==0)
	{
	mysql_query("insert into user_choice(RNO,QP_ID,Q_NO,OP) values('".$rolno."','".$QPID."','".$abc."','".$skip."')")or die(				mysql_error());
	}
	$qno=$qno+1;
	$_SESSION["QNO"]=$qno;
	header("location:testtemp.php");
}
	

//else
 if(isset($_POST["bt_submit"])!=null)
{
	$op=$_POST["Q"];
	$x=0;
	$rst=mysql_query("select DISTINCT Q_NO from user_choice where RNO='$rolno' and QP_ID='$QPID'");
	while($dat=mysql_fetch_array($rst))
	{   
		$QNUMBER=$dat["Q_NO"];
		if($abc==$QNUMBER)
		{
			$x=1;
		}
	}
	if($x==0)
	{
		mysql_query("insert into user_choice(RNO,QP_ID,Q_NO,OP) values('".$rolno."','".$QPID."','".$abc."','".$op.	"')")or die(mysql_error());
	}
		$qno=$qno+1;
		$_SESSION["QNO"]=$qno;
		//$index=$index+1;
		//$_SESSION["index"]=$index;
		header("location:testtemp.php");					
	
	
}
else if(isset($_POST["bt_finish"])!=null)

{
	$op=$_POST["Q"];
	$x=0;
	$rst=mysql_query("select DISTINCT Q_NO from user_choice where RNO='$rolno' and QP_ID='$QPID'");
	while($dat=mysql_fetch_array($rst))
	{   
		$QNUMBER=$dat["Q_NO"];
		if($abc==$QNUMBER)
		{
			$x=1;
		}
	}
	if($x==0)
	{
		mysql_query("insert into user_choice(RNO,QP_ID,Q_NO,OP) values('".$rolno."','".$QPID."','".$abc."','".$op.	"')")or die(mysql_error());
	}
		$qno=$qno+1;
		$_SESSION["QNO"]=$qno;
		//$index=$index+1;
		//$_SESSION["index"]=$index;
	header("location:tempresult1.php");
}
else
{
	$op=$_POST["Q"];
	$x=0;
	$rst=mysql_query("select DISTINCT Q_NO from user_choice where RNO='$rolno' and QP_ID='$QPID'");
	while($dat=mysql_fetch_array($rst))
	{   
		$QNUMBER=$dat["Q_NO"];
		if($abc==$QNUMBER)
		{
			$x=1;
		}
	}
	if($x==0)
	{
		mysql_query("insert into user_choice(RNO,QP_ID,Q_NO,OP) values('".$rolno."','".$QPID."','".$abc."','".$op.	"')")or die(mysql_error());
	}
		$qno=$qno+1;
		$_SESSION["QNO"]=$qno;
		header("location:testtemp.php");					
	
}
?>