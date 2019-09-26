<?php
include_once('db.php');

$tileDeleter = $db->prepare('DELETE FROM `jameswaves` WHERE `id` =' . $_POST["id"] . ' ');
$tileDeleter->execute([]);

header('Location: index.php');
?>