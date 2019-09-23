<?php
include('db.php');

function printTiles($waves) {

foreach ($waves as $wavearrays){
        $waveTile = displayWave($wavearrays['name'], $wavearrays['pleasantness'], $wavearrays['genuine'], $wavearrays['wavepivot']);
        echo $waveTile;
}
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