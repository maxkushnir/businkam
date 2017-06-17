<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
<?php $order = Order::getOrderById($user["id"]);
print_r($order); ?>
    <div class="container">
        <div class="row">

            <h3>Кабінет користувача</h3>
            
            <h4>Привіт, <?php echo $user['name'];?>!</h4><br/>
                <div><!--sign up form-->
                    <h4>Ваші данні</h4>
                        <div class="col col-xs-6">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1">Ім'я</span>
                                <span class="form-control" aria-describedby="basic-addon1"><?php echo $user['name']; ?></span>
                            </div>
                            </br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon2">Email</span>
                                <span class="form-control" aria-describedby="basic-addon2"><?php echo $user['email']; ?></span>
                            </div>
                            </br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon3">Телефон</span>
                                <span class="form-control" aria-describedby="basic-addon3"><?php echo $user['phone']; ?></span>
                            </div>
                            </br>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon4">Соцмережа</span>
                                <span class="form-control" aria-describedby="basic-addon4"><?php echo $user['social_url']; ?></span>
                            </div>
                            </br>
                            <a href="/cabinet/edit" class="btn btn-info" id="edit-info">Редагувати</a>
                            </br>
                            </br>
                    </div>
                </div>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            
       
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>