<!DOCTYPE html>
<html>
<head>
	<title>Boolean</title>
</head>
<body>
	<p id="bool"></p>
	<p id="bool1"></p>
	<script type="text/javascript">
		document.getElementById('bool').innerHTML = 10 > 9;

		var x=0;
		var y=1;
		document.getElementById('bool').innerHTML = Boolean(x);
		document.getElementById('bool').innerHTML = Boolean(y);
		//Value "",null,undefined,0,-0,x,false,NaN  return false boolean value;
		var x="";
		document.getElementById('bool').innerHTML = Boolean(x);
		var x;
		document.getElementById('bool').innerHTML = Boolean(x);
		var x = false;
		document.getElementById('bool').innerHTML = Boolean(x);
		var x = 10 / "H";
		document.getElementById('bool').innerHTML = typeof x;
		document.getElementById('bool1').innerHTML = Boolean(x);

		var x = false;
		var y = new Boolean(false);
		document.getElementById("bool").innerHTML = typeof x + "<br>" + typeof y;
		document.getElementById('bool').innerHTML = (x == y);
		document.getElementById('bool').innerHTML = (x === y);

		var x = new Boolean(false);
		var y = new Boolean(false);
		document.getElementById('bool').innerHTML = (x === y);
	</script>
</body>
</html>