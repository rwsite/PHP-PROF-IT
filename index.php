<?php
/**
 *
 */

require __DIR__ . '/autoload.php';


$view = new \App\Views\View();
$view->articles = \App\Models\Article::FindAll();
$view->display(__DIR__ . '/App/Templates/articles.php');