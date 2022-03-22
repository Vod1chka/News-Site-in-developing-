<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
 crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
 crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
 integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
 crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
 integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
 crossorigin="anonymous">
</script>

    <title>Новостная лента</title>
  </head>
<body>
  <?php require_once "header.php";?>
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
        <h4 class="my-0 font-weight-normal">Пример заголовка</h4>
          <div class="card-body">
            <p class="card-text">Пример новости</p>
            <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
              <?php     
              if($_COOKIE["user"] == 'Да'):
              ?>
            <button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button>
              <?php endif; ?>
            </div>
            <small class="text-muted">9 mins</small>
          </div>
        </div>
      </div>
    </div>
</body>
</html>

