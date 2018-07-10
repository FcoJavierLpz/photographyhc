<?php $page_name = basename($_SERVER['PHP_SELF']); ?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title> Contact | Lambda</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300italic,400,700%7CRoboto+Condensed:400,700%7CRoboto+Slab:100,300,400,700&amp;subset=latin,latin,latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/extras.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/theme.min.css">
    <link rel="stylesheet" href="assets/css/photography.min.css">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon-144x144.png">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico"> 
</head>

<body class="transparent-header transparent-menu-below pace-on pace-minimal">
    <div class="pace-overlay"></div>
    <!-- aqui va el menu -->
    <?php include 'inc/menu.php'; ?>
    <div id="content" role="main">
        <article>
            <section class="section">
                <div class="background-media" style="background-image: url(assets/images/photography/photo-scenery-1600x900.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;"> </div>
                <div class="background-overlay grid-overlay-0" style="background-color: rgba(0,0,0,0.3);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center"></div>
                        <div class="col-md-6 text-default">
                            <h1 class="text-left element-top-300 element-bottom-20 text-light os-animation normal regular" data-os-animation="fadeIn" data-os-animation-delay="0s">Ask me anything you
                    want!</h1>
                            <p class="lead text-left left text-light element-top-20 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">If you need professional photo shooting for any event or even your personal projects feel free to ask for a quote.</p>
                            <form id="contactForm" action="contact_mailer.php" class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"> <i class="fa fa-user"></i>
                                            <input class="form-control" id="name" name="name" placeholder="Your name *" type="text" required=""> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group form-icon-group"> <i class="fa fa-envelope"></i>
                                            <input class="form-control" id="email" name="email" placeholder="Your email *" type="email" required=""> </div>
                                    </div>
                                </div>
                                <div class="form-group form-icon-group"> <i class="fa fa-pencil"></i>
                                    <textarea class="form-control" id="message" name="message" placeholder="Your message" rows="10" required=""></textarea>
                                </div>
                                <input type="submit" value="Send email" class="btn btn-primary">
                                <div class="messages text-center"></div>
                            </form>
                            <div class="divider-wrapper">
                                <div class="visible-xs element-height-300"></div>
                                <div class="visible-sm element-height-300"></div>
                                <div class="visible-md element-height-300"></div>
                                <div class="visible-lg element-height-300"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">
                <div class="background-media" style="background-image: url(assets/images/photography/photo-scenery-1600x900.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed; background-position: 50% 0%;"> </div>
                <div class="background-overlay grid-overlay-0" style="background-color: rgba(0,0,0,0.5);"></div>
                <div class="container-fullwidth">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 text-center small-screen-default">
                            <div class="figure element-top-100 element-bottom-20 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s"> <span class="figure-image">
                            <img alt="" src="assets/images/photography/logosmall.png">
                        </span> </div>
                            <div class="element-top-20 element-bottom-100 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                                <ul class="social-icons text-light social-lg social-simple social-circle">
                                    <li>
                                        <a href="#" target="_blank" style="background-color:#ffffff" ;> <i class="fa fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" style="background-color:#ffffff" ;> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" style="background-color:#ffffff" ;> <i class="fa fa-pinterest"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </section>
        </article>
    </div>
    <a class="go-top go-top-square" href="javascript:void(0)"> <i class="fa fa-angle-up"></i> </a>
    <script type="text/javascript">
        var oxyThemeData = {
            navbarHeight: 100,
            navbarScrolled: 60,
            navbarScrolledPoint: 20,
            menuClose: 'off',
            scrollFinishedMessage: 'No more items to load.',
            hoverMenu:
            {
                hoverActive: false,
                hoverDelay: 1,
                hoverFadeDelay: 200
            },
            siteLoader: 'on'
        };
    </script>
    <script src="assets/js/theme.min.js"></script>
</body>

</html>