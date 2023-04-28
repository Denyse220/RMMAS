<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body class="bg-dark">

</body>

</html>








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
    <div class="text text-center w-100"> Fill report </div>

    <div class="container">
    <div class="row my-4">
      <div class="col-lg-10 mx-auto">
        <div class="card shadow">
          <div class="card-header">
            <h4>Add items</h4>
          </div>
          <div class="card-body p-4">
            <div id="show_alert">

            </div>
            <form action="" method="POST" id="add_form">
              <div id="show_item">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <input type="text" name="name[]" class="form_control" placeholder="raw material name">
                  </div>

                  <div class="col-md-3 mb-3">
                    <input type="number" name="rate[]" class="form_control" placeholder="raw material rate">
                  </div>

                  <div class="col-md-3 mb-3">
                    <label>date</label>
                    <input type="date" name="rdate[]" class="form_control" placeholder="report date">
                  </div>
                  <div class="col-md-2 mb-3 d-grid">
                    <button class="btn btn-success add_item_btn">Add More</button>
                  </div>
                </div>
              </div>
              <div>
                <input type="submit" value="Add" class="btn btn-primary w-25" id="add_btn">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  </section>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script>
    $(document).ready(function() {
      $(".add_item_btn").click(function(e) {
        e.preventDefault();
        $("#show_item").prepend(` <div class="row" append_item>
                            <div class="col-md-4 mb-3">
                              <input type="text" name="name[]" class="form_control"
                              placeholder="raw material name">
                            </div>

                            <div class="col-md-3 mb-3">
                              <input type="number" name="rate[]" class="form_control"
                              placeholder="raw material rate">
                            </div>
                            
                            <div class="col-md-3 mb-3">
                             <label>date</label>
                              <input type="date" name="rate[]" class="form_control"
                              placeholder="report date">
                            </div>
                            <div class="col-md-2 mb-3 d-grid">
                                <button class="btn btn-danger remove_item_btn">Remove</button>
                            </div>
                          </div>`);
      });

      $(document).on('click', '.remove_item_btn', function(e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
      });

      $("#add_form").submit(function(e) {
        e.preventDefault();
        $("#add_btn").val('Adding...');
        $.ajax({
          url: 'action.php',
          method: 'post',
          data: $(this).serialize(),
          success: function(response) {
            // console.log(response);
            $("#add_btn").val('Add');
            $("#add_form")[0].reset();
            $(".append_item").remove();
            $("#show_alert").html(`<div class= "alert alert-success" role="alert">${response}</div>`);
          }

        });



      });
    });
  </script>

  <script src="script2.js"></script>

</body>

</html>