<?php

/*
 * The below is designed to pull the database and turn it into a big array
 * of arrays which can be manipulated elsewhere.
 */

$db = new PDO ('mysql:host=db; dbname=jameswaves', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db-> query('SELECT `id`,`name`, `pleasantness`, `genuine`, `wavepivot` FROM `jameswaves`');

$waves = $query->fetchAll();

?>