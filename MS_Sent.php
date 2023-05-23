<?php
// include("MS_Connect.php");
include("MS_Home.php");

date_default_timezone_set("Indian/Reunion");

// session_start(); //Session Starts
$uname = $_SESSION['user-name'];
$uid = $_SESSION['user-id'];
$upic = $_SESSION['upic'];

echo "<br> Username : $uname";
echo "<br> User Id : $uid";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SENT BOX</title>
    <style>
        <?php
        include "style.css";
        ?>
    </style>
</head>

<body>

    <!-- <nav>
        <?php
        echo "Username : $uname - $uid - $upic";
        ?>
    </nav> -->


    <?php

    $qry = "SELECT * FROM `msg` WHERE sdr='$uid'";
    echo "<br>Your Query : ". $qry;

    $rs = mysqli_query($con, $qry);
    $r = mysqli_num_rows($rs);

    if ($r != 0) {

        echo "<div class='container2'>";

        echo "<form class='form' method='post' action='' enctype='multipart/form-data'>";
        echo "<table align='center' class='header_table' width='70%'>";
        echo "  <thead>
                    <h1 align=center><strong>SENT</strong></h1>
                </thead>";
        echo "<tbody class=header-title> <div class=form-control>";

        // echo (" <br> <br> ");
        echo "<tr class='form-control'>";
        echo "<td align = 'center'> TO";
        echo "<td align = 'center'> SUB";
        echo "<td align = 'center'> MSG";

        // echo (" <br> <br> <br>");
        while (($r = mysqli_fetch_array($rs))) {

            // $_SESSION['delid'] = $r[0];
            // $_SESSION['from'] = $r[1];
            // $_SESSION['to'] = $r[2];
            // $_SESSION['sub'] = $r[3];
            // $_SESSION['msg'] = $r[4];
            // $_SESSION['date'] = $r[5];
            // $_SESSION['time'] = $r[6];

            echo "<tr class='form-control'>";

        echo "<td align = 'center'><a href='MS_Sent_show.php?t1=$r[0]&t2=$r[1]&t3=$r[2]&t4=$r[3]&t5=$r[4]&t6=$r[5]&t7=$r[6]'>$r[2]</a>";
        echo "<td align = 'center'><a href='MS_Sent_show.php?t1=$r[0]&t2=$r[1]&t3=$r[2]&t4=$r[3]&t5=$r[4]&t6=$r[5]&t7=$r[6]'>$r[3]</a>";
        echo "<td align = 'center'><a href='MS_Sent_show.php?t1=$r[0]&t2=$r[1]&t3=$r[2]&t4=$r[3]&t5=$r[4]&t6=$r[5]&t7=$r[6]'>$r[4]</a>";
            
        }

        echo " </tbody> </table> </form> </div>";
    }

    ?>

</body>

</html>