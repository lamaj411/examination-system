

<?php
session_start();
include("connection.php");
include("usersession.php");
$username=$_SESSION["URNAME"];
$resul=mysql_query("select RNO,NAME,SEM,ROLNO from student_details where USERNAME='$username'");
while($dat=mysql_fetch_array($resul))
	{
	$rno=$dat["RNO"];
  $name=$dat["NAME"];
  $sem=$dat["SEM"];
  $rolno=$dat["ROLNO"];

	}
$_SESSION["ROLNO"]=$rno;
$_SESSION["SEM"]=$sem;

?>
<!DOCTYPE html>
<html>
<head>
  <title>User | Ritu</title>
      <link rel="stylesheet" href="gravity-points/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

</head>

<body style="background-color: black;">
  <canvas id="c"></canvas>
  <script src='gravity-points/js/kzymdn.js'></script>

  

    <script  src="gravity-points/js/index.js"></script>
  <div class="container">
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 100px;">
</div>          
      
    <div class="btn row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-top: 5pc; text-align: left;">
      <font color="white" size="4pc">
         <?php  echo "Admission no : "; echo $rolno;?><br>
         <?php  echo "Name : "; echo $name;?><br>
         <?php  echo "Sem : "; echo $sem;?><br>
         <?php  echo "Rol no : "; echo $rolno;?><br>
         <?php echo "username : "; echo $username;?><br>

         </font>
         <br>
         <br>
         
         <ol >
          <li > 
           <a href="alowtest.php" style="text-decoration:none" class="btn btn-success" >NEW TEST</a>
         </li>
       </ol>
       <ol>
         <li>
        <a href="userhomeresult.php" style="text-decoration:none" class="btn btn-success" >ATTENDED TESTS</a>
      </li>
    </ol>
    <ol>
      <li>
       <a href="logout.php" class="btn btn-primary" style="text-decoration:none">LOGOUT</a>
     </li>
   </ol>



    </div>
          </div>  
          
   </body>
</html>