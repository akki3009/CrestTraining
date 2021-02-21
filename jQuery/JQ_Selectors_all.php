<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
			// $("p").click(function(){
				// $("*").hide();
				// $(this).hide();
				// $("h1.dm").hide();
				// $("p:first").hide();
				// $("ul li:first").hide();
				// $("ul li:first-child").hide();
				// $("[href]").hide();
				// $("a[target='_blank']").hide();
				// $("a[target!='_blank']").hide();
				$(":button").hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("tr:even").css("background-color","yellow");
			$("tr:odd").css("background-color","red");
		});
	</script>
</head>
<body>
	<h1 class="dm">This is Heading</h1>
	<p class="dm">Hello This is new Paragrph</p>
	<p>Hello This is Second Paragrph</p>
	<button>Hide All</button>

	<p>List 1:</p>
	<ul>
	  <li>Coffee</li>
	  <li>Milk</li>
	  <li>Tea</li>
	</ul>

	<p>List 2:</p>
	<ul>
	  <li>Coffee</li>
	  <li>Milk</li>
	  <li>Tea</li>
	</ul>

	<button>List Hide</button>
	<br><br>
	<h1>This is Heading URL</h1>
	<p>Hello This is new Paragrph Of Href</p>
	<p><a href="https://www.google.com/">Google</a></p>
	<p><a href="https://www.youtube.com/">Youtube</a></p>
	<button>Hide URL</button>
	
	<br><br>
	<h1>This is Heading For target.</h1>
	<p>Hello This is new Paragrph Of target</p>
	<p><a href="https://www.google.com/" target="_blank">Google</a></p>
	<p><a href="https://www.youtube.com/">Youtube</a></p>
	<button>Hide URL</button>

	<h1>Welcome to Web Page</h1>
	<table border="1">
	<tr>
	    <th>Company</th>
	    <th>Country</th>
	</tr>
	<tr>
	    <td>Alfreds Futterkiste</td>
	    <td>Germany</td>
	</tr>
	<tr>
	    <td>Berglunds snabbköp</td>
	    <td>Sweden</td>
	</tr>
	<tr>
	    <td>Centro comercial Moctezuma</td>
	    <td>Mexico</td>
	</tr>
	<tr>
	    <td>Ernst Handel</td>
	    <td>Austria</td>
	</tr>
	<tr>
	    <td>Island Trading</td>
	    <td>UK</td>
	</tr>
	</table>
</body>
</html>

<!-- $("*")	Selects all elements -->
<!-- $(this)	Selects the current HTML element -->
<!-- $("p.intro")	Selects all <p> elements with class="intro" -->
<!-- $("p:first")	Selects the first <p> element -->
<!-- $("ul li:first")	Selects the first <li> element of the first <ul> -->
<!-- $("ul li:first-child")	Selects the first <li> element of every <ul> -->
<!-- $("[href]")	Selects all elements with an href attribute -->
<!-- $("a[target='_blank']")	Selects all <a> elements with a target attribute value equal to "_blank" -->
<!-- $("a[target!='_blank']")	Selects all <a> elements with a target attribute value NOT equal to "_blank" -->
<!-- $(":button")	Selects all <button> elements and <input> elements of type="button"	 -->
<!-- $("tr:even")	Selects all even <tr> elements	 -->
<!-- $("tr:odd")	Selects all odd <tr> elements -->