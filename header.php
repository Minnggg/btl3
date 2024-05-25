<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<header style="height: 82px;" id="header" class="header fixed-top d-flex align-items-center">
<div class="d-flex align-items-center justify-content-between">
<i class="bi bi-list toggle-sidebar-btn"></i>
  <a href="#" class="logo d-flex align-items-center ">
  <img class="col-5" style="width: 536px; height: 82px;"
            src="https://dichvucong.gov.vn/p/home/theme/img/header/logo.png" />
    <!-- <h3 class= "ms-auto me-auto mt-auto mb-auto">Trang quản lý</h3> -->
  </a>
</div>
<div class="search-bar">
</div>
<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">
    <li class="nav-item d-block d-lg-none">
    </li>
    <li class="nav-item dropdown">
    </li>
    <li class="nav-item dropdown">
    </li>
    <li class="nav-item dropdown pe-3">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <img src="assets/img/user.png" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Admin</h6>
          <span>Quản lý tài khoản</span>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-person"></i>
            <span>Thông tin cá nhân</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
            <i class="bi bi-gear"></i>
            <span>Cài đặt tài khoản</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
            <i class="bi bi-question-circle"></i>
            <span>Trợ giúp</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <a class="dropdown-item d-flex align-items-center" href="authentication/signout.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Đăng xuất</span>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>
</header>