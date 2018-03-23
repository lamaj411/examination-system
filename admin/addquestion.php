<?PHP 
session_start();
include("connection.php");
include("adminsession.php");
$TESTNAME=$_SESSION["TESTNAME"];
$NOFQ=$_SESSION["NOFQ"];
$N=$_SESSION["N"];

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
  <div class=" form-group row col-lg-6 col-md-6 col-sm-10 col-xs-12 " style="margin-top: 10pc;">
          <h2><font color="yellow">EXAMINATION SYSTEM</font></h2>

          <h3><font color="White">Department of MCA</font></h3>
                    <h3><font color="White">RIT kottayam</font></h3>


          <h3><font color="White"></font></h3>


</div>
<div class=" form-group row col-lg-1 col-md-1 col-sm-1 col-xs-1"  height: 100px;">
</div>      
      <div class="row col-lg-5 col-md-5 col-sm-10 col-xs-12" style="margin-top: 2pc;">
<table class="table" style="color: white">
<tr>
<th >
TEST REGISTRATION
</th>
<th >
STEP 2
</th>
</tr>
      <form  class="form-horizontal" id="form1" name="testreg2" method="post" action="questionpost.php">
      <tr>
      <td>	Question number:                           
      <label for="qno"></label>
      </td>
      <td>
      <input class="form-control" type="text" name="qno" id="qno" required value="<?php echo $N;?>" width="45px"/>
      </td>
      </tr>
      <tr >
      <td>
      Enter quesion:
      </td>
      <td>                           
      <label for="question"></label>
      <textarea class="form-control" name="question" rows="10" cols="30">enter question here!!!</textarea>
      </td>
      </tr>
      <tr >
      <td>	Option A:       
      </td>
      <td>                    
      <label for="option1"></label>
      <input class="form-control" type="text" name="option1" id="option1" required value="" width="45px"/>
      </td>
      </tr>
    <tr >
      <td>	Option B: 
      </td>
      <td>                          
      <label for="option2"></label>
      <input class="form-control" type="text" name="option2" id="option2" required value="" width="45px"/>
      </td>
      </tr>
    <tr >
      <td>	Option C:  
      </td>
      <td>                         
      <label for="Option3"></label>
      <input class="form-control" type="text" name="option3" id="option3" required value="" width="45px"/>
      </td>
      </tr>
    <tr >
      <td>	Option D:
      </td>
      <td>                           
      <label for="option4"></label>
      <input class="form-control" type="text" name="option4" id="option4" required value="" width="45px"/>
      </td>
      </tr>
      <tr>
      <td>	Answer:
      </td>
      <td> 
      <label for="option5"></label>
      <select class="form-control" name="ans" id="ans" required>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>

      </select>
     
      </td>
      </tr>
      </table>	
      

      <div class="btn">
    <input type="submit" name="log_btn" id="log_btn"  value="NEXT" class="btn btn-info"/>
    </div>
    </form>  
            </div>
  </div>

        
	</div> </body>
</html>