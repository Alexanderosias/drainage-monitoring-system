<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drainage System - Monitoring</title>
  <link rel="stylesheet" href="../styles/general.css">
  <link rel="stylesheet" href="../styles/monitoring.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="sidebar" id="sidebar">
    <h2><i style="cursor: pointer;" id="closeSidebar" class="fas fa-bars"></i> Menu</h2>
    <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="#" class="active"><i class="fas fa-eye"></i> Monitoring</a>
    <a href="alert&notification.php"><i class="fas fa-bell"></i> Alerts</a>
    <a href="reports.php"><i class="fas fa-chart-bar"></i> Reports</a>
    <a href="settings.php"><i class="fas fa-cog"></i> Settings</a>
  </div>
  <div id="main-content" class="main-content">
    <div class="header">
      <div class="hamburger" id="openSidebar" onclick="toggleSidebar()"><i class="fas fa-bars"></i></div>
      <h1>Real-Time Monitoring</h1>
    </div>
    <div class="main">
      <select style="margin-bottom: 20px; padding: 10px; border-radius: 8px;">
        <option>Drainage Canal 1</option>
        <option>Point B</option>
      </select>
      <div class="tabs">
        <div class="tab active">Live Data</div>
        <div class="tab">Trend Charts</div>
        <div class="tab">Sensor Health</div>
      </div>
      <div class="gauge">
        <h3><i class="fas fa-ruler"></i> Water Depth (Ultrasonic)</h3>
        <p>45 cm</p>
        <div
          style="width: 100px; height: 100px; border: 10px solid #87CEEB; border-radius: 50%; margin: 0 auto; border-top: 10px solid #2E8B57;">
        </div>
      </div>
      <div class="gauge">
        <h3><i class="fas fa-cloud-rain"></i> Turbidity</h3>
        <p>Low (20 NTU)</p>
      </div>
      <div class="gauge">
        <h3><i class="fas fa-tint"></i> Flow Rate</h3>
        <p>Normal (50 L/min)</p>
      </div>
      <button>Export Data</button>
    </div>
  </div>
  <script src="../script/sidebar.js"></script>
</body>

</html>