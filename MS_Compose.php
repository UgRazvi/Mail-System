<?php
// include("MS_Connect.php");
include("MS_Home.php");


date_default_timezone_set("Indian/Reunion");

// session_start(); //Session Starts
$uname = $_SESSION['user-name'];
$uid = $_SESSION['user-id'];
$upic = $_SESSION['upic'];

$from = $uid;
$pic = $upic;

if (isset($_POST["save-btn"])) {

    $to = $_POST["usermail"];
    $sub = $_POST["subject"];
    $msg = $_POST["message"];
    $date = $_POST["date"];
    $time = $_POST["time"];

    $qry = "INSERT INTO `temp`(tsdr, trcr, tsub, tmsg, tdate, ttime, timage) VALUES ('$from','$to','$sub','$msg','$date','$time','$pic')";

    // echo "<br>Your Query : ". $qry;

    mysqli_query($con, $qry);
    mysqli_close($con);
    echo "<script>alert('SAVED TO DRAFT')</script>";
}

if (isset($_POST["btn"])) {

    // $from = $uid;
    $to = $_POST["usermail"];
    $sub = $_POST["subject"];
    $msg = $_POST["message"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    // $pic = $upic;

    $qry = "INSERT INTO `msg`(sdr, rcr, sub, msg, date, time, image) VALUES ('$from','$to','$sub','$msg','$date','$time','$pic')";

    // echo "<br>Your Query : ". $qry;

    mysqli_query($con, $qry);
    mysqli_close($con);
    echo "<script>alert('COMPOSED SUCCESSFULLY')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COMPOSE</title>
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

    <div class="container">
        <form class="form" method="post" action="" enctype="multipart/form-data">

            <table align="center" class="header_table" width="90%">

                <thead>
                    <h1 align="center"><strong>COMPOSE</strong></h1>
                </thead>

                <tbody class="header-title">
                    <div class="form-control">

                        <tr class="form-control">
                            <td>
                                <label for="username"> To : </label>
                            </td>
                            <td>
                                <input type="email" id="usermail" name="usermail" placeholder="Receiver's Mail Addres" />
                            </td>
                        </tr>

                        <tr class="form-control">
                            <td>
                                <label for="subject"> Sub : </label>
                            </td>
                            <td><input type="text" id="subject" name="subject" placeholder="Enter Subject Here" /></td>
                        </tr>
                        <tr class="form-control">
                            <td>
                                <label for="message"> Msg : </label>
                            </td>
                            <td><textarea name="message" id="message" cols="140" rows="10" placeholder="Enter Message Here"></textarea>
                            </td>
                        </tr>

                        <tr class="form-control">
                            <td>
                                <label for="date"> Date : </label>
                            </td>
                            <td><input type="text" id="date" name="date" value='<?php echo (date("d-m-y")); ?>' readonly /></td>
                        </tr>

                        <tr class="form-control">
                            <td>
                                <label for="time"> Time : </label>
                            </td>
                            <td><input type="text" id="time" name="time" value='<?php echo (date("h:i:sa")); ?>' readonly /></td>
                        </tr>

                        <tr class="form-control" align="center">
                            <td style="padding-top: 20px; padding-left: 20px;">
                                <button type="submit" name="save-btn">Save</button>
                            </td>
                            <td style="padding-top: 20px; padding-left: 20px;">
                                <button type="submit" name="btn">Send</button>
                            </td>
                        </tr>

                    </div>

                </tbody>

            </table>

        </form>

    </div>

</body>

</html>