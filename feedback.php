<?php
include "connection.php";

// Handle deletion if 'id_no' is set in the request
if (isset($_REQUEST['id_no'])) {
    $id_no = $_REQUEST['id_no'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM feedback WHERE id_no = ?");
    $stmt->bind_param("i", $id_no);

    if ($stmt->execute()) {
        echo "<script>
                alert('Berjaya memadam maklum balas.');
                window.location = 'feedback.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Gagal maklum balas.');
                window.location = 'feedback.php';
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
    <!-- <link rel="stylesheet" type="text/css" href="feedback.css"> -->
    <title>Feedback</title>
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

    input[type="submit"], button {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 0 10px;
    border: none;
    border-radius: 4px;
    background-color: #35C224;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}
input[type="submit"]:hover, button:hover {
    background-color: #238917;
}
</style>
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
    <h1>Maklum Balas</h1>
    <div class="container">
        <table>
            <tr>
                <th>No.</th>
                <th>Date</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Telefon</th>
                <th>Jantina</th> 
                <th>Mesej</th>
                <th>Cetak</th>
                <th>Padam</th>
            </tr>
            <?php
            $no = 1;
            $query = "SELECT * FROM feedback";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $id_no = $row["id_no"];
                $tarikh = $row["tarikh"];
                $name = $row['name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $gender = $row['gender'];
                $message = $row['message'];
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo htmlspecialchars($tarikh); ?></td>
                <td><?php echo htmlspecialchars($name); ?></td>
                <td><?php echo htmlspecialchars($email); ?></td>
                <td><?php echo htmlspecialchars($phone); ?></td>
                <td><?php echo htmlspecialchars($gender); ?></td>
                <td><?php echo htmlspecialchars($message); ?></td>
                <td>
                    <form action="generate_pdf.php" method="post">
                        <input type="hidden" name="id_no" value="<?php echo $id_no; ?>">
                        <button type="submit" name="print" class="button">Cetak</button>
                    </form>
                </td>

                <td><a href="feedback.php?id_no=<?php echo $id_no;?>" class="logout-btn">Padam</a></td>
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
