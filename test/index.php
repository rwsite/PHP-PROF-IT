<?php
/**
 * Протестируйте работу нового метода, для чего заведите в проекте папку tests и в ней размещайте скрипты, которые наглядно докажут работоспособность вашего кода.
 */
use App\Models\Person;

require_once dirname(__DIR__) . '/autoload.php';

// добавить запись
#$data = Person::AddPerson('Вася', 'Петров', '20');

// получить запись
$data = Person::findById('100');


echo '<h1>Тестовая страница</h1>';

echo '<pre>';
var_dump($data);
echo '</pre>';