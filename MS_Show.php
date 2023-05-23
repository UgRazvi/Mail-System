<?php
// include("MS_Connect.php");
include("MS_Home.php");

session_start();

$a = $_SESSION["x"];
$b = $_SESSION["y"];

echo "<table border=1 align=center> <th colspan=2> SHOW";
echo "<tr> <td> id <td> $a";
echo "<tr> <td> To <td> $b";
echo "<tr> <td> Subject <td> $b";
echo "<tr> <td> Message <td> $b";
echo "<tr> <td> Date <td> $b";
echo "<tr> <td> Time <td> $b";
// echo "<tr> <td> Time <td> $b";
