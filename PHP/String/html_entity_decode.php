<?php
$str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);
?>

<br>
<!-- htmlentities -->
<?php
$str = '<a href="https://www.w3schools.com">Go to w3schools.com</a>';
echo htmlentities($str);
?>

<br>
<!-- htmlspecialchars_decode -->
<?php
$str = "This is some &lt;b&gt;bold&lt;/b&gt; text.";
echo htmlspecialchars_decode($str);
?>

<br>
<!-- htmlspecialchars -->
<?php
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>