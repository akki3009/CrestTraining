<br><?php
parse_str("name=Peter&age=43");
echo $name."<br>";
echo $age;
?>
<br>
<?php
parse_str("name=Peter&age=43",$myArray);
print_r($myArray);
?>