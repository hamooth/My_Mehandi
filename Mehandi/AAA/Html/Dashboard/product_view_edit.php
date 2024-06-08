<?php
session_start(); // Start the session

$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch product details for the given ID
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
        $product = mysqli_fetch_assoc($result);
    }

        // Handle edit request
        if (isset($_POST['edit'])) {
            // Retrieve form data
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image = $_FILES['image']['name'];
            $target = "uploads/" . basename($image);

            // Check if an image is uploaded
            if ($image) {
                // Move uploaded image to target directory
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                // Update product with image path
                $edit_sql = "UPDATE products SET name='$name', description='$description', price='$price', image='$target' WHERE id=$id";
            } else {
                // Update product without changing image
                $edit_sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id=$id";
            }

            // Execute the SQL query
            mysqli_query($conn, $edit_sql);

            // Set the session message
            $_SESSION['message'] = "Product updated successfully";

            // Redirect to the main page after editing
            header("Location: product_view.php");
            exit(); 
        }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Edit Product</h2>
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $product['name']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $product['description']; ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>" required>
            </div>
            <div class="form-group mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" width="100" class="mt-2 img-thumbnail">
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <!-- Add your Bootstrap JS link here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>