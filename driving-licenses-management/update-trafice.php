<?php
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'], $_POST['license_plate'], $_POST['violation_type'], $_POST['liscense_number'], $_POST['fine'], $_POST['location'], $_POST['report_date'], $_POST['is_payment_done'])) {
        echo "Hãy điền đủ thông tin";
    } else {
        $id = $_POST["id"];
        $license_plate = $_POST["license_plate"];
        $violation_type = $_POST["violation_type"];
        $license_number = $_POST["license_number"];
        $fine = $_POST["fine"];
        $location = $_POST["location"];
        $report_date = $_POST["report_date"];
        $is_payment_done = $_POST["is_payment_done"];
        $sql = "UPDATE traffic_reports SET 
        license_plate='$license_plate',
        violation_type='$violation_type',
        license_number='$license_number',
        fine='$fine',
        location='$location',
        report_date='$report_date',
        is_payment_done='$is_payment_done'
        WHERE report_id='$id'";
        if ($con->query($sql) === TRUE) {
            echo "Sửa giấy lỗi thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $con->error;
        }
    }
} else {
    echo "Dữ liệu không hợp lệ!";
}
?>