<?php
include "connection.php";
$id_no = $_REQUEST['id_no'];

$sql = "DELETE FROM activity_update WHERE id_no=$id_no";
if ($conn->query($sql) === TRUE) {
    ?>
    <script>
        alert('Berjaya memadam aktiviti.');
        window.location = 'activity_update.php';
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
