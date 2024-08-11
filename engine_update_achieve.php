<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form submission to update the record
    $id_no = $_POST['id_no'];
    $title = $_POST['title'];
    $level = $_POST['level'];
    $date = $_POST['date'];
    $about = $_POST['about'];
    $achievement = $_POST['achievement'];
    $url = $_POST['url'];

    $query = "UPDATE achievement SET title='$title', level='$level', date='$date', about='$about', achievement='$achievement', url='$url' WHERE id_no='$id_no'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data telah dikemaskini!');
        window.location.href = 'achievement_update.php';</script>";
    } else {
        echo "Ralat dalam mengemaskini rekod: " . mysqli_error($conn);
    }
} else {
    echo "Ralat dalam permintaan: kaedah tidak sah.";
}
?>
