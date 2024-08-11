<?php
session_start();
// Check if administrator is logged in
if (!isset($_SESSION['Admin'])) {
    header('Location: login.php');
    exit();
}
// Database connection code
$conn = mysqli_connect("localhost", "jtmkpspm_skbbp", "oh2*7_olufWM", "jtmkpspm_skbbp");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Approve user account and set role if requested
if (isset($_GET['approve'])) {
    $user_id = $_GET['approve'];
    $role = $_POST['role']; // Get role from the form
    // Update user status to 'approved' and set role in the database
    $sql_approve = "UPDATE login SET status='Approved', role='$role' WHERE id=$user_id";
    if (mysqli_query($conn, $sql_approve)) {
        $_SESSION['success'] = "Akaun pengguna diluluskan dan ditetapkan peranan dengan jayanya.";
    } else {
        $_SESSION['error'] = "Error approving user account: " . mysqli_error($conn);
    }
}else if (isset($_GET['reject'])) {
    $user_id = $_GET['reject'];
    // Update user status to 'rejected' in the database
    $sql_reject = "UPDATE login SET status='Rejected' WHERE id=$user_id";
    if (mysqli_query($conn, $sql_reject)) {
        $_SESSION['success'] = "Akaun pengguna ditolak dengan jayanya.";
    } else {
        $_SESSION['error'] = "Error rejecting user account: " . mysqli_error($conn);
    }
}

// Fetch pending user accounts from the database
$sql_pending = "SELECT * FROM login WHERE status=''";
$result = mysqli_query($conn, $sql_pending);

if ($result === false) {
    $_SESSION['error'] = "Error fetching pending accounts: " . mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="admin_approval.css"> -->
    <title>Kelulusan Admin</title>
</head>
<style>
    body {
    background-color: #1d324e;
}
h1 {
    text-align: center;
    color: #fff;
}
.container {
    width: 80%;
    margin: 20px auto;
}
table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}
th, td {
    padding: 10px;
    border-bottom: 1px solid #ccc;
    text-align: left;
}
th {
    background-color: #f2f2f2;
    font-weight: bold;
}
td select {
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
    width: calc(100% - 16px); /* Adjust width to fit */
}
.approve-btn {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    background-color: #35C224;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}
.approve-btn:hover {
    background-color: #238917;
}
.reject-btn:hover {
    background-color: #c9302c;
}
.error, .success {
    text-align: center;
    margin-bottom: 10px;
}
.error {
    color: #ff0000;
}
.success {
    color: #007bff;
}
.logout-btn{
    background-color: #d9534f;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}
.logout-btn:hover {
    background-color: #c9302c;
}
.logout-container {
    width: 60%; 
    margin: 0 auto;
    padding: 20px;
    display: flex;
    justify-content: flex-end;
}
.reject-btn {
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    background-color: #d9534f;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}
.reject-btn:hover {
    background-color: #c9302c;
}

/*menu*/
       
nav {
    background: #ffffff; 
    padding: 0px 50px;
    display: flex;
    justify-content: center; 
    max-width: 1300px; 
    margin: 0 auto;
}

.menuItems {
    list-style: none;
    display: flex;
}

.menuItems li {
    margin: 0 20px;
}

.menuItems a {
    text-decoration: none;
    color: #000000; 
    font-size: 18px; 
    font-weight: bold; 
    transition: all 0.3s ease-in-out; 
    position: relative; 
    text-transform: uppercase; 
}

.menuItems a:hover {
    color:#79A5AF; 
    border-bottom: 4px solid #79A5AF;
}
</style>
<body>
    <section>
        <nav>
            <ul class="menuItems">
                <li><a href="admin_approval.php" data-item='admin_approval'>Kelulusan Pentadbir</a></li>
                <li><a href="feedback.php" data-item='feedback'>Maklum Balas </a></li> 
                <li><a href="user.php" data-item='user'>Akaun Pengguna </a></li>
                <li><a href="logout.php" data-item='logout'>Log Keluar</a></li>
            </ul>
        </nav>
    </section>  
    <h1>Kelulusan Pentadbir</h1>
    <div class="container">
        <?php
        if (isset($_SESSION['error'])) {
            echo '<p class="error">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo '<p class="success">' . $_SESSION['success'] . '</p>';
            unset($_SESSION['success']);
        }
        ?>
        <table>
            <tr>
                <th>ID Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>Peranan</th>
                <th>Tindakan</th> <!-- Moved Action to the last column -->
            </tr>
            <?php if ($result !== false) { ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td>
                        <!-- Role selection form -->
                        <form action="?approve=<?php echo $row['id']; ?>" method="POST">
                            <select name="role">
                                <option value="Admin">Pentadbir(Admin)</option>
                                <option value="Staff">Kakitangan</option>
                            </select>
                    </td>
                    <td>
                        <!-- Approve button -->
                        <input type="submit" class="approve-btn" value="Diterima">
                        </form>
                        <!-- Reject button in a separate form -->
                        <form action="?reject=<?php echo $row['id']; ?>" method="POST" style="display:inline;">
                            <input type="submit" class="reject-btn" value="Ditolak">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            <?php } ?>
        </table>
        <div class="logout-container">
        <form action="logout.php" method="post">
            <button type="submit" class="logout-btn">Log Keluar</button>
    </div>
</body>
</html>
