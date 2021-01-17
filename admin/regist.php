
<!DOCTYPE html>
<html>
  <head>

  <meta charset="CP-1251">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Подключаем jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Подключаем Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    
    <title>Регистрация</title>
  </head>
  <body>
    <div class="container-fluid">
      <h4>Форма регистрации</h4>
      <form class="form-group bg-light" method="post" action="user_regist.php">
        <input type="text" name="name" class="form-control" placeholder="Введите свое имя"><br>
        <input class="form-control" type="text" name="email" placeholder="введите свой email"><br>
         <textarea  class="form-control" rows="5" name="about" ></textarea>
        <input class="form-control" type="password" name="password" placeholder="Придумайте пароль"><br>
        <input type="submit" value="Регистрация">
      </form>
      
    </div>
  </body>
</html>