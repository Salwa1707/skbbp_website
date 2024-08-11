<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['title']) && isset($_POST['date']) && isset($_POST['place']) && isset($_POST['explain'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $place = $_POST['place'];
    $explain = $_POST['explain'];

    $sql = "INSERT INTO announcement (`title`, `date`, `place`, `explain`)
    VALUES ('$title', '$date', '$place', '$explain')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Berjaya dimasukkan ke dalam pengumuman!');
                setTimeout(function() {
                    window.location.href = 'announcement.php';
                }, 100);
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $sql . "\\n" . $conn->error . "');
                setTimeout(function() {
                    window.location.href = 'announcement.php';
                }, 100);
              </script>";
    }
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Announcement</title>
    <!-- <link rel="stylesheet" type="text/css" href="announcement.css"> -->
</head>
<style>
body {
    background-color: #1d324e;
}
.container {
    width: 50%; 
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 5px;
    margin-top: 10px;
}
h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #fff;
}
label {
    display: block;
    margin-bottom: 10px;
}
input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #060270;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color:#497EC4;
}
input[type="text"], input[type="date"], input[type="time"], input[type="place"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: 20px;
}
input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #060270;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color:#497EC4;
}
.logout-btn {
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
    display: flex;
    justify-content: flex-end;
}

.column h1 {
    font-size: 90px;
    margin: 0;
}
.text {
    text-align: left; 
}
.text h1 {
    margin: 0;
    font-size: 20px;
}
.text p {
    margin: 7px 0 0 0;
    font-size: 16px;
}

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

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    text-align: center;
}

.edit-btn {
    background-color: #0077be ;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none;
}
.edit-btn:hover {
    background-color: #191970 ;
}
</style>
<body>
    <section>
        <nav>
            <ul class="menuItems">
                <li><a href="activity_update.php" data-item='activity'>Aktiviti</a></li>
                <li><a href="announcement.php" data-item='announcement'>Pengumuman</a></li>
                <li><a href="achievement_update.php" data-item='achievement'>Pencapaian</a></li>
                <li><a href="logout.php" data-item='logout'>Log Keluar</a></li>
            </ul>
        </nav>
    </section>

        <h1>Tambah Pengumuman</h1>
    <div class="container">
        <form action="announcement.php" method="post">
            <label for="title">Tajuk:</label>
            <input type="text" id="title" name="title" value="" required><br>
            <label for="date">Tarikh:</label>
            <input type="date" id="date" name="date" value="" required><br>
            <label for="place">Tempat:</label>
            <input type="place" id="place" name="place" value="" required><br>
            <label for="explain">Huraian:</label>
            <input type="text" id="explain" name="explain" value="" placeholder="Tidak melebihi 50 patah perkataan" required><br>
            <input type="submit" name="insert" value="Hantar">
        </form>
    </div>

        <h1>Kemaskini Pengumuman</h1>
    <div class="container">
    <table>
    <tr>
        <th>Bilangan</th>
        <th>Tajuk</th>
        <th>Tarikh</th>
        <th>Tempat</th>
        <th>Huraian</th>
        <th>Edit</th>
        <th>Padam</th>
    </tr>
        <?php

        $no = 1;
        $query ="Select * from announcement";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {

            $id_no=$row["id_no"];
            $title = $row['title'];
            $date = $row['date'];
            $place = $row['place'];
            $explain = $row['explain'];
        ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $title; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $place; ?></td>
        <td><?php echo $explain; ?></td>
        <td><a href="update_announcement.php?id_no=<?php echo $id_no;?>" class="edit-btn">Edit</td>
        <td><a href="delete_announcement.php?id_no=<?php echo $id_no;?>" class="logout-btn">Padam</td>
    </tr>

    <?php
    $no++;
    }
    ?>
    </table>
    <br>
        <div class="logout-container">
        <form action="logout.php" method="post">
        <button type="submit" class="logout-btn">Log Keluar</button>
        </div>
    </div>
</body>
</html>