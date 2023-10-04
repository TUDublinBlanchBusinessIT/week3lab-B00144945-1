<?php 
echo "<table border='1'>";

for ($i = 1; $i <= 15; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= 20; $j++) {
        echo "<td>row$i, col$j</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
