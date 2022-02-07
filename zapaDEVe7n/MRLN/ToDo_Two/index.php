<?php
$pdo       = new PDO('mysql:host=localhost; dbname=phpeducation', 'root', 'root');
$sql       = "SELECT * FROM tasks";
$statement = $pdo->prepare($sql);
$statement->execute();
$tasks = $statement->fetchAll(2);
// echo '<pre>';
// print_r($tasks);
// echo '</pre>';

require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>All Tasks</h1>
                <a href="create.php" class="btn btn-primary">Add task</a>
                <table class="table">
                    <thead>
                    <tr class="table-success">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php foreach ($tasks as $task): ?>
                        <tr>
                            <th><?= $task['id']; ?></th>
                            <th><?= $task['title']; ?></th>
                            <td>
                                <button class="btn btn-info">Show</button>
                                <button class="btn btn-success">Edit</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
					<?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>