<?php

$db = new PDO ('mysql:host=db; dbname=jameswaves', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db-> query('SELECT `name`, `pleasantness`, `genuine`, `wave-pivot` FROM `jameswaves`');

$waves = $query->fetchAll();

foreach ($waves as $wavesarray) {
    echo "<ul>";
    echo $wavesarray['name'] . ":";
    echo "<li> Pleasantness: " . $wavesarray['pleasantness'] . "</li>";
    echo "<li> Genuine?: " . $wavesarray['genuine'] . "</li>";
    echo "<li> Wave pivot: " . $wavesarray['wave-pivot'] . "</li>";
    echo "</ul>";
};

?>