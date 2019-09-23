<?php
include('db.php');

/*
 * The below function loops through each of the rows and outputs them into the
 * placeholders in the displayWave function to create an item-tile for each
 * row in the database.
 */

function printTiles($waves) {

foreach ($waves as $wavearrays){
        $waveTile = displayWave($wavearrays['name'], $wavearrays['pleasantness'], $wavearrays['genuine'], $wavearrays['wavepivot']);
        echo $waveTile;
}
}

/*
 * With each row being parsed out into its own array by the above loop, this function
 * will put each of those array values into html format to be echoed in the
 * index file.
 */
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