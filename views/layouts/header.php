<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Бортики, постель, слюнявчик, игры. Мастерская текстиля для всей семьи. Бортики, постельное, пеленки пледы, конверты, гнездышки именные слюнявчики, игрушки">
        <meta name="author" content="@maria_businkam">
        <title>BusinkaM</title>
        <link href="/template/css/bootstrap.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">

        <link href="/template/css/hover.css" rel="stylesheet">
        
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
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
    }
        .header_top{
            width:100%;
            position: fixed;
            top:0;
            z-index:100;

        }
        .header-bottom{
            display: inline-flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            position: relative;
            top:40px;
            margin-bottom: 5%; 
          /*   justify-content: center;
             align-content: center; */
        }
        .contactinfo{
            margin-left:2%;
        }
        .useractions{
            margin-right:2%;
        }
        .navbar-toggle{
            margin-bottom: 10px;
            right:0;
        }
        img{
            margin-bottom: 5%;
        }

        @-webkit-keyframes typing { from { width: 0; } }
        @-webkit-keyframes blink-caret { 50% { border-color: transparent; } }

        .marquee { 
            position: relative;
            font: bold 1em monospace;
            color: black;
            /* border-right: .05em solid black; */
            width: calc(0.55em * 15); 
            width: 42ch;
            white-space: nowrap;
            overflow: hidden;
            color:#9c9a98;
            -webkit-animation: typing 6s steps(42, end),
                       blink-caret .3s step-end infinite alternate;
        }
    </style>

    <body>
        <div class="page-wrapper">


            <header id="header"><!--header-->
                <div class="header_top social-icons col-xs-12"><!--header_top-->
                                <div class="contactinfo pull-left">
                                    <ul class="nav navbar-nav">
                                        <li class="btn btn-sm"><a href="https://www.instagram.com/maria_businkam/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                                        <li class="btn btn-sm"><a href="https://www.facebook.com/businkam.maria"  target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-phone"></i>+38 098 11 28 952 </a></li>
                                        <li class="btn btn-sm"><a href="mailto:businkam.mail@gmail.com"><i class="fa fa-envelope"></i>businkam.mail@gmail.com </a></li> -->
                                    </ul>
                                </div>
                            
                                <div class="useractions pull-right">
                                    <ul class="nav navbar-nav">
                                        <li class="btn btn-sm"><a href="/cart">
                                                <i class="fa fa-shopping-cart fa-2x" ></i></a>
                                        </li>
                                        <?php if (User::isGuest()): ?>                                        
                                            <li class="btn btn-sm"><a href="/user/login/"><i class="fa fa-lock fa-2x"></i></a></li>
                                        <?php else: ?>
                                            <li class="btn btn-sm"><a href="/cabinet/"><i class="fa fa-user fa-2x"></i></a></li>
                                            <li class="btn btn-sm"><a href="/user/logout/"><i class="fa fa-unlock fa-2x"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                </div><!--/header_top-->

                <div class="header-middle"><!--header-middle-->
                                                                    
                </div><!--/header-middle-->

                <div class="header-bottom">
                            <div>
                            <a href="/"><img src="/template/images/home/logo.png" alt="businkam.com.ua" /></a><!--header-bottom-->                      
                            <div class="marquee">Майстерня текстилю для дітей та дорослих!</div>
                            </div>
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
                                        <!-- <li><a href="/">Головна</a></li> -->
                                        <li><a href="/catalog/">Магазин</a></li>
                                        <li><a href="/blog/">Блог</a></li>
                                        <li><a href="/gallery/">Портфоліо</a></li>
                                        <li><a href="/about/">Про</a></li>
                                        <li><a href="/contacts/">Контакти</a></li>
                                    </ul>
                                </div>
                            </div>
                </div><!--/header-bottom-->

            </header><!--/header-->