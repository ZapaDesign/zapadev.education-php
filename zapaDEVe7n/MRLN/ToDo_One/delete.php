<?php
$id = $_GET['id'];

$pdo      = new PDO("mysql:host=localhost; dbname=phpeducation", "root", "root");
$sql      = "DELETE FROM tasks WHERE id=:id";
$statment = $pdo->prepare($sql);
$statment->bindParam(":id", $id);
$statment->execute();

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';
header("Location: http://$host$uri/$extra");
exit;