<?php
@session_start();
if(@$_SESSION['loginCheck'] != 1)
{
	header('Location:index.php');
	exit();
}
?>

<html>
<head>
	<title>Add Students - Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="add_students.css">
	<script type="text/javascript" src="validation.js"></script>
</head>
<body>
	<div id="container">
		<svg version="1.1" id="icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 	viewBox="0 0 142.8 120.2" style="enable-background:new 0 0 142.8 120.2;" xml:space="preserve">
		<style type="text/css">
			.st0{fill:#01A2FE;}
			.st1{fill:#0070B0;}
			.st2{fill:#CBEBFE;}
		</style>
		<g>
			<g>
				<path class="st0" d="M134.3,32.2c0,27.1,0,54.2,0,81.6c-41.1,0-82,0-123.5,0c0-27.2,0-54.4,0-81.6C52,32.2,93.1,32.2,134.3,32.2z
					 M99.7,103c0.3-2.9-1.1-4.4-2.5-5.8c-4-4.1-9-6.9-14.3-8.9c-5.5-2-5.9-2.8-2.3-7.5c5.2-6.9,5.2-14.6,3.8-22.4
					c-0.9-4.8-4.2-7.5-9.1-8c-4.8-0.5-9.8-0.4-12.4,4.4c-3.2,5.8-3.6,12.5-1.6,18.5c0.9,2.8,2.3,6.1,4.6,8.6c2.9,3.1,1.4,5-2.1,6.1
					c-5.7,1.8-10.7,4.6-15,8.7c-1.7,1.7-3.7,3.4-2.9,6.3C63.9,103,81.7,103,99.7,103z"/>
				<path class="st1" d="M134.3,32.2c-41.2,0-82.3,0-123.5,0c0-7.6,0-15.3,0-23.2c14.9,0,29.7,0,44.5,0c1.4,3-0.1,6.3,1.1,9.8
					c25.7,0,51.6,0,77.6,0C134.8,23.7,134.6,27.9,134.3,32.2z"/>
				<path class="st2" d="M99.7,103c-18,0-35.8,0-53.8,0c-0.8-3,1.1-4.7,2.9-6.3c4.3-4.1,9.3-6.9,15-8.7c3.5-1.1,4.9-3,2.1-6.1
					c-2.3-2.5-3.7-5.8-4.6-8.6c-2-6.1-1.5-12.8,1.6-18.5c2.6-4.7,7.7-4.9,12.4-4.4c4.8,0.5,8.2,3.2,9.1,8c1.4,7.8,1.4,15.5-3.8,22.4
					c-3.5,4.7-3.1,5.5,2.3,7.5c5.4,2,10.3,4.7,14.3,8.9C98.6,98.6,100,100.1,99.7,103z"/>
			</g>
		</g>
		</svg>
		<form id="add_student_form" method="POST" action="add_students_successful.php" onsubmit="return checkForm(this);">
			<p>Student ID:</p> <input type="text" name="id" id="student_id" value="" readonly>
			<p>Name:</p> <input type="text" name="name" required pattern="([A-Z][A-Za-z ,.'`-]{2,40})" title="Enter your Name. First Letter Capital." autocomplete="off">
			<p>User Name:</p> <input type="text" name="username" required pattern="\w+" title="AlphaNumeric only." autocomplete="off">
			<p>Password:</p> <input type="password" name="password" required pattern="((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S" title="Minimum 6 characters, at least 1 uppercase letter, 1 lowercase letter, and 1 number with no spaces.">
			<p>Repeat Password:</p> <input type="password" name="passwordR" required>
			<p>E-mail:</p> <input type="email" name="email" pattern="([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)">
			<script type="text/javascript">
				<?php
				$userlist = file ('users.txt');
				foreach ($userlist as $user) {
			      $user_details = explode('|', $user);
			  	}
			  	?> 
			  	document.getElementById('student_id').value = <?php echo $user_details[0]+1; ?>;
			</script>
			<input class="myButton" type="submit" value="Add student">
		</form>
		
		<form action="admin.php" method="post">
			<input id="back" class="myButton" type="submit" value="Back">
		</form>
	</div>
</body>
</html>
