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
     * Action для сторінки "Контакти"
     */
    public function actionContact()
    {

        // Змінні для форми
        $userEmail = false;
        $userPhone = false;
        $userText = false;
        $result = false;

        // Обробка форми
        if (isset($_POST['submit'])) {
            // Якщо форма відправлена 
            // Отримуємо данні з форми
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            $userPhone = $_POST['userPhone'];
            // Помилки
            $errors = false;

            // Валідація полів
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильний email';
            }
            if (!User::checkPhone($userPhone)){
                $errors[] = 'Неправильний номер телефону';
            }
            if ($errors == false) {
                // Якщо помилок немає
                // Відправляємо лист адміністратору 
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $adminEmail = 'pidorboby2@ukr.net';
                $message = "Номер телефону: {$userPhone}\r\nПовідомлення: {$userText}.";
                $subject = "Лист від {$userEmail}";
                $result = mail($adminEmail, $subject, $message, $userEmail);
                $result = true;
            }
        }

        // Підключаємо вигляд
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    
    /**
     * Action для сторінки "Про сайт"
     */
    public function actionAbout()
    {
        // Підключаемо вигляд
        require_once(ROOT . '/views/site/about.php');
        return true;
    }
    public function actionGallery()
    {
        // Підключаемо вигляд
        require_once(ROOT . '/views/site/gallery.php');
        return true;
    }

}
