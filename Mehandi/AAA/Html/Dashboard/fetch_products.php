<?php
$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if ($conn) {
    $result = mysqli_query($conn, "SELECT * FROM products");
    $products = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }

    echo json_encode($products);
} else {
    echo json_encode(['error' => 'Database connection failed']);
}
