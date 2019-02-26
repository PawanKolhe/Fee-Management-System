function autoIncrement () {
	<?php
		$userlist = file ('users.txt');
		foreach ($userlist as $user) {
			$user_details = explode('|', $user);
		}
		echo "$user_details[0]";
	?> 
	document.getElementById('student_id').value = <?php echo $user_details[0]+1; ?>;
}