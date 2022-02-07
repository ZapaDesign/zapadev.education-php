<?php

$pdo       = new PDO("mysql:host=localhost; dbname=phpeducation", "root", "root");
$statement = $pdo->prepare("SELECT * FROM tasks");
$result    = $statement->execute();
$tasks     = $statement->fetchAll(2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Education</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
</head>
<body>
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
</body>
</html>