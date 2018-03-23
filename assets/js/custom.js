$(document).ready( function(){
	console.log(" started ");


$(document).on('click', '.radio p', function() { 
	$(this).closest('.radio').find('input[type="radio"]').not(':checked').prop("checked", true);
}); 

function activaTab(tab){
    $('.nav-tabs a[href="#' + tab + '"]').tab('show'); 
};

 
var q_b_id =  $('#qdata').attr('q_b_id'); 
console.log(q_b_id);

function testNew ( $this, $total) {
	if($this.attr("q_no") < 1)
	$this.find('.btn-back').addClass('disabled');
else 
	$('.btn-back').removeClass('disabled');
 

	$('.btn-next').removeClass('disabled');
 $total--; 
	if($this.attr("q_no") >= $total)
	$this.find('.btn-next').addClass('disabled'); 


}

function updateStatus ( $this, $class) {
	$this = $("." + $this); 
	$this.removeClass( "bg-div-success");
	$this.removeClass( "bg-div-marked");
	$this.removeClass( "bg-div-danger");



	$this.addClass(  $class);


}


$(document).on('click', '.btn-next', function(e) {
	e.preventDefault();
	$data = $('#qdata');

	$thisParent = $(this).closest('.eachQuestuion');


	$totalq = $data.attr('totq');
	$q_id = $data.attr('q_id');  
	$nowQid = $thisParent.attr('q_no');
	$nowQid ++; 

if($nowQid >= ($totalq  )) {  
	return;
}
	$nextQ = "question_" + $q_id + "_" + $nowQid  + "_1";

 
var $choiz = null;

var selected = $thisParent.find("input[type='radio']:checked");
if (selected.length > 0) {
    $choiz = selected.val();
}



$db_question_id = $q_id;
$db_question_no = $thisParent.attr('r_q_no');

console.log($choiz);





if($thisParent.attr('issuccess') != 'Z') {

	if($thisParent.attr('issuccess') != $choiz ) {



		if (confirm('Are you sure you want to save new option ?')) {
		    
			$thisParent.find('button[type=submit]').click();


		} else {

			 $thisParent.find("input[type=radio][value=" +  $thisParent.attr('issuccess') + "]").prop('checked', true);
	 

		}



		return;
	}


}

 

if( true) {



	$updateClass = 'question_'+$db_question_id+'_' + ( parseInt( $db_question_no ) ) +'_' +q_b_id+ '_0 ';

	console.log($updateClass);

	
 console.log(  'question_'+$db_question_id+'_' + ( parseInt( $db_question_no ) +1 ) +'_' +q_b_id+ '_0 '  );

updateStatus(  'question_'+$db_question_id+'_' + ( parseInt( $db_question_no ) +1 ) +'_' +q_b_id+ '_0 ' , 'bg-div-danger'); 

	          


	request = $.ajax({
		url: "root/index.php",
		type: "post",
		data: {action: 'viewQuestion', q_id: $db_question_id, q_no: $db_question_no, q_ans :$choiz}
	});




	request.done(function (response, textStatus, jqXHR){
	        // Log a message to the console
	        console.log(response);
	       
	          if(response) {
	        response =$.parseJSON(response); 
	        
	 

	        if (response.success > 0) {
	        	if (response.success == 1 ) {
	        	
	        		if( $choiz != null )
	        			updateStatus(  $updateClass , 'bg-div-marked'); 



	        		testNew( $('#' + $nextQ ) , $totalq);
	        		 
	        	}  
	        		activaTab(  $nextQ );
	        }

	}

	    });

	request.fail(function (jqXHR, textStatus, errorThrown){

		alert(
			"The following error occurred: " );
	});
	 








}

 


});

$(document).on('click', '.btn-back', function(e) {
	e.preventDefault();
	$data = $('#qdata');

	$thisParent = $(this).closest('.eachQuestuion');


	$totalq = $data.attr('totq');
	$q_id = $data.attr('q_id');  
	$nowQid = $thisParent.attr('q_no');
	$nowQid --;

if($nowQid < 0) { 
	return;
}

	$nextQ = "question_" + $q_id + "_" + $nowQid  + "_1";

 

testNew( $('#' + $nextQ ) , $totalq);
activaTab(  $nextQ );




});

$(document).on('submit', '.nowDataForm', function(e) {
	e.preventDefault();
 



	$data = $('#qdata');

	$thisParent = $(this).closest('.eachQuestuion');
 

var $choiz = "";
var selected = $thisParent.find("input[type='radio']:checked");

if (selected.length > 0) {
    $choiz = selected.val();
}

if($choiz != "A" & $choiz != "B" & $choiz != "C" & $choiz != "D"  ){
	alert("select a valid option");
	return;
}

	$totalq = $data.attr('totq');
	$q_id = $data.attr('q_id');  
	$nowQid = $thisParent.attr('q_no');


	$nowQid ++; 

if($nowQid > ($totalq  )) {  
	return;
}
	$nextQ = "question_" + $q_id + "_" + $nowQid  + "_1";

  

$db_question_id = $q_id;
$db_question_no = $thisParent.attr('r_q_no');
 
 
$updateClass = 'question_'+$db_question_id+'_' + ( $db_question_no  ) +'_' +q_b_id+ '_0 ';

        console.log($updateClass);



request = $.ajax({
	url: "root/index.php",
	type: "post",
	data: {action: 'answerQuestion', q_id: $db_question_id, q_no: $db_question_no, q_ans:$choiz }
});

request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log(response);
        
        response =$.parseJSON(response); 
        
        if (response.success ) {



        	if( $choiz != null ) {
        		$thisParent.attr('issuccess',$choiz );
        		updateStatus(   $updateClass  , 'bg-div-success'); 
        	}


        	testNew( $('#' + $nextQ ) , $totalq);
        	activaTab(  $nextQ );
        }



    });

request.fail(function (jqXHR, textStatus, errorThrown){

	alert(
		"The following error occurred: " );
});
 



});




