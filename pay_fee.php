<?php
	$suB_id = $_POST['subject_id'];
	$yeaR = $_POST['year'];

	
	//echo $suB_id."  ".$yeaR;
	$c = 0;
	$sub_id = file ('student_subject.txt');

	foreach ($sub_id as $subject_id) {
    	$sub_id = explode('|', $subject_id);
    	//echo $sub_id[0].'--->'.$suB_id."<br>";
    	
    		$temp = (int)$sub_id[3];
    		//var_dump($temp);
    		if($sub_id[0] == $suB_id and $yeaR == $temp){
    			echo "YOU HAVE ALREADY PAID THE FEE FOR THIS SUBJECT";
    			$c = 1;
    			break;
    		}

    }
    if($c == 0){
    	echo'Successful';
}

?>