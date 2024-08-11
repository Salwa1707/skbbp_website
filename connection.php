<?php
$conn = new mysqli("localhost", "jtmkpspm_skbbp", "oh2*7_olufWM", "jtmkpspm_skbbp");

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
//else echo'successful';
?>