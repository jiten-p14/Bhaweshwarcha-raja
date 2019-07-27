<?php
session_start();
$host = "localhost"; /* Host name */
$user = "id10307758_admin"; /* User */
$password = "#adminError404"; /* Password */
$dbname = "id10307758_bhaveshwarcharaja"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}