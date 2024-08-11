<?php
include "connection.php";

// Define the minimum and maximum file size for uploads
$minFileSize = 10 * 1024; // 10KB in bytes
$maxFileSize = 3 * 1024 * 1024; // 2MB in bytes

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $level = isset($_POST['level']) ? $_POST['level'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : ''; 
    $explain = isset($_POST['explain']) ? $_POST['explain'] : '';
    $achievement = isset($_POST['achievement']) ? $_POST['achievement'] : '';
    $url = isset($_POST['link']) ? $_POST['link'] : '';

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 4) {
        echo "<script>alert('Gambar tidak ada');</script>";
    } else {
        $fileName = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
        $fileSize = isset($_FILES['image']['size']) ? $_FILES['image']['size'] : 0;
        $tmpName = isset($_FILES['image']['tmp_name']) ? $_FILES['image']['tmp_name'] : '';

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
                // Prepare and bind SQL statement
                $stmt = $conn->prepare("INSERT INTO achievement (title, level, date, image, about, achievement, URL) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssss", $title, $level, $date, $newImageName, $explain, $achievement, $url);

                if ($stmt->execute()) {
                    echo "<script>
                            alert('Berjaya ditambah!');
                            setTimeout(function() {
                                window.location.href = 'achievement_update.php';
                            }, 100);
                          </script>";
                } else {
                    echo "<script>
                            alert('Ralat: " . $stmt->error . "');
                            setTimeout(function() {
                                window.location.href = 'achievement_update.php';
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
    <title>Pencapaian</title>
    <script>
        function validateForm() {
            var title = document.getElementById("title").value;
            var level = document.getElementById("level").value;
            var date = document.getElementById("date").value;
            var image = document.getElementById("image").value;
            var explain = document.getElementById("explain").value;
            var link = document.getElementById("link").value;
            
            if (title == "") {
                alert("Sila masukkan nama pertandingan");
                return false;
            }
            if (level == "") {
                alert("Peringkat diperlukan");
                return false;
            }
            if (date == "") {
                alert("Sila masukkan tarikh");
                return false;
            }
            if (image == "") {
                alert("Sila muat naik gambar");
                return false;
            }
            if (explain == "" || explain.length > 100) {
                alert("Huraian diperlukan dan tidak boleh melebihi 100 patah perkataan");
                return false;
            }
            if (link == "") {
                alert("Pautan Youtube/Facebook diperlukan");
                return false;
            }
            return true;
        }
    </script>
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
input[type="text"], input[type="date"], input[type="file"], input[type="url"], select[name="achievement"] {
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
    <h1>Tambah Pencapaian</h1>    
    <div class="container">
        <form action="achievement_update.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <label for="title">Nama Pertandingan:</label>
            <input type="text" id="title" name="title" required><br>
            <label for="level">Peringkat:</label>
            <input type="text" id="level" name="level" required><br>
            <label for="date">Tarikh:</label>
            <input type="date" id="date" name="date" required><br>
            <label for="image">Muat naik gambar:</label>
            <input type="file" id="image" name="image" accept="img/*" required>
            <label for="explain">Huraian:</label>
            <input type="text" id="explain" name="explain" placeholder="Tidak melebihi 100 patah perkataan" required><br>
            <label for="achievement">Pencapaian:</label>
            <select name="achievement" id="achievement">
                <option value="Emas">Emas</option>
                <option value="Perak">Perak</option>
                <option value="Gangsa">Gangsa</option>
                <option value="Sagu Hati">Sagu Hati</option>
            </select>
            <label for="link">Pautan Youtube/Facebook:</label>
            <input type="url" id="link" name="link" placeholder="Masukkan URL Youtube atau Facebook" required>
            <br>
            <input type="submit" value="Hantar">
        </form>
    </div>
    <br>
    <h1>Kemaskini Pencapaian</h1>
    <div class="container">
        <table>
            <tr>
                <th>Bilangan</th>
                <th>Nama Pertandingan</th>
                <th>Peringkat</th>
                <th>Tarikh</th>
                <th>Pencapaian</th>
                <th>Edit</th>
                <th>Padam</th>
            </tr>
            <?php
            $no = 1;
            $query = "SELECT * FROM achievement";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $id_no = $row["id_no"];
                $title = $row['title'];
                $level = $row['level'];
                $date = $row['date'];
                $achievement = $row['achievement'];
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $title; ?></td>
                <td><?php echo $level; ?></td>
                <td><?php echo $date; ?></td>
                <td><?php echo $achievement; ?></td>
                <td><a href="update_achievement.php?id_no=<?php echo $id_no;?>" class="edit-btn">Edit</td>
                <td><a href="delete_achievement.php?id_no=<?php echo $id_no;?>" class="logout-btn">Padam</td>
            </tr>
            <?php
                $no++;
            }
            $conn->close();
            ?>
        </table>
        <br>
        <div class="logout-container">
            <form action="logout.php" method="post">
                <button type="submit" class="logout-btn">Log Keluar</button>
            </form>
        </div>
    </div>
</body>
</html>
