<?PHP
include("connection.php");
session_start();
include("adminsession.php");
$result=mysql_query("select QID from paper_id where NO=0");
while($data=mysql_fetch_array($result))
{   
$QPID=$data["QID"];
}
if(isset($_POST["log_btn"])!=null)
{
	$n=1;
	$TESTNAME=$_POST["testname"];
  $SEM=$_POST["sem"];


	$NOFQ=$_POST["nofq"];
	//$DEPARTMENT=$_POST["department"];
	$DURATION=$_POST["duration"];
	$_SESSION["TESTNAME"]=$TESTNAME;
	$_SESSION["NOFQ"]=$NOFQ;
	$_SESSION["QPID"]=$QPID;
	$_SESSION["N"]=$n;

mysql_query("insert into test_details(QP_ID,TEST_NAME,NOOF_Q,SEM,DURATION) values('".$QPID."','".$TESTNAME."','".$NOFQ."','".$SEM."','".$DURATION."')")or die(mysql_error());
header("location:addquestion.php");
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
  <div class=" form-group row col-lg-5 col-md-5 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
      
      <div class="row col-lg-7 col-md-7 col-sm-10 col-xs-12" style="margin-top: 8pc;">
        <div class="btn row col-lg-7 col-md-7 col-sm-10 col-xs-12">
<table class="table" style="color: white;">
<tr>
<th align="center">
TEST REGISTRATION
</th>
<th align="center">
STEP 1
</th>
</tr>
      <form id="form1" name="testreg" method="post" action="" class="form-horizontal">
      <tr>
      <td>	Question paper ID</td>
      <td>:                           
      <?php echo $QPID;
	  ?>
      </td>
      </tr>
      <tr>
      <td>	Test name</td>
      <td>:                           
      <label for="testname"></label>
      <input class="form-control" type="text" name="testname" id="testname" required value=""/>
      </td>
      </tr>
      <tr>
      <td>  Semester</td>
      <td>:                           
      <label for="sem"></label>
      <select class="form-control" name="sem">
        <option value="1">S1</option>
        <option value="2">S2</option>
        <option value="3">S3</option>
        <option value="4">S4</option>
        <option value="5">S5</option>
        <option value="6">S6</option>

  </select>
      </td>
      </tr>
      <tr>
      <td>	Number of questions</td>
      <td>:                         
      <label for="nofq"></label>
      <input class="form-control" type="text" name="nofq" id="nofq" required value="" width="45px"/>
      </td>
      </tr>
      
            <tr >
      <td>	Duration</td><td>:                         
      <label for="duration"></label>
      <input class="form-control" type="text" name="duration" id="duration" required value="" width="45px"/>
      </td>
      </tr>
      </table>
      
      <div class="btn">
            <a href="adminhome.php" style="text-decoration:none" class="btn btn-danger" >BACK</a>
    <input type="submit" name="log_btn" id="log_btn" align="middle" value="NEXT" class="btn btn-info"/>
    </div>
    </form>  
    
      
            
		</div>
        
	</div> </body>
</html>