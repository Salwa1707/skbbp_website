<?php
include "connection.php";

// Define the minimum and maximum file size for uploads
$minFileSize = 10 * 1024; // 10KB in bytes
$maxFileSize = 3 * 1024 * 1024; // 3MB in bytes

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['title']) && isset($_POST['date']) && isset($_POST['describe']) && isset($_FILES['image']) && isset($_POST['youtubeLink'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $describe = $_POST['describe'];
    $link = $_POST['youtubeLink'];

    // Handle file upload
    if ($_FILES['image']['error'] == 4) {
        echo "<script>alert('Gambar tidak wujud.');</script>";
    } else {
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $tmpName = $_FILES['image']['tmp_name'];

        $validImageExtensions = ['jpg', 'jpeg', 'png'];
        $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (!in_array($imageExtension, $validImageExtensions)) {
            echo "<script>alert('Sambungan imej tidak sah');</script>";
        } elseif ($fileSize < $minFileSize) { // Check against defined min size
            echo "<script>alert('Saiz gambar terlalu kecil');</script>";
        } elseif ($fileSize > $maxFileSize) { // Check against defined max size
            echo "<script>alert('Saiz gambar terlalu besar');</script>";
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;
            if (move_uploaded_file($tmpName, 'img/' . $newImageName)) {
                $stmt = $conn->prepare("INSERT INTO activity_update (title, date, `describe`, file, link) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $title, $date, $describe, $newImageName, $link);

                if ($stmt->execute()) {
                    echo "<script>
                            alert('Berjaya ditambah!');
                            setTimeout(function() {
                                window.location.href = 'activity_update.php';
                            }, 100);
                          </script>";
                } else {
                    echo "<script>
                            alert('Error: " . $stmt->error . "');
                            setTimeout(function() {
                                window.location.href = 'activity_update.php';
                            }, 100);
                          </script>";
                }
                $stmt->close();
            } else {
                echo "<script>alert('Maaf, terdapat ralat semasa memuat naik fail anda.');</script>";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Activity</title>
    <!-- <link rel="stylesheet" href="activity_update.css"> -->
</head>
<style>
body {
    background-color: #1d324e;
    overflow-y: scroll;
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
input[type="text"], input[type="date"], input[type="file"], input[type="url"] {
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
    <h1>Tambah Aktiviti</h1>
    <div class="container">
        <form action="activity_update.php" method="post" enctype="multipart/form-data">
            <label for="title">Tajuk:</label>
            <input type="text" id="title" name="title" required><br>
            <label for="date">Tarikh:</label>
            <input type="date" id="date" name="date" required><br>
            <label for="describe">Huraian:</label>
            <input type="text" id="describe" name="describe" placeholder="Tidak melebihi 100 patah perkataan" required><br>
            <label for="image">Muat naik gambar:</label>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png" required>
            <label for="youtubeLink">Link Youtube/Facebook:</label>
            <input type="url" id="youtubeLink" name="youtubeLink" placeholder="Masukkan URL YouTube atau Facebook" required>
            <input type="submit" name="submit" value="Hantar">
        </form>
    </div>

    <h1>Kemaskini Aktiviti</h1>
    <div class="container">
    <table>
    <tr>
        <th>Bilangan</th>
        <th>Tajuk</th>
        <th>Tarikh</th>
        <th>Huraian</th>
        <th>Edit</th>
        <th>Padam</th>
    </tr>
        <?php

        $no = 1;
        $query ="Select * from activity_update";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {

            $id_no=$row["id_no"];
            $title = $row['title'];
            $date = $row['date'];
            $describe = $row['describe'];
        ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $title; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $describe; ?></td>
        <td><a href="update.php?id_no=<?php echo $id_no;?>" class="edit-btn">Edit</td>
        <td><a href="delete_activity.php?id_no=<?php echo $id_no;?>" class="logout-btn">Padam</td>
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
