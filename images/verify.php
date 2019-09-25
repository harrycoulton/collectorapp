<?php
session_start();

$_SESSION['username'] = 'comrade';
$_SESSION['password'] = '$2y$12$fGf67IyN4.zGRbDfKHP/DOgNQplLl0rWr4S8vH/1.wPoQ0F4JIFQu';

$pwdVerified = password_verify($_POST['password'], $_SESSION['password']);

if ($pwdVerified) {
    $_SESSION['loggedIn'] = true;
    header('Location: user-page.php');
} else {
    $_SESSION['loginFail'] = true;
    header('Location: welcome-page.php');
};
?>