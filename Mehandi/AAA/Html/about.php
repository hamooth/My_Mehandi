<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Mehndi Designs</title>
    <link rel="stylesheet" href="./Css/about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header style="display: flex; background-color:rgb(237, 211, 226);" class="p-3">
        <h1>HAANI MEHANDI</h1>
        <nav class="ms-auto">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="products.php">Our Products</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

            <div class="logsite">
                <ul class="nav">
                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item"><a class="nav-link" href="#">
                                <?php echo $_SESSION['username']; ?>
                            </a></li>
                        <li class="nav-item"><a class="btn btn-outline-danger" href="./Php/LogOut.php">LogOut</a></li>
                    <?php else : ?>
                        <li class="nav-item"><a class="btn btn-outline-secondary" href="login.html">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <section class="about">
            <h2 class="text-center">About Our Mehandi Designs</h2>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Mehandi Designs</p>
    </footer>
</body>

</html>