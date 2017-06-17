<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Повідомлення відправлено! Ми відповімо Вам на вказаний email.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Зворотній зв'язок</h2>
                        <h5>Є запитання? Напишіть нам</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>Ваша пошта</p>
                            <input type="email" class="form-control input-lg" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            <p>Номер телефону</p>
                            <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1">+38</span>
                              <input type="phone" class="form-control input-lg" name="userPhone" placeholder="" value="<?php echo $userPhone; ?>"/>
                            </div>
                            <p>Повідомлення</p>
                            <textarea class="form-control" name="userText" rows="5" id="comment" placeholder="Повідомлення" value="<?php echo $userText; ?>"></textarea>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Відправити" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>


                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>