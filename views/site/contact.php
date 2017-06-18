<?php include ROOT . '/views/layouts/header.php'; ?>
<style type="text/css">
    .info{
        display: flex;
        justify-content:space-between;
        align-items: center;
        flex-wrap:wrap;
        margin:2px;
        width: 100%;
    }
    .signup-form{
        display: block;
       
    }
    .inst:hover{
        border: 2px solid #131313;/* Рамка вокруг пунктов меню */
        background: linear-gradient(to bottom, #627d4d, #1f3b08);
        border-radius:150px;
    }
    .fb:hover{
        border: 2px solid #131313;/* Рамка вокруг пунктов меню */
        background: linear-gradient(to top, #fcecfc, #ff7cd8);
        border-radius:150px;
    }
</style>
<section class="container ">
        <div class="row info col-xs-12 col-md-6">
            

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

                    <div class="signup-form col-xs-12 col-md-6"><!--sign up form-->
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

            
            
            </br>
            </br>
            <div class="social-btns col-xs-12 col-md-6">
                <h3 class="form-header text-center">МИ В СОЦІАЛЬНИХ МЕРЕЖАХ</h3>
                <a href="https://www.instagram.com/maria_businkam/" target="_blank" class="social-buttons col-sm-7 col-md-6"><img src="/template/images/blog/instagram-logo.png" class="inst"></a>
                <a href="https://www.facebook.com/businkam.maria"  target="_blank" class="social-buttons col-sm-5 col-md-4"><img src="/template/images/blog/facebook-logo.png" class="fb"></a>
            </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>