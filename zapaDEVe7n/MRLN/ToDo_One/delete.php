<?php
$id = $_GET['id'];

$pdo      = new PDO("mysql:host=localhost; dbname=phpeducation", "root", "root");
$sql      = "DELETE FROM tasks WHERE id=:id";
$statment = $pdo->prepare($sql);
$statment->bindParam(":id", $id);
$statment->execute();

header('Location: /PHP project 001/');