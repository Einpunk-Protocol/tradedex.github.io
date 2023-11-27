<?php
require "../config/mypackages_logic.php"
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Upgrades Crypto Elite</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>

    <div class="wrapper">
        <div class="sidebar" data-color="#999">

            <!--
            
                    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                    Tip 2: you can also add an image using data-image tag
            
                -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="../" class="simple-text">
                        <img class="img-responsive" alt="logo" src="../images/logo-dark.png">
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="./">
                            <i class="pe-7s-graph" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="profile.php">
                            <i class="pe-7s-user" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="message.php">
                            <i class="pe-7s-mail" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">Messages</p>
                        </a>
                    </li>
                    <li>
                        <a href="wallet.php">
                            <i class="pe-7s-wallet" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">Wallet</p>
                        </a>
                    </li>
                    <li>
                        <a href="packages.php">
                            <i class="pe-7s-photo-gallery" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">Upgrade</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="mypackages.php">
                            <i class="pe-7s-photo-gallery" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">My Package</p>
                        </a>
                    </li>
                    <li>
                        <a href="withdrawal.php">
                            <i class="pe-7s-cash" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">Withdrawals</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="logout.php">
                            <i class="pe-7s-user" style="color: #fd961a;"></i>
                            <p style="color: #fd961a;">Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid" style="background: #000;">
                    <div class="navbar-header" style="background: #000;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" style="color: #fd961a;" href="#">My Package</a>
                    </div>
                    <div class="collapse navbar-collapse">
                    </div>
                </div>
            </nav>

            <?php $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                $row['activate'];
                $row['pdate'];


                if (isset($row['activate']) &&  $row['activate'] == '1') {


                    $sec = 'Active &nbsp;&nbsp;<i style="background-color:green;color:#fff; font-size:20px;" class="fa  fa-refresh" ></i>';
                } else {
                    $sec = 'Not Active &nbsp;&nbsp;<i class="fa  fa-times" style=" font-size:20px;color:red"></i>';
                    $usd = 'No investment';
                }




                if (isset($row['pdate']) &&  $row['pdate'] == '0') {


                    $date = 'Not Yet Started &nbsp;&nbsp;<i style="background-color:red;color:#fff; font-size:20px;" class="fa  fa-times" ></i>';
                    $start = $row['duration'];
                } else {
                    $date = $row['pdate'];
                    $start = $row['date'];
                }
            }
            ?>
            <div class="content">
                <?php if ($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" . "</br></br>";  ?>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Investment Plan</h4>
                                </div>
                                <div class="content" style="text-align: center; background: purple; color: #fff;">
                                    <h4><?php echo $row['pname']; ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Daily Profit</h4>
                                </div>
                                <div class="content" style="text-align: center; background: #2949a3; color: #fff;">
                                    <h4><?php echo $row['increase']; ?>%</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Total Profit</h4>
                                </div>
                                <div class="content" style="text-align: center; background: purple; color: #fff;">
                                    <h4> $ <?php echo $percentage; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Activation Date</h4>
                                </div>
                                <div class="content" style="text-align: center; background: orange; color: #fff;">
                                    <h4><?php echo $date; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">End Date</h4>
                                </div>
                                <div class="content" style="text-align: center; background: #2949a3; color: #fff;">
                                    <h4><?php echo $Date2; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Days To End</h4>
                                </div>
                                <div class="content" style="text-align: center; background: orange; color: #fff;">
                                    <h4><?php echo $days; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Amount Invested</h4>
                                </div>
                                <div class="content" style="text-align: center; background: #008080; color: #fff;">
                                    <h4>$<?php echo $usd; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Status</h4>
                                </div>
                                <div class="content" style="text-align: center; background: #2949a3; color: #fff;">
                                    <h4><?php echo $sec; ?></h4>
                                </div>
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="col-md-4">
                                <div class="card">

                                    <div class="header">
                                        <h4 class="title">Amount To Invest</h4>
                                    </div>
                                    <div class="content" style="text-align: center; background: #008000; color: #fff; padding: 30px;">
                                        <input type="text" name="usd" placeholder="Amount to invest" class="form-control" style="border-radius:5px;width:100%;">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">

                                    <div class="header">
                                        <h4 class="title">Action</h4>
                                    </div>
                                    <div class="content" style="text-align: center; background: #4b0082; color: #fff;">
                                        <button type="submit" name="activate" class="btn btn-info btn-fill ">Activate</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">

                                    <div class="header">
                                        <h4 class="title">Action</h4>
                                    </div>
                                    <input type="hidden" name="profit" value="<?php echo $percentage; ?>">
                                    <div class="content" style="text-align: center; background: #2949a3; color: #fff;">
                                        <button type="submit" name="switch" class="btn btn-info btn-fill">Switch Package/End Package</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>




                </div>


                <footer class="footer">
                    <div class="container-fluid">
                        <p class="copyright pull-right">
                            &copy; 2010 <a>Crypto Elite</a>
                        </p>
                    </div>
                </footer>

            </div>
        </div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>