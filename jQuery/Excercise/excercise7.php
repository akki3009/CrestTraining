<!-- Delete all table rows except first one using jQuery -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("tr :gt(1)").empty();
			});
		});
	</script>
</head>
<body>
	<table border="1">
		<tr>
			<td>Name</td>
			<td>Age</td>
		</tr>
		<tr>
			<td>Akash</td>
			<td>22</td>
		</tr>
		<tr>
			<td>Dhruvil</td>
			<td>21</td>
		</tr>
		<tr>
			<td>Harit</td>
			<td>22</td>
		</tr>
	</table>
	<button>Remove TableRow</button>
</body>
</html>