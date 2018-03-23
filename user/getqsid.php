
  <?php
  session_start();
  $z=$_GET['id'];
  $qno=$z-1;
  $_SESSION['QNO']=$qno;
  header("location:testtemp.php");
  ?>
