<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKBPP</title>
    <!-- <link rel="stylesheet" href="profile.css"> -->
    <script src="https://cdn.gtranslate.net/widgets/latest/dwf.js" defer></script>
    <script>window.gtranslateSettings = {"default_language":"ms","detect_browser_language":true,"languages":["ms","en"],"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top"}</script>
    <script src="profile.js" defer></script>
</head>
<style >
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
    right: 320px; /* Adjust as needed to align with your design */
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


.mv {
    display: flex;
    justify-content: space-between; 
    align-items: flex-start;
   
}

.box {
    border: 1px solid #ccc; 
    padding: 30px; 
    width: 25%; 
    height: 100px; 
    box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
    background-color: #ffffff; 
    margin-top: 30px;
    text-align: center;
    border: 2px solid #000000;
    border-radius: 15px;
}

.m {
    margin-right: auto;
    margin-left: 300px;

}

.v {
    margin-left: auto; 
    margin-right: 300px;
}

.box h2, .box p {
    margin-top: 0; 
    margin-bottom: 10px; 
    padding-top: 0; 
}
hr {
    width: 70%;
    height: 3px;
    background-color: #79A5AF;
    border: none;
    margin: 20px auto; 
}

.logotext {
    background-color: #ffffff;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
    padding: 20px;
    max-width: 850px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    border: 2px solid #000000;
    border-radius: 15px;
}

.logo {
    margin-bottom: 20px;
}

.logo img {
    height: 250px;
    width: auto;
    max-width: 100%;
}

.text1 {
    width: 100%;
    margin: 0 50px;
}

.styled-table {
    width: 90%;
    border-collapse: collapse;
    margin: 25px auto; 
    font-family: sans-serif;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

}

.styled-table th, .styled-table td {
    padding: 12px 15px;
    border: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}


.styled-table tbody td:first-child {
    width: 120px; 
    font-weight: bold;
}



.container {
  display: flex;
  justify-content: center; 
  gap: 1px;
}

.gmbrlagu {
  flex: 1; 
  margin-left: 300px;
}

.gmbrlagu img {
  max-width: 100%;
  height: 98%;
  box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
}

.lagu-box {
  background-color: #ffffff; 
  padding: 20px; 
  max-width: 500px; 
  border: 2px solid #000000;
  border-radius: 15px;
  box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
  flex: 1; 
  margin-right: 300px;
}

