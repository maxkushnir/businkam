<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/order" class="breadcrumb-item">Керування замовленнями</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/order/view" class="breadcrumb-item active">Перегляд замовлення</a>
</nav>
<section>
    <div class="container">
        <div class="row">

            <br/>

            <h4>Перегляд замовлення #<?php echo $order['id']; ?></h4>
            <br/>




            <h5>Інформація про замовлення</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Номер замовлення</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>Імя клієнта</td>
                    <td><?php echo $order['user_name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон клієнта</td>
                    <td><?php echo $order['user_phone']; ?></td>
                </tr>
                <tr>
                    <td>Комментар клієнта</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <?php if ($order['user_id'] != 0): ?>
                    <tr>
                        <td>ID клієнта</td>
                        <td><?php echo $order['user_id']; ?></td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <td><b>Статус замовлення</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата замовлення</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <h5>Товари в замовленні</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID товару</th>
                    <th>Артикул товару</th>
                    <th>Назва</th>
                    <th>Ціна</th>
                    <th>Кількість</th>
                </tr>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td>$<?php echo $product['price']; ?></td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/admin/order/" class="btn btn-info back"><i class="fa fa-arrow-left"></i> Назад</a>
            <a href="/admin/order/update/<?php echo $order['id']; ?>" class="btn btn-success back"><i class="glyphicon glyphicon-pencil"></i> Редагувати</a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

