<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keselamatan</title>
    <!-- <link rel="stylesheet" type="text/css" href="DasarKeselamatan.css"> -->
      <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
       <script>window.gtranslateSettings = {"default_language":"ms","detect_browser_language":true,"languages":["ms","en"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top"}</script>
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
    width: 100%;
    justify-content: flex-start; 
    margin-top: 95px;
}

.logo-left {
    width: 200px;
    height: auto;
    margin-right: 20px;
}

.text-container {
    text-align: center;
    margin-left: 0; 
}

.text-container h1 {
    margin: 0;
    font-size: 60px;
    color: #ffffff;
}

.text-container p {
    margin: 5px 0 0;
    font-size: 20px;
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

.privacypolicy {

    background-color: #f9f9f9; 
    padding: 20px; 
    border-radius: 10px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    max-width: 800px; 
    margin: 50px auto;
    font-family: sans-serif; 
}
        

.box1 {

    background-color: #f9f9f9; 
    padding: 20px; 
    border-radius: 10px; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    max-width: 800px; 
    margin: 50px auto;
    font-family: sans-serif; 
}
        
.box1 h1 {
    font-size: 30px; 
    color: #333;
}
.box1 .dsr h2 {
    font-size: 20px;
    color: #333;
}
.dsr p {
    font-size: 16px; 
    color: #666; 
    line-height: 1.6; 
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




    <div class="box1">
        <h1>Dasar Keselamatan </h1>
        <ul class="dsr">
            <li>
                <h2>Perlindungan Data</h2>
                <p>Teknologi terkini termasuk penyulitan data adalah digunakan untuk data yang dikemukakan dan pematuhan kepada standard keselamatan yang ketat adalah terpakai untuk menghalang capaian yang tidak dibenarkan</p>
            </li>
            <li>
                <h2>Keselamatan Storan</h2>
                <p>Semua storan elektronik dan penghantaran data peribadi akan dilindungi dan disimpan dengan menggunakan teknologi keselamatan yang sesuai</p>
            </li>
        </ul>
    </div>


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
                <li><a href="https://www.facebook.com" class="icon"><img src="img/fb.png" alt="Facebook"></a></li>
                <li><a href="https://www.instagram.com" class="icon"><img src="img/ig.png" alt="Instagram"></a></li>
                <li><a href="https://www.youtube.com" class="icon"><img src="img/yt.png" alt="YouTube"></a></li>
                <li><a href="https://twitter.com/" class="icon"><img src="img/tw.png" alt="Twitter"></a></li>
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
<script>
    
function decreaseFontSize() {
    let currentSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
    document.body.style.fontSize = (currentSize - 2) + 'px'; // Mengurangkan 2 piksel dari saiz fon semasa
}

function resetFontSize() {
    document.body.style.fontSize = "initial";
}


function increaseFontSize() {
    let currentSize = parseFloat(window.getComputedStyle(document.body, null).getPropertyValue('font-size'));
    document.body.style.fontSize = (currentSize + 2) + 'px'; 
}


document.getElementById("jfontsize-minus").addEventListener("click", () => {
    decreaseFontSize();
});

document.getElementById("jfontsize-default").addEventListener("click", () => {
    resetFontSize();
});


document.getElementById("jfontsize-plus").addEventListener("click", () => {
    increaseFontSize();
});


document.getElementById("white").addEventListener("click", () => {
    document.body.style.backgroundColor = "white";
});


document.getElementById("black").addEventListener("click", () => {
    document.body.style.backgroundColor = "black";
});

document.getElementById("blue").addEventListener("click", () => {
    document.body.style.backgroundColor = "blue";
});

document.getElementById("red").addEventListener("click", () => {
    document.body.style.backgroundColor = "red";
});

</script>


















