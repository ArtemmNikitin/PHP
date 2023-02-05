<?php error_reporting( error_level: -1 );

//$seconds_quantity_in_minutes = 60;
//$seconds_quantity_in_our = 60 * 60;
//var_dump("секунд в одном часе: " .  $seconds_quantity_in_our);
//
//$seconds_quantity_per_day = $seconds_quantity_in_our * 24;
//
//var_dump("секунд в одном дне: " .$seconds_quantity_per_day);
//
//
//$seconds_quantity_per_week = $seconds_quantity_per_day * 7;
//
//var_dump("секунд в одной неделе: " .$seconds_quantity_per_week);

$x = 60;

$x *= 60;

var_dump("секунд в одном часе: " .  $x );

$x *= 24;

var_dump("секунд в одном дне: " .  $x );

$x *= 7;

var_dump("секунд в одной неделе: " .  $x );







