<?php
session_start();

if (isset($_POST['register'])) {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Your database connection code goes here
    $conn = mysqli_connect("localhost", "jtmkpspm_skbbp", "oh2*7_olufWM", "jtmkpspm_skbbp");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if username already exists in the database
    $check_query = "SELECT * FROM login WHERE username='$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['error'] = "Nama pengguna telah wujud. Sila pilih nama pengguna lain.";
        header('Location: register.php');
        exit();
    }

    // Insert new user into the database
    $insert_query = "INSERT INTO login (username, name, email, password) VALUES ('$username', '$name', '$email','$password')";
    if (mysqli_query($conn, $insert_query)) {
        $_SESSION['success'] = "Pendaftaran berjaya. Pengguna kini boleh log masuk.";
        header('Location: login.php');
        exit();
    } else {
        $_SESSION['error'] = "Error: " . mysqli_error($conn);
        header('Location: register.php');
        exit();
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <!-- <link rel="stylesheet" type="text/css" href="register.css"> -->
    <script>
        function validateForm() {
            const username = document.forms["registerForm"]["username"].value;
            const name = document.forms["registerForm"]["name"].value;
            const email = document.forms["registerForm"]["email"].value;
            const password = document.forms["registerForm"]["password"].value;

            if (username.length < 5) {
                alert("ID Pengguna mesti sekurang-kurangnya 5 aksara.");
                return false;
            }

            if (name.length < 5) {
                alert("Masukkan nama penuh anda untuk tujuan pengesahan");
                return false;
            }

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Sila masukkan email yang sah.");
                return false;
            }

            if (password.length < 8) {
                alert("Kata laluan mesti sekurang-kurangnya 8 aksara.");
                return false;
            }

            alert("Terima kasih atas pendaftaran anda. Maklumat anda telah dihantar kepada pentadbir. Sila tunggu sebentar.");
            return true;
        }
    </script>
</head>
<style>
    body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    background-color: #1d324e;
}
.container {
    max-width: 400px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    }
h1, h2 {
    color: #333;
    text-align: center
    }
p {
    margin-bottom: 20px;
    color: red;
    }
.admin-login-container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
label {
    display: block;
    margin-bottom: 10px;
    color: #333;
    }
input[type="text"], input[type="password"], input[type="email"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 0 10px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
input[type="submit"] {
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
input[type="submit"]:hover {
    background-color: #238917;
    }
.login-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 10px;
    margin-bottom: 10px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    color: #333;
    }
.login-container .error {
    color: #ff0000;
    font-size: 14px;
    text-align: center;
    margin-bottom: 20px;
    }
.login-container form input[type="text"],
.login-container form input[type="password"] 
.login-container form input[type="email"]{
    width: 95%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    }
.register-container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
.error {
    color: #ff0000;
    font-size: 14px;
    text-align: center;
    margin-bottom: 20px;
    }
button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #35C224;
    color: #fff;
    cursor: pointer;
    }
button:hover {
    background-color:#238917 ;
    }
img{
    width: 70px;
    height: 70px;
}

.school-logo {
    width: 70px;
    height: 70px;
    display: block;
    margin: 0 auto;
}

.warning {
    text-align: center;
    margin-top: 20px;
}
</style>
<body>
    <div class="register-container">
        <h2>Daftar</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo '<p class="error">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
        ?>
        <form name="registerForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return validateForm();">
            <input type="text" name="username" placeholder="ID Pengguna" required>
            <input type="text" name="name" placeholder="Nama Penuh Anda" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Kata Laluan" required>
            <button type="submit" name="register">Daftar</button>
            <br><br>
            <a href="login.php"><button type="button">Kembali</button></a>
        </form>
        <div class="warning">
            <img src="img/alert.png" alt="School Logo" class="school-logo">
            <p><b color="red">Amaran!!</b><b> Pendaftaran hanya boleh dilakukan oleh kakitangan sekolah</b></p>
        </div>
    </div>
</body>
</html>
