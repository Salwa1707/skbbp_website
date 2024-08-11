<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktiviti 2</title>
    <!-- <link rel="stylesheet" type="text/css" href="activities2.css"> -->
    <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
    <script>window.gtranslateSettings = {"default_language":"ms","detect_browser_language":true,"languages":["ms","en"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top"}</script>
    <script src="aktiviti2.js" defer></script>
</head>
<style >
tr{color
    border-bottom: 10px double black;   
}

td {
    padding: 10px;
    vertical-align: top;
}

p {
    color: #333;
    line-height: 1.6;
}
strong {
    font-size: 1.2em;
}
button {
    background-color: #86a4c4;
    color: white;
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}
button:hover {
    background-color: lightblue;
}

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

.maps {
    margin-top: 30px;
}

h1 {
    text-align: center;
    color: white;
}

.contact-info {
    font-size: 15px;
}

form {
    margin-top: 30px;
}

h2{
    color: #ffffff;
    font-size: 35px;
    text-align: center;
}
.next{
    text-align: center;
    font-size: 30px;
    color:white;
}
h3{
    color: #ffffff;
}

footer {
    background: #f0f0f0;
    padding: 20px 0;
    text-align: center;
    color: black;
    width: 70%;
    margin: 20px auto 0 auto;
    position: relative; 
    box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
}

footer .footer-content {
    display: flex;
    justify-content: space-around;
    align-items: flex-start;
    flex-wrap: wrap;
}

footer .map,
footer .address {
    flex: 1;
    padding: 10px;
    box-sizing: border-box;
}

footer .map {
    display: flex;
    flex-direction: column;
    align-items: center;
}

footer .address {
    display: flex;
    flex-direction: column;
    text-align: left;
    line-height:1.7;
}

footer .address p {
    margin-top: 10px;
}

footer .social-icons {
    position: absolute;
    bottom: 30px; 
    right: 195px; 
}

footer .social-icons ul {
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
    justify-content: flex-end;
}

footer .social-icons ul li {
    margin-left: 15px; 
}

footer .social-icons ul li:first-child {
    margin-left: 0; 
}

footer .social-icons ul li a {
    text-decoration: none;
}

footer .social-icons ul li a img {
    width: 30px;
    height: 30px;
}

hr {
    width: 70%;
    height: 3px;
    background-color: #79A5AF;
    border: none;
    margin: 20px auto; 
}
.links {
    display: flex;
    justify-content: center; 
    gap: 10px; 
}

.links a {
    text-decoration: none;
    color: white; 
}

.privacypolicy {

    background-color: #f9f9f9; 
    padding: 20px; 
    border-radius: 10px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    max-width: 800px; 
    margin: 50px auto;
    font-family: sans-serif; 
}
        
.privacypolicy h1 {
    font-size: 30px; 
    color: black;
}
.privacypolicy h2 {
    font-size: 20px;
    color: black;
}
.privacypolicy p {
    font-size: 16px; 
    color: black; 
    line-height: 1.6; 
    text-align: justify;
    
}

.privacypolicy td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.activity-details {
    flex: 1;
}

.activity-details p {
    margin: 0 0 10px;
}

@media (max-width: 768px) {
    .activity-grid {
        flex-direction: column;
        align-items: center;
    }
}

.activity-item img{
    align-items: flex-start;
    padding: 5px;
    width: 270px;
    height: 200px;
    border-radius: 10px;
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
<h1><img src="img/doneaktiviti.png" width="40" height="40">Aktiviti Yang Telah Dijalankan</h1>
<div class="privacypolicy">

    <div class="activity-grid">
        <?php
        $stmt = $conn->prepare("SELECT * FROM activity_update ORDER BY id_no DESC LIMIT 20 ");
        if ($stmt) {
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $file = htmlspecialchars($row['file']);
                $title = htmlspecialchars($row['title']);
                $date = htmlspecialchars($row['date']);
                $describe = htmlspecialchars($row['describe']);
                $link = htmlspecialchars($row['link']);
                echo "<div class='activity-item'>
                        <table>
                        <tr>
                        <td><img src='img/$file' alt='activity image'></td>
                        <td><div class='activity-details'>
                            <p><strong>$title</strong></p>
                            <p><em>$date</em></p>
                            <p>$describe</p>
                            <a href='$link' target='_blank'><button>Selanjutnya...</button></a></td>
                            </tr>
                        </div>
                        </table>
                    </div>";
            }
            $stmt->close();
        } else {
            echo "<p>Error in query execution</p>";
        }
        ?>
    </div>

</div>
<div class="next">
<a href="aktiviti.php" class="next">&laquo; Sebelumnya</a>
</div>

<hr>
<footer>
    <div class="footer-content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4354.517337283881!2d100.42991123222065!3d5.373364424856271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac61a141f5715%3A0x62da3070fd853942!2sSekolah%20Kebangsaan%20Bandar%20Baru%20Perda!5e0!3m2!1sid!2smy!4v1719970352017!5m2!1sid!2smy" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="address">
            <p><strong>Alamat</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sekolah Kebangsaan Bandar Baru Perda,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            14000 Bukit Mertajam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Pulau Pinang, Malaysia
            <br><strong>Email</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:pba0026@moe.edu.my
            <br><strong>No Telephone</strong>:04-5306040</p>
        </div>
        <div class="social-icons">
        <ul>
            <li><a href="https://www.facebook.com/pusatsumber.skbbp.3" class="icon"><img src="img/fb.png" alt="Facebook"></a></li>
            <li><a href="https://www.instagram.com" class="icon"><img src="img/ig.png" alt="Instagram"></a></li>
            <li><a href="https://www.youtube.com/@TVPSSSKBBPBM" class="icon"><img src="img/yt.png" alt="YouTube"></a></li>
            <li><a href="https://x.com/" class="icon"><img src="img/x.png" alt="Twitter"></a></li>
            <li><img src="https://hitwebcounter.com/counter/counter.php?page=14798445&style=0025&nbdigits=7&type=page&initCount=2000" title="Counter Widget" alt="Visit counter For Websites" border="0" />
        </ul>
    </div>
        </div>
    </div>
</footer>


<div class="links">
    <a href="DasarPrivasi.php">Dasar Privasi | </a>
    <a href="DasarKeselamatan.php">Dasar Keselamatan | </a>
    <a href="Penafian.php">Penafian</a>


</body>
</html>