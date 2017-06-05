<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/category" class="breadcrumb-item">Керування категоріями</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/category/delete" class="breadcrumb-item active">Видалити категорію</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Видалити категорію #<?php echo $category['name']; ?></h4>


            <p>Ви дійсно хочете видалити дану категорію?</p>
            
            <form method="post">
                <a href="/admin/category" type="button" class="btn btn-info" name="no" />Ні</a>
                <input type="submit" class="btn btn-danger" name="submit" value="Так" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

