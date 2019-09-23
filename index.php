<?php

$db = new PDO ('mysql:host=db; dbname=jameswaves', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db-> query('SELECT `name`, `pleasantness`, `genuine`, `wave-pivot` FROM `jameswaves`');

$waves = $query->fetchAll();

foreach ($waves as $wavesarray) {
    $wavename = $wavesarray['name'];
    $wavepleasantness = $wavesarray['pleasantness'];
    $wavegenuine = $wavesarray['genuine'];
    $wavepivot = $wavesarray['wave-pivot'];
};

?>
