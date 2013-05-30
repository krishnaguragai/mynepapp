<?php
// Source code goes here
$y=2013;
$D=30;
$m=5;

$d=367*$y - 7 * ( $y + ($m+9)/12 ) / 4 + 275*$m/9 + $D - 730530;

print $d;
?>
