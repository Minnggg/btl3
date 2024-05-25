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

    <title>Tra cứu vi phạm giao thông</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
</head>

<body class="bgr_admin">

    <?php include 'header.php'; ?>

    <?php include 'sidebar.php'; ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Quản lý lỗi vi phạm</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý lỗi vi phạm</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Danh sách lỗi vi phạm</h5>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Thêm lỗi vi phạm</button>
                                </div>
                            </div>

                            <!-- Insert Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form class="form-insert">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Thêm lỗi vi phạm</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form thêm phương tiện ở đây -->
                                                <div class="mb-3">
                                                    <label for="license_number" class="form-label">Biển số xe</label>
                                                    <input type="text" class="form-control" id="license_numbers"
                                                        name="license_plate">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="driver_name" class="form-label">Lỗi vi phạm</label>
                                                    <input type="text" class="form-control" id="driver_name"
                                                        name="violation_type">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="issuing_authority" class="form-label">Số bằng
                                                        lái</label>
                                                    <input type="text" class="form-control" id="issuing_authority"
                                                        name="liscense_number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date_of_issue" class="form-label">Số tiền phạt</label>
                                                    <input type="text" class="form-control" id="date_of_issue"
                                                        name="fine">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date_of_expiry" class="form-label">Địa điểm</label>
                                                    <input type="text" class="form-control" id="date_of_expiry"
                                                        name="location">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="date_of_expiry" class="form-label">Ngày vi phạm</label>
                                                    <input type="date" class="form-control" id="date_of_expiry"
                                                        name="report_date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="is_payment_done" class="form-label">Tình trạng</label>
                                                    <select name="is_payment_done" id="is_payment_done" class="form-control" >
                                                        <option value="0">Chưa đóng tiền phạt</option>
                                                        <option value="1">Đã đóng tiền phạt</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Edit Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <form class="form-edit">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Thêm lỗi vi phạm</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <input type="hidden" id="id" name="id">
                                                <!-- Form thêm phương tiện ở đây -->
                                                <div class="mb-3">
                                                    <label for="license_plate" class="form-label">Biển số xe</label>
                                                    <input type="text" class="form-control" id="license_plate"
                                                        name="license_plate">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="violation_type" class="form-label">Lỗi vi phạm</label>
                                                    <input type="text" class="form-control" id="violation_type"
                                                        name="violation_type">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="license_number" class="form-label">Số bằng
                                                        lái</label>
                                                    <input type="text" class="form-control" id="license_number"
                                                        name="license_number">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="fine" class="form-label">Số tiền phạt</label>
                                                    <input type="text" class="form-control" id="fine"
                                                        name="fine">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="location" class="form-label">Địa điểm</label>
                                                    <input type="text" class="form-control" id="location"
                                                        name="location">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="report_date" class="form-label">Ngày vi phạm</label>
                                                    <input type="date" class="form-control" id="report_date"
                                                        name="report_date">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="is_payment_done" class="form-label">Tình trạng</label>
                                                    <select name="is_payment_done" id="is_payment_done" class="form-control" >
                                                        <option value="0">Chưa đóng tiền phạt</option>
                                                        <option value="1">Đã đóng tiền phạt</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Table with stripped rows -->
                    <table class="table table-striped datatable">
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
                                <!-- <th>Ghi chú</th> -->
                                <th data-type="date" data-format="YYYY/DD/MM">Ngày vi phạm</th>
                                <th>Thao tác</th>
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


                                    <!-- <td><?php echo $row['notes']; ?></td> -->
                                    <td><?php echo $row['report_date']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary edit" data-id="<?php echo $row['report_id']; ?>">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger delete"
                                            data-id="<?php echo $row['report_id']; ?>">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

            </div>
            </div>
        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php include 'footer.php'; ?>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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
    <script src="assets/js/main.js"></script>

    <script>
        $(document).ready(function () {
            $(".form-insert").on("submit", function (event) {
                event.preventDefault();

                var formData = $(this).serialize();
                $.ajax({
                    url: "driving-licenses-management/insert-trafice.php",
                    type: "POST",
                    data: formData,
                    success: function (data) {
                        alert(data);
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
        });

        $(document).ready(function () {
            $(".delete").on("click", function (event) {
                event.preventDefault();

                var id = $(this).data('id');
                var confirmation = confirm("Bạn có muốn xoá giấy phép lái xe này?");

                if (confirmation) {
                    $.ajax({
                        url: "driving-licenses-management/delete-trafice.php",
                        type: "POST",
                        data: { id: id },
                        success: function (data) {
                            alert(data);
                            location.reload(); // reload the page to see the changes
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert("AJAX error: " + textStatus + ' : ' + errorThrown);
                        }
                    });
                }
            });
        });

        $(document).ready(function () {
            $(".edit").on("click", function (event) {
                event.preventDefault();
                var id = $(this).data('id');
                console.log(id);
                $.ajax({
                    url: "driving-licenses-management/get-trafice.php",
                    type: "POST",
                    data: { id: id },
                    dataType: "json",
                    success: function (data) {
                        $('#id').val(data.report_id);
                        $('#license_plate').val(data.license_plate);
                        $('#violation_type').val(data.violation_type);
                        $('#license_number').val(data.license_number);
                        $('#fine').val(data.fine);
                        $('#location').val(data.location);
                        $('#report_date').val(data.report_date);
                        $('#is_payment_done').val(data.is_payment_done);
                        $('#editModal').modal('show');
                        console.log(data.license_number);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
        });

        $(document).ready(function () {
            $(".form-edit").on("submit", function (event) {
                event.preventDefault();
                var formData = $(this).serialize();
                console.log(formData);
                $.ajax({
                    url: "driving-licenses-management/update-trafice.php",
                    type: "POST",
                    data: formData,
                    success: function (data) {
                        alert(data);
                        location.reload();
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        alert("AJAX error: " + textStatus + ' : ' + errorThrown);
                    }
                });
            });
        });
    </script>

</body>



</html>