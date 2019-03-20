<?php
function DrawTableSQL ($link, $query, $header = true) {
    $result = $link->query($query);
    $fieldinfo = mysqli_fetch_fields($result);
    echo "<table>";
    if($header) {
        echo "<tr>";
        foreach ($fieldinfo as $val) {
            echo "<th>" . $val->name . "</th>";
        }
        echo "</tr>";
    }
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        foreach ($fieldinfo as $field) {
            echo "<td>" . $row[$field->name] . "</td>";
        }
        echo "</tr>";
    }
    mysqli_free_result($result);
    echo "</table>";
}
$server = "127.0.0.1";
$user = "root";
$pass = "";
$db = "phpgyak";
$link = mysqli_connect($server, $user, $pass, $db);
if(!$link) {
    echo "Hiba a csatlakozásban!" . PHP_EOL;
    exit;
}
echo "Sikeres csatlakozás az adatbázishoz." . PHP_EOL;
echo "<hr>";
DrawTableSQL($link, "SELECT tipus AS marka FROM autok WHERE listaar = 0;");
echo "<hr>";
DrawTableSQL($link, "SELECT tipus AS marka FROM autok;", false);
$link->close();
