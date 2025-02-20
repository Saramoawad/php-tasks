<?php
$arr = [
    ["name" => "sara", "age" => 26, "address" => "london inshaa allah"],
    ["name" => "mariam", "age" => 20, "address" => "egypt"],
    ["name" => "mohamed", "age" => 25, "address" => "alex"],
    
];

echo "<table border='1' cellspacing='0' cellpadding='8'>";
echo "<thead><tr>";

foreach (array_keys($arr[0]) as $key) {

    echo "<th>" . ucfirst($key) . "</th>";
}

echo "</tr></thead>";

echo "<tbody>";

foreach ($arr as $row) {

    echo "<tr>";

    foreach ($row as $value)
     {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>