<?php
session_start();
if(!isset($_SESSION["una"]))
{
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>ZaidAliT</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" href="css/style.css" media="all" />
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php include 'config.php'; ?>
</head>