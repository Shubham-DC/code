<?php
//echo "hi sa";die;
session_start();
$host = "127.0.0.1:3306"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "mudra"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
//echo "hi sa";die;
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}