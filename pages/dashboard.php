<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drainage System - Dashboard</title>
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="sidebar" id="sidebar">
    <h2><i style="cursor: pointer;" id="toggleBtn" class="fas fa-bars"></i> Menu</h2>
    <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="monitoring.php"><i class="fas fa-eye"></i> Monitoring</a>
    <a href="alert&notification.php"><i class="fas fa-bell"></i> Alerts</a>
    <a href="reports.php"><i class="fas fa-chart-bar"></i> Reports</a>
    <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
  </div>
  <div class="main-content">
    <div class="header">
      <div class="hamburger" onclick="toggleSidebar()"><i class="fas fa-bars"></i></div>
      <h1>Drainage Level Monitoring Dashboard</h1>
      <div><i class="fas fa-bell"></i> <span class="alert">3 Alerts</span></div>
    </div>
    <div class="main">
      <div class="grid">
        <div class="card">
          <h3><i class="fas fa-sensor"></i> Sensor: Drainage Point A</h3>
          <p>Water Level: 45%</p>
          <div class="progress">
            <div class="progress-fill"></div>
          </div>
          <p>Turbidity: Low</p>
          <p>Flow: Normal</p>
        </div>
        <div class="card">
          <h3><i class="fas fa-chart-pie"></i> Alert Summary</h3>
          <p>2 Critical Blockages</p>
          <p>1 Warning</p>
        </div>
        <div class="card">
          <h3><i class="fas fa-battery-half"></i> Quick Stats</h3>
          <p>Sensors Online: 8/10</p>
          <p>Avg Battery: 85%</p>
        </div>
      </div>
      <div class="card" style="margin-top: 20px;">
        <h3><i class="fas fa-chart-line"></i> Water Levels (Last 24 Hours)</h3>
        <p>[Line Graph]</p>
      </div>
    </div>
  </div>
  <script src="../script/sidebar.js"></script>
</body>

</html>