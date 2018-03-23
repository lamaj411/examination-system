<?php 
session_start();
include("connection.php");
$rollno= $_GET['id'];
$qpid=$_GET['id2'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>User | Ritu</title>

<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body style="background-color: black;">
  
  <div class="container">
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 14pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>

<br>
<br>
<font color="white">
               <a href="userhomeresult.php" class="btn btn-success" style="text-decoration:none">BACK</a>

</font>
          <h3><font color="White"></font></h3>


</div>         
      
    
                <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12"  style="margin-top: 2pc;">
            	 <?php
$z=0;
$result=mysql_query("select QP_ID from result");
while($data=mysql_fetch_array($result))
{
	$qid=$data["QP_ID"];
	if($qid==$qpid)
	{
		$z=1;
	}
}

$result=mysql_query("select RNO from result ");
while($data=mysql_fetch_array($result))
{
	$rno=$data["RNO"];
if($rollno==$rno && $z==1)
{?>

	<table  class="table" style="color: white; margin-top:6px;">
<th>QNO</th>
<th>CHOICE</th>

</tr> 
<?php
$result=mysql_query("select Q_INDEX,OP from user_choice where RNO=$rollno and QP_ID=$qpid");
while($data=mysql_fetch_array($result))
{   
$qno=$data["Q_INDEX"];
    $op=$data["OP"];
?>

  <tr>
    <td><?php echo $qno;?></td>
    <td><?php echo $op;?></td>
    </tr>
      <?php
	  }
?>
</table>
<?php
$result=mysql_query("select RNO,QP_ID,SCORE from result where RNO=$rollno and QP_ID=$qpid");
while($data=mysql_fetch_array($result))
{ 	
$rno=$data["RNO"];
//$name=$data["NAME"];
$qpid=$data["QP_ID"];
$score=$data["SCORE"];
}
?>


<?php
}
}

?>



            </div>
            <div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">

        </div>
            </div>
            
 </body>
</html>