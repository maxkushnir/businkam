<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/order" class="breadcrumb-item">Керування замовленнями</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/order/update" class="breadcrumb-item active">Редагувати замовлення</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Редагувати замовлення #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <p>Ім'я клієнта</p>
                        <input type="text" name="userName" placeholder="" value="<?php echo $order['user_name']; ?>">

                        <p>Телефон клієнта</p>
                        <input type="text" name="userPhone" placeholder="" value="<?php echo $order['user_phone']; ?>">

                        <p>Коментар клієнта</p>
                        <input type="text" name="userComment" placeholder="" value="<?php echo $order['user_comment']; ?>">

                        <p>Дата оформлення замовлення</p>
                        <input type="text" name="date" placeholder="" value="<?php echo $order['date']; ?>">

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Нове замовлення</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>В обробці</option>
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Доставляється</option>
                            <option value="4" <?php if ($order['status'] == 4) echo ' selected="selected"'; ?>>Виконано</option>
                        </select>
                        <br>
                        <br>
                        <input type="submit" name="submit" class="btn btn-info" value="Зберегти">
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

