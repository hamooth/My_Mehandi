<?php
$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle delete request
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $delete_sql = "DELETE FROM products WHERE id = $id";
    mysqli_query($conn, $delete_sql);
}

// Fetch products to display
$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Management</title>
    <!-- Add your Bootstrap or other CSS links here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Product Management</h2>
                <a href="generate_report.php" class="btn btn-success float-right">Generate Report</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['id'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['description'] . '</td>';
                            echo '<td>Rs ' . $row['price'] . '</td>';
                            echo '<td><img src="' . $row['image'] . '" alt="' . $row['name'] . '" width="50"></td>';
                            echo '<td>
                                <a href="product_view_edit.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="id" value="' . $row['id'] . '">
                                    <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add your Bootstrap or other JS links here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>