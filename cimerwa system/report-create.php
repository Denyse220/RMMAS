<?php
session_start();
?>

<?php include 'filesLogic.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title> RMMAS</title>

  <link rel="stylesheet" href="dashstyle.css">
  <link rel="stylesheet" href="style2.css">

  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .upload-file form {
      border: none;
      width: 50%;
      box-shadow: 2px 1px 10px 1px #7492E0;
      border-radius: 10px;
    }

    .upload-file form input {
      padding: 10px;
      border-radius: 5px;
    }

    .upload-file form textarea {
      width: 100%;
      border-radius: 5px;
      box-shadow: 2px 1px 10px 1px #E4E9F7;

    }

    .upload-file form button {
      border: 1px solid black;

      margin-top: 10px;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name">RMMAS</div>
      <i class='bx bx-menu' id="btn"></i>
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
          <i class='bx bx-folder'></i>
          <span class="links_name">Uploaded Files</span>
        </a>
        <span class="tooltip">Upload Files</span>
      </li>
      <li>
        <a href="raw.php">
          <i class='bx bx-chat'></i>
          <span class="links_name">Fill Report</span>
        </a>
        <span class="tooltip">Fill Report</span>
      </li>
      <li class="profile">
        <a href="logout.php">
          <i class='bx bx-log-out' id="log_out"></i>
          <span class="links_name">Logout</span>
        </a>
        <span class="tooltip">Logout</span>

      </li>
    </ul>
  </div>
  <section class="home-section">

    <div class="container mt-5">

      <?php include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Create Report
                <a href="report.php" class="btn btn-danger float-end">BACK</a>
              </h4>
            </div>
            <div class="card-body upload-file">
              <form action="code.php" method="POST">
                <div class="mb-3">
                  <label>Report Date</label>
                  <input type="date" name="rdate" class="form-control">
                </div>

                <div class="mb-3">
                  <label>Raw Materials</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="container">
                  <table class="_table">
                    <thead>
                      <tr>
                        <th>Raw Material Name</th>
                        <th>Rate</th>
                        <th width="50px">
                          <div class="action_container">
                            <button class="success" onclick="create_tr('table_body')">
                              <i class="fa fa-plus"></i>
                            </button>
                          </div>
                        </th>
                      </tr>
                    </thead>
                    <tbody id="table_body">
                      <tr>
                        <td>
                          <label>Report Date</label>
                          <input type="date" name="rdate" class="form-control">
                        </td>

                      </tr>
                      <tr>
                        <td>
                          <select class="form_control">
                            <Option>Choose raw material</Option>
                            <Option>Coltan</Option>
                            <Option>Clay</Option>
                            <Option>Limestone</Option>
                          </select>
                        </td>
                        <td>
                          <select class="form_control">
                            <Option>select raw material's rate</Option>
                            <Option>1</Option>
                            <Option>2</Option>
                            <Option>3</Option>
                            <Option>4</Option>
                            <Option>5</Option>
                          </select>
                          </select>
                        </td>
                        <td>
                          <div class="action_container">
                            <button class="danger" onclick="remove_tr(this)">
                              <i class="fa fa-close"></i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>


                <div class="mb-3">
                  <button type="submit" name="save_report" class="btn btn-primary">Save Report</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="app.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="script2.js"></script>

</body>

</html>