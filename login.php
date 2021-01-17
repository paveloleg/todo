<?php


?>

<!DOCTYPE html>
<html>
<head>
  
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <style>
    a{color: black; text-decoration: none;}
    a:hover{color:blue; text-decoration: none;}
  </style>
</head>
  <title>Авторизация</title>
</head>
<body>
  <div class="container-fluid bg-light text-black text-center" ="padding:5px;">
    <form class="form-control-sm " action="admin/test_user.php" method="post">
    
      <input class="form-control" type="text" name="login" placeholder="Введите имя"><br>
      <input class="form-control" type="password" name="password" placeholder="********"><br>
      <input class="form" type="submit" value="Вход">
      <a href="admin/regist.php">Регистрация</a>
      
      </script>
    </form>
  </div>
</body>
</html>