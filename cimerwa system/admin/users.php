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


        <div class="container mt-4">

            <?php include('../message.php'); ?>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>users
                                <a href="users-create.php" class="btn btn-primary float-end">Add User</a>
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>N0</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>User Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * FROM user_form";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $user_form) {
                                    ?>
                                            <tr>
                                                <td><?= $user_form['id']; ?></td>
                                                <td><?= $user_form['name']; ?></td>
                                                <td><?= $user_form['email']; ?></td>
                                                <td><?= $user_form['user_type']; ?></td>

                                                <td>
                                                    <a href="users-view.php?id=<?= $user_form['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="users-edit.php?id=<?= $user_form['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="users-code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_user" value="<?= $user_form['id']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                    ?>

                                </tbody>
                            </table>

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