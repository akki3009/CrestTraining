<?php
echo "<br>";
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a)."<br>";
print_r ($a);
?>

<?php
echo "<br>";
$a=array(0=>"red",1=>"green",2=>"blue");
echo array_shift($a);
echo "<br>";
print_r ($a);
?>