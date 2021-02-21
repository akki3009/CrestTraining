<!DOCTYPE html>
<html>
<head>
	<title>Static Method</title>
</head>
<body>
	<b>Class Static</b>
	<p id='clst'></p>
	<script type="text/javascript">
		class Car{
			constructor (name){
				this.name=name;
			}
			static hello(x){
				return "Hello!!!!" + x.name;
			}
		}
		let myCar=new Car("Ford");
		document.getElementById('clst').innerHTML=Car.hello(myCar);
	</script>
</body>
</html>