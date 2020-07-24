<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TheUnknown</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <?php

    // load framework library
    require_once("libraries/TeamSpeak3/TeamSpeak3.php");

    try
    {
        // connect to server, authenticate and grab info
        $ts3 = TeamSpeak3::factory("serverquery://serveradmin:fehPYEqd@tstuk.westeurope.cloudapp.azure.com:10011/?server_port=9987");

        // show server as online
        //echo "Server Status: online<br />\n";
        //echo "Server IP: " . $ts3->getAdapterHost() . ":" . $ts3->virtualserver_port . "<br />\n";
        //echo "Server Name: " . $ts3->virtualserver_name . "<br />\n";
        //echo "Server Uptime: " . TeamSpeak3_Helper_Convert::seconds($ts3->virtualserver_uptime) . "<br />\n";
        //echo "Server Version: " . TeamSpeak3_Helper_Convert::version($ts3->virtualserver_version) . "<br />\n";
        //echo "Current Clients: " . $ts3->virtualserver_clientsonline . " / " . $ts3->virtualserver_maxclients . "<br />\n";
    }
    catch(Exception $e)
    {
        // grab errors and show server as offline
       // echo "Server Status: offline<br />\n";
    }
    ?>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">TheUnknownKingdom 🛕</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Server Status</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">Connect to Our Teamspeak Server Now!</h1>

                <hr class="divider my-4" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">Click One Of The Button Below to connect</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="https://play.google.com/store/apps/details?id=com.teamspeak.ts3client">Connect via Android 📱</a>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="ts3server://tstuk.westeurope.cloudapp.azure.com">Connect via Desktop 🎧</a>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="https://apps.apple.com/us/app/teamspeak-3/id577628510">Connect via IOS 📱</a>
            </div>
        </div>
    </div>
</header>

<section class="page-section bg-primary" id="services" >
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Server Status</h2>
                <hr class="divider light my-4" />
            <!--    <p class="text-white-50 mb-4"> <?php echo "Server Status: online<br />\n"; ?> </p>
                <p class="text-white-50 mb-4"> <?php echo "Current Clients: " . $ts3->virtualserver_clientsonline .  "<br />\n"; ?> </p>
                <p class="text-white-50 mb-4"> <?php echo "Server Uptime: " . TeamSpeak3_Helper_Convert::seconds($ts3->virtualserver_uptime) . "<br /> \n"; ?> </p>
               -->
                <p class="text-white-50 mb-4">  <?php

                // load framework library
                require_once("libraries/TeamSpeak3/TeamSpeak3.php");

                try
                {
                    // connect to server, authenticate and grab info
                    $ts3 = TeamSpeak3::factory("serverquery://serveradmin:fehPYEqd@tstuk.westeurope.cloudapp.azure.com:10011/?server_port=9987");

                    // show server as online
                    echo "Server Status: online<br />\n";
                    //echo "Server IP: " . $ts3->getAdapterHost() . ":" . $ts3->virtualserver_port . "<br />\n";
                    //echo "Server Name: " . $ts3->virtualserver_name . "<br />\n";
                    echo "Server Uptime: " . TeamSpeak3_Helper_Convert::seconds($ts3->virtualserver_uptime) . "<br />\n";
                    //echo "Server Version: " . TeamSpeak3_Helper_Convert::version($ts3->virtualserver_version) . "<br />\n";
                    echo "Current Clients: " . $ts3->virtualserver_clientsonline . " / " . $ts3->virtualserver_maxclients . "<br />\n";
                }
                catch(Exception $e)
                {
                    // grab errors and show server as offline
                    echo "Server Status: offline<br />\n";
                }
                ?></p>

            </div>

        </div>
    </div>

</section>
<hr class="divider light my-1" />
<!-- About-->
<section class="page-section bg-primary" id="about" style="c">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">What is that ?</h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4">This is a private teamspeak server.. Ask the owner for the password if you know him :D</p>

            </div>

        </div>
        <article class="text-center" style="color: #8fd19e"> Created with Love❤ by Marwan Ibrahim</article>
    </div>

</section>
<!-- Services-->

<!-- Portfolio-->

<!-- Call to action-->

<!-- Contact-->

<!-- Footer-->

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>



</body>
</html>
