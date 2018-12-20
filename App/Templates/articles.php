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

  <?php foreach ($articles as $article) :    ?>

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
          <h3><?= $article->title ?></h3>
          <p><?= $article->content ?></p>
          <a class="btn btn-primary" href="/article.php?id=<?= $article->id ?>">Continue reading</a>
        </div>
      </div>
      <!-- /.row -->
    </article>
    <hr>
  <?php  endforeach;  ?>
</div>
<!-- /.container -->




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>