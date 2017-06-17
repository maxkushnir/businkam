<?php include ROOT . '/views/layouts/header.php'; ?>

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
                        <p>Замовлення оформлене. Ми Вам перетелефонуємо.</p>
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
                                          <input type="phone" class="form-control input-lg" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>
                                        </div>
                                        <br/>
                                        <p>Повідомлення</p>
                                        <textarea class="form-control" name="userText" rows="5" id="comment" placeholder="Повідомлення" value="<?php echo $userText; ?>"></textarea>
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