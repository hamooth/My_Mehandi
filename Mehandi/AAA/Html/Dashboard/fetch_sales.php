<?php
$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if ($conn) {
    $result_sales = mysqli_query($conn, "SELECT SUM(amount) AS total_sales FROM sales");
    $row_sales = mysqli_fetch_assoc($result_sales);

    $result_orders = mysqli_query($conn, "SELECT COUNT(*) AS total_orders FROM orders");
    $row_orders = mysqli_fetch_assoc($result_orders);

    $data = array(
        'total_sales' => $row_sales['total_sales'],
        'total_orders' => $row_orders['total_orders']
    );

    echo json_encode($data);
} else {
    echo json_encode(['error' => 'Database connection failed']);
}
