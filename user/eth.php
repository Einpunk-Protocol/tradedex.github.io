<?php
require "../config/eth_logic.php"

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Wallet Crypto Elite</title>

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
                    <li class="active">
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
                    <li>
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
                        <a class="navbar-brand" style="color: #fd961a;" href="#">Wallet</a>
                    </div>
                    <div class="collapse navbar-collapse">
                    </div>
                </div>
            </nav>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Wallet Balance</h4>
                                    <p class="category">current available balance</p>
                                </div>
                                <div class="content" style="text-align: center">
                                    <h1>$<?php echo round($pdbalance, 2) + round($profit, 2); ?></h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Total Earnings</h4>
                                    <p class="category">total earnings so far</p>
                                </div>
                                <div class="content" style="text-align: center">
                                    <h1>$<?php echo round($pdprofit, 2) + round($profit, 2); ?></h1>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">

                                <div class="header">
                                    <h4 class="title">Total Withdrawn</h4>
                                    <p class="category">total earnings withdrawn so far</p>
                                </div>
                                <div class="content" style="text-align: center">
                                    <h1>$<?php echo $wbtc1; ?></h1>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
                    $url = 'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=ETH';
                    $str = file_get_contents($url);
                    $json = json_decode($str, true);
                    $eth_price = $json['ETH'];

                    $url = 'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BTC';
                    $str = file_get_contents($url);
                    $json = json_decode($str, true);
                    $btc_price = $json['BTC'];

                    $url = 'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BNB';
                    $str = file_get_contents($url);
                    $json = json_decode($str, true);
                    $bnb_price = $json['BNB'];


                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">Add funds to wallet</h4>
                                    <p class="category">Choose one of the following payment modes to add funds to your wallet.</p>
                                    <a href="wallet.php" class="btn btn-link">Bitcoin Payment</a>
                                    <a href="bnb.php" class="btn btn-link">BNB Payment</a>
                                </div>
                                <div class="content">
                                    <?php
                                    $sql1 = "SELECT * FROM admin";
                                    $result1 = mysqli_query($link, $sql1);
                                    if (mysqli_num_rows($result1) > 0) {
                                        $row23 = mysqli_fetch_assoc($result1);

                                        if (isset($row23['ewallet'])) {
                                            $ew = $row23['ewallet'];
                                        } else {
                                            $ew = "cant find wallet";
                                        }
                                    }
                                    ?>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="content">

                                    <p style="text-align: center;">
                                        <b>Ethereum Payment Process</b>
                                    </p>

                                    <div class="row">
                                        <?php if ($msg != "") echo "<div style='padding:20px;background-color:#dce8f7;color:black'> $msg</div class='btn btn-success'>" . "</br></br>";  ?>
                                        </br>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p>Make payment to the below Ethereum Wallet </p>
                                                <input type="text" class="form-control" value="<?php echo $ew; ?>" id="myInputs" readonly>
                                                <button onclick="myFunctions()" class="btn btn-info btn-fill"> Copy Ethereum Address </button>
                                                <script>
                                                    function myFunctions() {
                                                        var copyText = document.getElementById("myInputs");
                                                        copyText.select();
                                                        document.execCommand("copy");
                                                        alert("Copied the wallet address: " + copyText.value);
                                                    }
                                                </script>
                                            </div>
                                        </div>

                                        <form action="eth.php" method="post">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Amount in USD</label>
                                                    <input type="double" id="usd" name="usd" placeholder="Amount in USD" class="form-control" required>

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Paste the transferred eth transaction ID</label>
                                                    <input type="text" name="btctnx" placeholder="Paste the transferred btc transaction ID" class="form-control" required>
                                                    <input type="hidden" name="refcode" value="<?php echo $refcode; ?>" class="form-control">
                                                    <input type="hidden" name="referred" value="<?php echo $referred; ?>" class="form-control"><br />
                                                    <button type="submit" name="submit" class="btn btn-info btn-fill pull-right">Deposit</button>
                                                </div>
                                            </div>
                                            <hr />






                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center></center>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="header">
                                    <h4 class="title">Payment history</h4>
                                    <p class="category">A list of all your approved and pending payments.</p>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>Email</th>
                                            <th>Amount(USD)</th>
                                            <th>Amount(BTC)</th>
                                            <th>Amount(ETH)</th>
                                            <th>Amount(BNB)</th>
                                            <th>Status</th>
                                            <th>Tnx ID</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
                                            <?php $sql = "SELECT * FROM btc WHERE email='$email' ORDER BY id DESC ";
                                            $result = mysqli_query($link, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                $is_yes = 1;
                                                while ($row = mysqli_fetch_assoc($result)) {



                                                    $row['status'];
                                                    $usd = $row['usd'];



                                                    if (isset($row['status']) &&  $row['status'] == 'approved') {


                                                        $sec = '<span class="badge" style="padding: 10px 15px; background-color: #29c088;">Completed</span>';
                                                    } else {
                                                        $sec = '<span class="badge" style="padding: 10px 15px; background-color: #dd2525;">Pending</span>';
                                                    }

                                            ?>
                                                    <tr class="primary">

                                                        <td><?php echo $row['email']; ?></td>
                                                        <td>$<?php echo $row['usd']; ?></td>
                                                        <td><?php echo round($usd * $btc_price, 9); ?></td>
                                                        <td><?php echo round($usd * $eth_price, 9); ?></td>
                                                        <td><?php echo round($usd * $bnb_price, 9); ?></td>
                                                        <td><?php echo $sec; ?></td>
                                                        <td><?php echo $row['tnxid']; ?></td>
                                                        <td><?php echo $row['date']; ?></td>


                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                $is_yes = 0;
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                                <?php if ($is_yes == 0) {
                                    echo " <center><b>You have no payment history</b></center><br>";
                                } ?>
                            </div>
                        </div>
                    </div>
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