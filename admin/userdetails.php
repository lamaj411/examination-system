<?php
session_start();
include("connection.php");
include("adminsession.php");
$CURRENT_SEM=$_SESSION["CURRENT_SEM"];
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
    <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12"> 

    <h4 align="center" style="margin-top: 2pc;"><font color="white">ALL DETAILS</font></h4>
    </div>  
    
         

                   <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12">

      <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <
          <table class="table"  style="color: white; margin-top:1pc;">
 <tr>
  <th>SL.NO</th>
 <th>ADMISSION NO</th>
<th>NAME</th>
<th>SEMESTER</th>
<th>ROLL NUMBER</th>
<th> USERNAME</th>
<th>PASSWORD</th>
<th>QPID</th>
<th>SCORE</th>
<th>DETAILS</th>


</tr>
    <?php
    $resul=mysql_query("select CQPID from current_qpid where SEM='$CURRENT_SEM'");
while($data=mysql_fetch_array($resul))
{
    $CQPID=$data["CQPID"];
  }




$SLNO=1;
$SCORE=0;




$result1=mysql_query("select distinct(RNO) from result where QP_ID=$CQPID order by ROLNO desc");
while($data1=mysql_fetch_array($result1))
{
    $RNO=$data1["RNO"];


    
$resul=mysql_query("select * from student_details where RNO=$RNO");
while($data=mysql_fetch_array($resul))
{
   $ADNO=$data["RNO"];
    $NAME=$data["NAME"];
    $SEM=$data["SEM"];
    $ROLNO=$data["ROLNO"];
    $USERNAME=$data["USERNAME"];
    $PASS=$data["PASSWORD"];
    $re=mysql_query("select SCORE from result where RNO=$ADNO and QP_ID=$CQPID");
while($da=mysql_fetch_array($re))
{
    $SCORE=$da["SCORE"];
  }


?>
<tr align="center">
    <td><?php  echo $SLNO; $SLNO=$SLNO+1;?></td>
    <td><?php  echo $ADNO;?></td>
    <td><?php  echo $NAME;?></td>
    <td><?php  echo $SEM;?></td>
    <td><?php  echo $ROLNO;?></td>
    <td><?php echo $USERNAME; ?></td>
    <td><?php echo $PASS; ?></td>
    <td><?php echo $CQPID; ?></td>
    <td><?php echo $SCORE; ?></td>

    <td> <a href="admin_ind_testdetails.php?id=<?php echo $ADNO;?>&id2=<?php echo $CQPID;?>">Details</a></td>


</tr>
<?PHP
}
}
?>
</table>
        </div>
      </div>
      <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12"> 
<div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">
<font color="white">
               <a href="adminhome.php" class="btn btn-success" style="text-decoration:none">BACK</a>

</font>
        </div>
      </div>
    </div></body></html>