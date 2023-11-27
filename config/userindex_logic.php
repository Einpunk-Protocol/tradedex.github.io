<?php
require "db.php";
require "config.php";

$msg = "";

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
} else {
    session_unset();
    session_destroy();
    header("location:../login.php");
    exit();
}



if (isset($_SESSION['email'])) {

    $email = $_SESSION['email'];
    $sql = "UPDATE users SET session='1' WHERE email='$email'";

    mysqli_query($link, $sql) or die(mysqli_error($link));
} else {


    header("location:../login.php");
    exit;
}




$pdbalance = 0;
$pdprofit = 0;
$percentage = 0;
$wbtc1 = 0;




$sql2 = "SELECT * FROM users WHERE email= '$email'";
$result2 = mysqli_query($link, $sql2);
if (mysqli_num_rows($result2) > 0) {
    $row = mysqli_fetch_assoc($result2);
    $pdate = $row['pdate'];
    $duration = $row['duration'];
    $increase = $row['increase'];
    $usd = $row['usd'];
}


if (isset($row['pdate']) &&  $row['pdate'] != '0' && isset($row['duration'])  && isset($row['increase'])  && isset($row['usd'])) {

    $endpackage = new DateTime($pdate);
    $endpackage->modify('+ ' . $duration . 'day');
    $Date2 = $endpackage->format('Y-m-d');
    $current = date("Y/m/d");

    $diff = abs(strtotime($Date2) - strtotime($current));
    $one = 1;

    $date3 = new DateTime($Date2);
    $date3->modify('+' . $one . 'day');
    $date4 = $date3->format('Y-m-d');

    $days = floor($diff / (60 * 60 * 24));


    $daily = $duration - $days;
    $percentage = ($increase / 100) * $daily * $usd;











    $one = 1;
    $f = date('Y-m-d', strtotime($Date2 . ' + ' . $one . 'day'));

    if (isset($days) && $days == 0 || $Date2 == (date("Y/m/d"))) {

        $pp =   $percentage;


        $sql = "UPDATE users SET activate = '0',pdate = '0',walletbalance= walletbalance + $pp, profit = profit + $pp  WHERE email='$email'";


        if (mysqli_query($link, $sql)) {

            $percentage = $pp = 0;
        }
    } else {
        $_SESSION['pprofit'] = $percentage;
    }






    $add = "days";
} else {
    $daily = "";
    $percentage = "0";
}




$sql21 = "SELECT * FROM users WHERE email= '$email'";
$result21 = mysqli_query($link, $sql21);
if (mysqli_num_rows($result21) > 0) {
    $row1 = mysqli_fetch_assoc($result21);
    $pdbalance = $row1['walletbalance'];
    $pdprofit = $row1['profit'];
    $fname = $row1['fname'];
    $lname = $row1['lname'];
}

$sql211 = "SELECT SUM(moni) as total_value FROM wbtc WHERE email= '$email' and status= 'completed'";
$result211 = mysqli_query($link, $sql211);
$row11 = mysqli_fetch_assoc($result211);
if ($row11['total_value'] != "") {
    $wbtc1 = $row11['total_value'];
} else {
    $wbtc1 = 0;
}

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $row['activate'];
    $row['pdate'];


    if (isset($row['activate']) &&  $row['activate'] == '1') {


        $sec = 'Your investment account is Active. &nbsp;&nbsp;<i style="background-color:green;color:#fff; font-size:20px;" class="fa  fa-refresh" ></i>';
    } else {
        $sec = 'Your investment account is Not Active &nbsp;&nbsp;<i class="fa  fa-times" style=" font-size:20px;color:red"></i>';
    }
}
