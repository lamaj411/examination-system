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
if(isset($_POST["btn_submit"])!=null)
{
  $id=$_POST["qid"];
mysql_query("update current_qpid set CQPID='$id' where SEM='$CURRENT_SEM'");
$resul=mysql_query("select CQPID from current_qpid where SEM='$CURRENT_SEM'");
while($data=mysql_fetch_array($resul))
{
    $CQPID=$data["CQPID"];
  }
}?>

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
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>
                        <h4><font color="red">Current Paper:<?php echo $CQPID; ?></font></h4>

<table class="table" style="color: white; width: 200px;" >
      <form id="form1" name="form1" method="post" action="" class="form-horizontal">
      <tr>
      <td align="center"> QUESTION ID:
      <label for="qid"></label>
      <input class="form-control" type="int" name="qid" id="qid" required value=""/>
      </td>
      </tr>
          </table>

    <div class="btn">
          <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-info "  value="SET"/>
    </form>  
            <a href="adminhome.php" style="text-decoration:none" class="btn btn-danger" >BACK</a>
    </div>

          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 100px;">
</div>
     

           
      <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-top: 3pc;">
        <div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12">

      

<table class="table" style="color: white" >
 
<tr>
<th>QPID</th>
<th>TEST NAME</th>
<th>SEM</th>

<th>QUESTIONS</th>
<th>DURATION</th>
</tr>
<?php
$result=mysql_query("select QP_ID,TEST_NAME,NOOF_Q,SEM,DURATION from test_details order by QP_ID");
while($data=mysql_fetch_array($result))
{   
$qpid=$data["QP_ID"];
    $testname=$data["TEST_NAME"];
	  $nofq=$data["NOOF_Q"];
    $sem=$data["SEM"];
    $duration=$data["DURATION"];
?>

  <tr align="center">
    <td><?php echo $qpid;?></td>
    <td><?php echo $testname;?></td>
    <td><?php echo $sem;?></td>
    <td><?php echo $nofq;?></td>


    <td><?php echo $duration;?></td>
      <?php
	  }
    ?>

    </tr>
</table>
        

    </div>
  </div>
            
  </div></body>
</html>