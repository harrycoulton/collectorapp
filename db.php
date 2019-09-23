<?php

$db = new PDO ('mysql:host=db; dbname=jameswaves', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db-> query('SELECT `name`, `pleasantness`, `genuine`, `wavepivot` FROM `jameswaves`');

$waves = $query->fetchAll();

?>