<?php
class AjaxController{
	
	public function actionIndex(){
		// $title = "Ajax";
		// $aStation = Station::getAllStations();
		// $json = json_encode($aStation);
		if(isset($_POST['action'])&&($_POST['action']=="delete")){
			$this->actionDelete($_POST["nameModel"],$_POST["id"]);
		}

		// if(isset($_POST['action'])&&($_POST['action']=="routeStation")){
		// 	echo json_encode(Route::getStationCoordinateRouteById($_POST['id']));
		// }

		return true;
	}


	private function actionDelete($nameModel,$id){
		
		switch ($nameModel) {
			case 'product':
				Product::deleteProductById($id);
				echo $nameModel;
				break;

			case 'category':
				Category::deleteCategoryById($id);
				break;

			case 'order':
				Order::deleteOrderById($id);
				break;

			case 'user':
				User::deleteUserById($id);
				break;

			case 'article':
				Article::deleteArticleById($id);
				break;

			case 'images':
				Resource::deleteResourceById($id);
				break;
			
			default:
				echo 0;
				break;
		}
	}
}

