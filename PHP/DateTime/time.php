<br><?php
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));
?>
<br>
<br>
<?php
$tzlist = DateTimeZone::listAbbreviations();
print_r($tzlist["acst"]);
?>
<br>
<br>
<?php
$tz=timezone_open("Indian/Kerguelen");
print_r(timezone_location_get($tz));
?>
<br>
<br>
<?php
echo timezone_name_from_abbr("EST") . "<br>";
echo timezone_name_from_abbr("",7200,0);
?>
<br>
<br>
<?php
$tz=timezone_open("Europe/Paris");
echo timezone_name_get($tz);
?>
<br>
<br>
<?php
$tz=timezone_open("Asia/Taipei");
$dateTimeOslo=date_create("now",timezone_open("Europe/Oslo"));
echo timezone_offset_get($tz,$dateTimeOslo);
?>
<br>
<br>
<?php
$timezone = new DateTimeZone("Europe/Paris");
// Procedural style
print_r(reset(timezone_transitions_get($timezone)));
echo "<br><br>";
// Object oriented style
print_r(reset($timezone->getTransitions()));
?>
<br>
<br>
<?php
echo timezone_version_get();
?>