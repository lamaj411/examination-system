<?php
session_start();
include("connection.php");
include("usersession.php");
$QPID=$_SESSION["QPID"];
$rolno=$_SESSION["ROLNO"];
$username=$_SESSION["URNAME"];
$sem=$_SESSION["SEM"];

//if($x==0)

$res=mysql_query("select CQPID from current_qpid where SEM='$sem' ");
while($dat=mysql_fetch_array($res))
{
	$QPID=$dat["CQPID"];
	}
//{
			$a=STOP;
			$result=mysql_query("select START from start where NO=1");
			while($data=mysql_fetch_array($result))
			{   
			$a=$data["START"];
			}
			if($a==START)
				{
					$x=0;
	  				$rst=mysql_query("select DISTINCT RNO from result where QP_ID='$QPID'");
					while($dat=mysql_fetch_array($rst))
					{   
						$RNO=$dat["RNO"];
						if($rolno==$RNO) 
						{
							$x=1;

						}
					}
					if($x==0)
					{
						header("location:teststart.php");
					}
					else
					{
						header("location:repeatwarning.php");

					}
				}
			else
			{
				header("location:userhome.php");
			}
//}//
//else
//{ 
 //	header("location:repeatwarning.php");

//}
?>