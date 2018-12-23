<?php
/**
 * Шаблон Админ панели
 */
$title = 'Редактирование статьи';
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
  <title><?= $title ?></title>
</head>
<body>


<!-- Page Content -->
<div class="container text-center">
  <h1>Панель Администратора</h1>
  <p><?= $subtitle ?></p>
  <div class="row">
    <div class="col-md-12">

    </div>

    <div class="col-md-12">
      <h3><?= $title ?></h3>
      <form method="post" action="admin.php?action=save&id=<?= $article->id ?>">
        <label for="author">Выберите автора публикации</label>
        <select class="form-control" id="author" name="author_id">
          <?php
          foreach ($authors as $author) {
            echo '<option value="' . $author->id . '">' . $author->LastName . ' ' . $author->FirstName . '</option>';
          }
          ?>
        </select>
        <div class="form-group">
          <label for="title">Заголовок статьи</label>
          <input class="form-control" id="title" type="text" value="<?= $article->title ?>" name="title"
                 placeholder="Заголовок">
        </div>

        <div class="form-group">
          <label for="thumbnail">Изображение</label>
          <input type="text" class="form-control" id="thumbnail" name="thumbnail" value="<?= $article->thumbnail ?>"
                 placeholder="Изображение">
        </div>

        <div class="form-group">
          <label for="content">Текст поста</label>
          <textarea class="form-control" id="content" name="content" rows="3"><?= $article->content ?></textarea>
        </div>

        <input type="submit" class="btn btn-secondary" value="Сохранить">
      </form>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->

</body>
</html>