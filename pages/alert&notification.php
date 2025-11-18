<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drainage System - Alerts</title>
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/alert&notification.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="sidebar" id="sidebar">
    <h2><i style="cursor: pointer;" id="toggleBtn" class="fas fa-bars"></i> Menu</h2>
    <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="monitoring.php"><i class="fas fa-eye"></i> Monitoring</a>
    <a href="#" class="active"><i class="fas fa-bell"></i> Alerts</a>
    <a href="reports.php"><i class="fas fa-chart-bar"></i> Reports</a>
    <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
  </div>
  <div class="main-content">
    <div class="header">
      <div class="hamburger" onclick="toggleSidebar()"><i class="fas fa-bars"></i></div>
      <h1>Alerts and Notifications</h1>
    </div>
    <div class="main">
      <input type="text" placeholder="Search alerts..."
        style="width: 100%; padding: 10px; margin-bottom: 20px; border-radius: 8px;">
      <div class="alert-card alert critical">
        <p><strong>15:00 - High turbidity at Point B – Possible blockage. SMS sent.</strong></p>
        <button>Acknowledge</button>
      </div>
      <div class="alert-card">
        <p><strong>14:30 - Water level rising at Canal 1.</strong></p>
        <button>Acknowledge</button>
      </div>
      <p>Summary: 15 alerts this week</p>
      <button style="margin-top: 20px;">Configure Alert Rules</button>
    </div>
  </div>
  <script src="../script/sidebar.js"></script>
</body>

</html>