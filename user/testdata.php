<?php
session_start();
include("connection.php");
include("usersession.php");
$rolno=$_SESSION["ROLNO"]; 
$name=$_SESSION["URNAME"];
$sem=$_SESSION["SEM"];
$start_time=time();
$_SESSION["start_time"]=$start_time;
$res=mysql_query("select CQPID from current_qpid where SEM='$sem' ");
while($dat=mysql_fetch_array($res))
{
	$QPID=$dat["CQPID"];
    $_SESSION["QPID"]=$QPID;

}
$res=mysql_query("select NOOF_Q,DURATION from test_details where QP_ID='$QPID' ");
while($dat=mysql_fetch_array($res))
{
	$nofq=$dat["NOOF_Q"];
	$_SESSION["nofq"]=$nofq;
	$duration=$dat["DURATION"];
	$_SESSION["DURATION"]=$duration;

}
$n=0;
$_SESSION["QNO"]=$n;	
$abc=0;
$_SESSION["abc"]=$abc;	






$start_time=date("Y-m-d H:i:s");
//$start_time=date("i:sa");
//$_SESSION["start_time"]=$start_time;
$result =mysql_query("SELECT RNO FROM time WHERE RNO= '$rolno' AND QP_ID= '$QPID'");
if ($result && mysql_num_rows($result) <= 0)
	{
mysql_query("insert into time(RNO,QP_ID,START_TIME) values('".$rolno."','".$QPID."','".$start_time."')")or die(mysql_error());
}




/*$normalorder = array();
$shuffled = array();
for($i=1;$i<=$nofq;$i++){
 $normalorder[] = array($i);
}
$shuffled = $normalorder;
shuffle($shuffled);
$_SESSION['shuffled'] =$shuffled;

*/



$op="x";
$result =mysql_query("SELECT RNO FROM user_choice WHERE RNO= '$rolno' AND QP_ID= '$QPID'");
if ($result && mysql_num_rows($result) <= 0)
	{

$normalorder = array();
$shuffled = array();
for($i=1;$i<=$nofq;$i++){
 $normalorder[] = array($i);
}
$shuffled = $normalorder;
shuffle($shuffled);
$_SESSION['shuffled'] =$shuffled;



		for($i=0;$i<$nofq;$i++)
		{
		mysql_query("insert into user_choice(RNO,QP_ID,Q_INDEX,Q_NO,OP) values('".$rolno."','".$QPID."','".($i+1)."','".$shuffled[$i][0]."','".$op."')")or die(mysql_error());
		}
		header("location:testtemp.php");
	}
	else
	{
		
		header("location:secondlogin.php");
	}
/*else
{
	for($i=0;$i<$nofq;$i++)
		{
		mysql_query("update user_choice set Q_NO='$shuffled[$i][0]',OP='$op' where  RNO= '$rolno' -AND QP_ID= '$QPID' AND Q_INDEX=($i+1) ")or die(mysql_error());
		}
}
*/



?>