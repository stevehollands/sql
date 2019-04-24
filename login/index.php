<?php
session_start();
include 'connect.php';
if(isset($_GET['error'])){
    $message = $_SESSION['error'];
}
if(isset($_GET['wrong'])){
    $message = $_SESSION['wrongData'];
}
?>