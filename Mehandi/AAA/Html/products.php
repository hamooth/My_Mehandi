<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = [
        "name" => $_POST['name'],
        "price" => $_POST['price']
    ];
    $_SESSION['cart'][] = $item;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - Mehndi Designs</title>
    <link rel="stylesheet" href="./Css/products.css">
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
    <br>
    <main class="container">
        
        <section class="about">
            <h2 class="text-center">Products</h2>
        </section>


        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <?php
                    $products = [
                        ["img" => "./pic/hend1.jpg", "name" => "Design Name 1", "description" => "Description of the design goes here. You can include details like size, style, etc.", "price" => 100.00],
                        ["img" => "./pic/henna1.jpg", "name" => "Design Name 2", "description" => "Description of the design goes here. You can include details like size, style, etc.", "price" => 250.00],
                        ["img" => "./pic/henna2.jpg", "name" => "Design Name 3", "description" => "Description of the design goes here. You can include details like size, style, etc.", "price" => 50.00],
                        ["img" => "./pic/pro_2.jpeg", "name" => "Design Name 4", "description" => "Description of the design goes here. You can include details like size, style, etc.", "price" => 150.00],
                        ["img" => "./pic/pro_1.jpg", "name" => "Design Name 5", "description" => "Description of the design goes here. You can include details like size, style, etc.", "price" => 500.00],
                    ];

                    foreach ($products as $product) {
                        echo '<div class="col-md-6 mb-4">';
                        echo '<div class="card">';
                        echo '<img src="' . $product["img"] . '" class="card-img-top" alt="' . $product["name"] . '">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . $product["name"] . '</h5>';
                        echo '<p class="card-text">' . $product["description"] . '</p>';
                        echo '<p class="card-text"><strong>Price: Rs ' . number_format($product["price"], 2) . '</strong></p>';
                        echo '<form method="post" action="">';
                        echo '<input type="hidden" name="name" value="' . $product["name"] . '">';
                        echo '<input type="hidden" name="price" value="' . $product["price"] . '">';
                        echo '<button type="submit" class="btn btn-primary">Add to Cart</button>';
                        echo '</form>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2><center>Cart</center></h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group" id="cart-items">
                            <?php
                            $total = 0;
                            if (!empty($_SESSION['cart'])) {
                                foreach ($_SESSION['cart'] as $cartItem) {
                                    echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                                    echo $cartItem['name'];
                                    echo '<span>Rs ' . number_format($cartItem['price'], 2) . '</span>';
                                    echo '</li>';
                                    $total += $cartItem['price'];
                                }
                            } else {
                                echo '<li class="list-group-item">Your cart is empty.</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="card-footer text-end">
                        <p class="mb-2"><strong>Total: Rs <span id="total-price"><?php echo number_format($total, 2); ?></span></strong></p>
                        <form method="post" action="checkout.php">

                            <button type="submit" class="btn btn-success">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Mehandi Designs</p>
    </footer>


</body>

</html>