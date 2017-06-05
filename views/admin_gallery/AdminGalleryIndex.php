<?php
require_once ROOT."/views/layouts/header_admin.php";

$address = '/upload/images/';
$dir = ROOT."/upload/images";
$allFiles = (scandir($dir));
unset($allFiles[0]);
unset($allFiles[1]);
sort($allFiles);

if ($_POST) {
	$file = $_POST['old'];
	$info = pathinfo($file);
	$new_file_name = $_POST['new'].'.'.$info['extension'];
	$new_address = ROOT.$address.$new_file_name;
	$old_address = ROOT.'/upload/images/'.$_POST['old'];
	if($_POST['old'] == $new_file_name){
	}else if($_POST['new'] != ''){
		$i = 0;
		foreach ($allFiles as $key => $img) {
			if($new_file_name == $img) $i++;
		}

		if($i == 0){
			rename($old_address, $new_address);
		} else {
			echo "Дана назва файла уже існує";
		}
	} else {
		echo "Введіть назву файла";
	}
}

?>
<style>
/* 	.card{
		width: 30%;
		float: left;
		margin: 1%;	
	}
	@media (max-width: 578px) {
		
	} */
</style>
<div class="container">
	<div class="row">
		<div class="col-lg-12 content">
		
			<?php
			if (!empty($allFiles)) {
				$address = '/upload/images/';
				$allFiles = (scandir($dir));
				unset($allFiles[0]);
				unset($allFiles[1]);
				sort($allFiles);
				$i = 1;
				foreach ($allFiles as $key => $img) {
					$info = pathinfo($img);
					$filename = basename($img,'.'.$info['extension']);
					?>
					<div class="card">
						<div class="img">
							<img class="img-fluid" src="..<?php echo $address.$img; ?>" alt="Card image cap">
						</div>
						<div class="card-block">
							<form method="POST">
								<input type="hidden" value="<?php echo $img; ?>" name="old">
								<input type="text" value="<?php echo $filename; ?>" name="new">
								<button type="submit" class="btn btn-success"><span class="custom glyphicon glyphicon-ok" aria-hidden="true"></button>
							<button class="deleteAjax btn btn-danger" data-nameModel="images" data-id="<?php echo $img; ?>"><i class="glyphicon glyphicon-remove"></i></button>
							</form>
						</div>
					</div>
					<?php
					$i++;
				}
			}
			?>
		</div>
	</div>
</div>
<?php
require_once ROOT."/views/layouts/footer_admin.php";
?>