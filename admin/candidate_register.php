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

    <h4 align="center" style="margin-top: 2pc;"><font color="white">STUDENT DETAILS SEM : <?PHP echo $CURRENT_SEM;?></font></h4>

    </div>  
    
         

                   <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12">

      <div class="row col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <
          <table class="table"  style="color: white; margin-top:1pc;">
 <tr>
  <th>SL.NO</th>
 <th>ADMISSION NO</th>
 <th>ROLL NUMBER</th>
<th>NAME</th>
<th>SEMESTER</th>
<th> USERNAME</th>
<th>PASSWORD</th>



</tr>
    <?php
    

$SLNO=1;
   

    
$resul=mysql_query("select * from student_details where SEM='$CURRENT_SEM' order by(ROLNO)");
while($data=mysql_fetch_array($resul))
{
    $ADNO=$data["RNO"];
    $NAME=$data["NAME"];
    $SEM=$data["SEM"];
    $ROLNO=$data["ROLNO"];
    $USERNAME=$data["USERNAME"];
    $PASS=$data["PASSWORD"];
?>
<tr align="center">
    <td><?php  echo $SLNO; $SLNO=$SLNO+1;?></td>
    <td><?php  echo $ADNO;?></td>
        <td><?php  echo $ROLNO;?></td>

    <td><?php  echo $NAME;?></td>
    <td><?php  echo $SEM;?></td>
    <td><?php echo $USERNAME; ?></td>
    <td><?php echo $PASS; ?></td>
    
</tr>
<?PHP
}
?>
</table>
        </div>
      </div>
      <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12"> 
<div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">
<font color="white">
               <a href="adminhome.php" class="btn btn-danger" style="text-decoration:none">BACK</a>

</font>
        </div>
      </div>
    </div></body></html>