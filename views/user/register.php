<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">
                
                <?php if ($result): ?>
                    <p>Ви зареєстровані!</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Реєстрація</h2>
                        <form action="#" method="post" >
                            <input type="text" class="input-group-addon" name="name" placeholder="Ім'я" value="<?php echo $name; ?>"/>
                            <input type="email" class="input-group-addon" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                            <input type="password" class="input-group-addon" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                            <input type="submit" class="input-group-addon" name="submit" class="btn btn-default" value="Реєстрація" />
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