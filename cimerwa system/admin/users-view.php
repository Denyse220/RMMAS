<?php
session_start();
require '../config.php';
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> RMMAS</title>
    <link rel="stylesheet" href="../dashstyle.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>users</title>
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
                <a href="users.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Users</span>
                </a>
                <span class="tooltip">Users</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Report</span>
                </a>
                <span class="tooltip">Report</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>

            <li class="profile">
                <a href="#">
                    <i class='bx bx-log-out' id="log_out"></i>
                    <span class="links_name">Logout</span>
                </a>
                <span class="tooltip">Logout</span>

            </li>
        </ul>
    </div>
    <section class="home-section">

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User View 
                            <a href="users.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM user_form WHERE id='$id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user_form = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Username</label>
                                        <p class="form-control">
                                            <?=$user_form['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$user_form['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>User Type</label>
                                        <p class="form-control">
                                            <?=$user_form['user_type'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    




    </section>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="../script2.js"></script>

</body>

</html>