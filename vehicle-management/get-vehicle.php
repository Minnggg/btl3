<?php
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        echo "Kiểm tra lại ID";
    } else {
        $id = $_POST["id"];
      
        $sql = "SELECT * FROM vehicles WHERE vehicle_id = $id";
      
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo json_encode($row);
        } else {
            echo "Không bản ghi nào được tìm thấy";
        }
    }
} else {
    echo "Không nhận được dữ liệu POST";
}
?>