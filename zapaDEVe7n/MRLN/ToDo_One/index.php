<?php

$pdo       = new PDO("mysql:host=localhost; dbname=phpeducation", "root", "root");
$statement = $pdo->prepare("SELECT * FROM tasks");
$result    = $statement->execute();
$tasks     = $statement->fetchAll(2);

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>All Tasks</h1>

            <a href="create.php" class="btn btn-success">Add task</a>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($tasks as $task): ?>

                    <tr>
                        <th><?= $task["id"]; ?></th>
                        <th><?= $task["title"]; ?></th>
                        <th>
                            <a href="show.php?id=<?= $task["id"]; ?>" class="btn btn-success">Show</a>
                            <a href="edit.php?id=<?= $task["id"]; ?>" class="btn btn-warning">Edit</a>
                            <a onclick="return confirm('Are you sure?');"
                               href="delete.php?id=<?= $task["id"]; ?>"
                               class="btn btn-danger">Delete</a>
                        </th>
                    </tr>

				<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>
