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
<body class="indexbody">
<a class="add-wave" href="add.php">
    Seen James doing a wave? Add it in here!
</a>
<div class="topbar">
    <h1>
        THE MANY WAVES OF DANGEROUS JAMES
    </h1>
    <h2>
        A MAN OF MANY TALENTS
    </h2>
</div>
<div class="wave-area">
<?php
  printTiles($waves);
?>
</div>
</body>
</html>