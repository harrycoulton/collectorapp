<?php
session_start();
include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en"
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LET'S GET WAVEY</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body class="index-body">
<a class="add-wave" href="add.php">
    Add new waves here
</a>
<div class="topbar">
    <?php
    if (isset($_SESSION['uploadSuccess'])){
        echo '<p class="successMessage">Wave uploaded successfully</p> ';
    } elseif (isset($_SESSION['uploadFailureDuplicate'])) {
        echo '<p class="failureMessage">Wave upload failed: Duplicate wave</p>';
    } elseif (isset($_SESSION['uploadFailure'])) {
        echo '<p class="failureMessage">Wave upload failed: Not a gif!</p>';
    }
    ?>
    <h1>
        THE MANY WAVES OF DANGEROUS JAMES
    </h1>
    <h2>
        A MAN OF MANY TALENTS
    </h2>
    <h2>
        What's your favourite wavourite?
    </h2>
</div>
<div class="wave-area">
<?php
  echo printTiles($waves);
  session_destroy();
?>
</div>
</body>
</html>