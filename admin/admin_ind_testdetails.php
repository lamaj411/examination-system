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
          
                      <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" >
                                              <h4 style="margin-top: 3pc;"><font color="yellow">Answer key</font></h4>

                        <table class="table" style="color: yellow;">
 <tr>
 <th>QNO</th>
<th>ANS</th>

</tr>
<?php
$resul=mysql_query("select Q_NO,OP from answerkey where QP_ID=$qpid ");
while($dat=mysql_fetch_array($resul))
{
    $qno=$dat["Q_NO"];
    $ans=$dat["OP"];
?>
<tr >
    <td><?php  echo $qno;?></td>
    <td><?php  echo $ans;?></td>
</tr>
<?PHP
}
?>
</table>
<table width="50%" align="center" cellpadding="10px" cellspacing="15px">
      <tr align="center">
      <td>
      </td>
      <td>
      </td>
      </tr>
</table>
    
</div>
    
                <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" >
                      <h4 style="margin-top: 3pc;"><font color="white">your choice</font></h4>

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
<th>INDEX</th>
<th>QNO</th>
<th>CHOICE</th>

</tr> 
<?php
$result=mysql_query("select Q_INDEX,Q_NO,OP from user_choice where RNO=$rollno and QP_ID=$qpid order by(Q_NO)");
while($data=mysql_fetch_array($result))
{   
$qindex=$data["Q_INDEX"];
$qno=$data["Q_NO"];
    $op=$data["OP"];
?>

  <tr>
   <td><?php echo $qindex;?></td>
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

<table  align="center" cellspacing="15px">
      <tr align="center">
      <td>
      </td>
      <td>
      </td>
      </tr>
</table>
<?php
}
}

?>



            </div>
            <div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">
<font color="white">
               <a href="userdetails.php" class="btn btn-success" style="text-decoration:none">BACK</a>

</font>
        </div>
            </div>
            
 </body>
</html>