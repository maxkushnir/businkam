<?php
require_once ROOT."/views/layouts/header.php";
?>

<div class="content">
	<div class="fon_content">
		<div class="container">
			<div class="row content-all">
				<h1><?php echo $article['name'] ;?></h1>
				<span class="articleAuthor"> <?php echo $user['fio'] ;?></span>
				<span class="articleTime"><?php echo $article['time_create'] ;?></span>
				<?php
					echo $article['context'];
				?>
			</div>
		</div>
		<div class="fon">
			<div class="fon_content_down"></div>
		</div>
	</div>

<?php
require_once ROOT."/views/layouts/footer.php";
?>