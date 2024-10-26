<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Domain / IP Tracker</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="IP-tools/domain-ip.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="images/logo.png" alt="Logo" /> Tracker by Minhaj
      </div>
      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>
      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class="bx bx-sun" id="darkLight"></i>
        <i class="bx bx-bell"></i>
        <img src="images/p.jpg" alt="Profile" class="profile" />
      </div>
    </nav>

    <!-- Sidebar -->
    <?php include 'layout.php'; ?>

    <!-- Main Content -->
    <div class="container">
      <div class="input-container">
        <h1>IP Tracker</h1>
        <input type="text" id="ip-input" placeholder="Enter IP or Domain" />
        <button id="track-ip" onclick="showInfoCard()">Track IP or Domain</button>
      </div>

      <div id="info-card" class="row" style="display: none;">
        <div class="info-card">
          <div class="info">
            <p><strong>IP Address:</strong> <span id="ip">N/A</span></p>
            <p><strong>City:</strong> <span id="city">N/A</span></p>
            <p><strong>Region:</strong> <span id="region">N/A</span></p>
            <p><strong>Country:</strong> <span id="country">N/A</span></p>
            <p><strong>ISP:</strong> <span id="isp">N/A</span></p>
          </div>
        </div>
        <div id="map" class="map-container">Map will display here</div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="script.js"></script>
    <script src="IP-tools/domain-ip.js"></script>
    <script>
      function showInfoCard() {
        const input = document.getElementById("ip-input").value;
        const infoCard = document.getElementById("info-card");

        if (input.trim() !== "") {
          infoCard.style.display = "flex"; // Set to flex to apply row styling
          // Add additional functionality for fetching data here if needed
        } else {
          infoCard.style.display = "none"; // Hide the card if input is empty
          alert("Please enter a valid IP or domain.");
        }
      }
    </script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

  </body>
</html>
