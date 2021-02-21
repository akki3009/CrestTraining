<!DOCTYPE html>
<html>
<body>

<?php
$a1=array("a"=>"red","b"=>"green","e"=>"blue");
$a2=array("a"=>"red","c"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);
print_r($result);
?>

</body>
</html>