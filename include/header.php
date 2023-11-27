<header class="header">
    <div class="container">
        <div class="row">
            <!-- Logo Starts -->
            <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                <a href="index">
                    <img id="logo" class="img-responsive" src="images/logo-dark.png" alt="logo" />
                </a>
            </div>
            <!-- Logo Ends -->
            <!-- Statistics Starts -->
            <div class="col-md-7 col-lg-7">
                <ul class="unstyled bitcoin-stats text-center">
                    <li>
                        <h6>9,450 USD</h6>
                        <span>Last trade price</span>
                    </li>
                    <li>
                        <h6>+5.26%</h6>
                        <span>24 hour price</span>
                    </li>
                    <li>
                        <h6>12.820 BTC</h6>
                        <span>24 hour volume</span>
                    </li>
                    <li>
                        <h6>2,231,775</h6>
                        <span>active traders</span>
                    </li>
                    <li>
                        <div class="btcwdgt-price" data-bw-theme="light" data-bw-cur="usd"></div>
                        <span>Live Bitcoin price</span>
                    </li>
                </ul>
            </div>
            <!-- Statistics Ends -->
            <!-- User Sign In/Sign Up Starts -->
            <div class="col-md-3 col-lg-3">
                <ul class="unstyled user">
                    <li class="sign-in">
                        <a href="login" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a>
                    </li>
                    <li class="sign-up">
                        <a href="register" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a>
                    </li>
                </ul>
            </div>
            <!-- User Sign In/Sign Up Ends -->
        </div>
    </div>
    <!-- Navigation Menu Starts -->
    <nav class="site-navigation navigation" id="site-navigation">
        <div class="container">
            <div class="site-nav-inner">
                <!-- Logo For ONLY Mobile display Starts -->
                <a class="logo-mobile" href="index.html">
                    <img id="logo-mobile" class="img-responsive" src="images/logo-dark.png" alt="" />
                </a>
                <!-- Logo For ONLY Mobile display Ends -->
                <!-- Toggle Icon for Mobile Starts -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Toggle Icon for Mobile Ends -->
                <div class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Main Menu Starts -->
                    <ul class="nav navbar-nav">
                        <li class="<?php
                                    if ($title === "Crypto Elite") {
                                        echo "active";
                                    }
                                    ?>"><a href="index">Home</a></li>
                        <li class="<?php
                                    if ($title === "About") {
                                        echo "active";
                                    }
                                    ?>"><a href="about">About Us</a></li>
                        <li class="<?php
                                    if ($title === "FAQ") {
                                        echo "active";
                                    }
                                    ?>"><a href="faq">FAQs</a></li>
                        <li class="<?php
                                    if ($title === "Terms of services") {
                                        echo "active";
                                    }
                                    ?>">
                            <a href="terms-of-services">Terms of Services</a>
                        </li>
                        <li class="<?php
                                    if ($title === "Contact") {
                                        echo "active";
                                    }
                                    ?>"><a href="contact">Contact</a></li>
                    </ul>
                    <!-- Main Menu Ends -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Navigation Menu Ends -->
    <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
    <div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,3408,2,1765,52,74,15888" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>
</header>