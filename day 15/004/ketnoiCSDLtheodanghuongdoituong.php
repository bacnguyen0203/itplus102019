<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "23/12/2019";

//create connection
$conn = new mysqli($severname, $username, $password, $dbname);

//check connetion
if ($conn -> connect_error) {
    die ("Kết nối thất bại: " . $conn -> connect_errno);
}
echo "Kết nối thành công";
?>

