<!-- Given a paragraph, Underline all the words of a text using jQuery. -->

<!DOCTYPE html>
<html>
<head>
	<style>
		p span{
			text-decoration: underline;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("p").each(function(){
					var words = $(this).text().split(' ');
					$(this).empty().html(function() {
						for (i = 0; i < words.length; i++) {
							if (i === 0){
								$(this).append('<span>' + words[i] + '</span>');
							}else{
								$(this).append(' <span>' + words[i] + '</span>');
							}
						}
					});
				});
			});
		});
	</script>
</head>
<body>
	<p>Hello Good Morning &nbsp; Given a paragraph Underline all the words of a text using jQuery.</p>
	<button>Underline</button>
</body>
</html>