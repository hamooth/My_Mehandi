<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mehndi Designs</title>
    <!-- <link rel="stylesheet" href="./Css/login.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Sales</h5>
                    <p class="card-text">
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", "haani_mehndi");
                        if ($conn) {
                            $result = mysqli_query($conn, "SELECT SUM(amount) AS total_sales FROM sales");
                            $row = mysqli_fetch_assoc($result);
                            echo 'Rs ' . $row['total_sales'];
                        } else {
                            echo 'Error loading sales data';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Orders</h5>
                    <p class="card-text">
                        <?php
                        if ($conn) {
                            $result = mysqli_query($conn, "SELECT COUNT(*) AS total_orders FROM orders");
                            $row = mysqli_fetch_assoc($result);
                            echo $row['total_orders'];
                        } else {
                            echo 'Error loading orders data';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
