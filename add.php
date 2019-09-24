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
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="userform">
    <form method="post" action="" >
        <input type="text" name="wavename" placeholder="Name of the wave" required>
        <input type="number" name="pleasantness" placeholder="How pleasant was his wave? Rate if from 0 - 10" required>
        <p>Did he mean it? Was his wave genuine?</p>
        <select>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
        <input type="submit" value="SEND">
    </form>
</div>
</body>
</html>