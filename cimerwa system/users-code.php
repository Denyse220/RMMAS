<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_user']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_user']);

    $query = "DELETE FROM user_form WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: users.php");
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $user_type = mysqli_real_escape_string($con, $_POST['user_type']);


    $query = "UPDATE user_form SET name='$name', email='$email', user_type='$user_type' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Report Not Updated";
        header("Location: users.php");
        exit(0);
    }

}


if(isset($_POST['save_user']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $user_type = mysqli_real_escape_string($con, $_POST['user_type']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "INSERT INTO user_form (name,email,user_type,password) VALUES ('$name','$email','$user_type','$password')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "User Created Successfully";
        header("Location: users-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Created";
        header("Location: users-create.php");
        exit(0);
    }
}

?>