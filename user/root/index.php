<?php

session_start();

define('IS_AJAX', isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');

include_once 'db.php';

try {
	global $a;
	$a = new Database();
	
} catch (Exception $e) {
	
}

if(  isset($_POST['action']) &&  IS_AJAX  ) {

	if($_POST['action'] == "viewQuestion"){

		$q_id = $_POST['q_id'];
		$q_no = $_POST['q_no'];
		$q_ans = $_POST['q_ans'];





		$rolno=$_SESSION["ROLNO"];


		  $query = "SELECT COUNT(*) AS COUNT FROM user_choice WHERE RNO = :RNO AND QP_ID = :QP_ID AND Q_NO = :Q_NO ";
		    $params  = array(
		    ':RNO' => $rolno,
		    ':QP_ID' => $q_id ,
		    ':Q_NO' => $q_no
		   );

		  $opt = $a->display($query, $params);
		 
		 $rstatus = true;

		if($opt[0]['COUNT'] >0 ){
			 
		 $rstatus = false;
		 

		}


		if($rstatus) {
					  $query = 'INSERT INTO user_choice (RNO, QP_ID, Q_NO) VALUES (:RNO, :QP_ID, :Q_NO);';
		 
		  $result = $a->execute_query($query, $params);


 
		}



			if($q_ans != null) {



				$query = "SELECT *   FROM user_choice WHERE RNO = :RNO AND QP_ID = :QP_ID AND Q_NO = :Q_NO ";
				  $params  = array(
				  ':RNO' => $rolno,
				  ':QP_ID' => $q_id ,
				  ':Q_NO' => $q_no
				 );

				  $tb = 9;

				$opt = $a->display($query, $params);
				
				if(isset($opt[0])){



					if($opt[0]['OP'] == null ) {

						$query = "UPDATE user_choice SET Q_TICK = :Q_TICK WHERE RNO = :RNO AND QP_ID = :QP_ID AND Q_NO = :Q_NO AND  OP IS NULL";
						  $params  = array(
						  	':Q_TICK' => $q_ans,
						  ':RNO' => $rolno,
						  ':QP_ID' => $q_id ,
						  ':Q_NO' => $q_no
						 );

						$opt = $a->execute_query($query, $params);
$tb =1;


					}




				}






		echo json_encode(array('success'=> $tb ));	

	} else {

		echo json_encode(array('success'=> 2 ));	
	}




	}

	 




//answerQuestion



 

	if($_POST['action'] == "answerQuestion"){

		$q_id = $_POST['q_id'];
		$q_no = $_POST['q_no'];
		$q_ans = $_POST['q_ans'];





		$rolno=$_SESSION["ROLNO"];

 









	$query = "SELECT COUNT(* ) AS count  FROM user_choice WHERE RNO = :RNO AND QP_ID = :QP_ID AND Q_NO = :Q_NO ";
				  $params  = array(
				  ':RNO' => $rolno,
				  ':QP_ID' => $q_id ,
				  ':Q_NO' => $q_no
				 );
 

				$opt = $a->display($query, $params);
				if ($opt[0]['count'] <1) {




					   $query = 'INSERT INTO user_choice (RNO, QP_ID,Q_TICK,  Q_NO) VALUES (:RNO, :QP_ID :Q_TICK, :Q_NO);';
  $params  = array(
		  	':Q_TICK' => $q_ans,
		  ':RNO' => $rolno,
		  ':QP_ID' => $q_id ,
		  ':Q_NO' => $q_no
		 );

					
					$opt = $a->execute_query($query, $params);





				} else{



		$query = "UPDATE user_choice SET OP = :Q_TICK, Q_TICK = null WHERE RNO = :RNO AND QP_ID = :QP_ID AND Q_NO = :Q_NO ";
		  $params  = array(
		  	':Q_TICK' => $q_ans,
		  ':RNO' => $rolno,
		  ':QP_ID' => $q_id ,
		  ':Q_NO' => $q_no
		 );

		$opt = $a->execute_query($query, $params);


}
		 

if ($opt) { 

		echo json_encode(array('success'=> $q_no ));	
	} else {

		echo json_encode(array('success'=> -1 ));
	}




	}

	 
	
}







?>