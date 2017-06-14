<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Бортики, постель, слюнявчик, игры. Мастерская текстиля для всей семьи. Бортики, постельное, пеленки пледы, конверты, гнездышки именные слюнявчики, игрушки">
        <meta name="author" content="@maria_businkam">
        <title>Businkam</title>
        <link href="/template/css/bootstrap.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/css/slick.css" rel="stylesheet">
        <link href="/template/css/slick-theme.css" rel="stylesheet">
        <script src="/template/js/instafeed.js"></script>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <style type="text/css">
        #header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .header_top{
            width:100%;
        }
        .social-icons{
            justify-content: center;
        }
        .header-middle{
            display: flex;
            align-content:         center; 
        }
        .logo{
            align-content:         center;
        }
        .header-bottom{
            align-self: center;
        }
    </style>

    <body>
        <div class="page-wrapper">


            <header id="header"><!--header-->
                <div class="header_top"><!--header_top-->
                    <div class="container">
                        <div class="social-icons row col-xs-12 col-sm-6 col-md-12">
                            
                                <div class="contactinfo ">
                                    <ul class="nav navbar-nav">
                                        <!-- <li><a href="#"><i class="fa fa-phone"></i>+38 098 11 28 952 </a></li>
                                        <li class="btn btn-sm"><a href="mailto:businkam.mail@gmail.com"><i class="fa fa-envelope"></i>businkam.mail@gmail.com </a></li> -->
                                        <li class="btn btn-sm"><a href="https://www.instagram.com/maria_businkam/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                                        <li class="btn btn-sm"><a href="https://www.facebook.com/businkam.maria"><i class="fa fa-facebook fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            
                                <div class="social-icons pull-right">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/cart">
                                                <i class="fa fa-shopping-cart fa-2x" ></i></a>
                                        </li>
                                        <?php if (User::isGuest()): ?>                                        
                                            <li><a href="/user/login/"><i class="fa fa-lock fa-2x"></i></a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/"><i class="fa fa-user fa-2x"></i></a></li>
                                            <li><a href="/user/logout/"><i class="fa fa-unlock fa-2x"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                </div><!--/header_top-->

                <div class="header-middle"><!--header-middle-->
                                <div class="logo">
                                    <a href="/"><img src="/template/images/home/logo.png" alt="" /></a>
                                </div>                       
                </div><!--/header-middle-->

                <div class="header-bottom"><!--header-bottom-->                      
                            <div class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li><a href="/">Головна</a></li>
                                        <li class="dropdown"><a href="/catalog/">Магазин<i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="/catalog/">Каталог товарів</a></li>
                                                <li><a href="/cart/">Корзина</a></li> 
                                            </ul>
                                        </li>
                                        <li><a href="/blog/">Блог</a></li>
                                        <li><a href="/gallery/">Портфоліо</a></li>
                                        <li><a href="/about/">Про</a></li>
                                        <li><a href="/contacts/">Контакти</a></li>
                                    </ul>
                                </div>
                            </div>
                </div><!--/header-bottom-->

            </header><!--/header-->