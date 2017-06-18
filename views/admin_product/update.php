<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/product" class="breadcrumb-item">Керування товарами</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/product/update" class="breadcrumb-item active">Редагувати товар</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>
            <h4>Редагування товару#<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-12">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <p>Назва товару</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $product['name']; ?>">

                        <p>Артикул</p>
                        <input type="text" name="code" placeholder="" value="<?php echo $product['code']; ?>">

                        <p>Вартість, грн</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $product['price']; ?>">

                        <p>Категорія</p>
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>" 
                                        <?php if ($product['category_id'] == $category['id']) echo ' selected="selected"'; ?>>
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                        
                        <br/><br/>

                        <p>Виробник</p>
                        <input type="text" name="brand" placeholder="" value="<?php echo $product['brand']; ?>">

                        <p>Зображення товару</p>
                        <img src="<?php echo Product::getImage($product['id']); ?>" width="200" alt="" />
                        <input type="file" name="image" placeholder="" value="<?php echo $product['image']; ?>">

                        <p>Опис</p>
                        <textarea name="description" class="form-control"><?php echo $product['description']; ?></textarea>
                        
                        <br/><br/>

                        <p>Наявність</p>
                        <select name="availability">
                            <option value="1" <?php if ($product['availability'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['availability'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>
                        
                        <p>Новинка</p>
                        <select name="is_new">
                            <option value="1" <?php if ($product['is_new'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_new'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>

                        <p>Рекомендовано</p>
                        <select name="is_recommended">
                            <option value="1" <?php if ($product['is_recommended'] == 1) echo ' selected="selected"'; ?>>Так</option>
                            <option value="0" <?php if ($product['is_recommended'] == 0) echo ' selected="selected"'; ?>>Ні</option>
                        </select>
                        
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($product['status'] == 1) echo ' selected="selected"'; ?>>Відображається</option>
                            <option value="0" <?php if ($product['status'] == 0) echo ' selected="selected"'; ?>>Приховано</option>
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

