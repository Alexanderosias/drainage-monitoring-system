<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drainage System - Reports</title>
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/reports.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="sidebar" id="sidebar">
    <h2><i style="cursor: pointer;" id="toggleBtn" class="fas fa-bars"></i> Menu</h2>
    <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="monitoring.php"><i class="fas fa-eye"></i> Monitoring</a>
    <a href="alert&notification.php"><i class="fas fa-bell"></i> Alerts</a>
    <a href="#" class="active"><i class="fas fa-chart-bar"></i> Reports</a>
    <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
  </div>
  <div class="main-content">
    <div class="header">
      <div class="hamburger" onclick="toggleSidebar()"><i class="fas fa-bars"></i></div>
      <h1>Reports and Analytics</h1>
    </div>
    <div class="main">
      <input type="date" style="margin-right: 10px; padding: 8px; border-radius: 8px;"> to <input type="date"
        style="padding: 8px; border-radius: 8px;">
      <select style="margin-left: 10px; padding: 8px; border-radius: 8px;">
        <option>Monthly Flood Risk Report</option>
      </select>
      <div class="chart">
        <h3><i class="fas fa-chart-bar"></i> Average Water Levels by Month</h3>
        <p>[Bar Chart]</p>
      </div>
      <div class="chart">
        <h3><i class="fas fa-heatmap"></i> Turbidity Hotspots</h3>
        <p>[Heatmap]</p>
      </div>
      <button>Generate Report</button> <button>Export to PDF</button>
    </div>
  </div>
  <script src="../script/sidebar.js"></script>
</body>

</html>