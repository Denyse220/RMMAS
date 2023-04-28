<?php include 'filesLogic.php';?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> RMMAS</title>

    <link rel="stylesheet" href="dashstyle.css">
    <link rel="stylesheet" href="style2.css">

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <style>
      .upload-file form{
    border: none;
    /* width: 0%; */
    box-shadow: 2px 1px 10px 1px #7492E0;
    border-radius: 10px;
    padding: 10px;
  }
  .upload-file form input{
    padding: 10px;
    border-radius: 5px;
  }
  .upload-file form textarea{
    width: 100%;
    border-radius: 5px;
      box-shadow: 2px 1px 10px 1px #E4E9F7;
  
  }
  
  .upload-file form button{
    border: 1px solid black;
  
    margin-top: 10px;
  }
     </style>
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
      <div class="text text-center w-100"> Files </div>
      <div class="container">
      <div class="row upload-file">
        <form action="filesLogic.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>

          <h3>Description</h3>

          <!-- <input type="textfile" name="textfile"> <br> -->

          <textarea name="description"  rows="3">

          </textarea>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </section>

  <script src="script2.js"></script>

</body>
</html>
