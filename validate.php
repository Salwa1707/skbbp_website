<?php
session_start();

if (isset($_POST['username'], $_POST['password'])) {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection code
    $conn = mysqli_connect("localhost", "jtmkpspm_skbbp", "oh2*7_olufWM", "jtmkpspm_skbbp");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Perform a query to validate user credentials
    $sql = "SELECT * FROM login WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['password']) {
            if ($row['role'] == 'Admin') {
                // Admin authentication
                $_SESSION['Admin'] = $username;
                header('Location: admin_approval.php');
                exit();
            } else {
                // Default user authentication
                if ($row['status'] == 'Approved') {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['role'];
                    header('Location: activity_update.php');
                    exit();
                } elseif ($row['status'] == 'Rejected') {
                    $_SESSION['error'] = "Akaun anda telah ditolak. Dipercayai bukan akaun kakitangan sekolah.";
                } else {
                    $_SESSION['error'] = "Akaun anda belum diluluskan. Sila hubungi pentadbir untuk kelulusan.";
                }
            }
        } else {
            $_SESSION['error'] = "Nama pengguna atau kata laluan tidak sah!";
        }
    } else {
        $_SESSION['error'] = "Akaun anda belum didaftarkan. Sila daftar akaun dahulu.";
    }

    mysqli_close($conn);
} else {
    // If login form was not submitted, redirect back to login page
    header('Location: login.php');
    exit();
}

// Redirect back to login page in case of any errors
header('Location: login.php');
exit();
?>