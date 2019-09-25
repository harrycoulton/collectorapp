<?php

/*
 * The below is designed to pull the database and turn it into a big array
 * of arrays which can be manipulated elsewhere.
 */



$db = new PDO ('mysql:host=db; dbname=jameswaves', 'root', 'password');

$query = $db-> query('SELECT `name`, `pleasantness`, `genuine`, `wavepivot`, `feeling` FROM `jameswaves`');

$waves = $query->fetchAll();

?>