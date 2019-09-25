<?php
session_start();
// include("includes/checklogin.php");
// check_login();

	
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dashboard.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>&& $_SESSION["loggedin"] == true
        <![endif]-->
        <?php if (isset($_SESSION["loggedin"])): ?>
        <main class="container">

            <header class="nav-header">
                <span><a href="#">Heracles</a></span>
                <span><?php echo $_SESSION['name']?></span>
            </header>

            <div class="dashboard-contain">
                <section class="nav-left">
                    <div class="nav-links">
                        <a href="#"><span><img class="icon" src="https://res.cloudinary.com/benjee/image/upload/v1569337224/home-icon-silhouette_vzxxtu.svg" alt="home" width="30" height="30"></span>Home</a>
                        <a href="#"><span><img class="icon" src="https://res.cloudinary.com/benjee/image/upload/v1569337223/settings_ffgo0r.svg" alt="home" width="30" height="30"></span>Settings</a>
                        <a href="includes/logout.inc.php"><span><img class="icon" src="https://res.cloudinary.com/benjee/image/upload/v1569337223/logout_jimglg.svg" alt="home" width="30" height="30"></span>Log out</a>
                    </div>
                </section>
                <section class="dashboard-header">
                    <div class="header">
                    <?php
                 if (isset($_GET["error"])) {
                    if ($_GET['error']=='Logged_In_successfully') {
                         echo '<center><h1> Successfully LoggedIn</h1><center>';
                        }else{
                         echo '<center><h1> You are already LoggedIn</h1><center>';

                        }  
                     }
                    ?>
                        <span>
                            <p>
                            <img src="https://res.cloudinary.com/benjee/image/upload/v1569337224/home-icon-silhouette_vzxxtu.svg" alt="home" width="30" height="30">
                            Home
                            </p>
                        </span>
                        <span>Welcome,<?php echo $_SESSION['name']?></span>

                    </div>
                    <div class="summary">
                            <div class="networth">
                                <p>Your Net worth</p>
                                <span>N 1,000.00</span>
                            </div>
                            <div class="assets">
                                <p>Your Assets</p>
                                <span>N 1,000.00</span>
                            </div>
                            <div class="liability">
                                <p>Your Liability</p>
                                <span>-N 1,000.00</span>
                            </div>
                        </div>
                        <div class="dashboard-content">
                                <div class="calculate">
                                    <div>
                                        <h5 class="assets-header">Assets</h5>
                                        <div class="wrapper">
                                            <div class="cash">
                                                <p>Cash</p>
                                                <label for="checking account">Checking Account</label>
                                                <input type="text" name="checking account" placeholder="N 0.00">
                                                <label for="savings account">Savings Account</label>
                                                <input type="text" name="savings account" placeholder="N 0.00">
                                                <label for="text">Savings Bonds</label>
                                                <input type="text" name="savings bonds" placeholder="N 0.00">
                                                <label for="cd's">CDs</label>
                                                <input type="text" name="cd's" placeholder="N 0.00">
                                                <label for="other">Other</label>
                                                <input type="text" name="other" placeholder="N 0.00">
                                            </div>
            
                                        <div class="cash">
                                            <p>Property</p>
                                            <label for="cars">Automobiles</label>
                                            <input type="text" name="cars" placeholder="N 0.00">

                                            <label for="savings bonds">House Furnishing</label>
                                            <input type="text" name="savings bonds" placeholder="N 0.00">
                                            <label for="jewellery">Jewellery</label>
                                            <input type="text" name="cd's" placeholder="N 0.00">
                                            <label for="other">Other</label>
                                            <input type="text" name="other" placeholder="N 0.00">
                                        </div>
                                        
                                        <div class="cash">
                                            <p>Insurance</p>
                                            <label for="insurance">Insurance Value</label>
                                            <input type="text" name="checking account" placeholder="N 0.00">
                                            <p>Market value of Home(s)</p>
                                            <label for="primary residence">Primary Residence</label>
                                            <input type="text" name="savings account" placeholder="N 0.00">
                                            <label for="rental">Rental/Vacation properties</label>
                                            <input type="text" name="savings bonds" placeholder="N 0.00">
                                            <p>Retirement Savings</p>
                                            <label for="pensions">Pensions</label>
                                            <input type="text" name="pensions" placeholder="N 0.00">
                                        </div>
        
                                        <div class="cash">
                                            <p>Other Investments</p>
                                            <label for="stocks">Stocks</label>
                                            <input type="text" name="checking account" placeholder="N 0.00">
                                            <label for="mutual funds">Mutual Funds</label>
                                            <input type="text" name="savings account" placeholder="N 0.00">
                                            <label for="others">Others</label>
                                            <input type="text" name="savings bonds" placeholder="N 0.00">
                                            <label for="value of business" id="business-value">Value of Business you own</label>
                                            <input type="text" name="cd's" placeholder="N 0.00">
                                        </div>
                                    </div>
                                </div>
                                    <div class="reset"><a href="#"><span><img class="icon" src="https://res.cloudinary.com/benjee/image/upload/v1569337224/turn-on_yb5bkw.svg" alt="home" width="30" height="30"></span>reset</a></div>
                                </div>
                            </div>
                </section>  
        </main>
        <?php else:?>
<h1>You are not allowed here ... Please <a href="signin.php">signin</a> to Access this page</h1>
        
        <?php endif;?>
        
        <script src="" async defer></script>
    </body>
</html>
