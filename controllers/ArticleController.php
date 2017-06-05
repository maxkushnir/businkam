<?php
class AdminArticleController {
	
	public function actionIndex(){
		$title = "Вивід всіх статей";
		$articles = Article::getAllArticles();
		require_once ROOT."/views/article/index.php";
		return true;
	}

}