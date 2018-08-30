<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="webthemez">
    <title>CONTACT</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/genstyles.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/slider-style.css" />
    <link rel="stylesheet" type="text/css" href="css/slider-custom.css" />
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="home">
<header id="header">
    <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="INDEX.php">CoolChoice</a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll active"><a href="INDEX.php">Home</a></li>
                    <li class="scroll"><a href="SERVICES.php">Services</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">ABOUT</a>
                        <ul class="dropdown-menu">
                            <li><a href="ABOUT.php">Project</a></li>
                            <li><a href="ABOUT.php">Personnel</a></li>
                            <li><a href="ABOUT.php">Clients</a></li>
                        </ul>
                    </li>
                    <li class="scroll"><a href="GALLERY.php">Gallery</a></li>
                    <li class="scroll"><a href="CONTACT.php">Contact</a></li>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->


<div class="container-fluid bg-success">
    <div class="jumbotron col-mid-12">
        <h1 id="jumTitle">OUR CONTACT</h1>
    </div>
</div> <!--/jumbotron-->

<div class="container-fluid">
    <div class="col-md-12">

        <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1537.7851343847035!2d36.829648382173396!3d-1
                    .2827393887074638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f112bf66ea147%3A0x2beb179467e0310d!
                    2sAmbala+Rd%2C+Nairobi!5e1!3m2!1sen!2ske!4v1521903006339" width="100%" height="550" frameborder="0" style="border:0"
                    allowfullscreen></iframe>
        </p>
    </div>
</div>
<section id="contact-us">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title wow fadeInDown">Contact Us</h2>
            <p class="wow fadeInDown"><a>Website: www.coolchoicerefrigeration.co.ke</a></p>
        </div>
    </div>

    <div class="container">
        <div class="container contact-info">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="contact-form">
                        <h3>Contact Info</h3>

                        <address>
                            <strong>COOL CHOICE (EA) L.T.D</strong><br>
                            P.O BOX 18530-00100<br>
                            NAIROBI, KENYA<br>
                            <abbr title="Phone">Cont.:</abbr>(+254) 713 720 816, (+254) 739 905 606
                        </address>
                    </div></div>
                <div class="col-sm-8 col-md-8">
                    <div class="contact-form">

                        <?php if($msg != ''):?>
                            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>

                        <?php endif; ?>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                        <form id="main-contact-form" name="contact-form" method="post" action="#">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2018 Cool Choice. PetStaGrapher <a target="_blank" href="#">(SAMGITZ)</a>
            </div>
            <div class="col-sm-6">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!--/#footer-->

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mousescroll.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script type="text/javascript" src="js/slitslider-custom.js"></script>
<script src="js/custom-scripts.js"></script>
</body>
</html>