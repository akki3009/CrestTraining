<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?>

<?php
$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));

// positive limit
print_r(explode(',',$str,3));

// negative limit
print_r(explode(',',$str,-1));
?>