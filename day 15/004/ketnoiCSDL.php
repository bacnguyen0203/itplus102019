<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <pre>
        IP máy của bạn : localhost ( trên máy chủ thật : 192.168.2.1)
        Post máy của bạn : 3306
        Username mysql : root
        Password : (rỗng không có gì)
    </pre>

 <?php
 //Ip máy chủ mysql
 $servername = "localhost";
 //username mysql
 $Username = "root";
 //password
 $password = "";
 //Tên cơ sở dữ liệu
 $dbname = "23/12/2019";

 //cú pháp kết nối đến mysql từ php bằng pdo
 try {
     $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $Username, $password);
     //set the PDO error mode to exception
     $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "kết nối đến CSDL thành công: ";
 }
 catch (PDOException $e)
 {
     echo "Kết nối đến CSDL thất bại"  . $e -> getMessage();
     die();
 }

 ?>
</body>
</html>
