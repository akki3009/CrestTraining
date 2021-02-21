
<br>
<!-- str_pad -->
<?php
$str = "Hello World";
echo str_pad($str,20,".");
?>

<br>
<!-- str_repeat-->
<?php
echo str_repeat("Wow",13);
?>

<br>
<br>
<!-- str_replace-->
<?php
echo str_replace("world","Peter","Hello world!");
?>
<br>
<?php
$arr = array("blue","red","green","yellow");
print_r(str_replace("red","pink",$arr,$i));
echo "Replacements: $i";
?>

<br>
<br>
<!-- str_rot13-->
<?php
echo str_rot13("Hello World");
echo "<br>";
echo str_rot13("Uryyb Jbeyq");
?>

<br>
<br>
<!-- str_shuffle-->
<?php
echo str_shuffle("Hello World");
?>

<br>
<br>
<!-- str_split-->
<?php
print_r(str_split("Hello"));
?>
<br>
<?php
print_r(str_split("Hello",3));
?>

<br>
<br>
<!-- str_word_count-->
<?php
echo str_word_count("Hello world !!");
?>
<br>
<?php
print_r(str_word_count("Hello world!",2));
?>

<br>
<br>
<!-- strcasecmp case insensitive-->
<?php
echo strcasecmp("Hello world","Hello WORLD");
echo "<br>";
echo strcasecmp("Hello world","HELLO WORLD");
echo "<br>";
echo strcasecmp("Hello world!","HELLO"); 
echo "<br>";
echo strcasecmp("Hello world!","HELLO WORLD! HELLO!");
?>

<br>
<br>
<!-- strchr-->
<?php
echo strchr("Hello world! Good","world"); // find and rest of string retuen
?>
<br>
<?php
echo strchr("Hello world!",111); //match ascii value and rest of string retuen
?>
<br>
<?php
echo strchr("Hello world!","world",true); //match before string retuen
?>

<br>
<br>
<!-- strcmp case sensitive-->
<?php
echo strcmp("Hello world!","Hello world!");
echo "<br>";
echo strcmp("Hello world!","Hello World!");
?>

<br>
<br>
<!-- strcspn-->
<?php
echo strcspn("Hello world!","w");
?>
<?php
echo strcspn("Hello world!","w",0,6);
?>

<br>
<br>
<!-- strip_tags-->
<?php
echo strip_tags("Hello <b>world!</b>","<b>");
echo strip_tags("Hello <b><i>world!</i></b>","<b><i>");
?>

<br>
<br>
<!-- stripcslashes-->
<?php
echo stripcslashes("Hello \World!");
?>

<br>
<br>
<!-- stripslashes-->
<?php
echo stripslashes("Who\'s Peter Griffin?");
?>

<br>
<br>
<!-- stripos-->
<?php
echo stripos("I love php, I love php too!","PHP");
?>

<br>
<br>
<!-- stristr-->
<?php
echo stristr("Hello world!","WORLD");
?>

<br>
<br>
<!-- strpbrk-->
<?php
echo strpbrk("Hello world!","o");
echo "<br>";
echo strpbrk("Hello world!","W");
echo "<br>";
echo strpbrk("Hello world!","w");
?>

<br>
<br>
<!-- strpos-->
<?php
echo strpos("I love php, I love php too!","php");
?>

<br>
<br>
<!-- strrchr-->
<?php
echo strrchr("Hello world!","world");
?>
<?php
echo strrchr("Hello world! What a beautiful day!", "What");
?>

<br>
<br>
<!-- strrev-->
<?php
echo strrev("Hello World!");
?>

<br>
<br>
<!-- strripos -->
<?php
echo strripos("I love php, I love php too!","PHP");
?>

<br>
<br>
<!-- strrpos -->
<?php
echo strrpos("I love php, I love php too!","php");
?>

<br>
<br>
<!-- strspn -->
<?php
echo strspn("Hello world!","kHlleo");
?>

<br>
<br>
<!-- strstr -->
<?php
echo strstr("Hello world!","world");
?>

<br>
<br>
<!-- strtok -->
<?php
$string = "Hello world. Beautiful day today.";
 $token = strtok($string, " ");
 
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(" ");
   }
?>

<br>
<br>
<!-- strtolower -->
<?php
echo strtolower("Hello WORLD.");
?>

<br>
<br>
<!-- strtoupper -->
<?php
echo strtoupper("Hello WORLD!");
?>

<br>
<br>
<!-- strtr -->
<?php
echo strtr("Hilla Warld","ia","eo");
?>

<br>
<br>
<!-- substr -->
<?php
echo substr("Hello world",6);
?>

<br>
<br>
<!-- substr_compare -->
<?php
echo substr_compare("Hello world","world",6);
?>

<br>
<br>
<!-- substr_count -->
<?php
echo substr_count("Hello world. The world is nice","world");
?>
<br>
<?php
$str = "abcabcab";
echo substr_count($str,"abcab"); // This function does not count overlapped substrings
?>
<br>
<?php
echo $str = "This is nice";
substr_count($str,"is",3,9);
?>

<br>
<br>
<!-- substr_replace -->
<?php
echo substr_replace("Hello","world",0);
?>
<br>
<?php
echo substr_replace("world","Hello ",0,0);
?>