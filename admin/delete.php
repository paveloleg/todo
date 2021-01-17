<?php 
require_once("connect.php");
$id = $_GET['id'];

$sql =  'DELETE FROM tasks WHERE id = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header("Location: user_success.php");

?>