<?php
$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if ($conn) {
    $result = mysqli_query($conn, "SELECT * FROM customers");
    $customers = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $customers[] = $row;
    }

    echo json_encode($customers);
} else {
    echo json_encode(['error' => 'Database connection failed']);
}
