<?php
setcookie("login", $_POST['login'], time() +3600);
 $name = $_COOKIE["login"];
// выполняем операции с базой данных
?>
<!DOCTYPE html>
<html>
  <head>
    

  <meta charset="CP-1251">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Подключаем jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Подключаем Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    
    <title>Задачи</title>
  </head>
<body style="" data-spy="scroll" data-target=".navbar" data-offset="50">
<!--style="background-color:#008B8B;"-->
<?php
require("head.php");
?>


<div class="container-fluid" ><?php echo ("<h4 class='text-info text-right'>".$_COOKIE["login"]."</p>");?></div>

<div class="container-fluid  text-dark" style="width:80%;height:100px;padding-top:60px;padding-left:0;">
<?php
echo strftime("<h2>Мой день<br> <small>%A %d %B</small></h2>");
?>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container-fluid" style="width:80%;">
<h4 class="text-center text-dark;">Добавить задачу</h4>
<form action="task.php" method="post" class="form-control">
  
  <input class="form-control" type="text" name="task" placeholder="Введите задание">
  <input class="form-control" type="text" name="name" placeholder="Введите имя"><br>
  <br><label>Введите дату</label><input class="form-control" type="date" name="date">
  <input class="form-control bg-success text-light" type="submit" value="Создать">
</form>
</div>
<br>
<div class="row" style="padding:30px;">
 <div class="container-fluid d-flex flex-row ">
   <div class="col-md-1-12" style="width:100%">
 <ul class="list-group" style="list-style:none;">
  <?php
   require_once("connect.php");
   $define = strftime("%A %d");
$week = ("Вчера,Сегодня,Завтра,Послезавтра");

$query = $pdo->prepare("SELECT id,task,name,date FROM tasks WHERE name=:name ORDER by id DESC");
$query->execute(['name' => $_COOKIE['login']])
;
while($row = $query->fetch(PDO::FETCH_OBJ))
{
  echo'<span class="rounded text-left"><li>'.$row->task.'<a class="text-dark" href="delete.php?id='.$row->id.'"><button id="button">x</button></a><li>'.'<small class="display-58">'."<small>Задано на:"." "."</small>".$row->date.$row->name.'</small></li></span><br>';
}
  ?>
</ul>
</span>
</div>
</div>

</body>
</html>