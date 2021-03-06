
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SOSF Secret Sunset</title>

    <!-- Bootstrap Core CSS     <link href="css/bootstrap.min.css" rel="stylesheet">
-->

    <!-- Custom fonts -->
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
    
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/ionicons.min.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.min.css"); ?>" />




    <!-- Background Slider -->
    <link rel="stylesheet" href="<?php echo base_url("assets/js/vegas/vegas.min.css"); ?>" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/csoon.css"); ?>" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

<!-- Preloader -->
<div id="preloader"><div id="status">&nbsp;</div></div>

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top wow fadeIn" data-wow-duration="3s" data-wow-delay=".2s" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <a class="navbar-brand page-scroll wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.4s" href="#page-top">
                <span class="logo">SO SF</span> <i class="fa fa-star"></i>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#page-top">HOME</a>
                </li>
            
                <li>
                    <a class="page-scroll" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Intro Header -->
<header class="intro">

    <!-- https://www.youtube.com/watch?v=TYrX7w1uIq8 Video from YouTube. Have Questions? How To: https://github.com/pupunzi/jquery.mb.YTPlayer/wiki -->
    <a id="bgndVideo" class="player" data-property="{videoURL:'https://youtu.be/4XpDdIISlYo', containment:'body', autoPlay:true, realfullscreen:true, optimizeDisplay:true, loop:true, mute:true, startAt:0, stopAt: 200, quality:'auto', opacity:1, showControls: false, showYTLogo:false, vol:25}"></a>

    <div class="intro-body">
        <img src="assets/img/logo.new3.png" alt="" class="wow fadeIn" data-wow-duration="4s" data-wow-delay=".4s">
        <div id="clock" class="wow fadeIn" data-wow-duration="6s" data-wow-delay=".6s">
            
        </div>
        
        <p class="intro-text wow fadeIn" data-wow-duration="7s" data-wow-delay=".7s">STAY TUNED MORE INFO COMING SOON!</p>
        <ul class="list-inline lead">
            <li><a href="#about" class="btn btn-border btn-lg page-scroll wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1.4s"><i class="fa fa-chevron-down"></i> SO SF</a></li>
            <li><a href="#contact" class="btn btn-white btn-lg page-scroll wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.4s"><i class="fa fa-chevron-down"></i> CONTACT US</a></li>
        </ul>
    </div>

    <div class="video-controls">
        <a id="video-volume" class="fa fa-volume-off fa-lg" href="#"></a>
        <a id="video-play" class="fa fa-pause fa-lg" href="#"></a>
    </div>
</header>

<!-- Action2 Section -->


<!-- About Section -->
<section id="about" class="container-fluid text-center wow fadeIn">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>WHO WE ARE</h2>
            <p>The collaborative process of web development requires close integration of technology and design - two disciplines that inform one another. We make hip and exciting web sites. Big and Small. Concept development, interaction design, interface design, production management, strategic planning, usability testing.</p>
        </div>
    </div>
</section>

<!-- About2 Section -->
<section id="about2" class="container-fluid text-center wow fadeIn">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
            <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".2s">
                <h4><i class="icon icon-heading ion-ios-infinite-outline" data-wow-duration="7s" data-wow-delay=".7s"></i> LIFETIME UPDATES</h4>
                <p>Lorem ipsum dolor sit amet consecte tur adipiscingtitor diam, a accumsan justo laoreeta accumsan justo laoreet. Lorem ipsum dolor.</p>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".4s">
                <h4><i class="icon ion-ios-stopwatch-outline"></i> LIGHTWEIGHT</h4>
                <p>Lorem ipsum dolor sit amet consecte tur adipiscingtitor diam, a accumsan justo laoreeta accumsan justo laoreet. Lorem ipsum dolor.</p>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".6s">
                <h4><i class="icon icon-heading ion-ios-monitor-outline"></i> RESPONSIVE</h4>
                <p>Lorem ipsum dolor sit amet consecte tur adipiscingtitor diam, a accumsan justo laoreeta accumsan justo laoreet. Lorem ipsum dolor.</p>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeIn" data-wow-delay=".8s">
                <h4><i class="icon icon-heading ion-ios-settings"></i> MULTI-PURPOSE</h4>
                <p>Lorem ipsum dolor sit amet consecte tur adipiscingtitor diam, a accumsan justo laoreeta accumsan justo laoreet. Lorem ipsum dolor.</p>
            </div>
        </div>
    </div>
