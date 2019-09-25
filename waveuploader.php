<?php

include('db.php');


if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $waveName = $_POST['waveName'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('gif', 'gifv');

    if (in_array($fileActualExt, $allowed)) {
        //allowed
        $target_dir = 'images/' . $waveName . '.' . $fileActualExt;
        move_uploaded_file($fileTmpName, $target_dir);
        header("Location: index.php?uploadsuccess");
    } else {
        header("Location: index.php?uploadfailure");
    }
}

function waveuploader($db, $wavename, $pleasant, $genuine, $wavepivot, $feeling) {

    $waveUpload = $db->query('INSERT INTO `jameswaves`(`name`, `pleasantness`, `genuine`, `wavepivot`, `feeling`) VALUES (\'' . $wavename . '\', \'' . $pleasant . '\', \'' . $genuine . '\', \'' . $wavepivot . '\', \'' . $feeling . '\')');
    return $waveUpload;
};

waveuploader($db, $_POST['waveName'], $_POST['pleasantness'], $_POST['genuine'], $_POST['wavePivot'], $_POST['feeling']);

?>

DELETE FROM `jameswaves` WHERE `name` = $_POST

