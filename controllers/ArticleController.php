<?php
class ArticleController {
	
	public function actionIndex($page = 1){
		echo 'Page:'.$page;
		$title = "Вивід всіх статей";
		$articles = Article::getAllArticles();
		// print_r($articles);
		$total = Article::getTotalArticlesInCategory();
		echo '<br>'.$total;
		$pagination = new Pagination($total, $page, Article::SHOW_BY_DEFAULT, 'page-');
		require_once ROOT."/views/article/index.php";
		return true;
	}

	public function actionView($id){
		$title = "Новина $id";
		$article = Article::getArticleById($id);
		$user = User::getUserById($article['user_id']);
		require_once ROOT."/views/article/view.php";
		return true;
	}

}