<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
        <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
        <script>window.gtranslateSettings = {"default_language":"ms","detect_browser_language":true,"languages":["ms","en"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top"}</script>
    <script src="login.js" defer></script>
</head>
<style >
.login-container {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}
h1, h2 {
    color: #333;
    text-align: center;
    margin: 0;
    font-size: 20px;
}
p {
    margin-bottom: 20px;
    font-size: 16px;
}
label {
    display: block;
    margin-bottom: 10px;
    color: #333;
}
input[type="text"], input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 0 10px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
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
.error {
    color: #ff0000;
    font-size: 14px;
    text-align: center;
    margin-bottom: 20px;
}
.content {
    flex: 1; /* Ensures that the main content area grows to fill available space */
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centers the login container vertically */
}


/*header*/
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
    <div class="content">
        <div class="login-container">
            <h2>Log Masuk</h2>
            <?php
            if(isset($_SESSION['error'])) {
                echo '<p class="error">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']);
            }
            ?>
            <form action="validate.php" method="post">
                <input type="text" name="username" placeholder="Nama Pengguna" required>
                <input type="password" name="password" placeholder="Kata Laluan" required>
                <button type="submit" name="login">Log Masuk</button>
            </form>
            <p>Jika anda tidak mempunyai akaun, sila <a href="register.php">daftar</a> di sini.</p>
        </div>
    </div>
    <br>
    <br>
</body>
</html>
