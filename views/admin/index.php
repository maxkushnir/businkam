<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<style type="text/css">
	
.contain{
	display: -webkit-flex; /* Safari */
  display: flex;
	justify-content:center;
	
	flex-wrap:nowrap;
	text-align: center;
}	
.buttons{
	align-self:baseline;
}
</style>

<section class="contain">
  <div class="buttons col-xs-2 col-sm-6 col-md-10 col-lg-12">
		<button type="button" class='btn btn-info white' ><a href="/admin/user/index"><div class="glyphicon glyphicon-user fa-5x"></div>
		</button><p class="button_description">Користувачі</p></a>
		<button type="button" class='btn btn-info white' ><a href="/admin/product"><div class="glyphicon glyphicon-list-alt fa-5x"></div>
		</button><p class="button_description">Товари</p></a>
		<button type="button" class='btn btn-info white' ><a href="/admin/order"><div class="glyphicon glyphicon-usd fa-5x"></div>
		</button><p class="button_description">Замовлення</p></a>
		<button type="button" class='btn btn-info white' ><a href="/admin/article/create"><div class="glyphicon glyphicon-pencil fa-5x"></div>
		</button><p class="button_description">Написати в блог</p></a>
	</div>
</section>



<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

