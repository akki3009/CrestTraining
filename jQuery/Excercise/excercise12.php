<!-- Finds all checkbox inputs. Print count. -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				alert($("input[type='checkbox']").length);
			});
		});
	</script>
</head>
<body>
	<table border="1">
		<tr>
			<td>Language</td>
		</tr>
		<tr>
			<td><input type="checkbox" name ="lan1" value="java">Java<br>
				<input type="checkbox" name ="lan2" value="HTML">HTML<br>
				<input type="checkbox" name ="lan3" value="JQuery">JQUERY<br>
			</td>
		</tr>
	</table><br>
	<button>CheckBox Click</button>
</body>
</html>