<?php
/**
 *
 */

require __DIR__ . '/autoload.php';


use App\Models\Article;
$articles = Article::FindAll();

include __DIR__ . '/App/Templates/articles.php';