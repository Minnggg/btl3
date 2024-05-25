<?php
  $current_page = basename($_SERVER['PHP_SELF']);
?>
<aside id="sidebar" class="sidebar">
<ul class="sidebar-nav" id="sidebar-nav">
  <li class="nav-item">
    <a class="nav-link <?php echo ($current_page == 'home.php') ? '' : 'collapsed'; ?>" href="home.php">
    <i class="bi bi-clipboard-data"></i>
      <span>Thống kê</span>
    </a>
  </li>
  <li class="nav-item" >
    <a href="traffic_reports_management.php" class="nav-link <?php echo ($current_page == 'traffic_reports_management.php') ? '' : 'collapsed'; ?>">
    <i class="bi bi-clipboard-x"></i>
      <span>Quản lý lỗi vi phạm</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="vehicle-management.php" class="nav-link <?php echo ($current_page == 'vehicle-management.php') ? '' : 'collapsed'; ?>">
    <i class="bi bi-truck"></i>
      <span>Quản lý phương tiện</span>
    </a>
  </li>
  <li class="nav-item">
    <a href="driving-licenses-management.php" class="nav-link <?php echo ($current_page == 'driving-licenses-management.php') ? '' : 'collapsed'; ?>">
    <i class="bi bi-credit-card-2-back"></i>
      <span>Quản lý bằng lái</span>
    </a>
  </li>
</ul>

</aside>