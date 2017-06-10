<?php
class ArticleController {
	
	public function actionIndex($page = 1){
		
		$countArticle = Article::getPaginationInfo();
		$countArticleOnPage = Article::SHOW_BY_DEFAULT;

		$countPage = ceil($countArticle['count'] / $countArticleOnPage);

		$articles = Article::getAllArticlesPage($page);

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