<?php

use App\Models\Article;

require_once __DIR__ . '/autoload.php';


if ( !empty($_GET['id']) ) {
  // Проверим, что id int
  $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
  $article = Article::findById($id);
} else {
  return;
}

if($article){
  require_once __DIR__ . '/App/Templates/article.php';
}
