<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h3>Кабінет користувача</h3>
            
            <h4>Привіт, <?php echo $user['name'];?>!</h4><br/>
            <ul>
                <li class="btn btn-default"><a href="/cabinet/edit">Редагувати данні</a></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            </ul>
       
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>