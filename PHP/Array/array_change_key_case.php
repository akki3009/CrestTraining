<!DOCTYPE html>
<html>
<body>
	<?php
		$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
		print_r(array_change_key_case($age,CASE_UPPER));
		print_r(array_change_key_case($age,CASE_LOWER));
	?>
</body>
</html>
