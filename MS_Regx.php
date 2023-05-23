<?php
include("MS_Connect.php");

// Source And Destination For Image Logic
$src = "";
$dst = "";

if (isset($_POST["btn"])) {

    $uname = $_POST["new-username"];
    $uid = $_POST["user-id"];
    $upswd = $_POST["new-password"];
    $_SESSION['user-pic'] = $dst;

    session_start();
    $_SESSION['user-name'] = $uname;
    $_SESSION['user-id'] = $uid;
    $_SESSION['user-pswd'] = $upswd;
    
    // Image Uploading logic
    $src = $_FILES["photo"]["tmp_name"];
    $dst = './image/' . $_FILES["photo"]["name"];
    if (move_uploaded_file($src, $dst)) {
        // echo "<script>alert('Upload Successfully')</script>";
    } else {
        echo "Uploading Error";
    }

    // Query Sending Logic
    $qry = "INSERT INTO `regx`(uname, uid, upswd, upic) VALUES ('$uname','$uid','$upswd','$dst')";
    // echo $qry;

    mysqli_query($con, $qry);
    mysqli_close($con);
    echo "<script>alert('REGISTERED SUCCESSFULLY')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>REGISTRATION</title>
</head>

<body>

    <div class="container">
        <form id="register-form" class="form" method="post" action="MS_Regx.php" enctype="multipart/form-data">

            <div align="center">
                <!-- <h1>Register</h1> -->
                <img src="./img/Register-02.png" alt="Login">
            </div>

            <div class="form-control">
                <label for="new-username">Username</label>
                <input type="text" id="new-username" name="new-username" placeholder="Enter username" />
            </div>
            <div class="form-control">
                <label for="user-id">User Mail</label>
                <input type="email" id="user-id" name="user-id" placeholder="Enter Your Mail Address" />
            </div>
            <div class="form-control">
                <label for="new-password">Password</label>
                <input type="password" id="new-password" name="new-password" placeholder="Enter password" />
            </div>
            <!-- <div class="form-control">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password" />
            </div> -->
            <div class="form-control">
                <label for="user-pic">Upload Picture</label>
                <input type="file" id="user-pic" name="photo" />
            </div>

            <div align="center">
                <button type="submit" name="btn">Register</button>
            </div>
            <p class="create-account">Already have an account? <a href="MS_Login.php" id="login-link">Login</a></p>
        </form>

    </div>

</body>

</html>