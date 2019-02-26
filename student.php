<?php
@session_start();
if(@$_SESSION['loginCheck'] != 2)
{
	header('Location:index.php');
	exit();
}
$user_details[1] = $_SESSION['temp1'];
$user_details[0] = $_SESSION['temp0'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student - Panel</title>
	<link rel="stylesheet" type="text/css" href="student.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="container">
		<div id="info">
		<?php
			echo'<p>Welcome <b>'.$user_details[1].'</b> to the FMS.</p>';
			echo"<p>Your id is : <b>".$user_details[0]."</b></p>";
				
			echo"The subject id and corresponding subject name are <br>";
			$sub_id = file ('subjects.txt');

			foreach ($sub_id as $subject_id) {
	   			$sub_id = explode('|', $subject_id);
     	        echo $sub_id[0].'--->'.$sub_id[2]."<br>";
			}
		?>
		</div>
		<!--Log Out-->
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
		<form action="logout.php" method="post">
			<input class="myButton" id="logout" type="submit" name="logout" value="Log Out">
		</form>
	</div>
</body>
</html>