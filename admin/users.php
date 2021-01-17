
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
  <style>
  
    a{color:white;text-decoration: none;}
    a:hover{color:red;text-decoration: none;}
  </style>
    
    <title>Админка</title>
  </head>
<body style="background-color:#008B8B;" data-spy="scroll" data-target=".navbar" data-offset="50">
<?php
require("head.php");
?><br><br>

<div class="container-fluid bg-light text-center" style="padding-top:15px;padding-bottom:15px;">
  <?php echo"<h4>Добро пожаловать в админку".$_REQUEST["name"],"</h4>";?>
  <table class="table bg-light text-center" >
    <thead>
      <th>Имя</th>
      <th>email</th>
      <th>О себе</th>
    </thead>
<?php
require_once("connect.php");

$name = $_POST["name"];
$sql = "SELECT name,email,about FROM users";
$query = $pdo->prepare($sql);
$query->execute(['name' => $name, 'email' => $email, 'about' => $about]);

$users = $query->fetchAll(PDO::FETCH_OBJ);
foreach($users as $user)
{
  echo"
    <tr>
      <td>$user->name</td>
      <td>$user->email</td>
      <td>$user->about</td>
    </tr>
  ";}
?>
</table>
</body>
</html>