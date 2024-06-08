<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mehndi Gallery</title>
    <link rel="stylesheet" href="./Css/gellery.css">
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
            <h2 class="text-center">Gallery</h2>
        </section>

        <section class="gallery container my-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/pro_1.jpg', 'Image 1 Description', '$10')">
                        <img src="./pic/pro_1.jpg" alt="Mehndi pro 1" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/pro_2.jpeg', 'Image 2 Description', '$15')">
                        <img src="./pic/pro_2.jpeg" alt="Mehndi pro 2" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/pro_3.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/pro_3.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/cone1.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/cone1.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/pro_4.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/pro_4.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/D6.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/D6.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/D5.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/D5.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/D7.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/D7.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/D14.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/D14.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/D13 (2).jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/D13 (2).jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>   
                
                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/D19.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/D19.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="gallery-item" onclick="showPopup('./pic/D17.jpg', 'Image 3 Description', '$20')">
                        <img src="./pic/D17.jpg" alt="Mehndi pro 3" class="img-fluid rounded">
                    </div>
                </div>
            <!-- Add more gallery items as needed -->
            </div>
        </section>

    </main>

    <footer>
        <div>
            <p>&copy; 2024 Mehandi Designs</p>
        </div>
    </footer>

   

</body>

</html>