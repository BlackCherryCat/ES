<?php
$numcolor = range(1, 20, 1);
shuffle($numcolor);
unset($numcolor[15],$numcolor[16],$numcolor[17],$numcolor[18],$numcolor[19]);

echo "<head>
<style>
.par {
  color: blue;
}
.impar {
  color: red;
}
</style>
</head>";

echo "<h3>Array numcolor</h3>";
echo "<table>";
echo "<tr>";
foreach ($numcolor as $key => $value) {
    echo "<td>" . $key . "</td>";
}
echo "</tr>";

echo "<tr>";
foreach ($numcolor as $key => $value) {
    if ($value % 2 == 0) {
        echo "<td class=\"par\">" . $value . "</td>";
    } else {
        echo "<td class=\"impar\">" . $value . "</td>";
    }
}
echo "</tr>";
echo "</table>";
