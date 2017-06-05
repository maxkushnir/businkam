<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/category" class="breadcrumb-item">Керування категоріями</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <a href="/admin/category/create" class="btn btn-info back"><i class="fa fa-plus"></i> Додати категорію</a>
            
            <h4>Список категорій</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID категорії</th>
                    <th>Назва категорії</th>
                    <th>Порядковий номер</th>
                    <th>Статус</th>
                    <th>Редагувати</th>
                    <th>Видалити</th>
                </tr>
                <?php foreach ($categoriesList as $key => $category): ?>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td><?php echo $category['sort_order']; ?></td>
                        <td><?php echo Category::getStatusText($category['status']); ?></td>  
                        <td><button class="btn btn-secondary"><a href="/admin/category/update/<?php echo $category['id']; ?>" title="Редагувати"><i class="glyphicon glyphicon-pencil"></i></a></button></td>
                        <td><button class="deleteAjax btn btn-danger" data-nameModel="category" data-id="<?php echo $category['id']; ?>" title="Видалити"><span class="custom  glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

