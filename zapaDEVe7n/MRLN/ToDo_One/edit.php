<?php
$pdo       = new PDO("mysql:host=localhost; dbname=phpeducation", "root", "root");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $_GET['id']);
$statement->execute();
$task = $statement->fetch(2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
</head>
<body>
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
</body>
</html>