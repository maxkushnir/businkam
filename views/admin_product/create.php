<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/product" class="breadcrumb-item">Керування товарами</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/product/create" class="breadcrumb-item active">Додати товар</a>
</nav>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Додати новий товар</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Назва товару</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="">

                        <p>Вартість, грн</p>
                        <input type="text" name="price" placeholder="" value="">

                        <p>Категорія</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <br/><br/>

<!--                         <p>Виробник</p>
                        <input type="text" name="brand" placeholder="" value="">
 -->
                        <p>Зображення товару</p>
                        <input type="file" name="image" placeholder="" value="">

                        <p>Детальний опис</p>
                        <textarea name="description"></textarea>

                        <br/><br/>

                        <p>Наявність</p>
                        <select name="availability">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Новинка</p>
                        <select name="is_new">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Рекомендовані</p>
                        <select name="is_recommended">
                            <option value="1" selected="selected">Так</option>
                            <option value="0">Ні</option>
                        </select>

                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Відображається</option>
                            <option value="0">Приховано</option>
                        </select>

                        <br/><br/>

                        <input type="submit" name="submit" class="btn btn-info" value="Зберегти">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

