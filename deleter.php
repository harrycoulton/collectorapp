<?php
include_once('db.php');

$db->query('DELETE FROM `jameswaves` WHERE `id` =' . $_POST["id"] . ' ');

header('Location: index.php');
?>