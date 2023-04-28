<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>CREATE REPORT</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
  
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
                    <div class="card-body">
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
    <script src="app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>