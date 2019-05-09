<?php
$host   = "localhost";
$user   = "root";
$pass   = "praew22";
$dbname = "phpbasicdb";

//เชื่อมต้อฐานข้อมูบ

$connect = mysqli_connect($host, $user, $pass, $dbname);
mysqli_set_charset($connect, 'utf8');

//ตรวจสถานะการเชื่อมต่อ

if ($connect) {
    // echo "success";
} else {
    echo "fail";
}
