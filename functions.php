<?php
include('db.php');


/**
 * The below function loops through each of the rows and outputs them into the
 * placeholders in the displayWave function to create an item-tile for each
 * row in the database.
 *
 * @param $waves is a multidimensional array which contains each row of the database as an array.
 * @return string containing html text to present each wave
 */

function printTiles(array $waves): string
    {
        $waveTile = '';
        foreach ($waves as $wave){
            $waveTile .= displayWave($wave['name'], $wave['pleasantness'], $wave['genuine'], $wave['wavepivot'], $wave['feeling'], $wave['id']);
        }
        return $waveTile;
    }

/*
 * With each row being parsed out into its own array by the above loop, this function
 * will put each of those array values into html format to be echoed in the
 * index file.
 */

/**
 * @param $waveName is a string containing the name of the wave
 * @param $wavePleasant is an integer containing the pleasant rating of the wave
 * @param $waveGenuine is a string containing 'yes' or 'no', to determine if James meant the wave or not
 * @param $wavePivot is a string containing what part of the body the wave was pivoted on
 * @param $waveFeeling is a string containing the emotions felt after seeing James' wave
 * @return string containing the html text to present each wave
 */
function displayWave(string $waveName, int $wavePleasant, string $waveGenuine, string $wavePivot, string $waveFeeling, int $id): string
    {
        $display = '<div class="wave-tile">';
        $display .= '<h3 class="nameofwave">' . $waveName . '</h3>';
        $display .= '<img class="wavegif" src="images/'. $waveName . '.gif">';
        $display .= '<ul>';
        $display .= '<li>Pleasantness: ' . $wavePleasant .'/10</li>';
        $display .= '<li>Genuine: ' . $waveGenuine . '</li>';
        $display .= '<li>Wave-pivot: ' . $wavePivot . '</li>';
        $display .= '</ul>';
        $display .= '<form method="post" action="deleter.php">';
        $display .= '<input hidden name="id" value="' . $id . '">';
        $display .= '<button type="submit"> DELETE </button>';
        $display .= '</form>';
        $display .= '</div>';
        return $display;
    }

?>