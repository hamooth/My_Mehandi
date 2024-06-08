<?php
include('Php/login.php');

if (isset($_SESSION['username'])) {
    $uname = $_SESSION['username'];
} else {
    $uname = 'samepel@gmail.com';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehndi Designs</title>
    <link rel="stylesheet" href="./Css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="./JavaScript/scripts.js"></script> -->

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
        <section class="hero bg-light py-5">
            <div class="container">
                <h2><center> Welcome to our Mehandi Designs Website! </center></h2>
                <p class="lead"><center>Explore our collection of beautiful Mehandi designs and get inspired! <center></p>
            </div>
        </section>

        <section class="features bg-secondary text-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div> <center>
                            <img src="./pic/hend1.jpg" class="img-thumbnail" style="width: 200px; height: 200px;">
                            <center>
                        </div>

                        <h3><center>Latest Designs</center></h3>
                        <p><center>Discover the latest trends in Mehandi designs.<center></p>
                    </div>
                    <div class="col-md-4">
                        <div><center>
                            <img src="./pic/D7.jpg" class="img-thumbnail" style="width: 200px; height: 200px;">
                            <center>
                        </div>
                        <h3><center>Traditional Mehandi<center></h3>
                        <p><center>Explore timeless traditional Mehandi patterns.<center></p>
                    </div>
                    <div class="col-md-4">
                        <div><center>
                            <img src="./pic/henna2.jpg" class="img-thumbnail" style="width: 200px; height: 200px;">
                            <center>
                        </div>
                        <h3><center>Custom Designs<center></h3>
                        <p><center>Get customized Mehandi designs for your special occasions.<center></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="welcome bg-light py-5">
            <div class="container">
                <h2>Welcome to Haani Mehandi</h2><br>
                <p>Experience the artistry and tradition of Mehandi with us. Our skilled artisans create intricate designs that blend modern aesthetics with timeless beauty. Whether it's for a wedding, festival, or any special occasion, our Mehandi designs will add an elegant touch to your celebrations. Explore our gallery, discover our latest designs, and let us adorn your hands with exquisite Mehandi art.</p>
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2024 Mehandi Designs</p>
    </footer>
</body>

</html>