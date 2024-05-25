<?php
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["license_plate"]) || empty($_POST["violation_type"]) || empty($_POST["liscense_number"]) || empty($_POST["fine"]) || empty($_POST["location"])|| empty($_POST["report_date"]) || empty($_POST["is_payment_done"])) {
        echo "Hãy điền đủ thông tin";
    } else {
        $license_plate = $_POST["license_plate"];
        $violation_type = $_POST["violation_type"];
        $liscense_number = $_POST["liscense_number"];
        $fine = $_POST["fine"];
        $location = $_POST["location"];
        $report_date = $_POST["report_date"];
        $is_payment_done = $_POST["is_payment_done"];
        $sql = "INSERT INTO traffic_reports (license_plate, violation_type, license_number, fine, location,report_date,is_payment_done)
        VALUES ('$license_plate', '$violation_type', '$liscense_number', '$fine', '$location', '$report_date', '$is_payment_done')";
    
        if ($con->query($sql) === TRUE) {
            echo "Thêm giấy lỗi thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $con->error;
        }
    }
} else {
    echo "Dữ liệu không hợp lệ!";
}
?>