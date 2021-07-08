<?php
session_start();
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['zmsaid'] == 0)) {
    header('location:logout.php');
} else {
    $aniid = $_GET['editid'];
    $query = mysqli_query($con, "DELETE FROM tblanimal WHERE ID='$aniid'");
    if ($query) {
        echo '<script>alert("El animal ha sido eliminado."); window.location.href="manage-animals.php";</script>';
        //header("Location:manage-animals.php");
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
?>