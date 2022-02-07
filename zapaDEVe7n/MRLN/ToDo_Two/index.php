<?php
$pdo = new PDO('mysql:host=localhost; dbname=phpeducation', 'root', 'root');
$sql = "SELECT * FROM tasks";
$statement = $pdo->prepare($sql);
$statement->execute();
$tasks = $statement->fetchAll(2);
// echo '<pre>';
// print_r($tasks);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
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
						<?php foreach($tasks as $task):?>
							<tr>
								<th><?= $task['id'];?></th>
								<th><?= $task['title'];?></th>
								<td>
									<button class="btn btn-info">Show</button>
									<button class="btn btn-success">Edit</button>
									<button class="btn btn-danger">Delete</button>
								</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</body>
</html>