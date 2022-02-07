<?php
$data = [
	"id"      => $_GET['id'],
	"title"   => $_POST['title'],
	"content" => $_POST['content']
];

$pdo       = new PDO("mysql:host=localhost; dbname=phpeducation", "root", "root");
$sql       = "UPDATE tasks SET title=:title, content=:content WHERE id=:id";
$statement = $pdo->prepare($sql);
$statement->execute($data);

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';
header("Location: http://$host$uri/$extra");
exit;


require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php';