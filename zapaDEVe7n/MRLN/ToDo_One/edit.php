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
            <h1>Go to the store</h1>
            <form action="update.php?id=<?= $task["id"]; ?>" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" value="<?= $task["title"]; ?>">
                </div>
                <div class="mb-3">
                    <textarea name="content" class="form-control"><?= $task["content"]; ?></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Sybmit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>