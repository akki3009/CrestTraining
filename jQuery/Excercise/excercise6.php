<!-- Add options to a drop-down list using jQuery. -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("select").prepend("<option value='Jam'> Jamnagar</option>");
			});
		});
	</script>
</head>
<body>
	<button>Add City</button>
	<table>
		<tr>
			<td>Select City</td>
			<td>
				<select>
					<option value="Amd">Ahmedabad</option>
					<option value="Raj">Rajkot</option>
					<option value="St">Surat</option>
					<option value="Vd">Vadodra</option>
				</select>
			</td>
		</tr>
	</table>
</body>
</html>