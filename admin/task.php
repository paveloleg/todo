<?php
require_once("connect.php");

$task = $_POST["task"];
$name = $_POST["name"];
$date = $_POST["date"];
if($task == "")
{
  echo "Введите задание!";
}
else {
  

$sql = 'INSERT INTO tasks(task,name,date) VALUES(:task,:name,:date)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task, 'name' =>$name, 'date' => $date]);

header("Location: user_success.php");
}
?>