<?php
include "connection.php";

$id_no = $_POST['id_no'];
$title = $_POST['title'];
$date = $_POST['date'];
$place = $_POST['place'];
$explain = $_POST['explain'];

// Prepare an SQL statement for execution
$stmt = $conn->prepare("UPDATE announcement SET title=?, date=?, place=?, `explain`=? WHERE id_no=?");

if ($stmt) {
    $stmt->bind_param("ssssi", $title, $date, $place, $explain, $id_no);

    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Berjaya dikemaskini dalam data!!');
        window.location.href = 'announcement.php';</script>";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }
    
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>
