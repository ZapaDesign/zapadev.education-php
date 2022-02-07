<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create Task</h1>
                <form action="store.php" method="post">
                    <div class="mb-3">
                        <label for="title"></label>
                        <input id="title" type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="message"></label>
                        <textarea id="message" name="content" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>