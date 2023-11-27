<?php







require_once "../config/db.php";
require_once "../config/config.php";

$msg = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if (isset($_SESSION['email'])) {

    $email = $_SESSION['email'];
    $sql = "UPDATE users SET session='1' WHERE email='$email'";

    mysqli_query($link, $sql) or die(mysqli_error($link));
} else {


    header("location:../login.php");
}









$sql21 = "SELECT * FROM users WHERE email= '$email'";
$result21 = mysqli_query($link, $sql21);
if (mysqli_num_rows($result21) > 0) {
    $row1 = mysqli_fetch_assoc($result21);
    $pdbalance = $row1['walletbalance'];
    $pdprofit = $row1['profit'];
    $refcode = $row1['refcode'];
    $referred = $row1['referred'];
    $username = $row1['username'];
}


if (isset($_POST['p1'])) {




    $pname = $link->real_escape_string($_POST['pname']);
    $increase = $link->real_escape_string($_POST['increase']);
    $bonus = $link->real_escape_string($_POST['bonus']);
    $duration = $link->real_escape_string($_POST['duration']);
    $froms = $link->real_escape_string($_POST['froms']);


    $sql1 = "SELECT * FROM users WHERE email = '$email'";
    $result1 = mysqli_query($link, $sql1);
    if (mysqli_num_rows($result1) > 0) {
        $row = mysqli_fetch_assoc($result1);
        $row['activate'];
        $row['bonus'];
    }

    $sql = "UPDATE users SET email='$email',pname='$pname',increase='$increase',bonus='$bonus',duration='$duration',pdate= NULL,froms='$froms',activate='0'  WHERE email='$email'";



    if (isset($row['email']) &&  $row['pname'] == $pname) {
        $msg = " Package already selected you can only upgrade package!";
    } else {



        if (isset($row['activate']) &&  $row['activate'] == '1') {
            $msg = "A Package is already running!";
        } else {



            if (mysqli_query($link, $sql)) {


                $msg = " Package has been successfully selected! Click <b><a href='mypackages.php'>HERE</a></b> to activate package.";
            } else {
                $msg = " Package was not selected !";
            }
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>