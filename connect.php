<?php
// connection.php
$con = mysqli_connect("localhost", "jtmkpspm_skbbp", "oh2*7_olufWM", "jtmkpspm_skbbp");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
