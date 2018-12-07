<?php
/**
 * general file Admin panel
 */

require_once __DIR__ . '/autoload.php';

/** Все переменные шаблона */
$title = 'Панель управления';
$subtitle = $cur_page = 'Публикации';

$articles = App\Models\Article::FindAll();
$columns = get_class_vars(App\Models\Article::class);// Class vars
// Переместим id в начало массива
$columns = array_reverse($columns);
$articles = array_reverse($articles);


/*echo '<pre>';
var_dump($articles);
echo '</pre>';*/

require_once __DIR__ . '/App/View/admin.php';