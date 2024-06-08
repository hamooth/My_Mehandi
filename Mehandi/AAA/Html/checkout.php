<?php
// session_start();

include('Php/login.php');

if (isset($_SESSION['username'])) {
    $uname = $_SESSION['username'];
} else {
    $uname = 'samepel@gmail.com';
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    $total = array_sum(array_column($cartItems, 'price'));
} else {
    header('Location: products.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Mehandi Designs</title>
    <link rel="stylesheet" href="./Css/products.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Bill</h2>
                    </div>
                    
                    <div class="card-body">
                        <ul class="list-group">
                            <?php foreach ($cartItems as $item) : ?>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <?php echo htmlspecialchars($item['name']); ?>
                                    <span>Rs <?php echo number_format($item['price'], 2); ?></span>
                                </li>
                            <?php endforeach; ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <strong>Total</strong>
                                <strong>Rs <?php echo number_format($total, 2); ?></strong>
                            </li>
                        </ul>
                    </div>



                    <div class="card-footer text-end">
                        <button class="btn btn-primary" onclick="window.print()">Print Bill</button>
                        <a href="products.php" class="btn btn-secondary">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <main class="container">
            <div class="alert alert-success">
                <h4 class="alert-heading">Thank you for your purchase!</h4>
                <p>Your order has been processed successfully.</p>
                <hr>
                <p class="mb-0"><a href="products.php" class="btn btn-primary">Back to Products</a></p>

            </div>
        </main>
    </div>
</body>

</html>