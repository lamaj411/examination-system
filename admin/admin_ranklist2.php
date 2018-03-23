<?php
session_start();
include("connection.php");
include("adminsession.php");
    $CURRENT_SEM=$_SESSION["CURRENT_SEM"];
    $resul=mysql_query("select CQPID from current_qpid where SEM='$CURRENT_SEM'");
while($data=mysql_fetch_array($resul))
{
    $CQPID=$data["CQPID"];
  }


$resul=mysql_query("select DATE from result where QP_ID=$CQPID");
while($dat=mysql_fetch_array($resul))
{
    $date=$dat["DATE"];
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin | Ritu</title>

<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body style="background-color: black;">
  <div class="container"> 
 

    

     
    
                <div class="row col-lg-6 col-md-6 col-sm-10 col-xs-12" style="margin-top: 2PC;">
                                 <h4><font color="white">DEPARTMENT OF MCA</font></h4>
                       <h4><font color="white">RIT PAMPADY</font></h4>
                      <h4><font color="white">INTERNAL MARKS OF ONLINE VIVA ON <?php echo $date;?></font></h4>



               <h4><font color="white">SEMESTER : <?php echo $CURRENT_SEM; ?></font></h4>

                  <h4><font color="white">QPID:<?php echo $CQPID; ?></font></h4>

                  
                 <table class="table"  style="color: white; margin-top: 3pc;">
 <tr>
 <th>ROL NO</th>
<th>ADMISSON NO</th>
<th>NAME</th>
<th>EXAM CODE</th>
<th>SCORE</th>
</tr>
    <?php
	$rank=1;
$resul=mysql_query("select * from result where QP_ID=$CQPID order by ROLNO desc");
while($dat=mysql_fetch_array($resul))
{
		$no=$dat["NO"];
		$rno=$dat["RNO"];
		//$name=$dat["NAME"];
		$qpid=$dat["QP_ID"];
		$score=$dat["SCORE"];


$result1=mysql_query("select NAME,SEM,ROLNO from student_details where RNO=$rno");
while($data=mysql_fetch_array($result1))
{
    $NAME=$data["NAME"];
    $SEM=$data["SEM"];
    $ROLNO=$data["ROLNO"];
  }
?>
<tr align="center">
    <td><?php  echo $ROLNO?></td>
    <td><?php  echo $rno;?></td>
    <td><?php  echo $NAME;?></td>
    <td><?php  echo $qpid;?></td>
    <td><?php echo $score; ?></td>
</tr>
<?PHP
}
?>
</table>
               <a href="adminhome.php" class="btn btn-success" style="text-decoration:none">BACK</a>
                <button onclick="myFunction()" class="btn btn-success">Print</button>

</div>

            </div>
            
  </div>

            
		</div>
        
	</div> </body>
</html>



<script>
function myFunction() {
    window.print();
}
</script>