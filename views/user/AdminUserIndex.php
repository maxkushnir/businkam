<?php
require_once ROOT."/views/layouts/header_admin.php";
?>
<style>
	.content{
		text-align: center;
	}
	.picture{
		background-size: contain;
		background-repeat: no-repeat;
		height: 30px;
	}
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
<div class="container table-my">
	<div class="row">
		<div class="col-xs-12">
			<h4> <?php echo $title; ?></h4>
			<div class="table-responsive table">
				<table class="table table-striped table-hover table-condensed">
					<tr>
						<th>Ім'я</th>
						<th>Email</th>
						<th>Номер телефону</th>
						<th>Лінк на соц.мережі</th>
						<th>Коментар</th>
						<th>Редагувати</th>
						<th>Видалити</th>
					</tr>
					<?php
					if(!empty($users)){
						$i = 0;
						
						$arr = ['active', 'success', 'info', 'warning', 'danger'];
						foreach ($users as $key => $user) {
							echo "<tr class='".$arr[$i]."'>";
							$i++;
							$url=$user['social_url'];
							
							if($i == 4) $i = 0;
							?>
							<td><?=$user['name']; ?></td>
							<td><?=$user['email']; ?></td>
							<td><?=$user['phone']; ?></td>
							<td><?php echo $url; ?></td>
							<td><?=$user['comment']; ?></td>
							<td><a href="/admin/user/edit-comment/"<?php echo $user["comment"]?> class="btn btn-info"><span class="custom glyphicon glyphicon-pencil text-center"></span></a></td>
							<td>
								<button class="deleteAjax btn btn-danger" data-nameModel="user" data-id="<?php echo $user['id']; ?>"><span class="custom glyphicon glyphicon-trash text-center"></span></button>
							</td>
						</tr>
						<?php
					}
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