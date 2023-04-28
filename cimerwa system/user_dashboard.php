<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> RMMAS</title>
    <link rel="stylesheet" href="dashstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">RMMAS</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="file.php">
       <i class='bx bx-folder' ></i>
         <span class="links_name">Uploaded Files</span>
       </a>
       <span class="tooltip">Upload Files</span>
     </li>
     <li>
       <a href="raw.php">
         <i class='bx bx-chat' ></i>
         <span class="links_name">Fill Report</span>
       </a>
       <span class="tooltip">Fill Report</span>
     </li>
     <li class="profile">
      <a href="logout.php">
        <i class='bx bx-log-out' id="log_out" ></i>
        <span class="links_name">Logout</span>
      </a>
      <span class="tooltip">Logout</span>
        
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text"></div>
      <div class="text text-center w-100">Dashboard</div>

  </section>

  <script src="script2.js"></script>

</body>
</html>
