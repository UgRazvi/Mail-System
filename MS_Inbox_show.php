<?php
// include("MS_Connect.php");
include("MS_Home.php");

echo "<style>";
include 'style.css';
echo "</style>";

// session_start(); //Session Starts
$uname = $_SESSION['user-name'];
$from = $_SESSION['user-id'];
$pic = $_SESSION['upic'];

if (isset($_GET["dlt-btn"])) {
    $id = $_SESSION['delid'];
    $qry = "DELETE FROM `temp` WHERE mid=$id";
    echo "<br>Your Query : " . $qry;

    if (mysqli_query($con, $qry)) {
        echo "<script>alert('ok')</script>";
        header('location:ms_draft.php');
    }
    mysqli_close($con);
    echo "<script>alert('DELETED SUCCESSFULLY !')</script>";
}

if (isset($_GET["imp-btn"])) {

    $id = $_SESSION['delid'];

    $mid = $_GET['t1'];
    $id = $_GET['t2'];
    $to = $_GET['t3'];
    $sub = $_GET['t4'];
    $msg = $_GET['t5'];
    $date = $_GET['t6'];
    $time = $_GET['t7'];

    echo "<br> * Mid : $mid";
    echo "<br> * User Id : $id";
    echo "<br> * From : $from";
    echo "<br> * To : $to";

    $qry = "INSERT INTO `imp`(isdr, ircr, isub, imsg, idate, itime, iimage) VALUES ('$from','$to','$sub','$msg','$date','$time','$pic')";

    echo "<br> * Your Query :  $qry";

    mysqli_query($con, $qry);
    mysqli_close($con);
    echo "<script>alert('MARKED IMPORTANT SUCCESSFULLY')</script>";
} 
else 
{
    $mid = $_GET['t1'];
    $id = $_GET['t2'];
    $to = $_GET['t3'];
    $sub = $_GET['t4'];
    $msg = $_GET['t5'];
    $date = $_GET['t6'];
    $time = $_GET['t7'];

    echo "<br> * Mid : $mid";
    echo "<br> * User Id : $id";
    echo "<br> * From : $from";
    echo "<br> * To : $to";
}

echo "<div class='container2'> <form class='form' method='GET'> <table class='header_table'> <h1 align=center>";
echo "<strong> Mail </strong> <div class='form-control'>";
// echo "<div class='form-control'> <tr> <td align='center'> id <td align='center'> $id";

echo "<div class='form-control'> <tr> <td align='center'> To <td align='center'> $to";
echo "<div class='form-control'> <tr> <td align='center'> Subject <td align='center'> $sub";
echo "<div class='form-control'> <tr> <td align='center'> Message <td align='center'> $msg";
echo "<div class='form-control'> <tr> <td align='center'> Date <td align='center'> $date";
echo "<div class='form-control'> <tr> <td align='center'> Time <td align='center'> $time";

echo "<div class='form-control'> <tr> <td align='center'> <button type='submit' name='dlt-btn' class=dlt> DELETE </button> </td>";
echo "<td align='center'> <button type='submit' name='imp-btn' class=imp> IMPORTANT </button> </td>";

// session_abort();