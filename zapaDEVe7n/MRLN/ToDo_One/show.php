<?php
$pdo       = new PDO("mysql:host=localhost; dbname=phpeducation", "root", "root");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(2);

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><?= $task['title']; ?></h1>
            <p><?= $task['content']; ?></p>
            <a href="index.php" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
