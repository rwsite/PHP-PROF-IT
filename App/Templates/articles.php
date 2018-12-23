<?php
/**
 * Шаблон вывода всех записей
 */

$title = 'Блог программиста';
$subtitle = '...';
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <title><?= $title ?></title>
</head>
<body>

<!-- Page Content -->
<div class="container">
  <!-- Page Heading -->
  <h1 class="my-4"><?= $title ?>
    <small><?php echo $subtitle ?></small>
  </h1>
  <?php
  /** Автора не может не быть, ограничение находится в Бд.
   * Нельзя создать Запись без автора. https://vgy.me/W1aWbm.jpg
   * Даже если убрать ограничение not null, фатальной ошибки не будет..
   */
  foreach ($articles as $article) : ?>
    <article>
      <div class="row">
        <div class="col-md-7">
          <a href="/article.php?id=<?= $article->id ?>">
            <?php if(!empty($article->thumbnail)) : ?>
            <img class="img-fluid rounded mb-3 mb-md-0" src="<?= $article->thumbnail ?>" alt="700x300">
            <?php endif; ?>
          </a>
      </div>
        <div class="col-md-5">
          <div class="post-meta bg-light text-dark">
            Автор: <?php echo $article->author->FirstName . ' ' . $article->author->LastName ?></div>
          <a href="/article.php?id=<?= $article->id ?>"><h3><?= $article->title ?></h3></a>
          <p><?= $article->content ?></p>
        </div>
      </div>
      <!-- /.row -->
    </article>
    <hr>
  <?php  endforeach;  ?>

</div>
<!-- /.container -->
</body>
</html>