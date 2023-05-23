<?php
include("MS_Connect.php");


if (isset($_POST["btn"])) {

  $uname = $_POST["user-name"];
  $uid = $_POST["user-id"];
  $upswd = $_POST["password"];

  $qry = "SELECT * FROM `regx` WHERE uname='$uname' AND uid='$uid' AND upswd='$upswd'";
  // echo "<br> Your Query  : ", $qry;

  $rs = mysqli_query($con, $qry);
  $t = mysqli_num_rows($rs);
  // $r = mysqli_fetch_array($rs);
  echo "<br> Number Of Rows Matched  : ". $t;

  if ($t != 0) {

    while (($r1 = mysqli_fetch_array($rs))) {

      session_start(); //Session Starts
      $_SESSION['user-name'] = $uname;
      $_SESSION['user-id'] = $uid;
      $_SESSION['password'] = $upswd;
      $_SESSION['upic'] = $r1[3];

      echo "<br> Name : " . $_SESSION["user-name"];
      echo "<br> ID : " . $_SESSION["user-id"];
      echo "<br> Password : " . $_SESSION["password"];
      echo "<br> Image : <img src='$_SESSION[upic]' alt='img'>";
      echo "<br> Image Path : ".$_SESSION["upic"];
    }

    header("location:MS_Home.php");
  } else {
    echo "<script>alert('No Record Found. Enter Correct Details')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>LOGIN</title>
</head>

<body>

  <div class="container">
    <form id="login-form" class="form" method="post" action="MS_Login.php" enctype="multipart/form-data">

      <div align="center">
        <!-- <h1>Login</h1> -->
        <img src="./img/LOGIN-01.png" alt="Login">
      </div>


      <div class="form-control">
        <label for="user-naame">Username</label>
        <input type="text" id="user-name" name="user-name" placeholder="Enter User Name" />
      </div>
      <div class="form-control">
        <label for="user-id">User ID</label>
        <input type="email" id="user-id" name="user-id" placeholder="Enter user-id" />
      </div>
      <div class="form-control">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter password" />
      </div>

      <div align="center">
        <button type="submit" name="btn">Login</button>
      </div>
      <p class="create-account">Don't have an account? <a href="MS_Regx.php" id="create-account-link">Create one</a></p>
    </form>
  </div>

</body>

</html>