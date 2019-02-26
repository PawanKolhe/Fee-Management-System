<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "mini_project";
$display = "";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if(isset($_POST['user_name'])){
	$username = test_input($_POST['user_name']);
	$password = test_input($_POST['pass_word']);
	
	$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$result = mysql_query($sql);

	if(mysql_num_rows($result) == 1){
		$display = "You have successfully logged in!";
	}else {
		if(!$_POST['user_name']){
			$display = "Please enter User-Name and try again.";
		}elseif(!$_POST['pass_word']) {
			$display = "Please enter Password and try again.";
		}else{
			$display = "Invalid entry. Please try again.";
		}
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>