$(document).on('click', '.quickMove', function() {

	$href = $(this).attr('hrefs');
activaTab(  $href );

});



	$totalq =  $('#qdata').attr('totq');
	$q_id =  $('#qdata').attr('q_id');  
	$totalq--;
 

	$(document).on('click', "#question_" + $q_id + "_" + $totalq  + "_1 input[type=radio]", function(e) {


 
	$data = $('#qdata');

	$thisParent = $(this).closest('.eachQuestuion');


	$totalq = $data.attr('totq');
	$q_id = $data.attr('q_id');  
	$nowQid = $thisParent.attr('q_no');
	$nowQid ++; 

 
	$nextQ = "question_" + $q_id + "_" + $nowQid  + "_1";

 

var $choiz = null;
var selected = $thisParent.find("input[type='radio']:checked");
if (selected.length > 0) {
    $choiz = selected.val();
}



$db_question_id = $q_id;
$db_question_no = $thisParent.attr('r_q_no');

console.log($choiz);


$updateClass = 'question_'+$db_question_id+'_' + ( parseInt( $db_question_no ) ) +'_' +q_b_id+ '_0 ';

request = $.ajax({
	url: "root/index.php",
	type: "post",
	data: {action: 'viewQuestion', q_id: $db_question_id, q_no: $db_question_no, q_ans :$choiz}
});

request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log(response);
        
          
                 if(response) {
        response =$.parseJSON(response); 
        
 

        if (response.success > 0) {
        	if (response.success == 1 ) {
        	
        		if( $choiz != null )
        			updateStatus(  $updateClass , 'bg-div-marked'); 



        		testNew( $('#' + $nextQ ) , $totalq);
        		 
        	}  
        		activaTab(  $nextQ );
        }

}
    });

request.fail(function (jqXHR, textStatus, errorThrown){

	alert(
		"The following error occurred: " );
});
 





	});






	
});