<?php
require_once 'db.php';

$query = "SELECT * FROM traffic_reports";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cổng thông tin tra cứu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- sider -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.5);
            /* Màu nền nửa trong suốt */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- Header Start -->
    <div class="row" style="background-color: #fff;">
        <img class="col-5" style="width: 536px; height: 82px;"
            src="https://dichvucong.gov.vn/p/home/theme/img/header/logo.png" />
        <div class="col-6">
        </div>
        <div class="d-flex align-items-center full-height col-2">
            <button id="scrollButton" style="margin-right: 20px;" type="button" class="btn btn-secondary">Tra cứu</button>
            <button id="loginButton" type="button" class="btn btn-secondary">Đăng nhập</button>
        </div>
    </div>
    <!-- Header End -->
    <div class="container">
        <h2 style="margin-top: 50px;" class="text-center">Tin tức giao thông</h2>
        <div style="margin-top=20px;" id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets\img\tingiaothong1.jpg" class="d-block w-100" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\tingiaothong2.jfif" class="d-block w-100" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="assets\img\tingiaothong3.jpg" class="d-block w-100" alt="Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <div id="searchSection" class="container">
        <!-- Table with stripped rows -->
        <h2 style="margin-top: 50px;" class="text-center">Tra cứu vi phạm giao thông</h2>
        <table id="table-search" class="table table-striped datatable">
            <thead>
                <tr>
                    <th>Biển số xe</th>
                    <th>Lỗi vi phạm</th>
                    <th>
                        Số bằng lái
                    </th>
                    <th>Số tiền phạt</th>
                    <th>Địa điểm</th>
                    <th>Tình trạng</th>
                    <th data-type="date" data-format="YYYY/DD/MM">Ngày vi phạm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <td><?php echo $row['license_plate']; ?></td>
                        <td><?php echo $row['violation_type']; ?></td>
                        <td><?php echo $row['license_number']; ?></td>
                        <td><?php echo $row['fine']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td>
                            <?php echo ($row['is_payment_done'] == 0) ? 'Chưa đóng tiền phạt' : 'Đã đóng tiền phạt'; ?>
                        </td>
                        <td><?php echo $row['report_date']; ?></td>

                    </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->
    </div>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script>
        document.getElementById('loginButton').addEventListener('click', function () {
            window.location.href = 'login.php';
        });
        document.getElementById('scrollButton').addEventListener('click', function() {
            var searchSection = document.getElementById('searchSection');
            searchSection.scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <script src="assets/js/main.js"></script>
</body>

<?php include 'footer.php'; ?>




</html>