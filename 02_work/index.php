<?php error_reporting(-1);

$year = 1900;

echo '<select border="1" width="100%">';

while ($year <= 2021) {
    echo "<option>";
    echo $year;
    echo "</option>";
    $year++;
}

echo '</select>';