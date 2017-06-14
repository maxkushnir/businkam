<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-left">
                
                <?php if ($result): ?>
                    <p>Данні відредаговано!</p>
                    <li class="btn btn-default"><a href="/cabinet">Повернутись</a></li>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Редагування данних</h2>
                        <form action="#" method="post">
                            <p>Ім'я:</p>
                            <input type="text" name="name" placeholder="Ім'я" value="<?php echo $name; ?>"/>
                            
                            <p>Пароль:</p>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>

                            <p>Email:</p>
                            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>"/>
                            <p>Номер телефону:</p>
                            <input type="phone" name="phone" placeholder="+380...." value="<?php echo $user['phone']; ?>"/>
                            <p>Лінк на соцмережі:</p>
                            <input type="phone" name="social_url" placeholder="+380...." value="<?php echo $user['social_url']; ?>"/>
                            </br>
                            <input type="submit" name="submit" class="btn btn-info" value="Зберегти" />
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