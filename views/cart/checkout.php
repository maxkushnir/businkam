<?php include ROOT . '/views/layouts/header.php'; ?>
 <head>
                            <meta charset="utf-8" />
                            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <title>Дякуємо!</title>
                            <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
                            <style>
                                @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
                                @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
                            </style>
                            <link href="/template/css/thankyou.css" rel="stylesheet">
                            <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
                            <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
                        </head>  
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Кошик</h2>


                    <?php if ($result): ?>
                        <span>
                            <header class="site-header" id="header">
                                <h1 class="site-header__title" data-lead-id="site-header-title">ДЯКУЄМО!</h1>
                                <p>Замовлення оформлене. Ми Вам перетелефонуємо.</p>
                            </header>

                            <div class="main-content">
                                <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
                                <!-- <p class="main-content__body" data-lead-id="main-content-body">Відгуки про наші роботи Ви можете знайти в соціальних мережах <a href="https://www.instagram.com/maria_businkam/" target="_blank">INSTAGRAM</a> та <a href="https://www.facebook.com/businkam.maria"  target="_blank">FACEBOOK</a>. Також радітимемо, якщо Ви залишите власний відгук про нас :)</p></br> -->
                            </div>
                        </span>
                      <?php else: ?>

                        <p>Вибрано товарів: <?php echo $totalQuantity; ?>, на суму:<b><?php echo $totalPrice; ?>, грн</b></p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-8">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p class="text-center">Для оформлення замовлення, будь ласка, заповніть форму.</p>
</br>
</br>
                                <div class="login-form">
                                    <form action="#" method="post">

                                        <p>Ваше ім'я</p>
                                        <input type="text" name="userName" placeholder="" value="<?php echo $userName; ?>"/>

                                        <p>Номер телефону</p>
                                        <div class="input-group">
                                          <span class="input-group-addon" id="basic-addon1">+38</span>
                                          <input type="text" class="form-control input-lg" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>
                                        </div>
                                        <br/>
                                        <p>Повідомлення</p>
                                        <textarea type="text" class="form-control" name="userComment" rows="5" id="comment" placeholder="Повідомлення" value="<?php echo $userText; ?>"></textarea>
                                        <br/>
                                        <br/>                                      
                                        <input type="submit" name="submit" class="btn btn-success" value="Оформити" />
                                    <br/> 
                                    <br/> 

                                    </form>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>