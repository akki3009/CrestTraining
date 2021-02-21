<!DOCTYPE html>
<html>
<head>
	<title>Example 2</title>
</head>
<body>
	<b>Check Positive and Negative</b>
	<p id="pos_neg"></p>
	<script type="text/javascript">
		function posNeg(num1,num2){
			if((num1 >0 && num2 < 0) || (num1 < 0 && num2 > 0)){
				return true;
			}
			else
			{
				return false;
			}
		}
		document.getElementById('pos_neg').innerHTML = 
		"The Number is postive and Negative <br>"+
		posNeg(10,-5) + "<br>" +
		posNeg(-5,10) + "<br>" +
		posNeg(5,10) + "<br>";
	</script>
</body>
</html>