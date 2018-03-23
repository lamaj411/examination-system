<?php
session_start();
include("connection.php");
include("usersession.php");
$QPID=$_SESSION["QPID"];
$rolno=$_SESSION["ROLNO"];
$username=$_SESSION["URNAME"];
$NOFQ=$_SESSION["nofq"];
$n=0;
$_SESSION["QNO"]=$n;  
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
echo $time_diffx = $interval->format('%i');

 
 
$time_diffx =($duration-1)- $time_diffx ; 





echo $time_diffx_sec = $interval->format('%s');

 
 
$time_diffx_sec =60- $time_diffx_sec ; 






echo $elapsed = $time_diffx ; 
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

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 *  <?php echo $elapsed;?>;

fiveMinutes = fiveMinutes + <?php echo $time_diffx_sec;?>;
    
        display = document.querySelector('#demo');
    startTimer(fiveMinutes, display);
};






</script>
<html>
<body>
	<div>
		<table>
  			<tr>
			<?php

			$qstatus=mysql_query("select Q_NO,Q_INDEX,OP from user_choice where QP_ID='$QPID' and RNO='$rolno' order by(Q_INDEX)");
			while($dataqs=mysql_fetch_array($qstatus))
			{
  				$statusqno=$dataqs["Q_NO"];
  				$statusqindex=$dataqs["Q_INDEX"];
  				$statusop=$dataqs["OP"];
          $shuffled[] =array($statusqno);
          $_SESSION['shuffled'] =$shuffled;
          header("location:testtemp.php");
          ?>
			<td>    
				<a href="getqsid.php?id=<?php echo $statusqindex; ?>"> <?php echo $statusqindex;?></a> <?php echo "(";echo $statusqno;echo ")"; echo"...";echo $statusop;?></td>
			<?php
			}
			?>
			</tr>
		</table>
<a href="javascript:void(0);" onClick="javascript:window.location.href='tempresult1.php';" class="button button2" style="width:20PX; text-decoration:none;">FINISH</a>
</div>
te</body>
</html>