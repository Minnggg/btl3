<?php
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        echo "Kiểm tra lại ID";
    } else {
        $id = $_POST["id"];
      
        $sql = "DELETE FROM driving_licenses WHERE license_id = $id";
      
        if ($con->query($sql) === TRUE) {
            echo "Xoá giấy phép lái xe thành công!";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $con->error;
        }
    }
} else {
    echo "Không nhận được dữ liệu POST";
}
?>