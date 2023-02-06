<?php error_reporting(-1);

//$year = 1900;
//
//echo '<select border="1" width="100%">';
//
//while ($year <= 2021) {
//    echo "<option>";
//    echo $year;
//    echo "</option>";
//    $year++;
//}
//
//echo '</select>';

echo '<table border="1" width="100%">';

$tr = 1;
while ($tr <= 9) {
    echo "<tr>";
    $td = 1;
    while ($td <= 9) {
        $multiplication = $td * $tr;
        echo "<td> $td * $tr = $multiplication  </td>";
        $td++;
    }
    echo "</tr>";
    $tr++;
}

echo '</table>';