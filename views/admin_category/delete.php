<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/category" class="breadcrumb-item">Керування категоріями</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/category/delete" class="breadcrumb-item active">Видалити категорію "<?php echo $categorie['name']; ?>"</a>
</nav>

<section>
    <div class="container">
        <div class="row">
            <br/>
            <h4 class="text-center">Видалення категорії "<?php echo $categorie['name']; ?>"</h4>
            <p>Ви дійсно хочете видалити дану категорію?</p>
            
            <form method="post">
                <a href="/admin/category" type="button" class="btn btn-info" name="no" />Ні</a>
                <a href="/admin/category" class="deleteAjax btn btn-danger" data-nameModel="category" data-id="<?php echo $categorie['id']; ?>" title="Видалити">Так</a>
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