</section>

<!-- Action2 Section MailChimp Signup Form -->
<section class="action2 container-fluid text-center wow fadeIn">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <h2>Get notified!</h2>
            <p>
                MailChimp Signup Form. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum.
            </p>
            <!-- MailChimp Signup Form -->
            <!-- Replace the form action in the line below with your MailChimp embed action! For more information on how to do this please visit the Docs! -->
            <form role="form" action="http://forbetterweb.us11.list-manage.com/subscribe/post?u=4f751a6c58b225179404715f0&amp;id=18fc72763a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-inline subscribe-form" target="_blank" novalidate="">
                <div class="input-group input-group-lg">
                    <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email address...">
        <span class="input-group-btn">
            <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-white">Get notified!</button>
        </span>
                </div>
                <div id="mce-responses">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
            </form>
            <!-- End MailChimp Signup Form -->
        </div>
    </div>
</section>

<!-- Services Section -->


<!-- Action2 Section -->

<!-- Team Section -->


<!-- sponsors -->
<div id="sponsor" class="wow fadeIn">
    <div class="container-fluid">
        <div class="row sponsor text-center">
            <div class="col-md-2 gray col-md-offset-1">
                <a href="/"><img src="assets/img/logo4.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="assets/img/logo2.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="assets/img/logo3.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="assets/img/logo1.png" alt=""></a>
            </div>
            <div class="col-md-2 gray">
                <a href="/"><img src="assets/img/logo5.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section id="contact">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-5">
                <h2>contact us</h2>
                <p>Feel free to contact us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis pulvinar vestibulum.</p>
                <h2><i class="icon ion-android-call"></i> (123) 456-7890</h2>
                <h4><i class="icon ion-android-mail"></i> info@youwebsite.com<br>
                    <i class="icon ion-ios-location"></i> 2345 Some Ave, New York, NY 23458</h4>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h2>Say hello</h2>
                <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                <form name="sentMessage" id="contactForm" novalidate="">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="name" class="sr-only control-label">You Name</label>
                            <input type="text" class="form-control input-lg" placeholder="You Name" id="name" required="" data-validation-required-message="Please enter name">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="email" class="sr-only control-label">You Email</label>
                            <input type="email" class="form-control input-lg" placeholder="You Email" id="email" required="" data-validation-required-message="Please enter email">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="phone" class="sr-only control-label">You Phone</label>
                            <input type="tel" class="form-control input-lg" placeholder="You Phone" id="phone" required="" data-validation-required-message="Please enter phone number">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="message" class="sr-only control-label">Message</label>
                            <textarea rows="2" class="form-control input-lg" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea>
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-dark btn-lg">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<div id="map" class="wow fadeIn"></div>

<section id="contact2" class="container-fluid text-center wow fadeIn">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-md-3">
            <i class="fa fa-star fa-2x"></i>
        </div>
        <div class="col-md-6">
            <p>&copy; SO SF 2016</p>
        </div>
        <div class="col-md-3">
            <ul class="list-inline">
                <li><a href="/"><i class="fa fa-twitter fa-fw fa-2x"></i></a></li>
                <li><a href="/"><i class="fa fa-facebook fa-fw fa-2x"></i></a></li>
                <li><a href="/"><i class="fa fa-instagram fa-fw fa-2x"></i></a></li>
                <li><a href="/"><i class="fa fa-envelope fa-fw fa-2x"></i></a></li>
            </ul>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/device.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/form.js"></script>
<script src="assets/js/jquery.placeholder.min.js"></script>

       
<!-- Google Map -->
<!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&amp;sensor=false"></script>
<script src="assets/js/map.js"></script>

<!-- Plugins for video background -->
<script src="assets/js/device.min.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>

<!-- Custom Theme JavaScript -->
<script src="assets/js/csoon.js"></script>

</body>
</html>