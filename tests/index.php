<?php
/**
 * Протестируйте работу нового метода, для чего заведите в проекте папку tests и в ней размещайте скрипты, которые наглядно докажут работоспособность вашего кода.
 */
use App\Models\Article;

require_once dirname(__DIR__) . '/autoload.php';

echo '<h1>Тестовая страница</h1>';

/**
 * Демонстрация метода execute
 *
 * Создадим объект
 * Запишем его в БД
 *
 *
 * $data = new Article('Заголовок записи', 'Это текст публикации', 'https://bugaga.ru/uploads/posts/2014-06/1402471536_prikoly-6.jpg', 1 );
* $result = $data->insert();
* echo '<pre>';
* var_dump($result);
* echo '</pre>';
 */

/**
 * Поулчим объект по ID
 *  */
$data = Article::FindAll();



echo '<pre>';
var_dump($data);
echo '</pre>';