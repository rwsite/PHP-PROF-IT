<?php
/**
 * Панель управления.
 */

require __DIR__ . '/autoload.php';

$authors = \App\Models\Authors::FindAll();

use App\Models\Article;

if ($_GET['action'] === 'edit' and !empty($_GET['id'])) {
  $article = Article::findById($_GET['id']);
  if (false === $article) {
    return;
  }
  include('App/Templates/article-edit.php');
} elseif ($_GET['action'] === 'delete' and !empty($_GET['id'])) {
  $article = Article::findById($_GET['id']);
  if (false === $article) {
    return;
  }
  $articles = Article::FindAll();
  include('App/Templates/admin.php');
} elseif ($_GET['action'] === 'save' and !empty($_GET['id'])) {
  $article = Article::findById($_GET['id']);
  if (false === $article) {
    return;
  }
  $article->title = $_POST['title'];
  $article->content = $_POST['content'];
  $article->thumbnail = $_POST['thumbnail'];
  $article->author_id = filter_var($_POST['author_id'], FILTER_VALIDATE_INT);
  $result = $article->save();
  $articles = \App\Models\Article::FindAll();
  include('App/Templates/admin.php');
} elseif ($_GET['action'] === 'add' and !empty($_POST)) {
  $article = new Article;
  $article->title = $_POST['title'];
  $article->content = $_POST['content'];
  $article->thumbnail = $_POST['thumbnail'];
  $article->author_id = filter_var($_POST['author_id'], FILTER_VALIDATE_INT);
  $result = $article->save();
  $articles = \App\Models\Article::FindAll();
  include('App/Templates/admin.php');
} else {
  $articles = \App\Models\Article::FindAll();
  include('App/Templates/admin.php');
}
