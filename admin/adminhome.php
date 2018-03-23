<?php
session_start();
include("connection.php");
include("adminsession.php");
$resul=mysql_query("select CURRENT_SEM from current_sem where ID='1'");
while($data=mysql_fetch_array($resul))
{
    $CURRENT_SEM=$data["CURRENT_SEM"];
    $_SESSION["CURRENT_SEM"]=$CURRENT_SEM;

  }


if(isset($_POST["btn_submit"])!=null)
{
  $id=$_POST["sem"];
mysql_query("update current_sem set CURRENT_SEM='$id' where ID='1'");
$resul=mysql_query("select CURRENT_SEM from current_sem where ID='1'");
while($data=mysql_fetch_array($resul))
{
    $CURRENT_SEM=$data["CURRENT_SEM"];
    $_SESSION["CURRENT_SEM"]=$CURRENT_SEM;

  }
}



?>
<!DOCTYPE html>
<html>
<head>
  <title>User | Ritu</title>


<link href="dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="dashboard/assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="dashboard/assets/css/demo.css" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

  

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

          
                                            <h4><font color="red">CURRENT SEMESTER:<?php echo $CURRENT_SEM; ?></font></h4>

<div class="col-lg-3" >
  <font color="White">
      <form id="form1" name="form1" method="post" action="#" class="form-horizontal">
      SELECT SEMESTER:
      <label for="sem"></label>
      <select class="form-control" name="sem">
        <option value="1">S1</option>
        <option value="2">S2</option>
        <option value="3">S3</option>
        <option value="4">S4</option>
        <option value="5">S5</option>
        <option value="6">S6</option>

  </select>

     

          <input type="submit" name="btn_submit" id="btn_submit" class="btn btn-info btn-sm"  value="SET"/>
    </form> 
    </font> 
  </div>
</div>


























       
      <div class="row col-lg-6 col-md-6 col-sm-10 col-xs-12">
        <div class="btn row col-lg-6 col-md-6 col-sm-10 col-xs-12" style="margin-top: 3pc; background-color: black;">




<font size="10px" >
<div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="candidate_register.php" class="btn btn-success">
                            <p>STUDENT DETAILS</p>
                        </a>
                    </li>
                    <li>
                        <a href="userdetails.php" class="btn btn-success">
                            <p>EXAM DETAILS</p>
                
                        </a>
                    </li>
                    <li>
                        <a href="testregistration.php" class="btn btn-success">
                            <p>CREATE QUESTION PAPER</p>
                        </a>
                    </li>
                    <li>
                        <a href="preview.php" class="btn btn-success">
                            <p>QUESTION PAPER PREVIEW</p>
                        </a>
                    </li>
                    <li>
                        <a href="settest.php" class="btn btn-success">
                            <p>SET TEST</p>
                        </a>
                    </li>
                    <li>
                        <a href="examcontrol.php" class="btn btn-success">
                            <p>EXAM CONTROL</p>
                        </a>
                    </li>
                    <li>
                        <a href="admin_ranklist2.php" class="btn btn-success">
                            <p>RANKLIST</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="logout.php" class="btn btn-success">
                            <p>LOGOUT</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


</div>
</div>











 </body>
</html>