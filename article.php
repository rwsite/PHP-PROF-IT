<?php

use App\Models\Article;

require_once __DIR__ . '/autoload.php';
$title = 'Блог программиста';
$subtitle = '...';

if ( !empty($_GET['id']) ) {
  $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
  $article = Article::findById($id);
}

if (!$article) {
  echo '<h1>' . 'Error 404. Not found' . '</h1>';
  return;
}

require_once __DIR__ . '/App/Templates/article.php';