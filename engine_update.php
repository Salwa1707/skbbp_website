<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_no = $_POST['id_no'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $describe = $_POST['describe'];
    $link = $_POST['link'];

    // Fetch current values for file and link
    $query = $conn->prepare("SELECT file, link FROM activity_update WHERE id_no=?");
    $query->bind_param("i", $id_no);
    $query->execute();
    $query->bind_result($current_file, $current_link);
    $query->fetch();
    $query->close();

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $file = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileFolder = 'img/' . $file;

        if (!move_uploaded_file($fileTmpName, $fileFolder)) {
            echo "Error uploading the image.";
            exit;
        }
    } else {
        $file = $current_file;  // Use current file if no new file is uploaded
    }

    // Prepare an SQL statement for execution
    $stmt = $conn->prepare("UPDATE activity_update SET title=?, date=?, `describe`=?, file=?, link=? WHERE id_no=?");

    if ($stmt) {
        $stmt->bind_param("sssssi", $title, $date, $describe, $file, $link, $id_no);

        if ($stmt->execute() === TRUE) {
            echo "<script>alert('Berjaya dikemaskini!');
            window.location.href = 'activity_update.php';</script>";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    $conn->close();
}
?>
