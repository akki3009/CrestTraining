<!DOCTYPE html>
<html>
<head>
	<title>Operators Example</title>
</head>
<body>
	<b>Arithmetic Operator</b>
	<p id="demo"></p>
	<script type="text/javascript">
		var no1,no2,no3;
		no1=15,no2=5;
		no3=no1 + no2;
		no3=no1 - no2;
		no3=no1 * no2;
		no3=no1 / no2;
		no3=no1 % no2;
		no3=no1 ** no2;
		no3=no1++;
		no3=no2--;
		no3=100+50-14;
		document.getElementById('demo').innerHTML=no3;
	</script>

	<b>Assignment operator</b>
	<p id="assign"></p>
	<script type="text/javascript">
		var num1,num3;
		num1=10,num3=8;
		num3+=2;//10
		num3-=2;//8
		num3*=2;//16
		num3/=2;//8
		num3%=2;//0
		document.getElementById('assign').innerHTML=num3;
	</script>

	<b>String operator</b>
	<p id="String"></p>
	<p id="String1"></p>
	<script type="text/javascript">
		var str1,str2,str3;
		str1="Hello";
		str2="Friends";
		str3="New to javascript";
		var lenth=str3.length;
		document.getElementById('String').innerHTML=lenth;
		document.getElementById('String').innerHTML=str1+ " "+str2+"<br>";
		document.getElementById('String').innerHTML=str1+ "<br>"+str2+"<br>"+str3;
		var x="Akash";
		var y=new String("Akash");
		document.getElementById('String1').innerHTML=typeof x +"<br>" +typeof y;
	</script>


	<b>Comparison operator</b>
	<p id="compare"></p>
	<script type="text/javascript">
		var x,y,ans;
		x=8;
		y=8;
		var z="8";
		ans= x==y;
		ans=x==z;
		ans=x===z;
		ans != x;
		ans !== y; 
		ans= x>7;
		ans= x<7;
		ans= x>=7;
		ans= x<=8;
		ans=(x <10 && y>7);
		ans= (x==10 || y==8);
		ans=!(x == y);
		document.getElementById('compare').innerHTML=ans;
	</script>

	<b>Bitwise operator</b>
	<p id="bitwise"></p>
	<script type="text/javascript">
		var x=~5;
		x = 5 ^ 1;
		x = 5 | 1;
		x = 5 & 1;
		x = 5 << 1;
		x = 5 >> 1;
		document.getElementById('bitwise').innerHTML=x;
	</script>

	<b>Logical operator</b>
	<p id="logic"></p>
	<p id="logic1"></p>
	<script type="text/javascript">
		var x=12;
		var y=10;
		document.getElementById('logic').innerHTML=
		(x >10 && y <10) + "<br>" +
		(x >10 && y >= 10) + "<br> <br>" + 
		"<b>Or Operator ||</b>" + "<br>" + 
		(x > 10 || y >10) + "<br>" +
		(x < 10 || y >10) + "<br>" +
		(x ==10 || y ==10) + "<br>" +
		(x ==12 || y == 5);

		document.getElementById('logic1').innerHTML=
		!(x === y) + "<br>" +
		!(x > y); 
	</script>	
</body>
</html>