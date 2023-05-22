<!DOCTYPE html>
<html>
<head>
    <title>SantaCruizn' Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Add New Destination</h1>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Details:</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" required>
            </div>

            <div class="form-group">
                <label for="image">Photo:</label>
                <input type="file" class="form-control-file" name="image" required>
            </div>

            <div class="form-group">
                <label for="author">Photo Credit:</label>
                <input type="text" class="form-control" name="author" required>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>