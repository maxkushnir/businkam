<?php
require_once ROOT."/views/layouts/header_admin.php";
?>
<style>
    .table-my{
        width: 100%;
    }
    @media (max-width: 768px) {
        table{
            font-size: 70%;
        }
        h1{
            font-size: 30px;
        }
    }
    .table th, .table td {
        padding: 1%;
        text-align: center;
    }
</style>
<nav class='breadcrumb'>
    <a href="/admin" class="breadcrumb-item">Адмінпанель</a>
    <span class="glyphicon glyphicon-play" aria-hidden="true"></span>
    <a href="/admin/article" class="breadcrumb-item active"><?php echo $title; ?></a>
</nav>  
<div class="container table-my">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-condensed">
                    <tr>
                        <th>id</th>
                        <th>Назва</th>
                        <th>id автора</th>
                        <th>Час створення</th>
                        <th>Редагувати</th>
                        <th>Видалити</th>
                    </tr>
                    <?php
                    foreach ($articles as $key => $article) {?>
                    <tr>
                        <td><?php echo $article['id']; ?></td>
                        <td><?php echo $article['name']; ?></td>
                        <td><?php echo $article['user_id']; ?></td>
                        <td><?php echo $article['time_create']; ?></td>
                        <td><button class="btn white"><a href="/admin/article/edit/<?php echo $article['id']; ?>"><span class="custom glyphicon glyphicon-pencil text-center"></span></a></button></td>
                        <td><button class="deleteAjax btn btn-danger" data-nameModel="article" data-id="<?php echo $article['id']; ?>" title="Видалити"><span class="custom  glyphicon glyphicon-trash" aria-hidden="true"></span></button></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>
<?php
require_once ROOT."/views/layouts/footer_admin.php";
?>