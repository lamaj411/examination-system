
<?PHP
session_start();
include("connection.php");
include("adminsession.php");
$TESTNAME=$_SESSION["TESTNAME"];
$NOFQ=$_SESSION["NOFQ"];
$PQPID=$_SESSION["PQPID"];
$qno=$_SESSION["QNO"];
if(isset($_POST["btn_update"])!=null)
{
	$QS=$_POST["question"];
	$OP1=$_POST["option1"];
	$OP2=$_POST["option2"];
	$OP3=$_POST["option3"];
	$OP4=$_POST["option4"];
   mysql_query("update question set QP_ID='$PQPID' where QP_ID='$PQPID' and Q_NO='$qno' ")or die(mysql_error());
   mysql_query("update question set Q_NO='$qno' where QP_ID='$PQPID' and Q_NO='$qno' ")or die(mysql_error());
      mysql_query("update question set QS='$QS' where QP_ID='$PQPID' and Q_NO='$qno' ")or die(mysql_error());
	mysql_query("update question set OP1='$OP1' where QP_ID='$PQPID' and Q_NO='$qno' ")or die(mysql_error());
	mysql_query("update question set OP2='$OP2' where QP_ID='$PQPID' and Q_NO='$qno' ")or die(mysql_error());
	mysql_query("update question set OP3='$OP3' where QP_ID='$PQPID' and Q_NO='$qno' ")or die(mysql_error());
	mysql_query("update question set OP4='$OP4' where QP_ID='$PQPID' and Q_NO='$qno' ")or die(mysql_error());
header("location:previewtest.php");

} 
?>