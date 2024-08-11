<?php
include "connection.php";

// Handle deletion if 'id_no' is set in the request
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM login WHERE id = ? AND status = 'Approved'");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>
                alert('Berjaya memadam akaun pengguna.');
                window.location = 'user.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Gagal memadam akaun pengguna.');
                window.location = 'user.php';
              </script>";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <title>Padam Akaun Pengguna</title>
</head>
<body>
    <section>
        <nav>
            <ul class="menuItems">
                <li><a href="admin_approval.php" data-item='admin_approval'>Kelulusan Pentadbir</a></li>
                <li><a href="feedback.php" data-item='feedback'>Maklum Balas</a></li> 
                <li><a href="user.php" data-item='user'>Akaun Pengguna</a></li> 
                <li><a href="logout.php" data-item='logout'>Log Keluar</a></li>
            </ul>
        </nav>
    </section>  
    <h1>Padam Akaun Pengguna</h1>
    <div class="container">
        <table>
            <tr>
                <th>No.</th>
                <th>ID Pengguna</th>
                <th>Email</th>
                <th>Tindakan</th>
            </tr>
            <?php
            $no = 1;
            // Fetch only approved accounts
            $query = "SELECT * FROM login WHERE status = 'Approved'";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id"];
                $username = $row['username'];
                $email = $row['email'];
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo htmlspecialchars($username); ?></td>
                <td><?php echo htmlspecialchars($email); ?></td>
                <td><a href="user.php?id=<?php echo $id;?>" class="logout-btn">Padam</a></td>
            </tr>
            <?php
                $no++;
            }
            ?>
        </table>
        <div class="logout-container">
            <form action="logout.php" method="post">
                <button type="submit" class="logout-btn">Log Keluar</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
