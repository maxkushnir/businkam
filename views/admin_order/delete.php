<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/order" class="breadcrumb-item">Замовлення</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/order/delete" class="breadcrumb-item active">Видалити замовлення</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Видалити замовлення #<?php echo $id; ?></h4>


            <p>Ви дійсно хочете видалити замовлення?</p>

            <form method="post">
                <a href="/admin/order" type="button" class="btn btn-info" name="no" />Ні</a>
                <input type="submit" class="btn btn-danger" name="submit" value="Так" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

