<?php
$con = mysqli_connect("localhost", "root", "", "if0_36182005_studentsdbms");  // Establishing connection with server name as localhost and username as root and password as .
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
