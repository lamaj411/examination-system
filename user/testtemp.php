<?php
session_start();
include("connection.php");
include("usersession.php");
$QPID=$_SESSION["QPID"];
$rolno=$_SESSION["ROLNO"];
$username=$_SESSION["URNAME"];
$NOFQ=$_SESSION["nofq"];
$qno=$_SESSION["QNO"];
$duration=$_SESSION["DURATION"];
//$start_time=$_SESSION["start_time"];
$shuf=$_SESSION['shuffled'];
$abc=$_SESSION['abc'];






$res=mysql_query("select START_TIME from time where RNO='$rolno' and QP_ID='$QPID'");
while($data1=mysql_fetch_array($res))
{
  $start_time=$data1["START_TIME"];
  //$_SESSION["DURATION"]=$duration;

}


 

$curent_time=date("Y-m-d H:i:s"); 



$datetime1 = new DateTime($curent_time);
$datetime2 = new DateTime($start_time);
$interval = $datetime1->diff($datetime2);
$time_diffx = $interval->format('%i');

 
 
$time_diffx =($duration-1)- $time_diffx ; 





$time_diffx_sec = $interval->format('%s');

 
 
$time_diffx_sec =60- $time_diffx_sec ; 






$elapsed = $time_diffx ; 
?>



<script>









  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;


 
        if( timer == 0) {
         location.href="tempresult1.php";
        }



        if (--timer < 0) {
            timer = duration;
        }
        else
        { 
        }


    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 *  <?php echo   $elapsed;?>;

fiveMinutes = fiveMinutes + <?php echo $time_diffx_sec;?>;
    
        display = document.querySelector('#demo');
    startTimer(fiveMinutes, display);
};






</script>





<?php
        if($qno <$NOFQ)
{
	 
$abc=$shuf[$qno][0];
$_SESSION["abc"]=$abc;  
$resul=mysql_query("select * from question where QP_ID='$QPID' and Q_NO='$abc'");
while($dat=mysql_fetch_array($resul))
{
	$qpid=$dat["QP_ID"];
  $qo=$dat["Q_NO"];
	$qs=nl2br($dat["QS"]);
	$op1=$dat["OP1"];
	$op2=$dat["OP2"];
	$op3=$dat["OP3"];
	$op4=$dat["OP4"];
}
?>
<script language="JavaScript"><!--
javascript:window.history.forward(0);
//--></script><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>Ritu | RIT</title>


    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>


    <style>
    table {
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
    }

    

  </style>
</head>

<body style="" oncontextmenu="return false" oncopy="return false" onpaste="return false" oncut="return false">
	<div class="container ">
    	<div class="row head ">
     		<h3>EXAMINATION SYSTEM</h3>
   		</div>

   			<div class="row body well col-md-9" style="height: 500px;">

<table width="80%" border="0" align="center" bgcolor="" cellspacing="20PX">
      <tr>
      <td>
      </td>
       </tr>
		
      <form id="form2" name="form2" method="post" action="temptestpost.php">

        <tr>
  <td>
  </td>
  </tr>
      <tr height="100%" >
    <td style="font-weight: 600; font-size:20px;">
<?PHP
//echo $abc;echo "...";
echo $qno+1;echo")"; echo $qs;
?>
    </td>
  </tr>
  <tr>
  <td>
  </td>
  </tr>
  </table>
  <table width="80%" border="0" align="center" bgcolor="" cellspacing="20PX">
  <tr height="100%">
  <td style="font-weight: 600; font-size:20px;">
    <input type="radio"  name="Q" id="Q"   value="A" />
    <label for="rdogent"></label>      
      A) <?php echo $op1;?>
      </td>
      </tr>
      <tr>
      <td style="font-weight: 600; font-size:20px;">
    <input type="radio"  name="Q" id="Q" value="B" />
    <label for="rdogent2"></label>  
    B) <?php echo $op2;?>
    </td>
    </tr>
    <tr>
    <td style="font-weight: 600; font-size:20px;">

    <input type="radio"  name="Q" id="Q"  value="C" />
    <label for="rdogent"></label>      
    C) <?php echo $op3;?>
    </td>
    </tr>
    <tr>
    <td style="font-weight: 600; font-size:20px;">
        <input type="radio"  name="Q" id="Q" value="D" />
    <label for="rdogent2"></label>
    D) <?php echo $op4;?>
    </td> </tr>
    <td align="center" >
  <div style="padding:20px;">
  
  <?php
  if($qno==0)
  {?>
    							<div style="padding:25px;">
        							<input type="submit" class="btn btn-success col-sm-offset-1 col-sm-3 btn-save" name="bt_submit" id="bt_submit" value="SAVE" />
            							<a href="javascript:void(0);" onClick="javascript:window.location.href='nextdata.php'; " class="btn btn-info col-sm-offset-1 col-sm-3 btn-next" style="text-decoration:none;">NEXT</a>
								</div>
            				<?php } 
	if($qno<$NOFQ-1 && $qno>0)
	{?>
<div>
 <a href="javascript:void(0);" onClick="javascript:window.location.href='backdata.php';" class="btn btn-default col-sm-offset-1 col-sm-3 btn-back" >BACK</a>
    <input type="submit" class="btn btn-success col-sm-offset-1 col-sm-3 btn-save" name="bt_submit" id="bt_submit" value="SAVE" /> 
    
       
            <a href="javascript:void(0);" onClick="javascript:window.location.href='nextdata.php'; " class="btn btn-info col-sm-offset-1 col-sm-3 btn-next" >NEXT</a>
</div>

    <?php
	}
	?>
    <?php
	if($qno==$NOFQ-1)
	{
		    //<div><input type="submit" class="button button2" name="bt_finish" id="bt_finish" value="FINISH" />?>
              <input type="submit" class="btn btn-success col-sm-offset-1 col-sm-3 btn-save" name="bt_submit" id="bt_submit" value="SAVE" /> 

            <a href="javascript:void(0);" onClick="javascript:window.location.href='backdata.php';" class="btn btn-default col-sm-offset-1 col-sm-3 btn-back" >BACK</a></div>
<?php
	}

	?>
