<?php
include("MS_Connect.php");

session_start(); //Session Starts
$uname = $_SESSION['user-name'];
$uid = $_SESSION['user-id'];
$upic = $_SESSION['upic'];
// $upic = $_SESSION['user-pic'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Message Portal</title>
</head>

<body>

    <form action="" method="post">
        <table align="center" class="header_table" width="100%">

            <nav align="center">
                <hr>
                <?php
                echo "Username : $uname - $uid - ";
                echo "<img src='$upic' alt='User Image' style='height:60px; width:60px; border-radius:50%; margin-top:10px;'>";
                ?>
            </nav>


            <tbody class="header-title">

                <!-- <th align="center" colspan="6">
                    <img src="./img/Message-01.png" alt="Login">
                    <h1>MY SITE</h1>
                </th> -->
                <tr>
                    <td colspan="6">
                        <hr>
                        <br>
                    </td>
                </tr>
                <tr>
                   
                    <td align="center"> <a href="MS_Compose.php">Compose</a>
                    </td>
                    <td align="center"> <a href="MS_Inbox.php">Inbox</a>
                    </td>
                    <td align="center"> <a href="MS_Sent.php">Sent</a>
                    </td>
                    <td align="center"> <a href="MS_Draft.php">Draft</a>
                    </td>
                    <td align="center"> <a href="MS_Important.php">Important</a>
                    </td>
                    <td align="center"><a href="MS_Logout.php">LOG-OUT</a>
                    </td>
                </tr>

                <tr>
                    <!-- <td colspan="6" align="center"><img src="./img/Message-02.png" alt="Login"></td> -->
                </tr>
                
            </tbody>
        </table>
        <hr>
    </form>

</body>

</html>