<?php
session_start();
include("connection.php");
include("adminsession.php");
$PQPID=$_SESSION["PQPID"];
$NOFQ=$_SESSION["nofq"];
$qno=$_SESSION["QNO"];


		
        if($qno <= $NOFQ)
{
	

$resul=mysql_query("select * from question where QP_ID='$PQPID' and Q_NO='$qno' ");
while($dat=mysql_fetch_array($resul))
{
	$qpid=$dat["QP_ID"];
	$qno=$dat["Q_NO"];
	$_SESSION["QNO"]=$qno;
	$qs=$dat["QS"];
	$op1=$dat["OP1"];
	$op2=$dat["OP2"];
	$op3=$dat["OP3"];
	$op4=$dat["OP4"];
}
?>
<script language="JavaScript"><!--
javascript:window.history.forward(0);
//--></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
<title>aptitude</title>
<style>
table {
    border-collapse: collapse;
}

th, td {
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#f2f2f2;
    color: white;
}

</style>
</head>

<body  background="image/background.jpg">
	<div id="new" align="center" style="padding-left:4%;padding-right:4%">
    <div id="body1">
        	<div id="head" style="padding-left:px; padding-right:auto; padding-bottom:5px; padding-top:5px; ">
            <h3 align="left" >&nbsp;&nbsp;&nbsp;aptitude</h3>
            </div>
            <div style="width:100%; height:550px; background:url(image/div%20background.jpg);">
            <div style="height:550px; background-color:white">            

<div style="padding:25px;">
 <table width="80%" border="0" align="center" bgcolor="" cellspacing="20PX"  >
      <tr>
      <td>
      </td>
       </tr>
		
      <form id="form2" name="form2" method="post" action="previewupdatedata.php">

        <tr>
  <td>
  </td>
  </tr>
      <tr height="100%" >
    <td>
<?PHP
echo $qno;echo")"; echo $qs;
?>
    </td>
  </tr>
  <tr>
  <td>
  </td>
  </tr>
  </table>
  <table width="80%" border="0" align="center" bgcolor="" cellspacing="20PX"  >
  <tr height="100%">
  <td>
    <input type="radio" name="Q" id="Q"   value="A" />
    <label for="rdogent"></label>      
      A)<?php echo $op1;?>
      </td>
      </tr>
      <tr>
      <td>
    <input type="radio" name="Q" id="Q" value="B" />
    <label for="rdogent2"></label>  
    B) <?php echo $op2;?>
    </td>
    </tr>
    <tr>
    <td>

    <input type="radio" name="Q" id="Q"  value="C" />
    <label for="rdogent"></label>      
    C) <?php echo $op3;?>
    </td>
    </tr>
    <tr>
    <td>
        <input type="radio" name="Q" id="Q" value="D" />
    <label for="rdogent2"></label>
    D) <?php echo $op4;?>
    </td> </tr>
    </font>
    <td align="center" >
  <div class="btn-grop">
  <?php
	if($qno<$NOFQ)
	{?>
    <input type="submit" class="button button2" name="bt_next" id="bt_next" value="NEXT" />
    <input type="submit" class="button button2" name="bt_edit" id="bt_edit" value="EDIT" />
    <?php
	}
	?>
    <?php
	if($qno==$NOFQ)
	{?>
    <div>
        <input type="submit" class="button button2" name="bt_edit" id="bt_edit" value="EDIT" />

		    <input type="submit" class="button button2" name="bt_finish" id="bt_finish" value="FINISH" /></div>
<?php
	}
	?>
</div>


 
    </form>  </td>
    </tr>
    <?php
	
}
else
{
			header("location:adminhome.php");
}

?>
    </div>
    </table>
            	            </div>
            </div>
  </div>
<div id="footer"  style=";padding-bottom:5px; padding-top:5px;">
            
            </div>
      
            
		</div>
        
	</div> </body>
</html>