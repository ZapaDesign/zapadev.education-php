<?php
$pdo = new PDO("mysql:host=localhost; dbname=phpeducation","root","root");
$sql = "INSERT INTO tasks (title, content) VALUES (:title, :content)";
$statment = $pdo->prepare($sql);
// $statment->bindParam(":title", $_POST['title']);
// $statment->bindParam(":content", $_POST['content']);
$statment->execute($_POST);

header("Location: /PHP project 001/"); exit;

?>


