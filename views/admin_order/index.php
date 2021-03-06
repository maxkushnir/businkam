<?php include ROOT . '/views/layouts/header_admin.php'; ?>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/order" class="breadcrumb-item active">Керування замовленнями</a>
</nav>
<section>
    <div class="container">
        <div class="row">
            <br/>         
            <h4>Список замовлень</h4>
            <br/>            
            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID замовлення</th>
                    <th>Імя покупця</th>
                    <th>Телефон покупця</th>
                    <th>Дата оформлення</th>
                    <th>Статус</th>
                    <th>Переглянути</th>
                    <th>Оновити</th>
                    <th>Видалити</th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['user_name']; ?></td>
                        <td><?php echo $order['user_phone']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Переглянути" class="btn btn-info glyphicon glyphicon-eye-open"></a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редагувати" class="btn btn-info glyphicon glyphicon-pencil"></a></td>
                        <td><button class="deleteAjax btn btn-danger" data-nameModel="order" data-id="<?php echo $order['id']; ?>" title="Видалити"><span class="custom  glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

