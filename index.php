<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKBPP</title>
    <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
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

.slider {
    width: 900px;
    height: 250px;
    margin: 0 auto;
    text-align: center;
    overflow: hidden;
    position: relative;
    border: 9px solid black;
    border-radius: 8px;
}

.image-container {
    width: 3600px; 
    height: 250px;
    clear: both;
    position: absolute;
    transition: left 1.5s;
    white-space: nowrap;
}

.slide {
    display: inline-block;
    width: 900px;
    height: 250px;
    object-fit: cover; 
}

.buttons {
    position: absolute;
    bottom: 20px; 
    left: 50%;
    transform: translateX(-50%);
}

.buttons a {
    display: inline-block;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background-color: white;
    margin: 0 5px;
    cursor: pointer;
}

.wrapper {
     background-color: #ffffff; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px; 
    max-width: 900px; 
    margin: 0 auto; 
    display: flex;
    justify-content: space-between; 
    align-items: center; 
    border-radius: 15px ;
    margin-top: 30px;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
}
.wrapper img {
    width: 350px; 
    height: 300px;
    border: 4px solid #000000;
    border-radius: 15px;

}
.text-box {
    max-width: 900px;
    margin-left: 60px;
 }

.text-box p {
    line-height: 1.6; 
    color: #333; 
    text-align: justify;
}

.container {
    background-color: #ffffff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 15px;
    margin-top: 30px;
}

.image2 {
    flex: 1; 
    margin-right: 10px;

}

.image2 img {
    width: 400px; 
    height: 350px;
    border: 4px solid #000000;
    border-radius: 15px;
}

.text2 {
    flex: 2; 
    margin-right: 60px;
    margin-left: 20px;
}

.text2 h2 {
    color: #333;
    margin-top: -120px;
}

.text2 p {
    line-height: 1.6; 
    color: #333; 
    text-align: justify;
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

<br>
<br>

<div class="slider">
    <div class="image-container" id="imageContainer">
        <img src="img/gmbr1.jpg" class="slide">
        <img src="img/gmbr2.jpg" class="slide">
        <img src="img/gmbr3.jpg" class="slide">
        <img src="img/gmbr4.jpg" class="slide">
    </div>
    <div class="buttons">
        <a href="#" class="button" onclick="currentSlide(1)"></a>
        <a href="#" class="button" onclick="currentSlide(2)"></a>
        <a href="#" class="button" onclick="currentSlide(3)"></a>
        <a href="#" class="button" onclick="currentSlide(4)"></a>
    </div>
</div>

<div class="wrapper">
    <img src="img/gambar4.jpg">
    <div class="text-box">
        <h2>Pengenalan</h2>
        <p>Nama Sekolah Kebangsaan Bandar Baru Perda diambil sempena nama sebuah Bandar baru di Bukit Mertajam iaitu Bandar Perda. Sekolah ini dibuka pada bulan Januari 2002 dengan menumpang di bangunan Sekolah Menengah Kebangsaan Bandar Baru Perda. Pada masa itu, jumlah murid adalah seramai 360 orang dan guru seramai 17 orang. Kelas yang dibuka pada masa itu ialah dari tahun satu hingga tahun 4 iaitu sebanyak 12 kelas. Bangunan Sekolah Kebangsaan Bandar Baru Perda siap sepenuhnya pada bulan Mei 2002. Pada 13 Mei 2002 Sekolah Kebangsaan Bandar Baru Perda telah beroperasi sepenuhnya. Pada masa itu kelas yang ada ialah Al-Mawardi, Al-Sufi, Al-Batani dan Al-Farabi.</p>
    </div>
</div>

<hr>

<div class="container">
    <div class="text2">
        <h2>Profil</h2>
        <p>Menjadi pusat kecemerlangan pendidikan yang menyediakan proses pembelajaran dan pemudahcaraan (PdPc) yang pelbagai dan berpusatkan pelajar dalam usaha melahirkan pelajar yang cemerlang yang cemerlang kurikulum, kokurikulum, sahsiah, berdaya saing dan berfikiran global.
            <a href="profile.php">Klik disini</a>
        </p>
    </div>
    <div class="image2">
        <img src="img/gambar2.jpg">
    </div>
</div>

<hr>

<footer>
    <div class="footer-content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4354.517337283881!2d100.42991123222065!3d5.373364424856271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac61a141f5715%3A0x62da3070fd853942!2sSekolah%20Kebangsaan%20Bandar%20Baru%20Perda!5e0!3m2!1sid!2smy!4v1719970352017!5m2!1sid!2smy" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="address">
            <p><strong>Alamat</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:Sekolah Kebangsaan Bandar Baru Perda,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            14000 Bukit Mertajam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Pulau Pinang, Malaysia
            <br><strong>Email</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:pba0026@moe.edu.my
            <br><strong>No Telephone</strong> :04-5306040</p>
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
</div>
</body>
</html>
