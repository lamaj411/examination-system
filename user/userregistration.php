<?PHP
//include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="gravity-points/css/style.css">

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<title>Ritu | RIT</title>

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
    <div class="form-group row col-lg-3 col-md-5 col-sm-10 col-xs-12" style="margin-top: 4pc;">
      
<h3><font color="white">Register</font></h3>
<font size="3px" color="white">
      <form class="form-horizontal" id="userreg" name="userreg" method="post" onsubmit="return saveclick()" action="userpost.php">
    	Admission No:                           
      <label for="adno"></label>
      <input class="form-control" type="text" name="adno" id="adno" required value=""/>
      
    Name:                         
    <label for="name"></label>
    <input  class="form-control" type="text" name="name" id="name" pattern="[A-Za-z\s]+" required value=""/>






        Semester:                         
      <label for="sem"></label>
      <select class="form-control" name="sem">
        <option value="1">S1</option>
        <option value="2">S2</option>
        <option value="3">S3</option>
        <option value="4">S4</option>
        <option value="5">S5</option>
        <option value="6">S6</option>

  </select>
      



      Roll No:                           
      <label for="rno"></label>
      <input class="form-control" type="text" name="rno" id="rno" required value=""/>












      	
      
      
      
      	
      Create a password  
      :
      <label for="password"></label>
      <input class="form-control" type="password" name="password" id="password" pattern="[a-zA-Z0-9@\s]+" required value=""/>



      Confirm your password  
      :
      <label for="repasword"></label>
      <input class="form-control" type="password" name="repassword" id="repassword" pattern="[a-zA-Z0-9@\s]+" required value=""/>
       
    
      <div class="btn">
    <input type="submit" name="reg_btn" id="reg_btn" align="middle" value="SUBMIT" class="btn btn-info"/>
    <a href="../index.php" class=""><font color="white">Back</font></a>

    </div>
    </form>  
    	</font>
            </div>
            </div>
  </div>
</body>
</html>
<script type="text/javascript">
  
  function saveclick()
{
var a=document.getElementById('password').value;
var b=document.getElementById('repassword').value;
console.log(a);
console.log(b);
if(a!=b)
{
alert("These passwords don't match. Try again?");
return false;
}
else
return true;
}
</script>