<?php
echo "<table border=1>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($i2 = 1; $i2 <= 10; $i2++) {
        $num+=10;
        echo "<td>" . $num . "</td>";
    }
    echo "</tr>";
}
echo "<table/>";
