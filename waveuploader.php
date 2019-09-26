<?php
session_start();
include_once('db.php');

/*
 * The below function is designed to take user input and put it into the database, such that
 * it can be shown on the index.php page.
 */

function waveuploader($db, $wavename, $pleasant, $genuine, $wavepivot, $feeling) {

    $waveUpload = $db->prepare('INSERT INTO `jameswaves`(`name`, `pleasantness`, `genuine`, `wavepivot`, `feeling`) VALUES (\'' . $wavename . '\', \'' . $pleasant . '\', \'' . $genuine . '\', \'' . $wavepivot . '\', \'' . $feeling . '\')');
    $waveUpload->execute([]);
};

/*
The below if statement will upload the file, if it's found to be have
been posted, and if it's in the correct format.
*/

if (isset($_POST['submit'])) {
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $waveName = $_POST['waveName'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $target_dir = 'images/' . $waveName . '.' . $fileActualExt;
    $allowed = array('gif', 'gifv');

    if (in_array($fileActualExt, $allowed) && (!file_exists($target_dir){
        move_uploaded_file($fileTmpName, $target_dir);
        waveuploader($db, $_POST['waveName'], $_POST['pleasantness'], $_POST['genuine'], $_POST['wavePivot'], $_POST['feeling']);
        $_SESSION['uploadSuccess'] = true;
        header("Location: index.php?uploadsuccess");
    } else {
        header("Location: index.php?uploadfailure");
        $_SESSION['uploadFailure'] = true;
    }
}
?>


