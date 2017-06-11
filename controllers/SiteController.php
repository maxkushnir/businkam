<?php

/**
 * Контроллер CartController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        $categories = Category::getCategoriesList();

        // Список последних товаров
        $latestProducts = Product::getLatestProducts(6);

        // Список товаров для слайдера
        $sliderProducts = Product::getRecommendedProducts();

        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    /**
     * Action для страницы "Контакты"
     */
    public function actionContact()
    {

        // Змінні для форми
        $userEmail = false;
        $userText = false;
        $result = false;

        // Обробка форми
        if (isset($_POST['submit'])) {
            // Если форма отправлена 
            // Получаем данные из формы
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            // Флаг ошибок
            $errors = false;

            // Валідація полів
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильний email';
            }

            if ($errors == false) {
                // Якщо помилок немає
                // Відправляємо лист адміністратору 
                $adminEmail = 'businkam.mail@gmail.com';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема листа';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }

        // Підключаємо вид
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    
    /**
     * Action для сторінки "Про сайт"
     */
    public function actionAbout()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/about.php');
        return true;
    }
    public function actionGallery()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/gallery.php');
        return true;
    }

}
