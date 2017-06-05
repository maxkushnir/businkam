<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/product" class="breadcrumb-item">Керування товарами</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/product/delete" class="breadcrumb-item active">Видалити товар</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Видалення товару #<?php echo $id; ?></h4>


            <p>Ви дійсно бажаєте видалити даний товар?</p>

            <form method="post">
                <a href="/admin/product" type="button" class="btn btn-info" name="no" />Ні</a>
                <input type="submit" class="btn btn-danger" name="submit" value="Так" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

