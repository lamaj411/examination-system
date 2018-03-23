<?PHP
include("connection.php");
session_start();
$TESTNAME=$_SESSION["TESTNAME"];
$NOFQ=$_SESSION["NOFQ"];
$n=$_SESSION["N"];
$result=mysql_query("SELECT QID FROM paper_id WHERE NO=0");
while($data=mysql_fetch_array($result))
{
	$QPID=$data["QID"];
}
if($n<=$NOFQ)
{
if(isset($_POST["log_btn"])!=null)
{
	$QNO=$_POST["qno"];
	$QS=$_POST["question"];
	$OP1=$_POST["option1"];
	$OP2=$_POST["option2"];
	$OP3=$_POST["option3"];
	$OP4=$_POST["option4"];
   $ANS=$_POST["ans"];

mysql_query("insert into question(QP_ID,Q_NO,QS,OP1,OP2,OP3,OP4) values('".$QPID."','".$QNO."','".$QS."','".$OP1."','".$OP2."','".$OP3."','".$OP4."')")or die(mysql_error());
mysql_query("insert into answerkey(QP_ID,Q_NO,OP) values('".$QPID."','".$QNO."','".$ANS."')")or die(mysql_error());
}
$n=$n+1;
$_SESSION["N"]=$n;
}
if($n<=$NOFQ)
{
header("location:addquestion.php");
}
else
{
$QPID=$QPID+1;
mysql_query("update paper_id set QID=$QPID where NO=0");
header("location:qsready.php");
}?>

