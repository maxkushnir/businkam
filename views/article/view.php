<?php
require_once ROOT."/views/layouts/header.php";
?>

<div class="content">
		<div class="container">
			
				<h1><?php echo $article['name'] ;?></h1>
				
				<?php
					echo $article['context'];
				?>
				<span class="articleTime pull-right"><?php echo $article['time_create'] ;?></span>
	
		</div>
		<div class="fon">
			<div class="fon_content_down"></div>
		</div>
	</div>

<?php
require_once ROOT."/views/layouts/footer.php";
?>