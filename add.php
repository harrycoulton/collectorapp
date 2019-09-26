<?php
include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GIMME YO WAVE</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body class="add-body">
<a class="add-wave" href="index.php">
    Home
</a>
<div class="userformwrapper">
    <form method="POST" action="waveuploader.php" class="userform" name="waveuploaderform" enctype="multipart/form-data">
       <div class="namefield"> Name of the wave:
           <input type="text" name="waveName" required></div>
        <div>How pleasant was his wave? Rate it from 0 - 10
            <input type="number" name="pleasantness" min="0"
                   max="10" required></div>
        <div>Did he mean it? Was his wave genuine?
            <select name="genuine">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select></div>
        <div>What part of James' body was the wave pivoted on?
            <select name="wavePivot">
                <option value="knuckle">Knuckle</option>
                <option value="wrist">Wrist</option>
                <option value="elbow">Elbow</option>
                <option value="shoulder">Shoulder</option>
                <option value="hips">Hips</option>
                <option value="the soul">The Soul</option>
            </select></div>
        <div>How did you feel after seeing James' wave?
            <select name="feeling">
                <option value="happiest I've been in a long time">Happiest I've been in a long time</option>
                <option value="I had to call my mum">I had to call my mum</option>
                <option value="upset">Upset</option>
                <option value="disturbed">Disturbed</option>
                <option value="uncomfortable">Uncomfortable</option>
                <option value="motivated">Motivated</option>
                <option value="horny">Horny</option>
                <option value="disturbed & horny">Disturbed and Horny</option>
            </select></div>
        <div>Please upload a gif of James doing a wave:
            <input type="file" name="file" id="file"></div>
        <input type="submit" name="submit" class="submit">
    </form>
</div>
</body>
</html>