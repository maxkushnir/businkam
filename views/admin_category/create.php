<?php include ROOT . '/views/layouts/header_admin.php'; ?>  
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/category" class="breadcrumb-item">Керування категоріями</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/category/create" class="breadcrumb-item active">Додати категорію</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Додати нову категорію</h4>

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
                    <form action="#" method="post">

                        <p>Назва</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Порядковий номер</p>
                        <input type="text" name="sort_order" placeholder="" value="">

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Відображається</option>
                            <option value="0">Прихована</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-info" value="Зберегти">
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

