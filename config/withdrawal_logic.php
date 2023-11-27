<?php

require "db.php";
require "config.php";

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




$pdbalance = 0;
$pdprofit = 0;
$percentage = 0;
$wbtc1 = 0;






$sql21 = "SELECT * FROM users WHERE email= '$email'";
$result21 = mysqli_query($link, $sql21);
if (mysqli_num_rows($result21) > 0) {
    $row1 = mysqli_fetch_assoc($result21);
    $pdbalance = $row1['walletbalance'];
    $pdprofit = $row1['profit'];
    $refcode = $row1['refcode'];
    $referred = $row1['referred'];
    $username = $row1['username'];
    $password = $row1['password'];
}


if (isset($_POST['submit'])) {





    $usd = $link->real_escape_string($_POST['usd']);
    $mode = $link->real_escape_string($_POST['mode']);
    $wallet = $link->real_escape_string($_POST['wallet']);
    $upassword = $link->real_escape_string($_POST['password']);
    $j = $usd;
    $tnx = uniqid('tnx');




    $sql = "INSERT INTO wbtc (moni,mode,email,status,tnx,wal)
    VALUES ('$j','$mode','$email','pending','$tnx','$wallet')";

    if ($password == $upassword) {

        if ($pdbalance >= $j) {
            if ($j < $wl) {
                $msg = "Minimum withdrawal is $wl USD";
            } else {

                if (mysqli_query($link, $sql)) {
                    $balance =  $row['walletbalance'];
                    $sq = "UPDATE users SET walletbalance = walletbalance - $j WHERE email='$email'";

                    mysqli_query($link, $sq);
                    $msg = " Your withdraw request of $j USD worth of $mode has been sent, your transaction ID is $tnx , your wallet will be credited once your request is approved ";

                    require_once "../PHPMailer/src/PHPMailer.php";
                    require_once '../PHPMailer/src/Exception.php';
                    require_once "../PHPMailer/src/SMTP.php";



                    //PHPMailer Object
                    $mail = new PHPMailer;

                    //From email address and name
                    $mail->SMTPDebug = 0;
                    //Set PHPMailer to use SMTP.
                    $mail->isSMTP();
                    //Set SMTP host name
                    $mail->Host = " mdfacil.com.br";
                    $mail->SMTPAuth = true;
                    //Provide username and password
                    $mail->Username = "contato@mdfacil.com.br";
                    $mail->Password = 'Te090271@';
                    //If SMTP requires TLS encryption then set it
                    $mail->SMTPSecure = "tls";
                    //Set TCP port to connect to
                    $mail->Port = 587;
                    $mail->From = "contato@mdfacil.com.br";
                    $mail->FromName = "elites";
                    $mail->addAddress($email, $username);
                    $mail->Subject = "Withdrawal Request";
                    $mail->isHTML(true);
                    $mail->Body = '
      
      
      <div style="background: #f5f7f8;width: 100%;height: 100%; font-family: sans-serif; font-weight: 100;" class="be_container"> 
  
  <div style="background:#fff;max-width: 600px;margin: 0px auto;padding: 30px;"class="be_inner_containr"> <div class="be_header">
  
  <div class="be_logo" style="float: left;"> <img src="https://' . $bankurl . '/admin/c2wad/logo/' . $logo . '"> </div>
  
  <div class="be_user" style="float: right"> <p>Dear: ' . $username . '</p> </div> 
  
  <div style="clear: both;"></div> 
  
  <div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">
  
  <h1>Thank you for investing on ' . $name . '</h1>
  
  </div> </div> 
  
  <div class="be_body" style="padding: 20px;"> <p style="line-height: 25px; color:#000;"> 
  
  Your withdraw request of ' . $j . ' USD worth of ' . $mode . ' has been sent, your transaction ID is ' . $tnx . ' , your wallet will be credited once your request is approved
  
  </p>
  
  <div class="be_footer">
  <div style="border-bottom: 1px solid #ccc;"></div>
  
  
  <div class="be_bluebar" style="background: #1976d2; padding: 20px; color: #fff;margin-top: 10px;">
  
  <p> Please do not reply to this email. Emails sent to this address will not be answered. 
  Copyright ©2010 ' . $name . '. </p> <div class="be_logo" style=" width:60px;height:40px;float: right;"> </div> </div> </div> </div></div>';


                    if ($mail->send()) {
                    }
                }
            }
        } else {
            $msg = "Insufficient balance";
        }
    } else {
        $msg = "Incorrect Password";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
