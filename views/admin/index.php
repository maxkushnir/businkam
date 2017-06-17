<?php include ROOT . '/views/layouts/header_admin.php'; ?>

	<style type="text/css">

	.wraper{
		display: -webkit-inline-flex; /* Safari */
	  display: inline-flex;
	  justify-content: center;
	  flex-wrap: wrap;
	  align-items:center;
	  align-content:space-between;
	}	

.wrap{
		align-items:center;
		text-align: center;
	}
	img{
		width:30%;
	}
	</style>

	<div class="container">
		<div class="wraper">
				<a href="/admin/user/index" class="wrap"><img src="/template/images/admin/user-list.svg">
				<p class="button_description">КОРИСТУВАЧІ</p></a>
				<a href="/admin/product/index" class="wrap"><img src="/template/images/admin/list-items.svg">
				<p class="button_description">ТОВАРИ</p></a>
				<a href="/admin/order" class="wrap"><img src="/template/images/admin/shopping-cart.svg">
				<p class="button_description">ЗАМОВЛЕННЯ</p></a>
				<a href="/admin/article/create" class="wrap"><img src="/template/images/admin/edit.svg">
				<p class="button_description">НАПИСАТИ В БЛОГ</p></a>
				<a href="/admin/gallery/upload" class="wrap"><img src="/template/images/admin/cloud.svg">
				<p class="button_description">ЗАВАНТАЖИТИ</p></a>
			</div>
	</div>


<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

