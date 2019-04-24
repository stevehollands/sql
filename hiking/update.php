<?php
include 'connect.php';
    $id = $_GET['id'];
    $sqlinsert = 'SELECT * FROM hiking WHERE id= :id';
    $stmt = $pdo->prepare($sqlinsert);
    $stmt->execute([':id'=>$id]);
    foreach ($stmt as $row) {
        $hike_name = $row['hike_name'];
        $difficulty = $row['difficulty'];
        $distance = $row['distance'];
        $duration = $row['duration'];
        $height_difference = $row['height_difference'];
    }
if (isset($_POST['send'])) {
    $hike_name2 = $_POST['hike_name'];
    $difficulty2 = $_POST['difficulty'];
    $distance2 = $_POST['distance'];
    $duration2 = $_POST['duration'];
    $height_difference2 = $_POST['height_difference'];
    $sqlUpdate = "UPDATE hiking SET  hike_name=:hike_name2, difficulty=:difficulty2, distance=:distance2, duration=:duration2, height_difference=:height_difference2 WHERE id=:id";
    $stmt = $pdo->prepare($sqlUpdate);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':hike_name2', $hike_name2);
    $stmt->bindParam(':difficulty2', $difficulty2);
    $stmt->bindValue(':distance2', $distance2);
    $stmt->bindParam(':duration2', $duration2);
    $stmt->bindValue(':height_difference2', $height_difference2);
    if(!$stmt->execute()){
        die('error inserting new record');
    }
    else{
        header('Location: read.php?update');
    }
}
?>