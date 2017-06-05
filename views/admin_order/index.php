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
                    <th></th>
                    <th></th>
                    <th></th>
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
                        <td><button class="btn btn-outline-danger  "><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Переглянути"><i class="glyphicon glyphicon-eye-open"></i></a></button></td>
                        <td><button class="btn btn-secondary"><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редагувати"><i class="glyphicon glyphicon-pencil"></i></a></button></td>
                        <td><button class="deleteAjax btn btn-danger" data-nameModel="order" data-id="<?php echo $order['id']; ?>" title="Видалити"><span class="custom  glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

