<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if (!$conn) {
    die("connection error..!" . mysqli_connect_error());
} else {

function renderContent($page)
{
    switch ($page) {
        case 'customers':
            include 'customers.php';
            break;
        case 'product_upload':
            include 'product_upload.php';
            break;
        case 'product_view':
            include 'product_view.php';
            break;
        default:
            include 'dashboard.php';
    }
}
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Mehndi Designs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=customers">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=product_upload">Product Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=product_view">Product View</a>
                    </li>
                </ul>

                <div >
                    <ul class="nav">
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item"><a class="nav-link" href="#">
                                    <?php echo $_SESSION['username']; ?>
                                </a></li>
                            <li class="nav-item"><a class="btn btn-outline-danger" href="../Php/LogOut.php">LogOut</a></li>
                        <?php else : ?>
                            <li class="nav-item"><a class="btn btn-outline-secondary" href="../Php/login.php">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
        </nav>

        <div id="main-content" class="mt-4">
            <?php renderContent($page); ?>
        </div>
    </div>

</body>

</html>