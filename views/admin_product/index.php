<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/product" class="breadcrumb-item active">Керування товарами</a>
</nav>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i>Додати товар</a>
            
            <h4>Список товарів</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID товара</th>
                    <th>Артикул</th>
                    <th>Назва товара</th>
                    <th>Ціна, грн</th>
                    <th>Редагувати</th>
                    <th>Видалити</th>
                </tr>
                <?php foreach ($productsList as $key => $product){?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?></td>  
                        <td><button class="btn btn-secondary"><a href="/admin/product/update/<?php echo $product['id']; ?>" title="Редагувати"><i class="white glyphicon glyphicon-pencil" aria-hidden="true"></i></a></button></td>
                        <td><button class="deleteAjax btn btn-danger" data-nameModel="product" data-id="<?php echo $product['id']; ?>" title="Видалити"><span class="custom  glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                <?php
                    }
                    ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

