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
				<h1>Add Task</h1>
				<form action="store.php">
					<div class="mb-3 form-floating">
						<input type="text" class="form-control" id="addTaskTitle">
						<label for="addTaskTitle" class="form-label">Add Task Title</label>
					</div>
					<div class="mb-3 form-floating">
						<textarea name="content" class="form-control" id="addTaskContent"></textarea>
						<label for="addTaskContent" class="form-label">Add Task Content</label>
					</div>
					<div class="mb-3">
						<button w-100type="submit" class="btn btn-success w-100">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>