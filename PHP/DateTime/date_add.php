<br>
<?php 
	$date=date_create("2013-03-15");
	date_add($date,date_interval_create_from_date_string("40 days"));
	echo date_format($date,"Y-m-d");
	echo "<br>";
?>

<?php
$date=date_create_from_format("j-M-Y","15-Mar-2013");
echo date_format($date,"Y/m/d");
?>

<!-- d - Day of the month; with leading zeros
j - Day of the month; without leading zeros
D - Day of the month (Mon - Sun)
l - Day of the month (Monday - Sunday)
S - English suffix for day of the month (st, nd, rd, th)
F - Monthname (January - December)
M - Monthname (Jan-Dec)
m - Month (01-12)
n - Month (1-12)
Y - Year (e.g 2013)
y - Year (e.g 13)
a and A - am or pm
g - 12 hour format without leading zeros
G - 24 hour format without leading zeros
h - 12 hour format with leading zeros
H - 24 hour format with leading zeros
i - Minutes with leading zeros
s - Seconds with leading zeros
u - Microseconds (up to six digits)
e, O, P and T - Timezone identifier
U - Seconds since Unix Epoch
(space)
# - One of the following separation symbol: ;,:,/,.,,,-,(,)
? - A random byte
* - Rondom bytes until next separator/digit
! - Resets all fields to Unix Epoch
| - Resets all fields to Unix Epoch if they have not been parsed yet
+ - If present, trailing data in the string will cause a warning, not an error -->