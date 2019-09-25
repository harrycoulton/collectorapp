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
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body class="index-body">
<div class="topbar">
    <h1>
        THE MANY WAVES OF DANGEROUS JAMES
    </h1>
    <h2>
        A MAN OF MANY TALENTS
    </h2>
    <a class="add-wave" href="add.php">
        Add new waves here
    </a>
</div>

<div class="wave-area">
<?php
  printTiles($waves);
?>
</div>
</body>
</html>