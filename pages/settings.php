<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drainage System - Settings</title>
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/settings.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="sidebar" id="sidebar">
    <h2><i style="cursor: pointer;" id="toggleBtn" class="fas fa-bars"></i> Menu</h2>
    <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="monitoring.php"><i class="fas fa-eye"></i> Monitoring</a>
    <a href="alert&notification.php"><i class="fas fa-bell"></i> Alerts</a>
    <a href="reports.php"><i class="fas fa-chart-bar"></i> Reports</a>
    <a href="#" class="active"><i class="fas fa-cog"></i> Settings</a>
  </div>
  <div class="main-content">
    <div class="header">
      <div id="open" class="hamburger" onclick="toggleSidebar()"><i class="fas fa-bars"></i></div>
      <h1>Settings and Configuration</h1>
    </div>
    <div class="main">
      <div class="tabs">
        <div class="tab active">User Management</div>
        <div class="tab">Sensor Config</div>
        <div class="tab">Power Settings</div>
        <div class="tab">System Logs</div>
      </div>
      <form>
        <input type="text" placeholder="Add new user email">
        <select>
          <option>Set Alert Threshold: Water Level > 70%</option>
        </select>
        <button type="submit">Save Changes</button>
      </form>
    </div>
  </div>
  <script src="../script/sidebar.js"></script>
</body>

</html>