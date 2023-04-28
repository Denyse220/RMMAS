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

        <?php include('../message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Edit 
                            <a href="report.php" class="btn btn-danger float-end">BACK</a>
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
                                <form action="users-code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $user_form['id']; ?>">

                                    <div class="mb-3">
                                        <label>Username</label>
                                        <input type="text" name="name" value="<?=$user_form['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" value="<?=$user_form['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>User Type</label>
                                        <input type="text" name="user_type" value="<?=$user_form['user_type'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_user" class="btn btn-primary">
                                            Update User
                                        </button>
                                    </div>

                                </form>
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