</div>


 
    </form>  
    
</td>
    </tr>
    
 </table>
            
    		</div>
      		<div class="row body well col-md-3 " style="height:;">
<table >
    <tr>
  <td style="font-weight: 600; font-size:20px;">Time Left :</td><td id="demo" style="font-weight: 600; font-size:20px;"></h4></td></tr>
</table>
  <h4 style="font-weight: 600; font-size:20px;">Status</h4>

  <table class="table tvac" style="font-size: 12px;">
    <tr>
<?php

$qstatus=mysql_query("select Q_NO,Q_INDEX,OP from user_choice where QP_ID='$QPID' and RNO='$rolno'");
while($dataqs=mysql_fetch_array($qstatus))
{
  $statusqno=$dataqs["Q_NO"];
  $statusqindex=$dataqs["Q_INDEX"];
  $statusop=$dataqs["OP"];?>
<td style="font-size: 13px; font-weight:350;" title="click to select question"><font color="<?php if($statusop=='x'){echo"red";}else{echo"green";}?>">
    <a class="trapezoid col-md-3 col-md-offset-1 <?php if($statusop=='x'){echo"bg-div-danger";}else{echo"bg-div-success";}?> "  href="getqsid.php?id=<?php echo $statusqindex; ?>"> <?php echo $statusqindex;echo ")";echo $statusop;?>
    </a>
     </td>
<?php
if($statusqindex%4 ==0)
{
  ?>
</font>
  </tr>
  <?php
}
}
?>
</tr>
</table>

      		

<h4 style="font-weight: 600; font-size:20px;">Legend: </h4>
     <table class="table tvac" style="font-size: 12px;">
      <tr>
        <td style="text-align: center;"><div class="trapezoid bg-div-success" style=" width: 30px; height: 30px; "></div>  <label>Answered</label></td>
         <td style="text-align: center;">
         <div class="trapezoid bg-div-danger" style=" width: 30px; height: 30px; "></div>  <label>Not Answered</label></td>

        
      </tr>
    </table>



    <div class="row " style="padding-bottom: 10px;">
      <div class="col-md-12">
       <a href="javascript:void(0);" onClick="javascript:window.location.href='tempresult1.php'; " class="btn btn-sm col-sx-12 btn-success" style="width: 100%; text-decoration:none;">FINAL SUBMIT</a>

      </div>
          </div>
      	</div>
        <?php
      }
      ?>
      </div>
</body>
</html>