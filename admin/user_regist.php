<?php
  require_once("connect.php");
// Create connection
   // подключаемся к серверу
 $name = $_POST["name"];
 $email =$_POST["email"];
 $about =$_POST["about"];
 $pass = $_POST["password"];
     if($_POST["name"] ==="" || $_POST["email"] ==="" || $_POST["about"] ==="" || $_POST["password"] ===""){
       
       echo "Вы не ввели данные!","<a href='regist.php'>Назад</a>";
     }
     
     else{
  
    $sql = 'INSERT INTO users (name,email,about,pass) VALUES(:name,:email,:about,:pass)';
    $query = $pdo->prepare($sql);
    $query->execute(['name' => $name, 'email' => $email, 'about' => $about, 'pass' => $pass]);
     
    // выполняем запрос
   
    if($query)
    {
      header("LOCATION: user_success.php");
        echo "<span>Данные добавлены</span>";
    }
	else{
		echo "Данные не загружены";
	}
     }
  

?>
