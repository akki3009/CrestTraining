<br>
<?php
$str = "gets the content of all elements, including <script> and <style> elements. In contrast, innerText only shows human-readable elements.";
echo chunk_split($str,5,"-");
?>