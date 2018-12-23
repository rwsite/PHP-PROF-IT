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
 */
$data = new Article;
#$result = $data->insert();

echo '<pre>';
#var_dump($result);
echo '</pre>';

/**
 * Поулчим объект по ID
 */

//$data = Article::findById('0'); // нет объекта с id 0

//$data = Article::findById('52'); // есть объект

$data = Article::findById('1');

echo '<pre>';
var_dump($data);
echo '</pre>';