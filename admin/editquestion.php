<?PHP
session_start();
include("connection.php");
include("adminsession.php");
$PQPID=$_SESSION["PQPID"];
$qno=$_SESSION["QNO"];
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
$res=mysql_query("select OP from answerkey where QP_ID='$PQPID' and Q_NO='$qno' ");
while($data=mysql_fetch_array($res))
{
	$o=$data["OP"];
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

<div style="padding:5px;">
 <table align="center">
<tr>
<th >
EDIT QUESTIONS
</th>
</tr>
      <form id="form1" name="testreg2" method="post" action="editquestionpost.php">
      <tr>
      <td>	Question number                           
      <label for="qno"></label>
      </td>
      <td>:
      <?php echo $qno; ?>
      </td>
      </tr>
      <tr >
      <td>
      Enter quesion
      </td>
      <td> :                          
      <label for="question"></label>
      <textarea name="question" rows="10" cols="30"> <?php echo $qs; ?> </textarea>
      </td>
      </tr>
      <tr >
      <td>	Option A       
      </td>
      <td> :                   
      <label for="option1"></label>
      <input type="text" name="option1" id="option1" required value=" <?php echo $op1; ?>" width="45px"/>
      </td>
      </tr>
    <tr >
      <td>	Option B
      </td>
      <td>   :                       
      <label for="option2"></label>
      <input type="text" name="option2" id="option2" required value=" <?php echo $op2; ?>" width="45px"/>
      </td>
      </tr
    ><tr >
      <td>	Option C 
      </td>
      <td> :                        
      <label for="Option3"></label>
      <input type="text" name="option3" id="option3" required value=" <?php echo $op3; ?>" width="45px"/>
      </td>
      </tr>
    <tr >
      <td>	Option D
      </td>
      <td>          :                 
      <label for="option4"></label>
      <input type="text" name="option4" id="option4" required value=" <?php echo $op4; ?>" width="45px"/>
      </td>
      </tr>
      <tr>
      <td>	Answer
      </td>
      <td>  :                         
      <label for="option5"></label>
       <?php echo $o;?>
      </td>
      </tr>
      </table>
      <table align="center">
          <tr >
    <td >

      <div class="btn-grop">
    <input type="submit" name="btn_update" id="btn_update"  value="UPDATE" class="button button2"/>
    </div>
    </form>  </td>
    </tr>
    </table>
            	            </div>
            </div>
  </div>
<div id="footer"  style=";padding-bottom:5px; padding-top:5px;">
            
            </div>
      
            
		</div>
        
	</div> </body>
</html>