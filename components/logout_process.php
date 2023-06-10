<?php

session_start();

if (isset($_SESSION['name'])) {
    echo "<script>alert('You have logged out!');</script>";
} else {
    echo "<script>alert('You have not logged in!');</script>";
}

unset($_SESSION['name']);
unset($_SESSION);

session_unset();
session_destroy();

echo "<script>window.location.href = '../index.php';</script>";
exit();
?>
