<!DOCTYPE html>
<!-- Coding by CodingNepal || www.codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Tracker By Minhaj</title>
    <link href="images/logo.png">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="images/logo.png" alt=""></i>Tracker by Minhaj
      </div>

      <div class="search_bar">
        <input type="text" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <i class='bx bx-bell' ></i>
        <img src="images/p.jpg" alt="" class="profile" />
      </div>
    </nav>

    <!-- sidebar -->
<?php include ('layout.php'); ?>
    

    <!-- JavaScript -->
    <script src="script.js"></script>
    <script>function showInfoCard() {
  const input = document.getElementById("ip-input").value;
  const infoCard = document.getElementById("info-card");

  // Check if input is not empty
  if (input.trim() !== "") {
    infoCard.style.display = "block"; // Show the card
    // You can add additional functionality here, like fetching data
  } else {
    infoCard.style.display = "none"; // Hide the card if input is empty
    alert("Please enter a valid IP or domain.");
  }
}
</script>
    
  </body>
</html>
