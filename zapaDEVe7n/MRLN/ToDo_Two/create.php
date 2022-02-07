<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

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

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>