<?php
$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['product-name'];
    $description = $_POST['product-description'];
    $price = $_POST['product-price'];
    $image = $_FILES['product-image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['product-image']['tmp_name'], $target)) {
        $sql = "INSERT INTO products (name, description, price, image) VALUES ('$name', '$description', '$price', '$target')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Product added successfully')</script>";
            echo "<script>location.replace('http://localhost/mehandi/AAA/Html/Dashboard/index.php?page=product_view')</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Failed to upload image.";
    }
}
mysqli_close($conn);
