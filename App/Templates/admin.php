<?php
/**
 * Шаблон Админ панели
 */
$title = 'Панель Администратора';
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
  <?php if ($result): ?>
    <div class="alert alert-primary" role="alert">
      Запись <b><?= $article->id ?></b> была <?= $_GET['action'] ?>
    </div>
  <?php endif; ?>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Img</th>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Author</th>
          <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article) : ?>
          <tr>
            <td scope="row"><?= $article->id ?></td>
            <td scope="row"><?php if ($article->thumbnail) : ?><img src="<?= $article->thumbnail ?>"
                                                                    width="40"><?php endif; ?></td>
            <td scope="row"><a href="article.php?id=<?= $article->id ?>"><?= $article->title ?></a></td>
            <td scope="row"><?= $article->content ?></td>
            <td scope="row"><?= $article->author_id ?></td>
            <td scope="row">
              <input type="hidden" value="<?= $article->id ?>">
              <a href="admin.php?action=edit&id=<?= $article->id ?>">Изменить</a>
              <a href="admin.php?action=delete&id=<?= $article->id ?>">Удалить</a>
            </td>
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <div class="col-md-12">
      <h3>Добавить запись</h3>
      <form method="post" action="admin.php?action=add">
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
          <input class="form-control" id="title" type="text" value="" name="title" placeholder="Заголовок">
        </div>

        <div class="form-group">
          <label for="thumbnail">Изображение</label>
          <input type="text" class="form-control" id="thumbnail" name="thumbnail" placeholder="Изображение">
        </div>

        <div class="form-group">
          <label for="content">Текст поста</label>
          <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>

        <input type="submit" class="btn btn-secondary" value="Добавить запись">
      </form>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->


</body>
</html>