
<html>
<?php
session_start();
$user_details[0] = $_SESSION['temp0'];


echo"The subject id and corresponding subject name are <br>";
$sub_id = file ('subjects.txt');

foreach ($sub_id as $subject_id) {
    $sub_id = explode('|', $subject_id);
	echo $sub_id[0].'--->'.$sub_id[2]."<br>";
}
echo'Your id is '.$user_details[0];

/*echo ('<form action="pay_fee.php" method="post"');
echo ('<input type="radio" name="$sub_id[0]" value="$sub_id[2] /> $sub_id[2] <br>);
echo ('</form>');*/



?>
<form method="post" action="pay_fee.php">
	<p>
		Subject ID
 		<input type="text" name="subject_id" >
 	</p>
	<p>
		Day
 		<input type="number" name="day" >
 	</p> 	
 	<p>
		Month
 		<input type="text" name="month" >
 	</p>
 	<p>
		Year
 		<input type="number" name="year" >
 	</p>
 	<p align="center">
		<input type="submit" value="Pay Fee">
	</p>
</form>
</html>