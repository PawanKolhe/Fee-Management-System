<?php
$handle = fopen('subjects.txt','a');
$s_id = $_POST['s_id'];
$fee = $_POST['fee'];
$sub_name = $_POST['sub_name'];

$save_string = PHP_EOL.$s_id."|".$fee."|".$sub_name; //PHP_EOL is for newline.
fwrite($handle, $save_string);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Successful!</title>
	<link rel="stylesheet" type="text/css" href="add_successful.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
	<div id="container">
		<h1 id="successful">Successful!</h1>
		<form action="admin.php" method="post">
			<input class="myButton" id="back" type="submit" value="Back">
		</form>
	<div>
</body>
</html>