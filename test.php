<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<input type="text" name="s_id" id="subject_id" readonly>
	<script type="text/javascript">
			<?php
				$subjectlist = file ('subjects.txt');
				foreach ($subjectlist as $subject) {
					$subject_details = explode('|', $subject);
				}
				$id = substr($subject_details[0], -1);
				$joined = 's'.$id;
			?> 

			document.getElementById('subject_id').value = "<?php echo $joined; ?>";
	</script>

</body>
</html>