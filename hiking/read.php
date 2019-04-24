<?php
//include connection to database
include 'connect.php';
$stmt = $pdo->query('SELECT * FROM hiking');
if(isset($_GET['create'])){
    $createMessage = 'Hike has been added';
}
if(isset($_GET['update'])){
    $createMessage = 'Hike has been updated';
}
if(isset($_GET['delete'])){
    $createMessage = 'Hike has been deleted';
}
?>
