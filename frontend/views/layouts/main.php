<?php
/** @var \yii\web\View $this */

/** @var string $content */
use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">

        <link href="<?= Yii::$app->getHomeUrl(); ?>css/bootstrap.css" rel="stylesheet">
        <!-- font-awesome css -->
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/font-awesome.css" rel="stylesheet">
        <!-- flaticon css -->
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/flaticon.css" rel="stylesheet">
        <!-- factoryplus-icons css -->
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/factoryplus-icons.css" rel="stylesheet">
        <!-- animate css -->
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/animate.css" rel="stylesheet">
        <!-- owl.carousel css -->
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/owl.css" rel="stylesheet">
        <!-- fancybox css -->
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/jquery.fancybox.css" rel="stylesheet">
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/hover.css" rel="stylesheet">
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/frontend.css" rel="stylesheet">
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/style.css" rel="stylesheet">
        <!-- switcher css -->
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/switcher.css" rel="stylesheet">
        <link rel='stylesheet' id='factoryhub-color-switcher-css' href='<?= Yii::$app->getHomeUrl(); ?>css/switcher/navy.css' />
        <!-- revolution slider css -->
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->getHomeUrl(); ?>css/revolution/settings.css">
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->getHomeUrl(); ?>css/revolution/layers.css">
        <link rel="stylesheet" type="text/css" href="<?= Yii::$app->getHomeUrl(); ?>css/revolution/navigation.css">

        <!--Favicon-->
        <?php /*
          <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
          <link rel="icon" href="images/favicon.ico" type="image/x-icon"> */ ?>
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= Yii::$app->getHomeUrl(); ?>css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="<?= Yii::$app->getHomeUrl(); ?>js/respond.js"></script><![endif]-->

        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="home   header-sticky  header-v4 hide-topbar-mobile">
        <?php $this->beginBody() ?>
        <div id="page" class="hfeed site">

            <!-- Preloader--> 

            <!-- topbar -->
            <div id="topbar" class="topbar hidden-md hidden-sm hidden-xs">
                <div class="container">

                    <div class="topbar-left topbar-widgets text-left clearfix">
                        <div class="widget induscity-office-location-widget">
                            <div class="office-location clearfix">

                                <ul id="cargohub-office-1" class="office-1 topbar-office active">
                                    <li class="time"><i class="flaticon-arrow"></i>20 C, Factory St, California 10025</li>
                                    <li class="phone"><i class="flaticon-tool"></i>Call Us: +(321) 45 678 901</li>
                                    <li class="email">
                                        <a href="mailto:info@intelmec.com.do">
                                        <i class="flaticon-letter"></i>info@intelmec.com.do</a>
                                    </li>
                                </ul>

                                <ul id="cargohub-office-2" class="office-2 topbar-office">
                                    <li class="time"><i class="flaticon-arrow"></i>10 B, Factory St, New york 11024</li>
                                    <li class="phone"><i class="flaticon-tool"></i>Call Us: +(321) 45 678 333</li>
                                </ul>

                                <ul id="cargohub-office-3" class="office-3 topbar-office">
                                    <li class="time"><i class="flaticon-arrow"></i>05 A, Factory St, Houston 12022</li>
                                    <li class="phone"><i class="flaticon-tool"></i>Call Us: +(321) 45 678 456</li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="topbar-right topbar-widgets text-right clearfix">

                        <div class="widget induscity-social-links-widget">
                            <a href="#" class="share-facebook tooltip-enable social"  title="Facebook"  target="_blank"><i class="fa fa fa-facebook"></i></a>
                            <a href="#" class="share-instagram tooltip-enable social"  title="Instagram"  target="_blank"><i class="fa fa-instagram"></i></a>

                        </div>					
                    </div>

                </div>
            </div>
            <!-- topbar end -->


            <!-- masthead -->
            <div id="mf-header-minimized" class="mf-header-minimized mf-header-v3"></div>
            <header id="masthead" class="site-header clearfix">
                <div class="header-main">
                    <div class="container">
                        <div class="row menu-row">
                            <div class="site-logo col-md-9 col-sm-9 col-xs-9">
                                <a href="#" class="logo">
                                    <img src="<?= Yii::$app->getHomeUrl(); ?>images/logo.png" alt="Induscity" class="logo">
                                </a>
                                <p class="site-title"><a href="#" rel="home">Induscity</a></p>
                                <h2 class="site-description">Just another Steel Themes Sites site</h2>
                            </div>
                            <div class="site-menu hidden-md hidden-sm hidden-xs">
                                <nav id="site-navigation" class="main-nav primary-nav nav">
                                    <ul class="menu">
                                        <li class="active"><a href="<?= Yii::$app->getHomeUrl(); ?>">Inicio</a></li>
                                        <li><a href="<?= Yii::$app->getHomeUrl(); ?>servicios">Servicios</a>
                                        <li><a href="<?= Yii::$app->getHomeUrl(); ?>nosotros">Sobre Nosotros</a>


                                        <li ><a href="<?= Yii::$app->getHomeUrl(); ?>contacto">Contacto</a></li>

                                        <li id="mf-active-menu" class="mf-active-menu"></li>
                                    </ul>
                                </nav>

                            </div>
                            <div class="navbar-toggle col-md-3 col-sm-3 col-xs-3">
                                <span id="mf-navbar-toggle" class="navbar-icon"><span class="navbars-line"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- masthead end -->
            <?= $content ?>
            	

            <!-- copyright -->	
            <footer  class="site-footer">
                <div class="container footer-info">
                    <div class="footer-copyright">
                        Copyrights © 2018 All Rights Reserved by <a href="#">Induscity</a>. </div>
                    <div class="text-right">
                        <div class="socials footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-skype"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- jquery Liabrary -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/jquery-1.12.4.min.js"></script>
        <!-- bootstrap v3.3.6 js -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/bootstrap.min.js"></script>
        <!-- fancybox js -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/jquery.fancybox.pack.js"></script>
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/jquery.fancybox-media.js"></script>
        <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
        <!-- owl.carousel js -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/owl.js"></script>
        <!-- counter js -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/jquery.appear.js"></script>
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/jquery.countTo.js"></script>
        <!-- validate js -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/validate.js"></script>
        <!-- switcher js -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/switcher.js"></script>

        <!-- google map -->




        <!-- REVOLUTION JS FILES -->
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->getHomeUrl(); ?>js/revolution/extensions/revolution.extension.video.min.js"></script>

        <!-- script JS  -->
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/scripts.min.js"></script>
        <script src="<?= Yii::$app->getHomeUrl(); ?>js/script.js"></script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php
$this->endPage();
