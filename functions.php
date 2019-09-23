<?php

$db = new PDO ('mysql:host=db; dbname=jameswaves', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db-> query('SELECT `name`, `pleasantness`, `genuine`, `wavepivot` FROM `jameswaves`');

$waves = $query->fetchAll();


foreach ($waves as $wavearrays){
        $waveName = $wavearrays['name'];
        $wavePleasant = $wavearrays['pleasantness'];
        $waveGenuine = $wavearrays['genuine'];
        $wavePivot = $wavearrays['wavepivot'];
        $waveTile = displayWave($waveName, $wavePleasant, $waveGenuine, $wavePivot);
        echo $waveTile;
}


function displayWave($waveName, $wavePleasant, $waveGenuine, $wavePivot){
    $display = '<div class="wave-tile">';
    $display .= '<h3 class="nameofwave">' . $waveName . '</h3>';
    $display .= '<ul>';
    $display .= '<li>Pleasantness: ' . $wavePleasant .'</li>';
    $display .= '<li>Genuine: ' . $waveGenuine . '</li>';
    $display .= '<li>Wave-pivot: ' . $wavePivot . '</li>';
    $display .= '</ul>';
    $display .= '</div>';
    return $display;
}


?>