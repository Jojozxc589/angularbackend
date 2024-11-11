<?php
    // กำหนดค่าการเชื่อมต่อฐานข้อมูล
    $servername = '151.106.124.154';
    $username = 'u583789277_wag7';
    $password = '2567Concept';
    $dbname = 'u583789277_wag7';

    // สร้างการเชื่อมต่อกับฐานข้อมูล
    $connect = new mysqli($servername, $username, $password, $dbname);

    $connect->set_charset("utf8");

    // ตรวจสอบการเชื่อมต่อว่ามีข้อผิดพลาดหรือไม่
    if ($connect->connect_error) {
        die("การเชื่อมต่อล้มเหลว: " . $connect->connect_error);
    }
?>
