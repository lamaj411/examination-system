<?php
session_start();
include("connection.php");
include("adminsession.php");
if(isset($_POST["btn_submit"])!=null)
{
	$qpid=$_POST["qpid"];
	$_SESSION["PQPID"]=$qpid;
	header("location:previewdata.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
<title>aptitude</title>
</head>

<body  background="image/background.jpg">
	<div id="new" align="center" style="padding-left:4%;padding-right:4%">
    <div id="body1">
        	<div id="head" style="padding-left:px; padding-right:auto; padding-bottom:5px; padding-top:5px; ">
            <h3 align="left" >&nbsp;&nbsp;&nbsp;aptitude</h3>
            </div>
            <div style="width:100%; height:550px; background:url(image/div%20background.jpg);">
            <div align="right" style="padding-top:5px; padding-right:5px;">
               <a href="adminhome.php" class="button button2" style="text-decoration:none">Back to home</a>
               <a href="logout.php" class="button button2" style="text-decoration:none">Logout</a>


</div>
            <div style="opacity:.1; height:300px; background-color:#F9F">
            </div>
            
                <div style=" height:300px;">
<div style="padding:10px; background-color:white;">
<table width="38%" border="0" align="center" bgcolor="" cellspacing="40PX"  >
      <form id="form1" name="form1" method="post" action="">
      
      <tr align="center">
      <td>QPID 
      </td>
      <td>:
      <label for="qpid"></label>
      <input type="text" name="qpid" id="qpid" required value=""/>
      </td>
      </tr>
      </table>
      <table align="center">
     <tr align="center">
    <td>
          <div class="btn-grup">
    <input type="submit" name="btn_submit" id="btn_submit" class="button button2" value="SUBMIT"/>
    </div>
    </form>  </td>
    </tr>
    </div>
    </table>


            </div>
            </div>
  </div>
<div id="footer"  style=";padding-bottom:5px; padding-top:5px;">
            <h3 align="left" ></h3>
            </div>
      
            
		</div>
        
	</div> </body>
</html>