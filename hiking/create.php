<?php
include 'connect.php';
if (isset($_POST['send'])) {
    $hike_name = $_POST['hike_name'];
    $difficulty = $_POST['difficulty'];
    $distance = $_POST['distance'];
    $duration = $_POST['duration'];
    $height_difference = $_POST['height_difference'];
    $sqlinsert = "INSERT INTO hiking (hike_name, difficulty, distance, duration, height_difference) VALUES (:hike_name, :difficulty, :distance, :duration, :height_difference)";
    $stmt = $pdo->prepare($sqlinsert);
    if (!$stmt) {
        echo "\nPDO::errorInfo():\n";
        print_r($pdo->errorInfo());
    }
    else {
        $stmt->bindParam(':hike_name', $hike_name);
        $stmt->bindParam(':difficulty', $difficulty);
        $stmt->bindValue(':distance', $distance);
        $stmt->bindParam(':duration', $duration);
        $stmt->bindValue(':height_difference', $height_difference);
    }
//    $stmt->execute();
//    echo 'Hike has been added';
//    header('Location: read.php');
    if (!$stmt->execute()) {
        die('error inserting new record');
    }
    else {
        header('Location: read.php?create');
    }
}
?>
