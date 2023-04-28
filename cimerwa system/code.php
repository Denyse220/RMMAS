<?php
session_start();
require 'config.php';

if(isset($_POST['delete_report']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_report']);

    $query = "DELETE FROM report WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Report Deleted Successfully";
        header("Location: report.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Report Not Deleted";
        header("Location: report.php");
        exit(0);
    }
}

if(isset($_POST['update_report']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $details = mysqli_real_escape_string($con, $_POST['details']);
    $rdate = mysqli_real_escape_string($con, $_POST['rdate']);


    $query = "UPDATE report SET name='$name', details='$details', rdate='$rdate' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Report Updated Successfully";
        header("Location: index2.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Report Not Updated";
        header("Location: index2.php");
        exit(0);
    }

}


if(isset($_POST['save_report']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $details = mysqli_real_escape_string($con, $_POST['details']);
    $rdate = mysqli_real_escape_string($con, $_POST['rdate']);
   

    $query = "INSERT INTO report (name,details,rdate) VALUES ('$name','$details','$rdate')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Report Created Successfully";
        header("Location: report-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Report Not Created";
        header("Location: report-create.php");
        exit(0);
    }
}

?>