.lagu {
  text-align: center; 
  line-height: 1.6; 
  font-style: italic;
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


<div class="mv">
    <div class="box m">
        <h2>MISI</h2>
        <p>Melestarikan sistem pendidikan yang berkualiti untuk membangunkan potensi individu memenuhi aspirasi negara</p>
    </div>
    <div class="box v">
        <h2>VISI</h2>
        <p>Pendidikan berkualiti insan terdidik negara sejahtera</p>
    </div>
</div>

<hr>

<div class="logotext">
    <h2>LOGO SEKOLAH</h2>
    <div class="logo">
        <img src="img/Logo.png" alt="School Logo">
    </div>
    <div class="text1">
        <table class="styled-table">

            <tbody>
                <tr>
                    <td><strong>Nama:</strong></td>
                    <td>Nama sekolah ini diambil sempena nama sebuah bandar baru yang diwujudkan secara terancang.</td>
                </tr>
                <tr>
                    <td><strong>Lokasi:</strong></td>
                    <td>Dilingkungi oleh pusat pengajian tinggi, agensi kerajaan dan swasta serta premis swasta.</td>
                </tr>
                <tr>
                    <td><strong>Warna:</strong></td>
                    <td>Merah yang melambangkan sifat berani dan cekal.</td>
                </tr>
                <tr>
                    <td><strong>Tarikh:</strong></td>
                    <td>Tahun 2002 sekolah ini dibuka.</td>
                </tr>
                <tr>
                    <td><strong>Moto:</strong></td>
                    <td>PENDIDIKAN CEMERLANG WARISAN GEMILANG.</td>
                </tr>
                <tr>
                    <td><strong>Maksud Moto:</strong></td>
                    <td>Setiap individu atau warga sekolah sentiasa ingin melahirkan warisan yang gemilang hasil daripada pendidikan cemerlangan dalam bidang kurikulum mahupun ko-kurikulum. Pembentukan sahsiah  moral dan peribadi mulia adalah  tonggak kerjaya .</td>
                </tr>
                <tr>
                    <td><strong>Alquran:</strong></td>
                    <td>Lambang sumber ilmu yang memantapkan iman dan menjadi paksi pengwujudan masyarakat madani.</td>
                </tr>
                <tr>
                    <td><strong>Bulan Sabit:</strong></td>
                    <td>Mewakili agama Islam sebagai agama rasmi persekutuan.</td>
                </tr>
                <tr>
                    <td><strong>Topi Ijazah:</strong></td>
                    <td>Lambang kemuncak kecemerlangan dan kegemilangan dalam pendidikan.</td>
                </tr>
                <tr>
                    <td><strong>Anak Panah:</strong></td>
                    <td>Lambang generasi melinium yang harus memiliki 8 aspek merangkumi Sains dan Teknologi, Ekonomi, Jati Diri, Sosial, Budaya dan Adat Resam, kecemerlangan dan kegemilangan kurikulum dan kokurikulum agar dapat bersaing di peringkat global.</td>
                </tr>
                <tr>
                    <td><strong>Bulatan Atom:</strong></td>
                    <td>Lambang unsur Sains dan Teknologi. Ia menunjukkan aspirasi integrasi nasional ke arah melahirkan masyarakat yang berteraskan Sains dan Teknologi.</td>
                </tr>
                <tr>
                    <td><strong>Gelung Rotan:</strong></td>
                    <td>Lambang kesukanan sejagat yang menekankan aspek perkembangan kognitif, efektif dan psikomotor serta menghasilkan minda murid yang cerdas.</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



<hr>

<div class="container">
<div class="gmbrlagu">
  <img src="img/gmbrlagu2.png">
</div>


    <div class="lagu-box">
 <div class="lagu">
 
            <h4>LAGU SEKOLAH</h4>
            <p>Guru cemerlang murid gemilang Sekolah terbilang</p>
            <p>Pendidikan cemerlang warisan gemilang Motto sekolah kita</p>

            <p>Bersamalah </p>
            <p>Belajar bergiat untuk maju</p>
            <p> Kasih ibu bapa hormat pada guru </p>
            <P>Terapkan nilai murni</p>

            <p>SKBBP terus maju </p>
            <p>Melahirkan insan yang padu</p>
            <p> Dengan tekad azam dan bakti Berintelek dan bestari</p>

            <p>Bersamalah </p>
            <p>Balajar bergiat untuk maju Kasih ibu bapa hormat pada guru</P>
            <p>Terapkan nilai murni</p>

            <p>SK Bandar Baru Perda</p>
            <p> Menuju ke era jaya</p>
            <p> Dengan semangat wawasan negara</p>
            <p> Berilmu berakhlak mulia (2X)</p>
   
 </div>
  </div>
</div>



<footer>
    <div class="footer-content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4354.517337283881!2d100.42991123222065!3d5.373364424856271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac61a141f5715%3A0x62da3070fd853942!2sSekolah%20Kebangsaan%20Bandar%20Baru%20Perda!5e0!3m2!1sid!2smy!4v1719970352017!5m2!1sid!2smy" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="address">
            <p><strong>Alamat</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :Sekolah Kebangsaan Bandar Baru Perda,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            14000 Bukit Mertajam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Pulau Pinang, Malaysia
            <br><strong>Email</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:pba0026@moe.edu.my
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
</footer>


    <div class="links">
    <a href="DasarPrivasi.php">Dasar Privasi | </a>
    <a href="DasarKeselamatan.php">Dasar Keselamatan | </a>
    <a href="Penafian.php">Penafian</a>
</div>

</body>

</html>


