<?php
require_once '../db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        echo "Kiểm tra lại ID";
    } else {
        $id = $_POST["id"];
      
        $sql = "DELETE FROM vehicles WHERE vehicle_id = $id";
      
        if ($con->query($sql) === TRUE) {
            echo "Xóa thành công";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
} else {
    echo "Không nhận được dữ liệu POST";
}
?>