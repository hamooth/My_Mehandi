<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Mehndi Designs</title>
    <link rel="stylesheet" href="./Css/contact.css">
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
            <h2 class="text-center">Contact</h2>
        </section>




        <section class="contact-form container">
            <h2>Send us a message</h2>
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Mehandi Designs</p>
    </footer>
</body>

</html>