<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form submission to update the record
    $id_no = $_POST['id_no'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $describe = $_POST['describe'];
    $link = $_POST['link'];
    $file = $_FILES['image'];

    // Check if a new file has been uploaded
    if ($file['error'] == UPLOAD_ERR_OK) {
        $image = $file['name'];
        $imageTmpName = $file['tmp_name'];
        $imageFolder = 'img/' . $image;

        // Move the uploaded file to the destination folder
        if (move_uploaded_file($imageTmpName, $imageFolder)) {
            // Update the database record with the new image file name
            $query = "UPDATE activity_update SET title='$title', date='$date', describe='$describe', file='$image', link='$link' WHERE id_no='$id_no'";
        } else {
            echo "Ralat dalam memuat naik gambar.";
            exit;
        }
    } else {
        // If no new file is uploaded, keep the old file name
        $query = "UPDATE activity_update SET title='$title', date='$date', describe='$describe', link='$link' WHERE id_no='$id_no'";
    }

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data telah dikemaskini');
        window.location.href = 'activity_update.php';</script>";
    } else {
        echo "Ralat dalam mengemaskini rekod: " . mysqli_error($conn);
    }
} else {
    // Retrieve the student information to populate the form
    $id_no = $_GET['id_no'];
    $query = "SELECT * FROM activity_update WHERE id_no='$id_no'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $title = $row['title'];
        $date = $row['date'];
        $describe = $row['describe'];
        $file = $row['file'];
        $link = $row['link'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Activity</title>
</head>
<!-- <link rel="stylesheet" type="text/css" href="activity_update.css"> -->
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
    text-align: left;
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
td img{
    width: 270px;
    height: 170px;
}
</style>
<body align="center">
    <h1>Kemaskini Aktiviti</h1>
    <div class="container">
        <form action="engine_update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_no" value="<?php echo $id_no; ?>">
            <label for="title">Tajuk:</label>
            <input type="text" id="title" name="title" value="<?php echo $title; ?>" required><br>
            <label for="date">Tarikh:</label>
            <input type="date" id="date" name="date" value="<?php echo $date; ?>"required><br>
            <label for="describe">Huraian:</label>
            <input type="text" id="describe" name="describe" value="<?php echo $describe; ?>" required><br>
            <label for="image">Muat naik gambar:</label>
            <table>
                <tr>
                    <td><?php echo "<img src='img/$file' alt='activity image'>" ?></td>
                </tr>
            </table>
            <input type="file" id="image" name="image" accept=".jpg, .jpeg, .png">
            <label for="link">Link Youtube/Facebook:</label>
            <input type="url" id="link" name="link" value="<?php echo $link; ?>" required>
            <input type="submit" name="update" value="Kemaskini">
        </form>
        <br>
        <br>
        <div class="logout-container">
            <form action="activity_update.php" method="post">
                <button type="submit" class="logout-btn">Kembali</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
    } else {
        echo "<center><h3>Data not found!</h3></center>";
    }
}
?>
