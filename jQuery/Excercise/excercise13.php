<!-- Finds the checked radio input. -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				alert("Radio Value :" + $(":checked").val());
			});
		});
	</script>
</head>
<body>
	<br>
	<tr>
		<td>Gender</td><br>
		<td>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
			<input type="radio" name="gender" value="Jaijij">Jaijij
			<input type="radio" name="gender" value="Saijij">Saijij
			<br><br>
		</td>
	</tr>
	<button>RadioCheck</button>
</body>
</html>