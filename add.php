<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<form>
    <form method="post" action="">
        <input type="text" name="wavename" placeholder="Name of the wave" required>
        <input type="number" name="pleasantness" placeholder="How pleasant was his wave?" required>
        <input type="text" name="genuine" placeholder="Did he mean it?" required>
        <input type="submit" value="SEND">
    </form>
</form>
</body>
</html>