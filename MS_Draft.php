<?php
// include("MS_Connect.php");
include("MS_Home.php");

// session_start(); //Session Starts
$uname = $_SESSION['user-name'];
$from = $_SESSION['user-id'];
$pic = $_SESSION['upic'];

// echo "<br> Mid : $id";
echo "<br> From : $from";
// echo "<br> To : $to";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DRAFT</title>
    <style>
        <?php
        include "style.css";
        ?>
    </style>
</head>

<body>

    <div class="container2">
        <form class="form" method="GET" action="MS_savedata.php">

            <table align="center" class="header_table" width="100%">

                <thead>
                    <h1 align="center"><strong>DRAFT</strong></h1>
                </thead>

                <tbody class="header-title">
                    <div class="form-control">

                        <?php

                        $qry = "SELECT * FROM `temp` WHERE tsdr='$from'";
                        echo "<br> Your Query : $qry <br>";
                        $rs = mysqli_query($con, $qry);

                        while (($r = mysqli_fetch_array($rs))) {
                            
                            // $_SESSION['delid'] = $r[0];
                            // $_SESSION['from'] = $r[1];
                            // $_SESSION['to'] = $r[2];
                            // $_SESSION['sub'] = $r[3];
                            // $_SESSION['msg'] = $r[4];
                            // $_SESSION['date'] = $r[5];
                            // $_SESSION['time'] = $r[6];
                            
                            echo "<div class='form-control'> <tr> <td align = 'center'> $r[0] :";

                            echo "<td align = 'center'><a href='MS_savedata.php?t1=$r[0]&t2=$r[1]&t3=$r[2]&t4=$r[3]&t5=$r[4]&t6=$r[5]&t7=$r[6]'>$r[2]</a>";
                            
                            // echo "<td align = 'center'><a href='MS_savedata.php'>$r[2]</a>";
                            
                        }
                        ?>

                    </div>

                </tbody>

            </table>

        </form>

    </div>

</body>

</html>