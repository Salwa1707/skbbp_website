<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = '+6' . $_POST['phone']; // Add country code
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback (`name`, `email`, `phone`, `gender`, `message`)
    VALUES ('$name', '$email', '$phone', '$gender', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Terima kasih telah menghantar maklum balas.');
                setTimeout(function() {
                    window.location.href = 'Contact us.php';
                }, 100);
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $sql . "\\n" . $conn->error . "');
                setTimeout(function() {
                    window.location.href = 'Contact us.php';
                }, 100);
              </script>";
    }
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <!-- <link rel="stylesheet" type="text/css" href="contact.css"> -->
  <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
    <script>window.gtranslateSettings = {"default_language":"ms","detect_browser_language":true,"languages":["ms","en"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top"}</script>
    <script src="index.js" defer></script>
</head>

<style>
    body {
background-color:#1d324e ;
font-family: sans-serif;

}
header {
    background-image: url("img/Game.png");
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat;

    height:453px;
    width: 1510px;

    /*height:453px;
    width: 1550px;*/
}
.bc {
    width: 100%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
}

.kddk {
    width: 100px;
    background-color: #F5C061;
}

.kddk img {
    width: 100px;
}

.btns_const {
    display: flex;
    gap: 10px;
    order: 1;
    position: absolute;
    top: 5px;
    right: -4px;
}

.btn {
    width: 15px;
    height: 15px;
    border: 2px solid black;
    cursor: pointer;
    border-radius: 50%;
    transition: all 0.3s;
}

.btn:hover {
    transform: scale(1.1);
}

.btn:nth-child(1) {
    background-color: white;
}

.btn:nth-child(2) {
    background-color: black;
}

.btn:nth-child(3) {
    background-color: blue;
}

.btn:nth-child(4) {
    background-color: red;
}

.jfontsize {
    display: flex;
    align-items: center;
    gap: 1px;
    position: absolute;
    top: 5px;
    right: 320px; 
}

.jfontsize-button {
    font-size: 1.2em;
    text-decoration: none;
    color: white;
    padding: 1px 10px;
}

.jfontsize-button:hover {
    background-color: #f0f0f0;
}

.content {
    margin: 20px;
}

.banner {
  display: flex;
  align-items: center;
  padding: 20px;
  margin-bottom: 170px;
}

.logo-left {
  width: 200px; 
  height: auto;
  margin-right: 20px; 
  margin-top: 100px;
}

.text-container {
  text-align: center;  
  margin-top: 100px;

}

.text-container h1 {
  margin: 0;
  font-size: 60px;
  color: #ffffff;
}

.text-container p {
  margin: 5px 0 0;
  font-size: 20px;
}

.text-container p {
    margin: 0; 
    padding-bottom: 10px; 
    color: #ffffff;
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

.container {
    max-width: 900px;
    margin: 0 auto; 
    padding: 20px;
    border: 3px solid;
    border-radius: 20px;
    display: flex;
    background-color: #f0f0f0;
    margin-top: 20px;
}

.left-column {
    flex: 2;
    padding: 40px;
    color: black;
}

.maps {
    margin-top: 30px;
}

.right-column {
    flex: 2;
    padding: 30px;
    background-color: #f9f9f9;
}

h1 {
    text-align: center;
}

.contact-info {
    font-size: 15px;
}

form {
    margin-top: 30px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
textarea,
select {
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

textarea {
    height: 100px;
}

button[type="submit"] {
    background-color: #3a649c; 
    width: 100%;
    color: #fff;
    padding: 10px 20px;
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    transition: background-color 0.3s; 
}

button[type="submit"]:hover {
    background-color: #497ec4;
}


input[type="text"],
input[type="email"],
input[type="tel"],
textarea,
select {
    box-sizing: border-box;
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

textarea {
    height: 100px;
}

button[type="submit"] {
    background-color: #3a649c; 
    width: 100%;
    color: #fff;
    padding: 10px 20px;
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    transition: background-color 0.3s; 
}

button[type="submit"]:hover {
    background-color: #497ec4;
}

</style>

<body>
<header>

    <div class="bc">
        <div class="keddk"></div>
        <div class="menu-container">
            <div class="btns_const">
                <div class="btn" id="white"></div>
                <div class="btn" id="black"></div>
                <div class="btn" id="blue"></div>
                <div class="btn" id="red"></div>
                <div class="gtranslate_wrapper"></div>
            </div>
            <div class="jfontsize">
                <a class="jfontsize-button" id="jfontsize-minus">A-</a>
                <a class="jfontsize-button" id="jfontsize-default">A</a>
                <a class="jfontsize-button" id="jfontsize-plus">A+</a>
            </div>
        </div>
    </div>


<div class="banner">
  <img src="img/Logo.png" alt="Logo 1" class="logo-left">
  <div class="text-container">
    <h1>SKBBP</h1>
    <p>Sekolah Kebangsaan Bandar Baru Perda,<br>14000 Bukit Mertajam,<br> Pulau Pinang, Malaysia</p>
  </div>
</div>

</header>


<section>
    <nav>
        <ul class="menuItems">
              <li><a href="index.php" data-item='Home'>UTAMA</a></li>
            <li><a href="profile.php" data-item='menu2'>PROFIL </a></li>
            <li><a href="https://lookerstudio.google.com/reporting/9a0c2573-cf60-4c8d-aace-882ebca56314" data-item='menu2'>STATISTIK</a></li>    
            <li><a href="aktiviti.php" data-item='menu3'>AKITIVITI</a></li>
            <li><a href="pencapaian.php" data-item='menu3'>PENCAPAIAN</a></li>
            <li><a href="login.php" data-item='login'>LOG MASUK</a></li>
            <li><a href="Contact us.php" data-item='login'>HUBUNGI KAMI</a></li>
        </ul>
    </nav>
</section>  
<div class="container">
    <div class="left-column">
        <h2>Maklumat </h2>
        <p class="contact-info">
            Alamat: Sekolah Kebangsaan Bandar Baru Perda,14000 Bukit Mertajam Pulau Pinang, Malaysia<br><br>
            Bandar:  Bukit Mertajam<br><br>
            Email: pba0026@moe.edu.my<br><br>
            No Telephone: 04-5306040
        </p>

        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4445.38101352848!2d100.43020727972295!3d5.373483902965559!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac61a141f5715%3A0x62da3070fd853942!2sSekolah%20Kebangsaan%20Bandar%20Baru%20Perda!5e0!3m2!1sid!2smy!4v1719968363848!5m2!1sid!2smy" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="right-column">
        <h2>Hubungi kami </h2>

        <form method="POST" onsubmit="return validateForm()">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Sila masukkan nama anda" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Sila masukkan email anda" required>

            <label for="phone">Nombor Telefon:</label>
            <input type="tel" id="phone" name="phone" placeholder="Sila masukkan nombor telefon anda" required>

            <label for="gender">Jantina:</label>
            <select id="gender" name="gender">
                <option value="Lelaki">Lelaki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="message">Mesej:</label>
            <textarea id="message" name="message" placeholder="Terhad kepada 100 patah perkataan" ></textarea>

            <button type="submit" value="Submit">Hantar</button>
        </form>
    </div>
</div>

<script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var message = document.getElementById("message").value;

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        var phonePattern = /^\d{10,12}$/;

        if (name.length < 4) {
            alert("Nama mesti mengandungi sekurang-kurangnya 4 huruf.");
            return false;
        }

        if (!email.match(emailPattern)) {
            alert("Alamat email tidak sah. Mesti mengandungi @.");
            return false;
        }

        if (!phone.match(phonePattern)) {
            alert("Nombor telefon tidak sah Cth: 0123456789 (10-12 digit diperlukan)");
            return false;
        }

        if (message === "") {
            alert("Mesej mestilah diisi.");
            return false;
        }

        return true;
    }
</script>
</body>
</html>